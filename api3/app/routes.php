<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});
Route::get('tv/playlist', 'PlaylistController@show');
Route::get('tv/sliderlist', 'SliderController@show');
Route::get('tv/candidates', 'CandidateController@show');
//Route::post('tv/addvoter', 'VoterController@store');
Route::get('tv/image', 'ImageController@show');
