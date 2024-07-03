<?php

return [
    'default' => env('LOCATOR_DRIVER', 'ipgeolocation'),

    'drivers' => [
        'ipgeolocation' => [
            'key' => env('IPGEOLOCATION_API_KEY'),
        ],
        'ipstack' => [
            'key' => env('IPSTACK_API_KEY'),
        ],
        'ipinfo' => [
            'token' => env('IPINFO_TOKEN'),
        ],
    ],
];
