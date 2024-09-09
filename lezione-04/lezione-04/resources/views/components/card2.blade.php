<div class="card" style="width: 18rem;">
    <img src="{{$article['image']}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$article['title']}}</h5>
      <p class="card-text">{{$article['body']}}</p>
      <a href="{{$article['route'] ?? '/'}} " class="btn btn-primary">Dettaglio</a>
    </div>
  </div>