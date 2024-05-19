<?php

namespace App\Http\Middleware;

use App\Services\RepoManagement\GithubService;
use Closure;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use OpenAdmin\Admin\Auth\Database\Administrator;
use OpenAdmin\Admin\Facades\Admin;
use Symfony\Component\HttpFoundation\Response;

class CheckGitHubToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Admin::user();

        if ($user && $user->access_token) {
            $client = new Client();

            try {
                $response = $client->get('https://api.service.com/user', [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $user->access_token,
                        'Accept' => 'application/json',
                        'User-Agent' => 'Laravel-App',
                    ],
                ]);

                if ($response->getStatusCode() !== 200) {
                    $this->refreshToken($user);
                }
            } catch (\Exception $e) {
                $this->refreshToken($user);
            }
        } else {
            $this->refreshToken($user);
//            return redirect('dashboard/repos');
        }

        return $next($request);
    }


    protected function refreshToken($user)
    {
        $client = new Client();

        try {

            $getToken = new GithubService;
            $openData = $getToken->getAccessToken($user->refresh_token);
            dd($openData);
//            $userDetails = Admin
            return $openData;

        } catch (\Exception $e) {
            dd($e->getMessage());
//            return redirect()->route('auth.service');
        }
    }
}
