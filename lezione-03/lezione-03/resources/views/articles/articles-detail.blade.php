<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('contatti') }}">Contatti</a>
    <a href="{{ route('articles') }}">Articoli</a>
    <h1>{{ $title }}</h1>

    <div class="container-fluid">
        <div class="row">
            <div class="card col-4" style="width: 18rem;">
                <div class="card-body">
                    <img src="" alt="test">
                    <h5 class="card-title">{{ $article['titolo'] }}</h5>
                    <p class="card-text">{{ $article['corpo'] }}</p>
                    <h6>{{ $article['autore'] }}</h6>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
