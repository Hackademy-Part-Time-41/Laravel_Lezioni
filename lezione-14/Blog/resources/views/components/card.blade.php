<div class="card" style="width: 18rem;">
    <img src="{{ $image ?? 'https://picsum.photos/200' }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">{{ $body }}</p>
        <p class="card-text">{{ $author }}</p>
        <a href="{{ $route ?? '/' }}" class="btn btn-primary">Leggi</a>
        <div class="row">
            @if ($categories->count())
                @foreach ($categories as $category)
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
