<x-layout>
    <x-success></x-success>
    <div class="row">
        <div class="col-4 mx-auto mt-5">
            <h2>Inserisci i dati per il nuovo autore</h2>

            <form  action="{{route('authors.store')}}" method="post">
                @csrf
                <label for="name">Name</label>
                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{old('name')}}">
                @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <label for="surname">Surname</label>
                <input class="form-control @error('surname') is-invalid @enderror" type="text" name="surname" id="surname" value="{{old('surname')}}">
                @error('surname')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <label for="phone">Phone</label>
                <input class="form-control @error('phone') is-invalid @enderror" type="text" name="phone" id="phone" value="{{old('phone')}}">
                @error('phone')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <button type="submit" class="btn btn-primary mt-3">Crea autore</button>
            </form>

        </div>
    </div>
</x-layout>