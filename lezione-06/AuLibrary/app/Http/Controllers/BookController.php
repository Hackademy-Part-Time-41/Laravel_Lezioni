<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public $books = [
        ['title'=> 'Libro 1',
        'description'=>'descrizione breve del libro',
        'body'=>'Contenuto molto lungo del libro',
        'image'=>'https://picsum.photos/200',
        'category'=>'sport'],
        ['title'=> 'Libro 2',
        'description'=>'descrizione breve del libro',
        'body'=>'Contenuto molto lungo del libro',
        'image'=>'https://picsum.photos/200',
        'category'=>'sport'],

    ];

    public $categories = [
        'sport',
        'gossip',
        'economy',
    ];

    public function index(){
        // porta alla lista dei libri
        return view('books.index',['books'=>$this->books]);
    }

    public function show($book){
        // porta alla pagina di dettaglio dei libri
        return view('books.show',['book'=>$this->books[$book]]);
    }

    public function byCategory($category){
        $books = [];
        foreach($this->books as $book){
            if($book['category']== $category){
                $books[] = $book;
            }
        }

        return view('books.by-category',compact('books','category'));
    }
}
