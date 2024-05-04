<?php

namespace App\Http\Controllers;

use App\Models\AdminRoleUser;
use App\Rules\CheckUserEmailExistingCreateRule;
use App\Rules\CheckUserExistingCreate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Validator;
use OpenAdmin\Admin\Auth\Database\Administrator;
use OpenAdmin\Admin\Auth\Database\Role;
use OpenAdmin\Admin\Facades\Admin;

class AuthController extends Controller
{
    public function register()
    {
        if ($this->guard()->check()) {
            return redirect($this->redirectPath());
        }
        return view('frontend.pages.auth.register');
    }

    public function login()
    {
        if ($this->guard()->check()) {
            return redirect($this->redirectPath());
        }

        return view('frontend.pages.auth.login');
    }

    protected function loginValidator(array $data)
    {
        return Validator::make($data, [
            $this->username() => 'required',
            'password'        => 'required',
        ]);
    }

    protected function username()
    {
        return 'username';
    }

    public function postLogin(Request $request)
    {
        $rate_limit_key = 'login-tries-'.Admin::guardName();

        $this->loginValidator($request->all())->validate();

        $credentials = $request->only([$this->username(), 'password']);
        $remember    = $request->get('remember', false);

        if ($this->guard()->attempt($credentials, $remember)) {
            RateLimiter::clear($rate_limit_key);

            return $this->sendLoginResponse($request);
        }

        if (config('admin.auth.throttle_logins')) {
            $throttle_timeout = config('admin.auth.throttle_timeout', 600);
            RateLimiter::hit($rate_limit_key, $throttle_timeout);
        }

        return back()->withInput()->withErrors([
            $this->username() => $this->getFailedLoginMessage(),
        ]);
    }

    protected function getFailedLoginMessage()
    {
        return Lang::has('auth.failed')
            ? trans('auth.failed')
            : 'These credentials do not match our records.';
    }

    public function getLogout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect(config('admin.route.prefix'));
    }

    public function register_post(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email_address' => ['required','email',new CheckUserEmailExistingCreateRule()],
            'username' => ['required','min:3',new CheckUserExistingCreate()],
            'password' => 'required|min:6',
        ]);


        $user = Administrator::create(
            [
                'name' => $request->name,
                'username' => $request->username,
                'email_address' => $request->email_address,
                'password' => Hash::make($request->password)
            ]
        );

        $adminroleUser = new AdminRoleUser;
        $adminroleUser->user_id = $user->id;
        $adminroleUser->role_id = 2;
        $adminroleUser->save();

        admin_toastr(trans('admin.login_successful'));
        $rate_limit_key = 'login-tries-'.Admin::guardName();

        $credentials = $request->only(['username', 'password']);
        $remember    = $request->get('remember', false);

        if ($this->guard()->attempt($credentials, $remember)) {
            RateLimiter::clear($rate_limit_key);

            return $this->sendLoginResponse($request);
        }



        return redirect()->intended($this->redirectPath());
    }

    protected function sendLoginResponse(Request $request)
    {
        admin_toastr(trans('admin.login_successful'));

        $request->session()->regenerate();

        return redirect()->intended($this->redirectPath());
    }

    public function getLogin()
    {
        if ($this->guard()->check()) {
            return redirect($this->redirectPath());
        }

        return view('frontend.pages.auth.login');
    }

    protected function guard()
    {
        return Admin::guard();
    }

    protected function redirectPath()
    {
        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : config('admin.route.prefix');
    }
}
