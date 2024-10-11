<div>
    <h1>Lista utenti</h1>
    <h2>Componente livewire</h2>
    <label for="search">Cerca:</label>
    <input type="text" id="search" wire:model.live="search">

    <div>
        @foreach ($users as $user)
            <div>
                <p>{{$user->name}} - {{$user->email}}</p>
            </div>
        @endforeach
    </div>
</div>
