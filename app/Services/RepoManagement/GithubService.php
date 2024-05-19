<?php

namespace App\Services\RepoManagement;

use GuzzleHttp\Client;
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
}
