<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $movie->primaryTitle }}</title>
</head>

<body>
    
        <a>id du film : {{$movie->id}}</a>
        <h1>{{ $movie->primaryTitle}}</h1>
        <div class="container">
            <div>
                <img src="{{ $movie->poster }}" alt="{{ $movie->primaryTitle }}">
            </div>
            <div class="info">
            <h2>{{ $movie->originalTitle }}</h2>
            <h3>Date de sortie : {{ $movie->startYear }}</h3>
            <h3>Durée du film : {{ $movie->runtimeMinutes }} minutes.</h3>
            <h3>{{ $movie->plot }}</h3>
            <h3>Note sur 10 : {{ $movie->averageRating}}</h3>
            <h3>Nombres de votes : {{ $movie->numVotes }}</h3>
            <a href="{{route('movies')}}">retour page d'accueil</a>
            <a href="{{route('list.movies')}}">retour sur les films</a>
            <a href="/movie/random">
                <h3>Random movie</h1>
            </a>
        </div>
        </div>
        
</body>
<style>
    body{
        padding-left: 3%;
        padding-right: 3%;
    }
    .info{
        display: block;
        margin-left: 2%
    }
    .container{
        display: flex;
    }
</style>
</html>
