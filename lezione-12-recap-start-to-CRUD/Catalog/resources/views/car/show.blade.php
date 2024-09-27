<x-layout>
    <img src="{{Storage::url($car->image)}}" alt="{{$car->brand}} photo" style="height: 500px;">
    <h2>{{$car->brand}}</h2>
    <h3>{{$car->model}} - {{$car->fuel}}</h3>
    @auth
    <div class="row">
        <a href="{{route('cars.edit',$car->id)}}">
            <button class="btn btn-primary">
                Modifica
            </button>
        </a>

        <form action="{{route('cars.destroy',$car)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">
                Elimina
            </button>
        </form>
    </div>
    @endauth
</x-layout>