<x-layout>
    <div class="container-fluid">
        <h2>Generi anime</h2>
        <ul>
            @foreach ($data as $genre)
                <a href="{{route('anime.byGenre',$genre['mal_id'])}}"><li>{{$genre['name']}}</li></a>
            @endforeach
        </ul>
    </div>
</x-layout>