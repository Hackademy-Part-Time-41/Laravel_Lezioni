<x-layout>
    <div class="container mb-5">

        <div class="card">
            <div class="card-body row">
               
                <img class="img-fluid" src="{{$anime['images']['jpg']['image_url']}}" alt="{{$anime['title']}}">
                <div class="card-title"><h2>{{$anime['title']}}</h2>
                    <p>{!!  nl2br(e($anime['synopsis'])) !!}</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>