<x-layout>

    @if(session()->has('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
    <form action="{{route('cars.update',$car)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="brand">Marca</label>
        <input id="brand" type="text" class="form-control" name="brand" value="{{old('brand',$car->brand)}}">
        @error('brand')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <label for="model">Modello</label>
        <input id="model" type="text" class="form-control" name="model" value="{{old('brand',$car->model)}}">
        @error('model')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <label for="image">Cover</label>
        <input id="image" type="file" class="form-control" name="image">
        <button type="submit" class="btn btn-primary">Modifica</button>
    </form>
</x-layout>