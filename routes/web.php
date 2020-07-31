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
Route::get('/', 'LoginController@login')->name('user.index');

Route::post('/login', 'LoginController@authenticate')->name('user.login');
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('user.logout');

//**********************************(MENU PRINCIPAL)*************************************************

Route::get('/home', 'HomeController@index')->name('home.index');

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
    Route::get('/user', 'User\UserController@index')->name('user.index');
    Route::get('/user/nueva', 'User\UserController@nueva')->name('user.nueva');
    Route::post('/user/crear', 'User\UserController@crear')->name('user.crear');
    Route::get('/user/editar/{id}', 'User\UserController@editar')->name('user.editar');
    Route::post('/user/modificar/{id}', 'User\UserController@modificar')->name('user.modificar');
    Route::get('/user/eliminar/{id}', 'User\UserController@eliminar')->name('user.eliminar');
  //---------------------------ALMACENES------------------------------------------------
  //Route::get('almacen', 'AlmaceneController@index')->name('almacen.index');
  
});

Route::match(['get', 'post'], '/user', 'User\UserController@index')->name('user');




// rutas de estado
//Route::get('/estado', 'EstadoController@index')->name('estado.index');
//Route::get('/estado/nueva', 'EstadoController@nueva')->name('estado.nueva');
//Route::post('/estado/crear', 'EstadoController@crear')->name('estado.crear');
//Route::get('/estado/editar/{id}', 'EstadoController@editar')->name('estado.editar');
//Route::post('/estado/modificar/{id}', 'EstadoController@modificar')->name('estado.modificar');
//Route::get('/estado/eliminar/{id}', 'EstadoController@eliminar')->name('estado.eliminar');


//Pruebas varias
//Route::get('almacen', 'AlmaceneController@index')->name('almacen.index');