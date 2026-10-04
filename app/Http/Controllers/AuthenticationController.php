<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AuthenticationController extends Controller
{
    /**
     * Create a link to Spotify authorize page to login
     */
    public function login()
    {
        $redirectUri = config('services.spotify.redirect_uri');
        $clientId = config('services.spotify.client_id');
        $state = Str::random(16); // Prevents attacks like cross-site request forgery
        $scope = "playlist-read-private playlist-modify-private playlist-modify-public"; // What can we access from the user apart from public information

        Session::put('spotify.state', $state); // Remember state to save for checking in callback

        // Build URL to authorize user on Spotify
        $url = "https://accounts.spotify.com/authorize";
        $queryString = http_build_query([
            'response_type' => 'code',
            'client_id' => $clientId,
            'scope' => $scope,
            'redirect_uri' => $redirectUri,
            'state' => $state
        ]);
        $redirectTo = $url . '?' . $queryString;

        return Redirect::to($redirectTo);
    }

    /**
     * Get the code given back from Spotify to authenticate the user
     */
    public function callback(Request $request)
    {
        $code = $request->query('code');
        $state = $request->query('state');
        $error = $request->query('error');

        if(!$code || !$state) {
            abort(400, 'Missing `code` or `state` in the callback. Probably opened the link directly instead of via /login.');
        }

        if($error) {
            abort(400, 'Access is denied by user.');
        }

        // Request access token        
        $redirectUri = config('services.spotify.redirect_uri');
        $clientId = config('services.spotify.client_id');
        $clientSecret = config('services.spotify.client_secret');
        $authOptions = Http::asForm()->withToken(Str::toBase64($clientId . ':' . $clientSecret), 'Basic')->post('https://accounts.spotify.com/api/token', [
            'grant_type' => 'authorization_code',
            'code' => $code,
            'redirect_uri' => $redirectUri
        ]);

        if($authOptions->status() != 200) {
            abort(500, 'Something went wrong');
        } 

        $accessToken = $authOptions->json('access_token');
        $refreshToken = $authOptions->json('refresh_token');

        // Set session
        Session::put('spotify.access_token', $accessToken);
        Session::put('spotify.refresh_token', $refreshToken);

        // Remove state session
        Session::forget('state');

        return redirect()->route('app.home');
    }
}
