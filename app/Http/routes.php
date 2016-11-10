<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function()
{
    $title = 'Home';
    return view('home.index')->with('title', $title);
});

Route::get('login', function()
{
   return view('account.login');
});

Route::get('item', function()
{
    $title = 'Item';
    return view('home.item')->with('title', $title);
});

Route::get('admin', function()
{
    $title = 'Admin';
    return view('home.admin')->with('title', $title);
});