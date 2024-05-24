<?php

if (! function_exists('getCreditBalance')) {
    function getCreditBalance( $default = null) {
        $userId = \OpenAdmin\Admin\Facades\Admin::user()->id;
        $balance = \App\Models\UserCreditBalance::where('user_id',$userId)->first();
        if($balance ==  null)
        {
            $balance = \App\Models\UserCreditBalance::create([
                'user_id' => $userId,
                'credit' => 0
            ]);
        }
        return $balance ? $balance->credit : 0;
    }
}

if (! function_exists('addCreditBalance')) {
    function addCreditBalance( $countCount) {
        $userId = \OpenAdmin\Admin\Facades\Admin::user()->id;
        $balance = \App\Models\UserCreditBalance::where('user_id', $userId)->first();
        if($balance){
            $currentCredit = $balance->credit;
            $currentCredit += $countCount;
            $balance = \App\Models\UserCreditBalance::where('user_id', $userId)
                ->update([
                    'credit' => $currentCredit
                ]);

            return $balance;
        }else{
            return false;
        }
    }
}


if (! function_exists('getGithubTokens')) {
    function getGithubTokens() {
        // Parse the token expiry date
        $tokenExpiryDate = \Carbon\Carbon::parse(\OpenAdmin\Admin\Facades\Admin::user()->github_token_expires_at);

        // Check if the token is expired
        if (now()->greaterThanOrEqualTo($tokenExpiryDate)) {
            // Token is expired, redirect user to re-authenticate (or handle it as per your logic)
            return [
                'error' => true,
                'message' => 'Token expired',
                'access_token' => \OpenAdmin\Admin\Facades\Admin::user()->github_token
            ];
        } else {
            // Token is not expired, refresh the token
            $response = \Illuminate\Support\Facades\Http::withHeaders([
                'Accept' => 'application/json',
                'Content-Type' => 'application/x-www-form-urlencoded',
            ])->asForm()->post('https://github.com/login/oauth/access_token', [
                'client_id' => env('GITHUB_CLIENT_ID'),
                'client_secret' => env('GITHUB_CLIENT_SECRET'),
                'refresh_token' => \OpenAdmin\Admin\Facades\Admin::user()->refresh_token,
                'grant_type' => 'refresh_token',
            ]);

            // Decode the response
            $response = json_decode($response->body());

            // Update the user's tokens and expiry date in the database
            \OpenAdmin\Admin\Auth\Database\Administrator::where('id', \OpenAdmin\Admin\Facades\Admin::user()->id)->update([
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




?>
