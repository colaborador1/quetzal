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
	return View::make('inicio');
});
Route::get('/reservaciones-en-linea', function(){
	return View::make('reserva');
});
Route::get('/ubicacion-como-llegar', function(){
	return View::make('ubicacion');
});
Route::get('/servicios-durante-estancia', function()
{
	return View::make('servicios');
});