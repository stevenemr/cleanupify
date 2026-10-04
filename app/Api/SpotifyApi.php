<?php

namespace App\Api;

class SpotifyApi
{
    private string $url;
    private string $clientId;
    private string $clientSecret;

    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        $this->url = config('services.spotify.url');
        $this->clientId = config('services.spotify.client_id');
        $this->clientSecret = config('services.spotify.client_secret');
    }
    
    // TODO: Use this class instead of using HTTP helper each file
}
