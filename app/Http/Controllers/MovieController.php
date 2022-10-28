<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function options(){
        return view('movie.options');
    }

    public function display(){
        $movies = Movie::all();
        return view('movie.display',["movies" => $movies]);
    }
}
