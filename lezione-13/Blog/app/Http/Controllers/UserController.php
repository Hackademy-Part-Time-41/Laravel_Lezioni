<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class UserController extends Controller
{
    public function profile(){
        $name= auth()->user()->name;

       $articles = Article::all();

        // $articles = Article::where('author','LIKE',$name)->get();

        return view('user.profile',compact('articles'));
    }
}
