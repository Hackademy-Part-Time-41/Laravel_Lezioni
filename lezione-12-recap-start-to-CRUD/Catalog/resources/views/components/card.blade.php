<div class="card col-4 mx-2" style="width: 18rem;">
    <img src="{{$image}}" class="card-img-top" alt="...">
    <div class="card-body">
        <p>{{$brand}}</p>
        <p class="card-text">{{$model}} - {{$fuel}}</p>
        <a href="{{route('cars.show',$id)}}"><button>Dettaglio</button></a>
    </div>
</div>