<?php

namespace App\Http\Controllers;

use App\Models\AdminRoleUser;
use App\Rules\CheckUserExistingCreate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use OpenAdmin\Admin\Auth\Database\Administrator;
use OpenAdmin\Admin\Auth\Database\Role;

class AuthController extends Controller
{
    public function register()
    {
        return view('frontend.auth.register');
    }

    public function login()
    {
        return view('frontend.auth.login');
    }

    public function register_post(Request $request)
    {
        $validatedData = $request->validate([
            'username' => ['required','min:3',new CheckUserExistingCreate()],
            'password' => 'required|min:6',
        ]);

        $user = Administrator::create(
            [
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]
        );

        $adminroleUser = new AdminRoleUser;
        $adminroleUser->user_id = $user->id;
        $adminroleUser->role_id = 2;
        $adminroleUser->save();

        admin_toastr(trans('admin.login_successful'));

        $request->session()->regenerate();

        return redirect()->intended($this->redirectPath());
    }
}
