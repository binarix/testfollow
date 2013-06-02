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

Route::get('/get', function()
{
	$followings = User::find(2)->followings()->with('userProfile')->get();

    var_dump($followings->toArray());

    return View::make('followings', compact('followings'));
});

Route::get('/paginateone', function()
{
    $followings = User::find(2)->followings()->with('userProfile')->paginate(1);

    foreach ($followings as $following)
    {
        var_dump($following->toArray());
    }

    return View::make('followingspaginate', compact('followings'));
});

Route::get('/paginateonenoeager', function()
{
    $followings = User::find(2)->followings()->paginate(1);

    foreach ($followings as $following)
    {
        var_dump($following->toArray());
    }

    return View::make('followingspaginate', compact('followings'));
});

Route::get('/paginate', function()
{
    $followings = User::find(2)->followings()->paginate();

    foreach ($followings as $following)
    {
        var_dump($following->toArray());
    }

    return View::make('followingspaginate', compact('followings'));
});