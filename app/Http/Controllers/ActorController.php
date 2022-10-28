<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function options(){
        return view('actor.options');
    }

    public function display(){
        $actors = Actor::all();
        return view('actor.display', ["actors" => $actors]);
    }

    public function creation(){
        return view('actor.creation');
    }

    public function create(Request $request){

        Actor::create([
            "firstname" => $request -> firstname,
            "lastname" => $request -> lastname,
            "birth_date" => $request -> birth_date,
            "gender" => $request -> gender,
        ]);

        return redirect()->route('actor.creation');
    }

    public function updation(){
        $actors = Actor::all();
        return view('actor.updation', ["actors" => $actors]);
    }

    public function update(Request $request){
        $actor = Actor::findOrFail($request->actor_id);

        $actor -> update([
            "firstname" => $request -> firstname,
            "lastname" => $request -> lastname,
            "birth_date" => $request -> birth_date,
            "gender" => $request -> gender,
        ]);

        return redirect()->route('actor.updation');
    }
}
