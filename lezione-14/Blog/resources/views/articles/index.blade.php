<x-layout>
    <h1>Elenco degli articoli</h1>

    <div class="row">
        @foreach ($articles as $article)
            {{-- @dd($article) --}}
            <x-articlecard :article="$article"></x-articlecard>
        @endforeach
    </div>

</x-layout>
