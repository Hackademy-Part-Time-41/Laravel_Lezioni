<x-layout>
    <x-success></x-success>
    <div class="row">
        <div class="col-4 mx-auto mt-5">
            <h2>Aggiorna i dati dell'autore {{$author->name}}</h2>

            <form  action="{{route('authors.update',$author)}}" method="POST">
                @csrf
                @method('PUT')
                <label for="name">Name</label>
                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{old('name',$author->name)}}">
                @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <label for="surname">Surname</label>
                <input class="form-control @error('surname') is-invalid @enderror" type="text" name="surname" id="surname" value="{{old('surname',$author->surname)}}">
                @error('surname')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <label for="phone">Phone</label>
                <input class="form-control @error('phone') is-invalid @enderror" type="text" name="phone" id="phone" value="{{old('phone',$author->phone)}}">
                @error('phone')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <button type="submit" class="btn btn-primary mt-3">Aggiorna</button>
            </form>

        </div>
    </div>
</x-layout>