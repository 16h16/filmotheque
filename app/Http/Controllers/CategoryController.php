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
        //dd($categories[0]->movies);
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

    public function updation(){
        $categories = Category::all();
        return view('category.updation', ["categories" => $categories]);
    }

    public function update(Request $request){
        $category = Category::findOrFail($request->category_id);

        $category -> update([
            "name" => $request -> name,
        ]);

        return redirect()->route('category.updation');
    }

    public function deletion(){
        $categories = Category::all();
        return view('category.deletion', ["categories" => $categories]);
    }

    public function delete(Request $request){
        $category = Category::findOrFail($request->category_id);

        $category -> delete();

        return redirect()->route('category.deletion');
    }
}
