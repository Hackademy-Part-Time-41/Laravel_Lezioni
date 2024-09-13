<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class,'homepage'])->name('homepage');

Route::get('/feedback',[PageController::class,'feedback'])->name('feedback');
Route::post('feedback/send',[PageController::class,'feedbackSend'])->name('feedback.send');

Route::get('/books/index',[BookController::class,'index'])->name('books.index');
Route::get('/books/show/{book}',[BookController::class,'show'])->name('books.show');
Route::get('books/{category}',[BookController::class,'byCategory'])->name('books.byCategory');
