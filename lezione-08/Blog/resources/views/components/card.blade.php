<div class="card" style="width: 18rem;">
    <img src="{{$image ?? 'https://picsum.photos/200'}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$title}}</h5>
      <p class="card-text">{{$body}}</p>
      <p class="card-text">{{$author}}</p>
      <a href="{{$route ?? '/'}}" class="btn btn-primary">Leggi</a>
    </div>
</div>

