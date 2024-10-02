<x-layout>
    {{-- @dd(Auth::user()) --}}
    @auth
        <h1>Ecco la tua pagina profilo,{{ Auth::user()->name }}</h1>
        <h2>{{ auth()->user()->email }}</h2>
    @endauth
    <div class="row">
        @foreach ($articles as $article)
            <x-articlecard :article="$article"></x-articlecard>
        @endforeach
    </div>
</x-layout>
