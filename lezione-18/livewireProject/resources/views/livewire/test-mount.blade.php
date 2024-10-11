<div>
    {{$title}}
    <br>
    {{$descrizione}}

    <br>
    @foreach($posts as $post)
        <h3>{{$post->title}}</h3>
    @endforeach

    {{$posts->links()}}

    <a href="{{url()->previous()}}">Torna indietro</a>
</div>
