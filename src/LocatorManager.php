<?php

namespace AesirCloud\Locate;

use Illuminate\Support\Manager;

class LocatorManager extends Manager
{
    public function getDefaultDriver()
    {
        return $this->config['locator.default'];
    }

    public function createIpstackDriver()
    {
        $config = $this->config['locator.drivers.ipstack'];

        return new Drivers\IpStack($config);
    }

    public function createIpinfoDriver()
    {
        $config = $this->config['locator.drivers.ipinfo'];

        return new Drivers\IpInfo($config);
    }
}