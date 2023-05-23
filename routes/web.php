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
    return view('home', compact('comics', 'links', 'banner'));
});
