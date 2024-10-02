<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Author;
use App\Models\Category;
use App\Models\Pippo;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage(){

        
        return view('homepage');
    }

    public function database(){
        
        // Author::create(['name'=>'Giorgio','surname'=>'Bianchi','phone'=>'809327423432']);

        dd(Author::all());

        // $author = new Author;
        // $author->name = 'Pietro';
        // $author->surname = 'Rossi';
        // $author->phone = '43987843';

        // $author->save();

        return redirect()->to('/');

    }

    public function custom(){

        //tutti i record
        // Modello::all();

        //un record specifico
        //Modello::findOrFail($id);

        //ordinare i dati
        //Modello::orderBy('colonna_db','DESC')->get();
        //Modello::orderBy('colonna_db','ASC')->get();

        // filtrare dati per caratteristica
        //Modello::where('colonna_db','metodoDiParagone(LIKE,>,>=,<,<=)','valoreConCuiConfronto')->get();

        return view('custom',['articles'=>Article::where('id','>',14)->orderBy('title','DESC')->get()]);

    }
}
