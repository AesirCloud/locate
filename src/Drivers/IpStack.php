<?php

namespace AesirCloud\Locate\Drivers;

use AesirCloud\Locate\Contracts\Locator;
use GuzzleHttp\Client;

class IpStack implements Locator
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
        $response = $this->client->get("http://api.ipstack.com/{$ip}", [
            'query' => [
                'access_key' => $this->config['key'],
            ]
        ]);

        return json_decode($response->getBody(), true);
    }
}
