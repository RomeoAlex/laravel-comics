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
    // uso config per prendere comics.php
    $comics_array = config('comics');
    
  $data = [
    // per utilizzare l'array $comic_array preso dal config devo convertirlo per poi passarlo su blade
    'comics' => $comics_array,
  ];
    
    return view('home', $data );
});
