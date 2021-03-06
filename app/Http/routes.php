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
/*pruebas
Route::get('Test',function(){
    return "Hello World from routes.php";
});

Route::get('nombre/{nombre}', function($nombre){
    return "Mi nombre es: ".$nombre;
});

Route::get('controlador','PruebaController@index');

Route::resource('movie', 'MovieController');

// =========================== */

Route::get('/','FrontController@index');
Route::get('contacto','FrontController@contacto');
Route::get('reviews','FrontController@reviews');

//Route::get('/', function () {
//    return view('welcome');
//});
