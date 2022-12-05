<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<header>
   <ul>
    <li><a href="/">Accueil</a></li>
    <li><a href="{{route('list.movies')}}">Tous les films</a></li>
    <li><a href="/genres">Genres</a></li>
    <li><a href="/movie/random">Random film</a></li>
    
   </ul>

</header>
<style>
    body{
        margin: 0;
    }
    header{
        background: rgb(53, 15, 15);
        width: 100%;
        height: 100%;
        margin: 0;
        padding-top: 1%
    }

    header ul{
        list-style-type: none;
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        grid-auto-rows: minmax(50px, auto);
    }

    header ul a{
        text-decoration: none;
        color: #fff;
        font-size: 1.2em;
        transition-duration: 0.5s;
    }

    header ul a:hover{
        font-size: 1.5em;
        transition-duration: 0.5s;
        color: rgb(16, 169, 148);
    }

</style>

</html>