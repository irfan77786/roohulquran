<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Driver
    |--------------------------------------------------------------------------
    |
    | sociablekit     = Free SociableKIT feed → your own review cards (recommended).
    | embed           = SociableKIT / Elfsight JS widget embed.
    | business_profile = Google Business Profile API (needs Google access approval).
    | places           = Google Places API (requires billing card).
    |
    */
    'driver' => env('GOOGLE_REVIEWS_DRIVER', 'sociablekit'),

    'cache_ttl' => (int) env('GOOGLE_REVIEWS_CACHE_TTL', 1800),
    'stale_ttl' => (int) env('GOOGLE_REVIEWS_STALE_TTL', 86400),
    'max_reviews' => (int) env('GOOGLE_REVIEWS_MAX', 10),
    'min_rating' => (int) env('GOOGLE_REVIEWS_MIN_RATING', 4),

    /*
    |--------------------------------------------------------------------------
    | SociableKIT (free — no Google billing)
    |--------------------------------------------------------------------------
    */
    'embed' => [
        'provider' => env('GOOGLE_REVIEWS_EMBED_PROVIDER', 'sociablekit'),
        'id' => env('GOOGLE_REVIEWS_EMBED_ID'),
    ],

    'business_profile' => [
        'client_id' => env('GOOGLE_BUSINESS_PROFILE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_BUSINESS_PROFILE_CLIENT_SECRET'),
        'refresh_token' => env('GOOGLE_BUSINESS_PROFILE_REFRESH_TOKEN'),
        // Optional: accounts/{accountId}/locations/{locationId}
        'location' => env('GOOGLE_BUSINESS_PROFILE_LOCATION'),
    ],

    'places' => [
        'api_key' => env('GOOGLE_MAPS_API_KEY'),
        'place_id' => env('GOOGLE_REVIEWS_PLACE_ID'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Public profile link (shown as "See all reviews on Google")
    |--------------------------------------------------------------------------
    */
    'maps_url' => env('GOOGLE_REVIEWS_MAPS_URL'),

    /*
    |--------------------------------------------------------------------------
    | Fallback static reviews (used until API credentials are configured)
    |--------------------------------------------------------------------------
    */
    'fallback' => [
        'rating' => 5.0,
        'total' => 5,
        'reviews' => [
            [
                'author' => 'Muhammad Zakir',
                'rating' => 5,
                'text' => 'Rooh ul Quran Academy made it so easy for my son to start Noorani Qaida. The teacher is patient and professional.',
                'photo' => null,
                'relative_time' => null,
            ],
            [
                'author' => 'Ayesha Khan',
                'rating' => 5,
                'text' => 'I always wanted to learn Quran with Tajweed. Alhamdulillah, I improved my recitation within a few months.',
                'photo' => null,
                'relative_time' => null,
            ],
            [
                'author' => 'Muhammad Zeeshan',
                'rating' => 5,
                'text' => 'As a working professional, the flexible timings helped me continue my Quran classes online.',
                'photo' => null,
                'relative_time' => null,
            ],
            [
                'author' => 'M Yaseen',
                'rating' => 5,
                'text' => 'Their female Quran tutor is very kind and supportive. Highly recommended for sisters.',
                'photo' => null,
                'relative_time' => null,
            ],
            [
                'author' => 'Habibullah',
                'rating' => 5,
                'text' => 'Learning Quran online has been a blessing for me. The instructors are very knowledgeable and patient.',
                'photo' => null,
                'relative_time' => null,
            ],
        ],
    ],

];
