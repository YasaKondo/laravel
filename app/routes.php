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

Route::get('howold/{age}', function($age){
   return 'you are '.$age. ' years old !';
})->where('age', '[1-9][0-9]');


Route::get('view', function(){
    $view = View::make('hello');
    $view->with(array(
        'name' => 'Yasu',
        'email' => 'sample@gmail.com'
    ));
    $view->nest('header', 'header', array(
        'title' => 'laravel道場'
    ));
    $view->nest('footer', 'footer');
    View::share('corporation','wildcard');
    return $view;
});