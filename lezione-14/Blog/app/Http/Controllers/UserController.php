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

        $articles = auth()->user()->articles()->orderBy('created_at')->get();

    //    $articles = new Collection();

    //    $authors = auth()->user()->authors;

    //    foreach($authors as $author){
    //     $articles = $articles->merge($author->articles);
    //    }
       
        // $articles = Article::where('author','LIKE',$name)->get();

        return view('user.profile',compact('articles'));
    }
}
