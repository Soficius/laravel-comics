<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// character
Route::get('/character', function () {
    return view('character');
})->name('character');

// comics
Route::get('/comics', function () {
    $comics = config('comics');
    return view('comics.index', ['media' => $comics]);
})->name('comics');

// comic
Route::get('/comic/{id}', function ($id) {
    $comics = config('comics');
    if (!is_numeric($id) || $id < 0 || $id >= count($comics)) {
        abort(404);
    }
    $comic = $comics[$id];
    return view('comics.show', compact('comic'));
})->name('comics.show');

// movies
Route::get('/movies', function () {
    return view('movies');
})->name('movies');

// tv
Route::get('/tv', function () {
    return view('tv');
})->name('tv');

// games
Route::get('/games', function () {
    return view('games');
})->name('games');

// collectibles
Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

// videos
Route::get('/videos', function () {
    return view('videos');
})->name('videos');

// fans
Route::get('/fans', function () {
    return view('fans');
})->name('fans');

// news
Route::get('/news', function () {
    return view('news');
})->name('news');

// shop
Route::get('/shop', function () {
    return view('shop');
})->name('shop');
