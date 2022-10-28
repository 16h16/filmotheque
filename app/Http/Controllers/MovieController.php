<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

    public function creation(){
        $categories = Category::all();
        return view('movie.creation', ["categories" => $categories]);
    }

    public function create(Request $request){

        Movie::create([
            "title" => $request -> title,
            "description" => $request -> description,
            "category_id" => $request -> category_id,
        ]);

        return redirect()->route('movie.creation');
    }
}
