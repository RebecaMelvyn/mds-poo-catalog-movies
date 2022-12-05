<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        .container {
            margin: auto;
            max-width: 900px;
        }

        .wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
        }
        #random-home{
            width: 50%;
            height: 680px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <a href="{{route('list.movies')}}"><h3>See more movies</h3></a>
    <a href="/movie/random">
        <h3>Random movie</h1>
    </a>
    <a href="/genres">
        <h3>Genres</h1>
    </a>
    
    <iframe id="random-home" src="/movie/random"></iframe>

    <div class="container">
        <h1>{{ config('app.name') }}</h1>

        <div class="wrapper">
            @foreach ($movies as $movie)
            <div>
                <a href="/movie/{{ $movie->id }}">
                    <img src="{{ $movie->poster }}" alt="{{ $movie->primaryTitle }}">
                </a>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
