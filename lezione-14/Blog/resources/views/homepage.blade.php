<x-layout>
    <h1>Homepage</h1>

    <div class="container-fluid">
        <div class="row justify-content-center">
            @foreach ($categories as $category)
            <div class="col-auto">

                <a href="{{ route('articles.byCategory', $category) }}"><button
                        class="btn btn-primary">{{ $category->name }}</button></a>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
