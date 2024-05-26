<?php

namespace App\Services\ServerManagement;

use App\Models\Repos;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Stripe\StripeClient;
use DigitalOceanV2\Client as DigitalOcean;

class DoService
{
    protected $client;
    protected $doAccessKey;
    protected $doClient;
    public function __construct()
    {
        $this->doAccessKey = env('DIGITALOCEAN_KEY');
        $doClient = new DigitalOcean();
        $doClient->authenticate($this->doAccessKey);
         $this->doClient = $doClient;
    }

    public function getDropletsSizes(): array
    {
       $doClient = $this->doClient;
       return $doClient->size()->getAll();
    }

    public function createDropletByRepoId($id)
    {
        $repoDetails = Repos::where('id', $id)->first();
        if($repoDetails)
        {

        }

        $doClient = $this->doClient;
//        $doCreate  = $doClient->droplet()->create('','','','','','','','')
    }


}
