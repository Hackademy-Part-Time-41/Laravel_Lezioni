<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;

Route::get('/', [PageController::class,'homepage'])->name('homepage');
Route::get('/articles/index',[ArticleController::class,'index'])->name('articles.index');
// Rotta a scopo dimostrativo
Route::get('/db',[PageController::class,'database'])->name('database');

Route::post('/articles/store',[ArticleController::class,'store'])->name('articles.store');