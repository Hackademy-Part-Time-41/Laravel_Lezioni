<div>
    <div class="mt-3 ms-5">
        <div>Contatore con livewire:
            {{ $count }}
        </div>
        <label for="value">Valore di modifica</label>
        <input type="text" id="value" wire:model.blur="value">
        <button class="btn btn-sm btn-primary" wire:click="increment({{$value}})"> +{{$value}} </button>
        <button class="btn btn-sm btn-danger" wire:click="decrement({{$value}})"> -{{$value}} </button>
    </div>

</div>