<x-layout>
    @foreach ($articles as $article)

    <x-card :title="$article->title" :image="Storage::url($article->image)" :author="$article->author" :body="$article->body" :route="route('articles.show',$article->id)" />
@endforeach
</x-layout>