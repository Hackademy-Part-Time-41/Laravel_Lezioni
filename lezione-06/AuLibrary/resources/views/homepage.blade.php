<x-layouts.main-layout>
    <h1>Homepage</h1>
    @foreach ($categories as $category)
        <a href="{{route('books.byCategory',$category)}}">{{$category}}</a>
    @endforeach
</x-layouts.main-layout>