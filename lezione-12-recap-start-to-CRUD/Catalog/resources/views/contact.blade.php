<x-layout>
    <h1>Contatta un venditore</h1>
    <form action="{{route('contact.send')}}" method="post">
        @csrf
        <label for="messaggio">Inserisci il tuo messaggio</label>
        <input type="text" name="messaggio">
        <button type="submit"> Invia</button>
    </form>
</x-layout>