<x-layout>
    <h1>
        Inserisci la tua macchina
    </h1>
    <form action="{{route('cars.store')}}" method="POST">
        @csrf
        <label for="name">Modello</label>
        <input type="text" id="name" name="name" class="form-control">
        <label for="price">Price</label>
        <input type="text" id="price" name="price" class="form-control">
        <label for="brand">Marca</label>
        <select name="brand" id="brand" class="form-control">
            @foreach ($brands as $brand)
                <option value="{{ $brand->id }}">
                    {{ $brand->name }}
                </option>
            @endforeach
        </select>
        @foreach($extras as $extra)
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="{{$extra->id}}" id="flexCheckDefault" name="extras[]">
            <label class="form-check-label" for="flexCheckDefault">
              {{$extra->name}}
            </label>
          </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Registrala</button>
    </form>
</x-layout>
