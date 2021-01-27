<?php

use App\Http\Controllers\UsersController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/index', 'App\Http\Controllers\IndexController@index');//utilizada para regresar la vista de index
Route::get('/', 'App\Http\Controllers\IndexController@index');//utilizada para regresar la vista de index
  //INICIO DE RUTAS DE USUARIOS(ADMINISTRACION)
Route::get('/cons_user','App\Http\Controllers\UsersController@index');
Route::post('/editar_user','App\Http\Controllers\UsersController@edit');
Route::resource('cons_user','App\Http\Controllers\UsersController');
//CIERRE DE RUTAS DE USUARIOS(ADMINISTRACION)

Route::get('/admin', 'App\Http\Controllers\DashController@index');//utilizada para regresar la vista de index

//INICIO DE RUTAS DE LOS PRODUCTOS
Route::get('/cons_prod','App\Http\Controllers\ProductosController@index');
Route::post('/editar_prod','App\Http\Controllers\ProductosController@edit');
Route::resource('cons_prod','App\Http\Controllers\ProductosController');
//CIERRE DE RUTAS DE LOS PRODUCTOS

//INICIO DE RUTAS DE LAS CATEGORIAS
Route::get('/cons_cate','App\Http\Controllers\CategoriaController@index');
Route::post('/editar_cate','App\Http\Controllers\CategoriaController@edit');
Route::resource('cons_cate','App\Http\Controllers\CategoriaController');
//CIERRE DE RUTAS DE LAS CATEGORIAS

//INICIO RUTAS DE LA TIENDA
Route::get('/shop','App\Http\Controllers\TiendaController@index');
//CIERRE RUTAS DE LA TIENDA

//INICIO RUTAS DE DETALLES DE PRODUCTO
Route::get('prod_detalles/{id}','App\Http\Controllers\TiendaController@detallesProducto');
Route::get('carritoCompras','App\Http\Controllers\TiendaController@carrito');
Route::get('agregarCarrito/{id}','App\Http\Controllers\TiendaController@agregarCarrito');
//CIERRE RUTAS DE DETALLES DE PRODUCTO

//INICIO RUTAS DE CONTACTO
Route::get('/contacto','App\Http\Controllers\ContactoController@index');
Route::post('/contacto','App\Http\Controllers\ContactoController@store');
//CIERRE RUTAS DE CONTACTO
Auth::routes();



