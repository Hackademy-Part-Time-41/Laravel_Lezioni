<x-layout>
    <h1>Elenco degli articoli</h1>

    <div class="row">
        @foreach ($articles as $article)
            {{-- @dd($article) --}}
            <x-card :title="$article->title" :image="Storage::url($article->image)" :author="$article->author" :body="$article->body" :route="route('articles.show',$article->id)" />
        @endforeach
    </div>

</x-layout>
