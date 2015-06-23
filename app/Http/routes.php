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

Route::get('/', 'WelcomeController@index');

Route::get('contact','PagesController@contact');

Route::get('about','PagesController@about');

Route::get('home', 'HomeController@index');

Route::get('estudiantes','EstudiantesController@index');
Route::get('estudiantes/{id}','EstudiantesController@show');


Route::get('administrador/opciones','AdministradorController@opciones');
Route::get('administrador/opciones/crear-campus','AdministradorController@crear_campus');




Route::controllers([
    //'estudiantes' => 'EstudiantesController',
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('example', function () {

    return view('examples.template');

});