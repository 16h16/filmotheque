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
        dd($categories);
    }
}
