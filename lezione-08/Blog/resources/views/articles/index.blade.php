<x-layout>
    <h1>Elenco degli articoli</h1>

    <div class="row">
        @foreach ($articles as $article)
            {{-- @dd($article) --}}
            <x-card :title="$article->title" :author="$article->author" :body="$article->body" />
        @endforeach
    </div>

</x-layout>
