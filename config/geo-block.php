<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Enable country blocking
    |--------------------------------------------------------------------------
    */
    'enabled' => env('GEO_BLOCK_ENABLED', true),

    /*
    |--------------------------------------------------------------------------
    | Blocked country codes (ISO 3166-1 alpha-2)
    |--------------------------------------------------------------------------
    | Pakistan = PK, India = IN, Bangladesh = BD
    */
    'blocked_countries' => [
        'PK', // Pakistan
        'IN', // India
        'BD', // Bangladesh
    ],

    /*
    |--------------------------------------------------------------------------
    | Cache TTL for IP -> country lookup (seconds)
    |--------------------------------------------------------------------------
    | Reduces API calls; 2592000 = 30 days
    */
    'cache_ttl' => (int) env('GEO_BLOCK_CACHE_TTL', 2592000),

];
