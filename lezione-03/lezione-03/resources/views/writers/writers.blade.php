<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Writers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <h1>Scrittori del nostro sito</h1>
    <div class="container">
        <div class="row">
            @foreach ($writers as $writer)
                @if ($writer['abilitato']) 
                    <div class="card col-12" style="width: 25rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $writer['name'] .' '. $writer['surname']}} </h5>
                            <p class="card-text">{{ $writer['profession'] }}</p>
                        </div>
                    </div>
                {{--@else
                    <p>Questo scrittore non è abilitato</p>--}}
                @endif
            
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
