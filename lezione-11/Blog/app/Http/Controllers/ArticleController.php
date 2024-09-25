<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreArticleRequest;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function dashboard(){
        return view('articles.dashboard',['articles'=>Article::all()]);
    }

    public function index()
    {
        $articles = Article::all();

        return view('articles.index', compact('articles'));
    }

    public function show(Article $article)
    {

        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(StoreArticleRequest $request)
    {

        $article = Article::create($request->validated());

        if($request->hasFile('image')){

            $file = $request->file('image');
            $name = 'image'.$article->id.'.'.$file->getClientOriginalExtension();
            $file->storeAs('images',$name,'public');
            $article->image = 'images/'.$name;

            $article->save();
           
        }

        return redirect()->back()->with('success', 'Record creato correttamente');
    }

    public function edit(Article $article){

        return view('articles.edit',compact('article'));

    }

    public function update(Request $request , Article $article){
        $article->update($request->all());

        // $article->title = $request->title;
        // $article->save();
        return redirect()->route('articles.dashboard')->with('success','Articolo '.$article->id.' modificato correttamente!');
    }

    public function destroy(Article $article){

        Storage::disk('public')->delete($article->image);

        //eliminare record passando dall'oggetto
        $article->delete();

        //eliminare record passando dalla classe
        // Article::destroy($article->id);
        
        return redirect()->back()->with('success','Hai eliminato l\'articolo correttamente!');
    }
}
