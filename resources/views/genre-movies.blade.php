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

    <ul>
        @foreach ($genres as $genre)
        <li>
            <a href="/movies?genre={{ $genre->label }}">{{ $genre->label }}</a>
        </li>
        @endforeach
    </ul>
    
</body>
</html>