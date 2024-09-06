<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\WriterController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class,'homepage'])->name('home');

// Estrazione 
// Incapsulamento
// Astrazione

// per indicare alla rotta dove trovare il metodo da eseguire passiamo un [NomeController::class,'contacts']
Route::get('/contatti', [PageController::class,'contacts'])->name('contatti');

Route::get('/articles/index', [ArticleController::class,'articles'])->name('articles');

Route::get('/articles/detail/{variabile}', [ArticleController::class,'article'])->name('articles.show');

Route::get('/writers',[WriterController::class,'writers'])->name('writers');
