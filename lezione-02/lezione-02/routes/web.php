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







//parametro opzionale richiede ? alla fine del nome del parametro nell'uri e un valore di
// default nel parametro formale della funzione anonima

Route::get('rotta/{parametro?}', function ($test = 'prova') {
    return view('test', ['parametro' => $test]);
})->name('rotta');










Route::get('/rotta2/{par?}',function ($par = 'default') {
        return view('rotta2', ['par'=>$par]);
    }
)->name('rotta2');
