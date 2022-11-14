<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class MovieController extends Controller
{
    public function show(Movie $movie, $id)
    {
        $movie = Movie::find($id);
        return view('movie', ['movie' => $movie]);
    }

    public function list()
    {
        Paginator::useBootstrap();

        //limit de 20 films sur la page
        //$movies = Movie::limit(20)->get();

        //Plusieurs pages avec 20 films max par pages
        $movies = Movie::paginate(20);

        return view('movies', ['movies' => $movies]);
    }
}
