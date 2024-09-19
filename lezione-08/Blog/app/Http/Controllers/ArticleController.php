<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::all();

        return view('articles.index',compact('articles'));
    }

    public function store(Request $request){

        Article::create($request->all());

        return redirect()->back()->with('success','Record creato correttamente');

    }
}
