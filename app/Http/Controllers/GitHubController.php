<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GitHubController extends Controller
{

    public function redirectToGitHub()
    {
        return Socialite::driver('github')->redirect();

    }

    public function handleGitHubCallback()
    {
        $githubUser = Socialite::driver('github')->user();

//        $user = User::firstOrCreate([
//            'email' => $githubUser->getEmail(),
//        ], [
//            'name' => $githubUser->getName(),
//            'github_id' => $githubUser->getId(),
//            'password' => Hash::make(uniqid()),
//        ]);
//
//        Auth::login($user, true);
//
//        return redirect()->intended('/home');
    }
}
