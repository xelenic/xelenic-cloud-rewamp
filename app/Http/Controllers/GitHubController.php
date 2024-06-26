<?php

namespace App\Http\Controllers;

use App\Models\AdminRoleUser;
use App\Models\UserCreditBalance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Laravel\Socialite\Facades\Socialite;
use OpenAdmin\Admin\Auth\Database\Administrator;
use OpenAdmin\Admin\Facades\Admin;

class GitHubController extends Controller
{

    public function redirectToGitHub()
    {
        return Socialite::driver('github')->redirect();

    }

    public function handleGitHubCallback(Request $request)
    {
        $githubUser = Socialite::driver('github')->user();


        $getUser  = Administrator::where('github_id', $githubUser->getId())
            ->first();

        if(!$getUser)
        {
            $randomPassword = 'Redhacker1994@#';

            $getUser = Administrator::create(
                [
                    'name' => $githubUser->name ? : $githubUser->getNickname(),
                    'username' => $githubUser->nickname ? : $githubUser->nickname,
                    'email_address' => $githubUser->email,
                    'password' => Hash::make($githubUser->getId()),
//                'github_id' =>  $githubUser->getId()
                ]
            );




            $adminroleUser = new AdminRoleUser;
            $adminroleUser->user_id = $getUser->id;
            $adminroleUser->role_id = 2;
            $adminroleUser->save();

            $creaditRecordes = new UserCreditBalance;
            $creaditRecordes->user_id = $getUser->id;
            $creaditRecordes->credit = 0;
            $creaditRecordes->save();


        }

        $userDetails = Administrator::where('id', $getUser->id)->update([
            'github_id' => $githubUser->getId(),
            'github_token' => $githubUser->token,
            'refresh_token' => $githubUser->refreshToken,
            'github_token_expires_at' => now()->addSeconds($githubUser->expiresIn)
        ]);

        admin_toastr(trans('admin.login_successful'));
        $rate_limit_key = 'login-tries-'.Admin::guardName();

        $credentials = [
            'username' => $githubUser->nickname,
            'password' => $githubUser->getId()
        ];
        $remember    = 1;

        if ($this->guard()->attempt($credentials, $remember)) {
            RateLimiter::clear($rate_limit_key);

            return $this->sendLoginResponse($request);
        }
        return redirect()->intended($this->redirectPath());
    }

    protected function guard()
    {
        return Admin::guard();
    }


    protected function sendLoginResponse(Request $request)
    {
        admin_toastr(trans('admin.login_successful'));

        $request->session()->regenerate();

        return redirect()->intended($this->redirectPath());
    }

    protected function redirectPath()
    {
        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : config('admin.route.prefix');
    }
}
