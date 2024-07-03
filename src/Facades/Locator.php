<?php

namespace AesirCloud\Locate\Facades;

use Illuminate\Support\Facades\Facade;

class Locator extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'locator';
    }
}