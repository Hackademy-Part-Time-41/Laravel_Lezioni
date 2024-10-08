<x-layout>
    <div class="container mb-5">

        @foreach($animes as $anime)
        <div class="card">
            <div class="card-body row">
               
                <img class="img-fluid" src="{{$anime['img']}}" alt="{{$anime['title']}}">
                <div class="card-title"><h2>{{$anime['title']}}</h2>
                    <p>{!!  nl2br(e($anime['synopsis'])) !!}</p>
                </div>
                <a href="{{route('anime.byId',$anime['mal_id'])}}">Leggilo</a>
            </div>
        </div>
        @endforeach
    </div>
</x-layout>