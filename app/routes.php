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

Route::resource('session', 'SessionsController');

Route::get("login", function() {
  return Redirect::route('session.create');
});

Route::get("logout", function() {
  Auth::logout();
  return Redirect::to("/");
});

Route::group(array('before' => 'auth.admin', 'prefix' => 'admin'), function() {

  Route::get("/", function() {
    return "Admin root";
  });
});