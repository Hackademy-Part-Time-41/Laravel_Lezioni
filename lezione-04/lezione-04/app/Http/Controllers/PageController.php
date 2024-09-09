<?php

namespace App\Http\Controllers;

// in laravel il namespace coincide con il percorso delle cartelle in cui sono definite le classi
use Illuminate\Http\Request;

class PageController extends Controller
{

    public $articles = [
        ['image'=>'https://picsum.photos/200','title'=>'Articolo 1','body'=>'siamo contenti di essere qui'],
        ['image'=>'https://picsum.photos/200','title'=>'Articolo 1','body'=>'siamo contenti di essere qui'],
        ['image'=>'https://picsum.photos/200','title'=>'Articolo 1','body'=>'siamo contenti di essere qui'],
    ];

    // il nome del metodo deve essere uguale a quello che inserisce nella definizione della rotta, può essere diverso dal nome della rotta stessa
    
    public function homepage() {
        return view('homepage',['titolo'=>'Homepage del sito','articles'=>$this->articles]);
    }

    public function contacts(){
        return view('contacts');
    }


}
