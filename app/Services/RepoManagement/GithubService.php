<?php

namespace App\Services\RepoManagement;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Stripe\StripeClient;

class GithubService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api.github.com/',
            'headers' => [
                'Accept' => 'application/vnd.github.v3+json',
                'User-Agent' => 'Laravel-App',
            ],
        ]);
    }

    public function getUserRepositories($accessToken)
    {
       $response = $this->client->get('user/repos', [
            'headers' => [
                'Authorization' => 'Bearer ' . $accessToken,
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }



    public function getAccessToken($refreshToken)
    {
        try {
            $response = $this->client->post('https://github.com/login/oauth/access_token', [
                'form_params' => [
                    'grant_type' => 'refresh_token',
                    'refresh_token' => $refreshToken,
                    'client_id' => env('GITHUB_CLIENT_ID'),
                    'client_secret' => env('GITHUB_CLIENT_SECRET'),
                ],
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);

            $data = json_decode($response->getBody()->getContents(), true);

            if (isset($data['access_token'])) {
                return $data['access_token'];
            }

            // Log the full response for debugging
            \Log::error('Failed to obtain access token', ['response' => $data]);

            return ['error' => 'Failed to obtain access token'];
        } catch (RequestException $e) {
            // Log the exception for debugging
            \Log::error('RequestException', ['error' => $e->getMessage()]);

            return ['error' => $e->getMessage()];
        }
    }

    public function getUser($accessToken)
    {
        $response = $this->client->get('user', [
            'headers' => [
                'Authorization' => 'Bearer ' . $accessToken,
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}
