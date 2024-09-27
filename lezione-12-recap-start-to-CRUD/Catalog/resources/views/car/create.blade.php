<x-layout>

    @if(session()->has('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
    <form action="{{route('cars.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="brand">Marca</label>
        <input id="brand" type="text" class="form-control" name="brand" value="{{old('brand')}}">
        @error('brand')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <label for="model">Modello</label>
        <input id="model" type="text" class="form-control" name="model"  value="{{old('model')}}">
        @error('model')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <label for="image">Cover</label>
        <input id="image" type="file" class="form-control" name="image" >
        <button type="submit" class="btn btn-primary">Crea</button>
    </form>
</x-layout>