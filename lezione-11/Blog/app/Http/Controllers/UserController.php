<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile(){
        $name= auth()->user()->name;

        $articles = Article::where('author','LIKE',$name)->get();

        return view('user.profile',compact('articles'));
    }
}
