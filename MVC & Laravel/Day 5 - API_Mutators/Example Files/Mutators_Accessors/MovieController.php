<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('movies-list', ['movies' => $movies]);
    }

    public function save()
    {
        $movie = new Movie;

        $movie->title = 'PULP fiction';

        $movie->save();
    }
}
