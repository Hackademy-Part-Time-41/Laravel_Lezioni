<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\WriterController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class,'homepage'])->name('home');

Route::get('/contacts',[PageController::class,'contacts'])->name('contacts');


