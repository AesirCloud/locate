<?php

namespace AesirCloud\Locate\Contracts;

interface Locator
{
    public function locate(string $ip);
}
