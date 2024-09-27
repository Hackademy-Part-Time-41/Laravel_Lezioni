<x-layout>
    <div class="container mt-5">
        <div class="row">
            @foreach ($cars as $car)
                <x-card  :id="$car->id" :image="Storage::url($car->image)" :brand="$car->brand" :model="$car->model" :fuel="$car->fuel" />
            @endforeach
        </div>
    </div>
</x-layout>