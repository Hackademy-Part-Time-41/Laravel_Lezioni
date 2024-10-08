<?php

use App\Http\Controllers\AnimeController;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('test');
})->name('anime.genres');
Route::get('/genre/{id}',[AnimeController::class,'genre'])->name('anime.byGenre');
Route::get('/anime/{id}',[AnimeController::class,'anime'])->name('anime.byId');
Route::get('/search',[AnimeController::class,'search'])->name('search');