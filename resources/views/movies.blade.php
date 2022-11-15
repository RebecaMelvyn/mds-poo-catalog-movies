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
    
</style>
<body>
    <h1>Top 20 premiers films</h1>

    <div class="filters">
        <a href="/movies?order_by=startYear&order=desc"><button>Dernières sortie</button></a>
        <a href="/movies?order_by=startYear&order=asc"><button>Premières sortie</button></a>
        <a href="/movies?order_by=averageRating&order=desc"><button>Mieux notés</button></a>
        <a href="/movies?order_by=averageRating&order=asc"><button>Moins bien notés</button></a>

    </div>
    
        <div class="container">
            @foreach ($movies as $movie )
            <div class="wrapper">
                        <a href="/movie/{{$movie->id}}">
                            <img style="margin-bottom: 5%; margin-top: 5%" class="poster" src="{{ $movie->poster }}" alt="{{ $movie->primaryTitle }}">
                        </a>
                        <h2 style="margin-left: 5%;">{{ $movie->originalTitle }}</h2>
                        <h2 style="margin-left: 5%;">{{ $movie->averageRating }} sur 10</h2>
                    </div>
                    @endforeach
        </div>
        <div class="pagination">
            {{ $movies->appends(request()->query())->links() }}
        </div>
</body>
</html>
