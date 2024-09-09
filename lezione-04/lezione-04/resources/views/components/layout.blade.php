<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/css/custom.css'])
  </head>
  <body>
    <x-navbar></x-navbar>

    <h1>{{$title ?? "Titolo di default"}}</h1>
    {{-- <h2>{{$subtitle}}</h2> --}}

      <div class="min-vh-100">
        {{$slot}}
      </div>
        

      <x-footer/>

  </body>
</html>