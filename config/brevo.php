<?php

declare(strict_types=1);

return [

    /*
     * ----------------------------------------------------
     * Brevo API Key
     * ----------------------------------------------------
     *
     * Getting started with the Brevo API:
     * https://developers.brevo.com/docs/getting-started#quick-start
     *
     * Get your API key:
     * https://app.brevo.com/settings/keys/api
     */
    'api_key' => env('BREVO_API_key'),
    "sender_name" => env('BREVO_SENDER_NAME', 'RoohulQuran'),
    'sender_email' => 'hafizirfan8078@gmail.com'
];
