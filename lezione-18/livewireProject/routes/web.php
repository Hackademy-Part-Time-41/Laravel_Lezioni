<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\UserSearch;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user-search',UserSearch::class);

Route::get('/users-paginated',function(){

    $users = User::paginate(4);
    return view('paginate',compact('users'));
});

Route::get('/user-dashboard', function (){
    return view('users.dashboard');
});

Route::get('/mount',function (){
    return view('mount',['title'=>'Pagina della mount','descrizione'=>'ciao a tutti!']);
});