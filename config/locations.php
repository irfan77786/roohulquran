<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Location landing pages by country
    |--------------------------------------------------------------------------
    |
    | Add another file under config/locations/{country}.php and register it
    | here when you roll out the same unique-landing practice for the US, EU,
    | or elsewhere. Do not mass-register thousands of thin city URLs.
    |
    */

    'countries' => [
        'uk' => require __DIR__ . '/locations/uk.php',
    ],

];
