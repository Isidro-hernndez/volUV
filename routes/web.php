<?php

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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

//Route::resource('pruebas', 'pruebaController');

Route::resource('users', 'UserController');

Route::resource('dinners', 'DinnerController');

Route::resource('costumers', 'CostumerController');

Route::resource('menus', 'MenuController');

Route::resource('products', 'ProductController');

Route::resource('expenses', 'ExpenseController');

Route::resource('sells', 'SellController');

Route::resource('items', 'ItemController');

Route::get('/inicio', function (){
  return view('pos');
} );

Route::name('sale_create_path')->post('/venta/{venta}', 'SellController@Crear');
