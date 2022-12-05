<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class MovieController extends Controller
{
    public function show(Movie $movie, $id)
    {
        $movie = Movie::where('id', $id)->first();
        return view('movie', ['movie' => $movie]);
    }

    public function list(Request $request)
    {
        $order_by = $request->query('order_by');
        $order = $request->query('order', 'asc');

        //$genre = $request->query('genre');
        $genres = Genre::all();
        $genre = $request->query('genre');

        $query = Movie::query();

        if ($order_by && $order) {
            $query->orderBy($order_by, $order);
        }

        if ($genre != null) {
            //query filtre genre
            $query->whereHas('genre', function (Builder $query) use ($genre) {
                $query->where('label', '=', $genre);
            });
        }

        $movies = $query->paginate(20);
        Paginator::useBootstrapFive();


        return view('movies', ['movies' => $movies, 'genres' => $genres]);
    }

    public function random()
    {
        $movie = Movie::inRandomOrder()->first();
        $movie_id = $movie->id;
        return redirect('/movie/' . $movie_id);
    }
}
