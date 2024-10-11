<div class="m-3">
    <div>
        <h2> Lista utenti </h2>
        @foreach ($users as $user)
            <div class="mb-5"><p>{{$user->name. '-'. $user->email}}</p> <button class="btn btn-secondary" wire:click="edit({{$user->id}})">Modifica</button><button class="btn btn-danger" wire:click="destroy({{$user->id}})" wire:confirm="Are you sure you want to delete this post?">Elimina</button></div>
        @endforeach
    </div>
</div>
