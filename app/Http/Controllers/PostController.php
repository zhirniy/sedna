<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Films;
use App\Actor;
use App\Films_Actors;

class PostController extends Controller
{
	public function index(){

		$films = Films::get();
        $user = \Auth::user();
        $actors_all = Actor::get();
       /* foreach ($films_all->actors_all as $actors_all) {
  //
        }*/ 
        if($user == null){
        	$user = "0";
        	return view('post_film', 
                [
                    'films' => $films, 
                    'user' => $user, 
                    'actors_all'=>$actors_all
                ]
            );
        }else{
        	$id_user = $user->id;
        	$user_name = $user->name;
        	return view('post_film', 
                [
                    'films' => $films, 
                    'user' => $id_user, 
                    'actors_all'=>$actors_all
                ]
            );
        }
   

        

	}
    
}
