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
    $db = config('new-comics');
    $comics = $db['comics'];
    $links = $db['links'];
    $banner = $db['banner'];
    $list = $db['list'];
    $footerIconList = $db['footerIconList'];
    return view('home', compact('comics', 'links', 'banner', 'list', 'footerIconList'));
});

Route::get('/characters', function () {
    $db = config('new-comics');
    $comics = $db['comics'];
    $links = $db['links'];
    $banner = $db['banner'];
    $list = $db['list'];
    $footerIconList = $db['footerIconList'];
    return view('characters', compact('comics', 'links', 'banner', 'list', 'footerIconList'));
});

Route::get('/comics', function () {
    $db = config('new-comics');
    $comics = $db['comics'];
    $links = $db['links'];
    $banner = $db['banner'];
    $list = $db['list'];
    $footerIconList = $db['footerIconList'];
    return view('comics', compact('comics', 'links', 'banner', 'list', 'footerIconList'));
});

Route::get('/movies', function () {
    $db = config('new-comics');
    $comics = $db['comics'];
    $links = $db['links'];
    $banner = $db['banner'];
    $list = $db['list'];
    $footerIconList = $db['footerIconList'];
    return view('movies', compact('comics', 'links', 'banner', 'list', 'footerIconList'));
});

Route::get('/tv', function () {
    $db = config('new-comics');
    $comics = $db['comics'];
    $links = $db['links'];
    $banner = $db['banner'];
    $list = $db['list'];
    $footerIconList = $db['footerIconList'];
    return view('tv', compact('comics', 'links', 'banner', 'list', 'footerIconList'));
});

Route::get('/games', function () {
    $db = config('new-comics');
    $comics = $db['comics'];
    $links = $db['links'];
    $banner = $db['banner'];
    $list = $db['list'];
    $footerIconList = $db['footerIconList'];
    return view('games', compact('comics', 'links', 'banner', 'list', 'footerIconList'));
});

Route::get('/collectibles', function () {
    $db = config('new-comics');
    $comics = $db['comics'];
    $links = $db['links'];
    $banner = $db['banner'];
    $list = $db['list'];
    $footerIconList = $db['footerIconList'];
    return view('collectibles', compact('comics', 'links', 'banner', 'list', 'footerIconList'));
});

Route::get('/videos', function () {
    $db = config('new-comics');
    $comics = $db['comics'];
    $links = $db['links'];
    $banner = $db['banner'];
    $list = $db['list'];
    $footerIconList = $db['footerIconList'];
    return view('videos', compact('comics', 'links', 'banner', 'list', 'footerIconList'));
});

Route::get('/fans', function () {
    $db = config('new-comics');
    $comics = $db['comics'];
    $links = $db['links'];
    $banner = $db['banner'];
    $list = $db['list'];
    $footerIconList = $db['footerIconList'];
    return view('fans', compact('comics', 'links', 'banner', 'list', 'footerIconList'));
});

Route::get('/news', function () {
    $db = config('new-comics');
    $comics = $db['comics'];
    $links = $db['links'];
    $banner = $db['banner'];
    $list = $db['list'];
    $footerIconList = $db['footerIconList'];
    return view('news', compact('comics', 'links', 'banner', 'list', 'footerIconList'));
});

Route::get('/shop', function () {
    $db = config('new-comics');
    $comics = $db['comics'];
    $links = $db['links'];
    $banner = $db['banner'];
    $list = $db['list'];
    $footerIconList = $db['footerIconList'];
    return view('shop', compact('comics', 'links', 'banner', 'list', 'footerIconList'));
});
