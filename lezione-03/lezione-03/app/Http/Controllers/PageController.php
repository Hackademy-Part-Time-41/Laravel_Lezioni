<?php

namespace App\Http\Controllers;

// in laravel il namespace coincide con il percorso delle cartelle in cui sono definite le classi
use Illuminate\Http\Request;

class PageController extends Controller
{
    // Un controller è una classe in cui viene inserita la logica e le funzionalità della nostra applicazione

    public $contatti = [
        'Giacomo' => ['3368535982', 'Milano'],
        'Admin' => ['admin@sitobello.it', 'Roma'],
        'Supporto' => ['3333333333', 'Internazionale']
    ];



    // il nome del metodo deve essere uguale a quello che inserisce nella definizione della rotta, può essere diverso dal nome della rotta stessa
    
    public function homepage() {
        return view('homepage');
    }

    public function contacts() {
        return view('contacts', ['dati' => $this->contatti]);
    }


}
