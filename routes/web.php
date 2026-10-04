<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

// Controllers
use App\Http\Controllers\AuthenticationController;

Route::inertia('/', 'Home');

Route::get('/login', [AuthenticationController::class, 'login'])->name('auth.login');

Route::get('/callback', [AuthenticationController::class, 'callback'])->name('auth.callback');

Route::get('/app/home', function () {
    $accessToken = Session::get('spotify.access_token');
    $test = Http::withToken($accessToken)->get("https://api.spotify.com/v1/me")->json();

    dd("Welcome, " . $test['display_name'] . '!');
})->name('app.home');