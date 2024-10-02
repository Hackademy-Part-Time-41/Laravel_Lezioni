<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Author;
use App\Models\Article;


use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreArticleRequest;
use App\Models\Category;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

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
        $authors = Author::all();
        
        return view('articles.create',compact('authors'));
    }

    public function store(StoreArticleRequest $request)
    {

        // dd($request->categories);
        $article = Article::create($request->validated());

        $article->categories()->attach($request->categories);

        
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
        $authors = Author::all();
        
        return view('articles.edit',compact('article','authors'));

    }

    public function update(Request $request , Article $article){
        $article->update($request->all());

        // $article->categories()->detach();
        // $article->categories()->attach($request->categories);

        $article->categories()->sync($request->categories);

        
        return redirect()->route('articles.dashboard')->with('success','Articolo '.$article->id.' modificato correttamente!');
    }

    public function destroy(Article $article){

        if($article->image){
            Storage::disk('public')->delete($article->image);
        }

        $article->categories()->detach();
        

        //eliminare record passando dall'oggetto
        $article->delete();

        //eliminare record passando dalla classe
        // Article::destroy($article->id);
        
        return redirect()->back()->with('success','Hai eliminato l\'articolo correttamente!');
    }

    public function byCategory(Category $category){
        $articles = $category->articles()->orderBy('title')->get();
        return view('articles.index',compact('articles'));
    }
}
