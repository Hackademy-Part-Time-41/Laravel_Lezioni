<x-layout>
    <x-success></x-success>
    <div class="row">
        <div class="col-4 mx-auto mt-5">
            <h2>Stai modificando un articolo</h2>
            
            <form  action="{{route('articles.update',$article)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label for="title">Titolo</label>
                <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{old('title',$article->title)}}">
                @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <label for="body">Testo</label>
                <input class="form-control @error('body') is-invalid @enderror" type="text" name="body" id="body" value="{{old('body',$article->body)}}">
                @error('body')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <label for="author">Autore</label>
                <input class="form-control @error('author') is-invalid @enderror" type="text" name="author" id="author" value="{{old('author',$article->author)}}">
                @error('author')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <label for="image">Carica un'immagine</label>
                <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
                @error('image')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                
                <button type="submit" class="btn btn-primary mt-3">Modifica record</button>
            </form>

        </div>
    </div>
</x-layout>