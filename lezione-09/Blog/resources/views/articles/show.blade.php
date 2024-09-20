<x-layout>
    <h2>Ecco il dettaglio dell'articolo</h2>

    <x-card :title="$article->title" :author="$article->author" :body="$article->body" :image="Storage::url($article->image)" />

</x-layout>