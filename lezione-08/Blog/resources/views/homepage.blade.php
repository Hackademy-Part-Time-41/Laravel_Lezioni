<x-layout>
    <x-success></x-success>
    <form action="{{route('articles.store')}}" method="post">
        @csrf
        <input type="text" name="title" id="title">
        <label for="title">Titolo</label>
        <input type="text" name="body" id="body">
        <label for="body">Testo</label>
        <input type="text" name="author" id="author">
        <label for="author">Autore</label>
        <button type="submit">Inserisci record</button>
    </form>
</x-layout>