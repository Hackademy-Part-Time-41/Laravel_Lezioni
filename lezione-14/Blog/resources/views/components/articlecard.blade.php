<div class="card" style="width: 18rem;">
    <img src="{{ $article->image ?? 'https://picsum.photos/200' }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $article->title }}</h5>
        <p class="card-text">{{ $article->body }}</p>
        <p class="card-text">{{ $article->author->name }}</p>
        <a href="{{ route('articles.show',$article)}}" class="btn btn-primary">Leggi</a>
        <div class="row">
            @if ($article->categories->count())
                @foreach ($article->categories as $category)
                    <div class="col-auto">

                        <a href="{{ route('articles.byCategory', $category) }}"><button
                                class="btn btn-primary">{{ $category->name }}</button></a>
                    </div>
                @endforeach
            @else
                <p>Non è associato a nessuna categoria</p>
            @endif
        </div>
    </div>
</div>
