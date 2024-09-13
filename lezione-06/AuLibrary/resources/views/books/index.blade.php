<x-layouts.main-layout>
    <h1>Elenco dei libri</h1>
    <div class="container-fluid">
        <div class="row gap-2 mx-5">
            @foreach ($books as $key => $book)
                <x-card class="col-4" :title="$book['title']" :description="$book['description']"  :image="$book['image']"  :route="route('books.show',$key)"  />
            @endforeach
        </div>
    </div>
</x-layouts.main-layout>