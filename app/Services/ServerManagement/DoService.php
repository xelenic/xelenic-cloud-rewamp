<?php

namespace App\Services\ServerManagement;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Stripe\StripeClient;
use DigitalOceanV2\Client as DigitalOcean;

class DoService
{
    protected $client;
    protected $doAccessKey;
    public function __construct()
    {
        $this->doAccessKey = env('DIGITALOCEAN_KEY');
        $doClient = new DigitalOcean();
        $doClient->authenticate($this->doAccessKey);
    }

    public function getDropletsSizes()
    {
       $doClient = new DigitalOcean();
       return $doClient->image();
    }


}
