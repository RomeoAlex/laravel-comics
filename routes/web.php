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
  // creo variabile per mostrare i singoli fumetti al posto della lista nel main
  $comic_to_show = false;
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
  // nel caso si ricercasse nella barra degli indirizzi un id che non esiste
  // if(!$comic_to_show){
  //   abort('404');
  // }


  // controllo con dd
  // dd($comic_single );
  // creo due array per gli artisti e gli scrittori
  $comic_artist = [];
  $comic_writer = [];
  // scorro l'array associativo $comic_array per trovare i due array che mi servono
  foreach($comics_array as $comics){
    if($comics['artists']){
      $comic_artist[] = $comics['artists'];
    }
  }
  
  foreach($comics_array as $comics){
    if($comics['writers']){
      $comic_writer[] = $comics['writers'];
      
    }
  }
  // stampa
  // dd($comic_writer); 
  // devo rimandare i dati forniti a blade per visualizzarli in pagina
  $data = [
    // per utilizzare l'array $comic_single preso dal ciclo devo convertirlo per poi passarlo su blade
    'comic' => $comic_single,
    'artists' => $comic_artist,
    'writers' => $comic_artist,
  ];
  
  return view('single-comic', $data);
});