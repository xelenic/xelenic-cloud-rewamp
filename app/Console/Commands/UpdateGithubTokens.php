<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use OpenAdmin\Admin\Auth\Database\Administrator;

class UpdateGithubTokens extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:github-tokens';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $adminUser = Administrator::where('refresh_token', '!=', null)->get();

        if (count($adminUser) != 0)
        {
            foreach ($adminUser as $item)
            {

                // Parse the token expiry date
                $tokenExpiryDate = $item->github_token_expires_at;

                // Check if the token is expired
                if (now()->greaterThanOrEqualTo($tokenExpiryDate)) {
                    // Token is expired, redirect user to re-authenticate (or handle it as per your logic)
                    return [
                        'error' => true,
                        'message' => 'Token expired',
                        'access_token' => $item->github_token
                    ];
                } else {
                    // Token is not expired, refresh the token
                    $response = \Illuminate\Support\Facades\Http::withHeaders([
                        'Accept' => 'application/json',
                        'Content-Type' => 'application/x-www-form-urlencoded',
                    ])->asForm()->post('https://github.com/login/oauth/access_token', [
                        'client_id' => env('GITHUB_CLIENT_ID'),
                        'client_secret' => env('GITHUB_CLIENT_SECRET'),
                        'refresh_token' => $item->refresh_token,
                        'grant_type' => 'refresh_token',
                    ]);

                    // Decode the response
                    $response = json_decode($response->body());


                    // Update the user's tokens and expiry date in the database
                    \OpenAdmin\Admin\Auth\Database\Administrator::where('id', $item->id)->update([
                        'github_token' => $response->access_token,
                        'refresh_token' => $response->refresh_token,
                        'github_token_expires_at' => now()->addSeconds($response->expires_in),
                    ]);

                    // Return the new access token
                    return [
                        'error' => false,
                        'access_token' => $response->access_token // Fixed the typo here
                    ];
                }
            }
        }
    }
}
