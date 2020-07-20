<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//*************************************(INICIO DEL SISTEMA)*************************************************
Route::get('/', 'HomeController@index')->name('home.index');


//**********************************(MENU PRINCIPAL)*************************************************

//////////////////////////////TRANSACCIONES///////////////////////////////////////////
Route::prefix('transaccion')->group(function () {
  Route::get('/', 'TransaccionController@index')->name('transaccion.index');

//---------------------------ALMACENES------------------------------------------------
  //Route::get('almacen', 'AlmaceneController@index')->name('almacen.index');
});


//////////////////////////////CONFIGURACIONES///////////////////////////////////////////
Route::prefix('configuracion')->group(function () {
  Route::get('/', 'ConfiguracionController@index')->name('configuracion.index');

  //---------------------------ALMACENES------------------------------------------------
  Route::get('almacen', 'AlmaceneController@index')->name('almacen.index');
  
});

//////////////////////////////ESTADISTICA///////////////////////////////////////////
Route::prefix('estadistica')->group(function () {
  Route::get('/', 'EstadisticaController@index')->name('estadistica.index');

  //---------------------------ALMACENES------------------------------------------------
  //Route::get('almacen', 'AlmaceneController@index')->name('almacen.index');
  
});

//////////////////////////////SEGURIDAD///////////////////////////////////////////
Route::prefix('seguridad')->group(function () {
  Route::get('/', 'SeguridadController@index')->name('seguridad.index');

  //---------------------------ALMACENES------------------------------------------------
  //Route::get('almacen', 'AlmaceneController@index')->name('almacen.index');
  
});





// rutas de estado
//Route::get('/estado', 'EstadoController@index')->name('estado.index');
//Route::get('/estado/nueva', 'EstadoController@nueva')->name('estado.nueva');
//Route::post('/estado/crear', 'EstadoController@crear')->name('estado.crear');
//Route::get('/estado/editar/{id}', 'EstadoController@editar')->name('estado.editar');
//Route::post('/estado/modificar/{id}', 'EstadoController@modificar')->name('estado.modificar');
//Route::get('/estado/eliminar/{id}', 'EstadoController@eliminar')->name('estado.eliminar');


//Pruebas varias
//Route::get('almacen', 'AlmaceneController@index')->name('almacen.index');