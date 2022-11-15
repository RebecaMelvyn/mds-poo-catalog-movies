<?php

namespace App\Http\Controllers;

use App\Models\Movie;
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

        //$query = Movie::query();
        if ($order_by && $order) {
            $movies = Movie::orderBy($order_by, $order)->paginate(20);
        } else {
            $movies = Movie::paginate(20);
        }

        Paginator::useBootstrapFive();


        return view('movies', ['movies' => $movies]);
    }

    public function random()
    {
        $movie = Movie::inRandomOrder()->first();
        $movie_id = $movie->id;
        return redirect('/movie/' . $movie_id);
    }
}
