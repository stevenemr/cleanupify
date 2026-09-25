# Cleanupify - Clean up your own Spotify playlists

Cleanupify is an application written in Laravel to clean up your own playlists on Spotify. In a Tinder-like style, you can
organize your whole playlist with ease. For each song in your playlist, you will hear a preview of the song and keep or remove it from your
playlist.

## Included

This includes Sail so it can be easily installed. Just run `./vendor/bin/sail` (or make a alias for it in `.zshrc` or `.bashrc`) and open the application on [`http://localhost`](http://localhost).

Also Mailpit is included, which can be opened on [`http://localhost:8025`](http://localhost:8025).

## Installation

> **Note:** Because the application is not done and tested yet, the installation may be incorrect and incomplete.

Before running the commands, please make sure you have [Docker](https://www.docker.com/get-started/), [PHP, Composer and Laravel (install script from Laravel)](https://laravel.com/framework/docs/installation#installing-php) installed. 


1. Clone this repository: `git clone https://github.com/stevenemr/cleanupify`
2. Download the composer pacakages: `composer install`
3. Set a application key: `php artisan key:generate`
4. Run the development server: `./vendor/bin/sail up -d` or `sail up -d`
5. Start the vite server: `./vendor/bin/sail npm run dev` or `sail npm run dev`

## Development

Cleanupify will be developed using the [TDD technique (Test Driven Development)](https://en.wikipedia.org/wiki/Test-driven_development). This means that all new created features must have a test written for them. 