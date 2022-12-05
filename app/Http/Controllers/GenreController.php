<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenreController extends Controller
{
    //

    public function list()
    {
        //$data['id'] = $id;
        $genres = Genre::all();
        return view('genres', ['genres' => $genres]);
    }
}
