<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/
//Hola mundo en Laravel 5

Route::get('hola',function(){
  return 'Hola Mundo Inmundo!!!';
});

//Rutas con parametros

Route::get('saludos/{nombre}',function($nombre){
  return 'Como estas mi estimado '.$nombre;
});
//Route::get('Nombre de Ruta','NombreController@metodo')
Route::get('demo/{nombre}','DemoController@saludar');


//Ruta abreviada, la cual por defecto incluye todos los metodos
//Route::resource('Nombre de la ruta','NombreController');
Route::resource('demo1','DemoController');

Route::get('vista',function(){
    return view('vista',['nombre'=>' Abel']);
});
//Route::get('plantilla','DemoController@herencia');
Route::get('plantilla/{nombre}','DemoController@herencia');

Route::resource('test','TestController');
//Rutas de Contactos
Route::resource('contacto','ContactoController');
Route::resource('administrativo','AdmiController');
