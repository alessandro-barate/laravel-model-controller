<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <title>Movies DB with Laravel</title>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <h1 class="text-center py-5">Questo è un piccolo database di film</h1>
            @foreach ($moviesList as $movie)
                <div class="col-3 text-center m-2 py-3 my-card">
                    <h3 class="pb-4">{{ $movie->title }}</h3>
                    <p>{{ $movie->original_title }}</p>
                    <p>{{ ucfirst($movie->nationality) }}</p>
                    <p>{{ $movie->date }}</p>
                    @if ($movie->vote >= 9)
                        <p><i class="fas fa-star"></i> {{ $movie->vote }}</p>
                    @else
                        <p>{{ $movie->vote }}</p>
                    @endif
                </div>
            @endforeach

        </div>
    </div>

    {{-- Example tag for images --}}
    {{-- <img src="{{ Vite::asset('resources/img/logo.png') }}" alt=""> --}}
</body>

</html>
