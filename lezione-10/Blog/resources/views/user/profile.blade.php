<x-layout>
    {{-- @dd(Auth::user()) --}}
    @auth
    <h1>Ecco la tua pagina profilo,{{Auth::user()->name}}</h1>
    <h2>{{auth()->user()->email}}</h2>
    @endauth
    @guest
        <h2>Vai a loggarti, che ci fai qui!</h2>    
        <a href="/login">Login page</a>
        <a href="/register">Registration page</a>
    @endguest
</x-layout>