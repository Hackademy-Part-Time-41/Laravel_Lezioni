<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name('home');
// per aggiungere un nome a una rotta utilizzo il metodo name concatenato alle funzione get e come parametro passo il nome della rotta

Route::get('/contatti', function () {
    $contatti = [
        'Giacomo' => ['3368535982', 'Milano'],
        'Admin' => ['admin@sitobello.it', 'Roma'],
        'Supporto' => ['3333333333', 'Internazionale']
    ];

    // dd($contatti);

    return view('contacts', ['dati' => $contatti]);
})->name('contatti');


Route::get('/articles/index', function () {

    $articles = [
        ['titolo' => 'Articolo #1', 'corpo' => 'I mari sono belli', 'autore' => 'Pitero', 'immagine' => 'asfgd'],
        ['titolo' => 'Gita in campagna', 'corpo' => 'Ho visto i girasoli', 'autore' => 'Laura', 'immagine' => 'asfgd'],
        ['titolo' => 'Alex', 'corpo' => 'Ho lanciato una bomba', 'autore' => 'Alex', 'immagine' => 'asfgd'],
        ['titolo' => 'Alex', 'corpo' => 'Ho lanciato una bomba', 'autore' => 'Alex', 'immagine' => 'asfgd'],
        ['titolo' => 'Alex', 'corpo' => 'Ho lanciato una bomba', 'autore' => 'Alex', 'immagine' => 'asfgd']
    ];

    $title = 'Indice degli articoli';
    // per passare i dati alla vista utilizziamo o un array associativo oppure la funzione compact()
    return view('articles', compact('articles', 'title'));
})->name('articles');


// rotta parametrica

Route::get('articles/detail/{variabile}', function ($variabile) {
    $title = 'Dettaglio';
    // dd($variabile);
    $articles = [
        ['titolo' => 'Articolo #1', 'corpo' => 'I mari sono belli', 'autore' => 'Pitero', 'immagine' => 'asfgd'],
        ['titolo' => 'Gita in campagna', 'corpo' => 'Ho visto i girasoli', 'autore' => 'Laura', 'immagine' => 'asfgd'],
        ['titolo' => 'Alex', 'corpo' => 'Ho lanciato una bomba', 'autore' => 'Alex', 'immagine' => 'asfgd'],
        ['titolo' => 'Alex', 'corpo' => 'Ho lanciato una bomba', 'autore' => 'Alex', 'immagine' => 'asfgd'],
        ['titolo' => 'Alex', 'corpo' => 'Ho lanciato una bomba', 'autore' => 'Alex', 'immagine' => 'asfgd']
    ];

    if (! array_key_exists($variabile, $articles)) {
        abort(404); // lancia errore con il codice scelto come parametro e eventuale messaggio
    }

    return view('articles-detail', ['article' => $articles[$variabile], 'title' => $title]);
})->name('articles.show');


// una named route è un rotta a cui viene assegnato un nome
Route::get('/test',function(){
    return view('test');
})->name('test');

// il comando php artisan route:list ci permette di visualizzare tutte le rotte che sono definite nella nostra applicazione


// una rotta parametrica è un rotta che gestisce un numero infinito di possibile richieste dell'utente, lasciando un pezzo dell'indirizzo libero come un parametro
// il parametro nell'uri è delimitato dalle {}
// i parametri dell'uri vengono passati alla funzione per ordine non per nome
Route::get('/indirizzo/{par1}/{par2?}',function($param,$param2 = 'default'){
    return view('test',compact('param','param2'));
})->name('rotta-parametrica');

// parametro opzionale viene dichiarata con {nome?} un punto interrogativo alla fine del nome e con valore di default nella funzione anonima