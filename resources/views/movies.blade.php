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
        display: table-column;
    }
    .pagination{
        display: inline-flex;
        list-style-type: none;
        margin-left: 35%;
    
    }
    .pagination li{
        margin-right: 5%
    }
    
</style>
<body>
    <h1>Top 20 premiers films</h1>
    
    <div class="container">
        <div class="wrapper">
            @foreach ($movies as $movie)
                <a href="/movie/{{$movie->id}}">
                    <img src="{{ $movie->poster }}" alt="{{ $movie->primaryTitle }}">
                </a>
            </div>
            @endforeach
            {{ $movies->links() }}
        </div>
    </div>
</body>
</html>
