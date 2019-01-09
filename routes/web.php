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

route::get('Admin',[
'as'=>'trangchu', 
'uses'=>'AdminController@index'
]);

route::get('dangnhap',[
	'as'=>'login', 
	'uses'=>'AdminController@show'
]);

route::get('/products','ProductController@index')->name('products.index');

route::get('/products/{product}','ProductController@show')->name('products.show');

route::get('/order/create','OrderController@create')->name('orders.create');

route::post('/products','OrderController@store')->name('orders.store');