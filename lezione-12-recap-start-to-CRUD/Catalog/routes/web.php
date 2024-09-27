<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class,'homepage'])->name('homepage');
Route::get('/contact',[PageController::class,'contact'])->name('contact')->middleware('auth');
Route::post('/contact/send',[PageController::class,'contactSend'])->name('contact.send')->middleware('auth');
Route::get('/search',[PageController::class,'search'])->name('search');

Route::resource('cars',CarController::class)->except('index','show')->middleware('auth');
Route::resource('cars',CarController::class)->only('index','show');