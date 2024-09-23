<x-layout>
    <x-success></x-success>
    <div class="row">
        <div class="col-4 mx-auto mt-5">
            <h2>Inserisci i dati del tuo form</h2>
            {{-- @if ($errors->any())
                <ul class="alert alert-danger p-3">
                    @foreach ($errors->all() as $error)
                        <li >{{$error}}</li>
                    @endforeach
                </ul>
            @endif --}}
            {{-- @if($errors->any())
                @dd($errors)
            @endif --}}
            <form  action="{{route('articles.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="title">Titolo</label>
                <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{old('title')}}">
                @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <label for="body">Testo</label>
                <input class="form-control @error('body') is-invalid @enderror" type="text" name="body" id="body" value="{{old('body')}}">
                @error('body')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <label for="author">Autore</label>
                <input class="form-control @error('author') is-invalid @enderror" type="text" name="author" id="author" value="{{old('author')}}">
                @error('author')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <label for="image">Carica un'immagine</label>
                <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" multiple>
                @error('image')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                
                <button type="submit" class="btn btn-primary mt-3">Inserisci record</button>
            </form>

        </div>
    </div>
</x-layout>