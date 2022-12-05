<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenreController extends Controller
{
    //

    public function list(Request $request)
    {
        //$data['id'] = $id;
        $genres = Genre::all();
        $genre = $request->query('genre');

        if ($genre != null) {
        };
        return view('genres', ['genres' => $genres]);
    }
}
