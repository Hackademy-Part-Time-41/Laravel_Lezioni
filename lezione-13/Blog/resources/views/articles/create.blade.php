<x-layout>
    <x-success></x-success>
    <div class="row">
        <div class="col-4 mx-auto mt-5">
            <h2>Inserisci i dati del tuo form</h2>
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
                {{-- <input class="form-control @error('author_id') is-invalid @enderror" type="text" name="author_id" id="author" value="{{old('author_id',auth()->user()->name)}}">--}}
                @error('author_id')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <select name="author_id" id="author" class="form-control">
                    <option value="" selected>Scegli l'autore</option>
                    @foreach ($authors as $author)
                        <option value="{{$author->id}}">{{$author->name}} {{$author->surname}}</option>
                    @endforeach
                </select>
                <label for="image">Carica un'immagine</label>
                <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" >
                @error('image')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                
                <button type="submit" class="btn btn-primary mt-3">Inserisci record</button>
            </form>

        </div>
    </div>
</x-layout>