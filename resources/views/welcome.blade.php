<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>Movies DB with Laravel</title>
</head>

<body>
    <h1>Questo è un piccolo database di film</h1>

    <div>
        <ul>
            @foreach ($moviesList as $movie)
                <li> {{ $movie->title }}</li>
            @endforeach
        </ul>
    </div>

    {{-- Example tag for images --}}
    {{-- <img src="{{ Vite::asset('resources/img/logo.png') }}" alt=""> --}}
</body>

</html>
