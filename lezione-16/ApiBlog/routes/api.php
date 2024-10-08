<?php

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/v1/users',function (){
    return UserResource::collection(User::all());
});

Route::get('/v2/users',function (){

    return User::where('title','pippo')->get();
});

Route::post('/v1/create',function (Request $request){
    User::create(['name'=>$request->name,'email'=>$request->email]);
});