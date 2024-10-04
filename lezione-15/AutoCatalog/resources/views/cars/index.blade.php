<x-layout>
    <h1>Lista annunci</h1>
    <div>

        @foreach ($cars as $car)
            <div class="row gap-2 m-4">
                <h2>{{$car->name}}</h2>
                <a href="{{route('cars.show',$car)}}"><button class="btn btn-secondary">Visualizza</button></a>
            </div>
        @endforeach
    </div>
</x-layout>