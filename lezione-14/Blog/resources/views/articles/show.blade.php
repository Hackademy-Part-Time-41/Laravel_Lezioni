<x-layout>
    <h2>Ecco il dettaglio dell'articolo</h2>

    <x-card :title="$article->title" :author="$article->author->name" :body="$article->body" :image="$article->image ? Storage::url($article->image) : 'https://picsum.photos/200' " />

</x-layout>