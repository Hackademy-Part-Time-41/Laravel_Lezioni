<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreArticleRequest;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class ArticleController extends Controller implements HasMiddleware
{
    // metodo pre version 10 di laravel

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    
    // per usare i middleware nel controller devo importare l'intefaccia HasMiddleware 
    // la classe del controller deve implementare l'interfaccia
    // devo definire il metodo statico middleware che restituisce un array dei middleware da applicare

    public static function middleware(){
        return [
            // new Middleware('auth', only: ['show','create'])
            // new Middleware('subscribed', except: ['store']),
        ];
    }

    public function index()
    {
        $articles = Article::all();

        return view('articles.index', compact('articles'));
    }

    public function show(Article $article)
    {
        // 1 metodo

        // $articolo= Article::find($articolo);

        // if(!$articolo){
        //     abort(404);
        // }

        // 2 metodo

        // $articolo=Article::findOrFail($articolo);

        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(StoreArticleRequest $request)
    {
        //validate gestisce la validazione in automatico ma non ci consente di customizzarla
        // $data = $request->validate(
        //     ['title'=>['required','max:50'],
        //     'body'=>'required|max:500',
        //     'author'=>'max:30'
        //     ]);

        // Dimenticatevi del validatore è molto complesso
        // $data= Validator::make($request->all(), [
        //     'title' => ['required', 'max:50'],
        //     'body' => 'required|max:10',
        //     'author' => 'max:30'
        // ],[
        //     'title.required'=>'Sono l\'errore requuired',
        //     'body.max'=>'Il corpo può avere una lunghezza massima di :max caratteri',
        // ])->validate();

        // Il metodo hasFile('chiave') restituisce true se è presente nella request un file con quella chiave associata
        //$request->hasFile('image');

        $article = Article::create($request->validated());

        if($request->hasFile('image')){

            $file = $request->file('image');
            // $name = $file->getClientOriginalName();
            $name = 'image'.$article->id.'.'.$file->getClientOriginalExtension();
            // $name = Str::uuid().'.jpg';

            // il terzo parametro specifica il nome del disco da utilizzare
            $file->storeAs('images',$name,'public');

            $article->image = 'images/'.$name;

            $article->save();
           
        }

        return redirect()->back()->with('success', 'Record creato correttamente');
    }
}
