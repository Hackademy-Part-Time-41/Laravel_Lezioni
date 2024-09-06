<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{

    private $articles = [
        ['titolo' => 'Articolo #1', 'corpo' => 'I mari sono belli', 'autore' => 'Pitero', 'immagine' => 'asfgd'],
        ['titolo' => 'Gita in campagna', 'corpo' => 'Ho visto i girasoli', 'autore' => 'Laura', 'immagine' => 'asfgd'],
        ['titolo' => 'Alex', 'corpo' => 'Ho lanciato una bomba', 'autore' => 'Alex', 'immagine' => 'asfgd'],
        ['titolo' => 'Alex', 'corpo' => 'Ho lanciato una bomba', 'autore' => 'Alex', 'immagine' => 'asfgd'],
        ['titolo' => 'Alex', 'corpo' => 'Ho lanciato una bomba', 'autore' => 'Alex', 'immagine' => 'asfgd']
    ];
    
    public function articles() {
        return view('articles.articles', ['dati'=> $this->articles,'title'=>'Lista Articoli']);
    }

    public function article($variabile) {
        $title = 'Dettaglio';
    
        if (! array_key_exists($variabile, $this->articles)) {
            abort(404); 
        }
    
        return view('articles.articles-detail', ['article' => $this->articles[$variabile], 'title' => $title]);
    }



}
