<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/contatti',function () {
    return view('contatti');
});

Route::get('/link-utili',function (){
    $dati = ['contatti','https://www.google.it/','www.amazon.it'];
    return view('link-utili',['links'=>$dati]);
});