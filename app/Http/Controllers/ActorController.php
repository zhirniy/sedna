<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActorController extends Controller
{
     //show all actors
     public function show(){
     	$actor = Actor::get();
        return response()->json($actor, 201);
     }

     //create new actor
     public function create(Request $request){
     	$actor = Actor::create($request->all());
        return response()->json($actor, 201);
     }

}
