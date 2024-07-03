<?php

namespace AesirCloud\Locate\Drivers;

use GuzzleHttp\Client;

class IpGeolocation
{
    protected $config;
    protected $client;

    public function __construct(array $config)
    {
        $this->config = $config;
        $this->client = new Client();
    }

    public function locate(string $ip)
    {
        $response = $this->client->get("https://api.ipgeolocation.io/ipgeo", [
            'query' => [
                'apiKey' => "Bearer {$this->config['token']}",
                'ip' => $ip
            ]
        ]);

        return json_decode($response->getBody(), true);
    }
}