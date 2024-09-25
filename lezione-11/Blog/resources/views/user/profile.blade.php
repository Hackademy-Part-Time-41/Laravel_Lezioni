<x-layout>
    {{-- @dd(Auth::user()) --}}
    @auth
        <h1>Ecco la tua pagina profilo,{{ Auth::user()->name }}</h1>
        <h2>{{ auth()->user()->email }}</h2>
    @endauth
    <div class="row">
        @foreach ($articles as $article)
            <x-card :title="$article->title" :image="Storage::url($article->image)" :author="$article->author" :body="$article->body" :route="route('articles.show',$article->id)" />
        @endforeach
    </div>
</x-layout>
