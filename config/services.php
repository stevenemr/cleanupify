<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Resend, Postmark, AWS, and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'spotify' => [
        'url' => env('SPOTIFY_URL', 'https://api.spotify.com/v1'),
        'redirect_uri' => env('SPOTIFY_REDIRECT_URI', 'http://127.0.0.1/callback'),
        'client_id' => env('SPOTIFY_CLIENT_ID'),
        'client_secret' => env('SPOTIFY_CLIENT_SECRET')
    ]
];
