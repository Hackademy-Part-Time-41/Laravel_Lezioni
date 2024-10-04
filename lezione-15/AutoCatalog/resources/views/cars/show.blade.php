<x-layout>  
    <div class="container">
        <h1>{{$car->name}}</h1>
    <br>
    <h4>{{$car->brand->name}}</h4>
    <br>
    <p> Prezzo macchina: {{$car->price}}</p>
    <div class="row">
        @foreach($car->extras()->orderBy('price')->get() as $extra)
        <p> Aggiunta: {{$extra->name}} - {{$extra->price}}</p>
        <br>
        @endforeach
    </div>

    <h3>Totale: {{$total}}</h3>
    </div>

    
</x-layout>