<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthorController;
use App\Models\Article;

Route::get('/', [PageController::class,'homepage'])->name('homepage');

// Articles routes

Route::get('/articles/index',[ArticleController::class,'index'])->name('articles.index');
Route::get('/articles/show/{article}',[ArticleController::class,'show'])->name('articles.show');
Route::get('/articles/create',[ArticleController::class,'create'])->name('articles.create')->middleware('auth');
Route::post('/articles/store',[ArticleController::class,'store'])->name('articles.store')->middleware('auth');
Route::get('/articles/edit/{article}',[ArticleController::class,'edit'])->name('articles.edit')->middleware('auth');
Route::put('/articles/update/{article}',[ArticleController::class,'update'])->name('articles.update')->middleware('auth');
Route::delete('/articles/delete/{article}',[ArticleController::class,'destroy'])->name('articles.destroy')->middleware('auth');

// Author Routes

// il metodo resource implemente tutte le rotte per la gestione CRUD di un modello
// Route::resource('authors',AuthorController::class)->only(['store','update'])->middleware('auth');
// Route::resource('authors',AuthorController::class)->except(['store','update']);
Route::resource('authors',AuthorController::class)->except(['show'])->middleware('auth');

//User routes

Route::get('/profile',[UserController::class,'profile'])->name('user.profile')->middleware('auth');

//dashboard

Route::get('/articles/dashboard',[ArticleController::class,'dashboard'])->name('articles.dashboard')->middleware('auth');

// Rotta a scopo dimostrativo
Route::get('/db',[PageController::class,'database'])->name('database');

Route::get('/custom',[PageController::class,'custom'])->name('custom');
