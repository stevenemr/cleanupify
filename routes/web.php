<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;

// Controllers
use App\Http\Controllers\AuthenticationController;

Route::inertia('/', 'Home');

Route::inertia('/about', 'About');

Route::get('/login', [AuthenticationController::class, 'login'])->name('auth.login');

Route::get('/callback', [AuthenticationController::class, 'callback'])->name('auth.callback');

Route::get('/app/home', function () {
    $accessToken = Session::get('spotify.access_token');
    $user = Http::withToken($accessToken)->get("https://api.spotify.com/v1/me")->collect();
    $userPlaylists = Http::withToken($accessToken)->get('https://api.spotify.com/v1/me/playlists')->collect('items');

    $userPlaylists = $userPlaylists->filter(fn($playlist) => $playlist['owner']['id'] == $user['id']);

    return Inertia::render('Dashboard', [
        'user' => $user,
        'userPlaylists' => $userPlaylists
    ]);
})->name('app.home');

