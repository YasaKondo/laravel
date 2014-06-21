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

Route::get('users', function()
{
    $users = DB::table('users')->lists('name', 'email');
    var_dump($users);
});

Route::get('i', function()
{
    return 'dd';
});


Route::get('user/{name}', function($name)
{
    return $name.'Welcome';
});