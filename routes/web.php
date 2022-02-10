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
// aggiungo la variabile per catturare l'id dell'array su comics.php il valore sarà riportato come stringa
Route::get('/single-comic/{id}', function ($id) {
  // uso config per prendere comics.php
  $comics_array = config('comics');
  //inizializzo la variabile del fumetto che prenderò dall'array 
  $comic_single = [];
  // ciclo l'array per trovare l'id del fumetto
  foreach($comics_array as $comic ){
    // attenzione l'id dell'array comic è un int e il nostro id variabile è una stringa!!
    // perciò
    if($comic['id'] == $id ){
      $comic_single = $comic;
    }
  }
  // controllo con dd
  // dd($comic_single );

  // devo rimandare i dati forniti a blade per visualizzarli in pagina
  $data = [
    // per utilizzare l'array $comic_single preso dal ciclo devo convertirlo per poi passarlo su blade
    'comic' => $comic_single,
  ];
  
  return view('single-comic', $data);
});