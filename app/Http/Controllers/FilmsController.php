<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Films;
use App\Actor;
use App\User;
use App\Films_Actors;

class FilmsController extends Controller
{
    //Show all movies
    public function index()
    {
        $films = Films::get();
        foreach ($films as $films_actor) {
        	$films_actor->actors_all;
        }

        return $films;
    }
    //Show film by id
     public function show($id)
    {
        $films = Films::where('id', $id)->get();
        foreach ($films as $films_actor) {
            $films_actor->actors_all;
        }

        return $films;
    }

    //Show all movies by parameters
    public function search($movies)
    {
    	//Show film by name
    	$films = [];
        $films = Films::where('name_film', $movies)->get();
        foreach ($films as $films_actor) {
        	$films_actor->actors_all;
        }
        //Show film by actor
        $actor = Actor::where('first_name', $movies)->get();
        $films_by_actor = [];
        foreach ($actor as $actor_films) {
	        $films_by_actor = $actor_films->films;
	        for ($i=0; $i < count($films_by_actor); $i++) { 
	        	$films_by_actor[$i]['actors_all'][0]['first_name'] = $actor_films->first_name;
	        	$films_by_actor[$i]['actors_all'][0]['last_name']= $actor_films->last_name;
	        }
        }
        $result = [];


        foreach ($films_by_actor as $films_by_actor_) {
        	if(!isset($films[$films_by_actor_['id']])){
        		$films[  ] = $films_by_actor_;
        	}
        	# code...
        }


        return $films;
    }
    //create film
     public function create(Request $request, User $user){
        //get user token
        $user_token = $request->input("token");
        //search token in table users
        $user_token_table_user = User::where('api_token', $user_token)->get();

        //if set token
        if( count($user_token_table_user) != 0){
            //Create new film
            $film = Films::create($request->all());
            //create dependency film -> actors
            if($request->input("actor")){
                $film->actors_all()->attach($request->input("actor"));
            }
            return response()->json("successful created", 201);
        //else
        }else{
            return response()->json("user_notfound", 201);
        }

     	
     }

     //update film
      public function update(Request $request, Films $film, User $user){
      	//get user token
        $user_token = $request->input("token");
        //searching token in table users
        $user_token_table_user = User::where('api_token', $user_token)->get();
        //get user id
         $user_id = $request->input("user_id");
         //searching id user in films
         $user_id_table_films = $film->id_user;

        //if set tokken and user in film equal user in session
       if( count($user_token_table_user) != 0 && $user_id == $user_id_table_films){
            //Update film
         	$film->update($request->all());

         	//delete dependecy film -> actors
         	$film->actors_all()->detach();
         	//create dependency film -> actors
         	if($request->input("actor")){
         		$film->actors_all()->attach($request->input("actor"));
         	}
            return response()->json("successful updated", 201);
        }else{
        //else return message
            return response()->json("user_notfound or permission denied", 201);
        }


      }

      //delete film
       public function delete(Request $request, Films $film){
        //get user token
        $user_token = $request->input("token");
        //searching token in table users
        $user_token_table_user = User::where('api_token', $user_token)->get();
        //get user id
         $user_id = $request->input("user_id");
         //searching id user in films
         $user_id_table_films = $film->id_user;

        //if set tokken and user in film equal user in session
       if( count($user_token_table_user) != 0 && $user_id == $user_id_table_films){
       	    //delete dependecy film -> actors
             $film->actors_all()->detach();
       	    //delete film
       	     $film->delete();
            return response()->json("success delete", 201);
        //else return message
        }else{
            return response()->json("user_notfound or permission denied", 201);
        }

    }
}
