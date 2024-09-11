<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>
    <x-navbar/>

    <h1>{{$title ?? "Titolo di default"}}</h1>

      <div class="min-vh-100">
        {{$slot}}
      </div>
        

      <x-footer/>

  </body>
</html>