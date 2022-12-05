@include('layouts.header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Genres Movies</title>
</head>
<body>
    <h1 style="text-align: center">Genres</h1>

    <a href="{{route('movies')}}">retour page d'accueil</a>
    <div>
        @foreach ($genres as $genre )
                <div class="wrapper">
                    <a href="/movies?genre={{$genre->label}}">
                        <h3 style="margin-left: 5%;">{{ $genre->id}} : {{ $genre->label }}</h3>
                    </a>
                </div>
        @endforeach
    </div>
    
</body>
</html>