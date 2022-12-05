<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<style>
    body{
        padding-left: 10%
    }
    .container{
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 30px;
        grid-auto-rows: minmax(100px, auto);
    }
    .wrapper{
        display: inline-flex;
    }
    .pagination{
        display: inline-flex;
        list-style-type: none;
        margin-left: 35%;
    
    }
    .pagination li{
        margin-right: 5%
    }

    .poster{
        width: 50px;
    }
    .filters{
        margin-bottom: 3%
    }
    .genres{
        text-decoration: none; 
        color:rgb(68, 72, 138);
        transition-duration: 0.5s;

    }
    .genres:hover{
        color: brown;
        font-size: 1.6em;
        transition-duration: 0.5s;

    }

    .contain_genres{
        list-style-type: none; 
        width: 82%;
        display: block;
        padding: 1%;
        margin-left: auto;
        margin-right: auto;
    }

    
</style>
<body>
    <h1>Page des films</h1>

    <div class="filters">
        <a href="/movies?order_by=startYear&order=desc"><button>Dernières sortie</button></a>
        <a href="/movies?order_by=startYear&order=asc"><button>Premières sortie</button></a>
        <a href="/movies?order_by=averageRating&order=desc"><button>Mieux notés</button></a>
        <a href="/movies?order_by=averageRating&order=asc"><button>Moins bien notés</button></a>
        
    </div>
    <a href="/"><button>Retour accueil</button></a>

    <h2>Catégorie : </h2>

    <ul class="contain_genres">
        @foreach ($genres as $genre)
        <li style="display: inline-flex; margin: 1%;">
            <a class="genres" href="/movies?genre={{ $genre->label }}">{{ $genre->label }}</a>
        </li>
        @endforeach
    </ul>
    
        <div class="container">
            @foreach ($movies as $movie )
            <div class="wrapper">
                        <a href="/movie/{{$movie->id}}">
                            <img style="margin-bottom: 5%; margin-top: 5%" class="poster" src="{{ $movie->poster }}" alt="{{ $movie->primaryTitle }}">
                        </a>
                        <h2 style="margin-left: 5%;">{{ $movie->originalTitle }}</h2>
                        <p style="margin-left: 5%;">{{ $movie->averageRating }}/10</p>
                    </div>
                    @endforeach
        </div>
        <div class="pagination">
            {{ $movies->appends(request()->query())->links() }}
        </div>
</body>
</html>
