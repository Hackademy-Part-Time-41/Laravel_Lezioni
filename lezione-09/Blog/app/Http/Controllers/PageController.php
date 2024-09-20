<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Author;
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
}
