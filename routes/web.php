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
  //Route::get('/', 'TransaccionController@index')->name('transaccion.index');

//---------------------------Entradas------------------------------------------------
  Route::get('/entrada', 'EntradaController@index')->name('entrada.index');
});


//////////////////////////////CONFIGURACIONES///////////////////////////////////////////
Route::prefix('configuracion')->group(function () {
  //Route::get('/', 'ConfiguracionController@index')->name('configuracion.index');
  
  //---------------------------Almacenes------------------------------------------------
  Route::get('/almacen', 'AlmaceneController@index')->name('almacen.index');
  Route::get('/almacen/nueva', 'AlmaceneController@nueva')->name('almacen.nueva');
  Route::get('/almacen/crear', 'AlmaceneController@nueva')->name('almacen.crear');
  Route::get('/almacen/editar/{id}', 'AlmaceneController@nueva')->name('almacen.editar');
  Route::get('/almacen/modificar/{id}', 'AlmaceneController@nueva')->name('almacen.modificar');
  Route::get('/almacen/eliminar/{id}', 'AlmaceneController@nueva')->name('almacen.eliminar');

  //---------------------------Unidades------------------------------------------------
  Route::get('/unidad', 'UnidadeController@index')->name('unidad.index');
  Route::get('/unidad/nueva', 'UnidadeController@nueva')->name('unidad.nueva');
  Route::get('/unidad/crear', 'UnidadeController@nueva')->name('unidad.crear');
  Route::get('/unidad/editar/{id}', 'UnidadeController@nueva')->name('unidad.editar');
  Route::get('/unidad/modificar/{id}', 'UnidadeController@nueva')->name('unidad.modificar');
  Route::get('/unidad/eliminar/{id}', 'UnidadeController@nueva')->name('unidad.eliminar');
  
  //---------------------------Medidas------------------------------------------------
  Route::get('/medida', 'UnidadeController@index')->name('medida.index');
  Route::get('/medida/nueva', 'UnidadeController@nueva')->name('medida.nueva');
  Route::get('/medida/crear', 'UnidadeController@nueva')->name('medida.crear');
  Route::get('/medida/editar/{id}', 'UnidadeController@nueva')->name('medida.editar');
  Route::get('/medida/modificar/{id}', 'UnidadeController@nueva')->name('medida.modificar');
  Route::get('/unidad/eliminar/{id}', 'UnidadeController@nueva')->name('medida.eliminar');
});


//////////////////////////////ESTADISTICA///////////////////////////////////////////
Route::prefix('estadistica')->group(function () {
  
  
});

//////////////////////////////SEGURIDAD///////////////////////////////////////////
Route::match(['get', 'post'], '/user', 'User\UserController@index')->name('user');
Route::prefix('seguridad')->group(function () {
  
  //---------------------------Usuario------------------------------------------------
  Route::get('/user', 'User\UserController@index')->name('user.index');
  Route::get('/user/nueva', 'User\UserController@nueva')->name('user.nueva');
  Route::post('/user/crear', 'User\UserController@crear')->name('user.crear');
  Route::get('/user/editar/{id}', 'User\UserController@editar')->name('user.editar');
  Route::post('/user/modificar/{id}', 'User\UserController@modificar')->name('user.modificar');
  Route::get('/user/eliminar/{id}', 'User\UserController@eliminar')->name('user.eliminar');
  
});



