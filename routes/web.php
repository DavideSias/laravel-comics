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

Route::get('/', function () {
    $menu = config('menu');
    $linkShop = config('linkShop');
    $linkDC = config('linkDC');
    $linkSites = config('linkSites');
    return view('guest.home', [
        'menu'  => $menu,
        'linkShop' => $linkShop,
        'linkDC' => $linkDC,
        'linkSites' => $linkSites,
    ]);
})->name('home');

Route::get('/characters', function () {
    $menu = config('menu');
    $linkShop = config('linkShop');
    $linkDC = config('linkDC');
    $linkSites = config('linkSites');
    return view('guest.characters', [
        'menu'  => $menu,
        'linkShop' => $linkShop,
        'linkDC' => $linkDC,
        'linkSites' => $linkSites,
    ]);
})->name('characters');

Route::get('/comics', function () {
    $comics = config('comics');
    $menu = config('menu');
    $linkShop = config('linkShop');
    $linkDC = config('linkDC');
    $linkSites = config('linkSites');
    return view('guest.comics', [
        'comics' => $comics,
        'menu'  => $menu,
        'linkShop' => $linkShop,
        'linkDC' => $linkDC,
        'linkSites' => $linkSites,
    ]);
})->name('comics');

Route::get('/movies', function () {
    $menu = config('menu');
    $linkShop = config('linkShop');
    $linkDC = config('linkDC');
    $linkSites = config('linkSites');
    return view('guest.movies', [
        'menu'  => $menu,
        'linkShop' => $linkShop,
        'linkDC' => $linkDC,
        'linkSites' => $linkSites,
    ]);
})->name('movies');

Route::get('/tv', function () {
    $menu = config('menu');
    $linkShop = config('linkShop');
    $linkDC = config('linkDC');
    $linkSites = config('linkSites');
    return view('guest.tv', [
        'menu'  => $menu,
        'linkShop' => $linkShop,
        'linkDC' => $linkDC,
        'linkSites' => $linkSites,
    ]);
})->name('tv');

Route::get('/games', function () {
    $menu = config('menu');
    $linkShop = config('linkShop');
    $linkDC = config('linkDC');
    $linkSites = config('linkSites');
    return view('guest.games', [
        'menu'  => $menu,
        'linkShop' => $linkShop,
        'linkDC' => $linkDC,
        'linkSites' => $linkSites,
    ]);
})->name('games');

Route::get('/collectibles', function () {
    $menu = config('menu');
    $linkShop = config('linkShop');
    $linkDC = config('linkDC');
    $linkSites = config('linkSites');
    return view('guest.collectibles', [
        'menu'  => $menu,
        'linkShop' => $linkShop,
        'linkDC' => $linkDC,
        'linkSites' => $linkSites,
    ]);
})->name('collectibles');

Route::get('/videos', function () {
    $menu = config('menu');
    $linkShop = config('linkShop');
    $linkDC = config('linkDC');
    $linkSites = config('linkSites');
    return view('guest.videos', [
        'menu'  => $menu,
        'linkShop' => $linkShop,
        'linkDC' => $linkDC,
        'linkSites' => $linkSites,
    ]);
})->name('videos');

Route::get('/fans', function () {
    $menu = config('menu');
    $linkShop = config('linkShop');
    $linkDC = config('linkDC');
    $linkSites = config('linkSites');
    return view('guest.fans', [
        'menu'  => $menu,
        'linkShop' => $linkShop,
        'linkDC' => $linkDC,
        'linkSites' => $linkSites,
    ]);
})->name('fans');

Route::get('/news', function () {
    $menu = config('menu');
    $linkShop = config('linkShop');
    $linkDC = config('linkDC');
    $linkSites = config('linkSites');
    return view('guest.news', [
        'menu'  => $menu,
        'linkShop' => $linkShop,
        'linkDC' => $linkDC,
        'linkSites' => $linkSites,
    ]);
})->name('news');

Route::get('/shop', function () {
    $menu = config('menu');
    $linkShop = config('linkShop');
    $linkDC = config('linkDC');
    $linkSites = config('linkSites');
    return view('guest.shop', [
        'menu'  => $menu,
        'linkShop' => $linkShop,
        'linkDC' => $linkDC,
        'linkSites' => $linkSites,
    ]);
})->name('shop');




