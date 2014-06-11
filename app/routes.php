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
	return View::make('pages/index');
});

Route::get('/about', function() {
	return View::make('pages/about');
});

Route::get('/exhibitors', function() {
	return View::make('pages/exhibitors');
});

Route::get('/vip', function() {
	return View::make('pages/vip');
});
