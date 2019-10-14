<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//register user
Route::post('register', 'Auth\RegisterController@register');
//login user
Route::post('login', 'Auth\LoginController@login');
//logout user
Route::post('logout/{id_user}', 'Auth\LoginController@logout');
//show all films
Route::get('movies', 'FilmsController@index');
//show film by id
Route::get('movies/{id}', 'FilmsController@show');
//show all films by parameters
Route::get('movies/search/{movie}', 'FilmsController@search');
//create film
Route::post('movies', 'FilmsController@create');
//update film
Route::patch('movies/{film}', 'FilmsController@update');
//delete film
Route::delete('movies/{film}', 'FilmsController@delete');
//show actor
Route::get('actor', 'ActorController@show');
//create actor
Route::post('actor', 'ActorController@create');
