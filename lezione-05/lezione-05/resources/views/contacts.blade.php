<x-layout>

    <h1>Contattaci!</h1>
    {{--
        action specifica l'uri dell'azione che verrà eseguita all'invio del form
        method specifica il metodo della richiesta
        @csrf token per abilitare le richieste del form(è necessario nei form con method diverso da GET)
        per ogni campo di input devo specificare l'attributo name
        ci serve un button di tipo submit per far partire la richiesta del form
    --}}
    <x-success></x-success>

    
    <div class="container">
        <div class="row">
            <form class="col-6" action="{{route('contacts.send')}}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="message" class="form-label">Messaggio</label>
                  <input name="messaggio" type="text" class="form-control" id="message" >
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Nome utente</label>
                    <input name="username" type="text" class="form-control" id="username">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="email">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    

</x-layout>