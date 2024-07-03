<?php

namespace AesirCloud\Locate\Drivers;

use AesirCloud\Locate\Contracts\Locator;
use GuzzleHttp\Client;

class IpInfo implements Locator
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
        $response = $this->client->get("https://ipinfo.io/{$ip}/json", [
            'headers' => [
                'Authorization' => "Bearer {$this->config['token']}",
            ]
        ]);

        return json_decode($response->getBody(), true);
    }
}
