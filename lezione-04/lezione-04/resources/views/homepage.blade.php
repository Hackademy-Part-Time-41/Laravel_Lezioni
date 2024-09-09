{{--
    In blade passare dati ai componenti avviene in due modi per attributo o per slot

    Nel passaggio per attributo posso passare delle variabili o con le doppie graffe o anteponendo un : al nome dell'attributo

    <x-layout :title="$titolo"> oppure <x-layout title="{{$titolo}}">

    Nel passaggio tramite slot apro all'interno del componente dei tag x-slot

    <x-slot:nomevariabile>
        Valore della variabile
    </x-slot>

    Se voglio rende un componente da normale a anonimo devo eliminare la classe nella directory app/View/Components/NomeComponente
    e in seguito lanciare il comando php artisan view:clear per pulire le cache di laravel
--}}

<x-layout :title="$titolo">

    <x-slot:subtitle>
        Sono il sottotitolo secondario
    </x-slot>
    <h1>Ciao</h1>
    <div class="container">
        <div class="row">
            @foreach ($articles as $article)
                {{--Passaggio dati ai componenti per attributo --}}
                <x-card :image="$article['image']" :title="$article['title']" :content="$article['body']"  :route="route('contacts')" />
                {{-- <x-card2 :article="$article" /> --}}
                {{-- <x-card2 :$article /> --}}
            @endforeach
        </div>
    </div>

</x-layout>



