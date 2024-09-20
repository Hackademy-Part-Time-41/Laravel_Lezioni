<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;

Route::get('/', [PageController::class,'homepage'])->name('homepage');
Route::get('/articles/index',[ArticleController::class,'index'])->name('articles.index');
Route::get('/articles/show/{article}',[ArticleController::class,'show'])->name('articles.show');
Route::get('/articles/create',[ArticleController::class,'create'])->name('articles.create');
// Rotta a scopo dimostrativo
Route::get('/db',[PageController::class,'database'])->name('database');

Route::post('/articles/store',[ArticleController::class,'store'])->name('articles.store');