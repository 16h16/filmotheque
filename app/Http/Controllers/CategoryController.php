<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function options(){
        return view('category.options');
    }

    public function display(){
        $categories = Category::all();
        return view('category.display', ["categories" => $categories]);
    }

    public function creation(){
        return view('category.creation');
    }

    public function create(Request $request){

        Category::create([
            "name" => $request -> name,
        ]);

        return redirect()->route('category.creation');
    }
}
