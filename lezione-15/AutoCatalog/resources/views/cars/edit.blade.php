<x-layout>
    <h1>
        Aggiorna la tua {{$car->name}}
    </h1>
    <form action="{{route('cars.update',$car)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Modello</label>
        <input type="text" id="name" name="name" class="form-control" value="{{old('name',$car->name)}}">
        <label for="price">Price</label>
        <input type="text" id="price" name="price" class="form-control" value="{{old('price',$car->price)}}">
        <label for="brand">Marca</label>
        <select name="brand_id" id="brand" class="form-control">
            @foreach ($brands as $brand)
                <option value="{{ $brand->id }}" @selected($car->brand->id == $brand->id)>
                    {{ $brand->name }}
                </option>
            @endforeach
        </select>
        @foreach($extras as $extra)
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="{{$extra->id}}" id="flexCheckDefault" name="extras[]" @checked($car->extras->contains($extra))>
            <label class="form-check-label" for="flexCheckDefault">
              {{$extra->name}}
            </label>
          </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Aggiorna</button>
    </form>
</x-layout>
