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
}
