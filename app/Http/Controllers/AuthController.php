<?php

namespace App\Http\Controllers;

use App\Models\AdminRoleUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use OpenAdmin\Admin\Auth\Database\Administrator;
use OpenAdmin\Admin\Auth\Database\Role;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register_post(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|min:3 | new',
            'password' => 'required|min:6',
            'receive_email' => 'boolean',
            'agree_license' => 'accepted',
        ]);

        $user = Administrator::create(
            [
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]
        );

        $adminroleUser = new AdminRoleUser();
        $adminroleUser->user_id = $user->id;
        $adminroleUser->role_id = 2;
        $adminroleUser->save();


        return redirect()->route('success')->with('success', 'Registration successful!');
    }
}
