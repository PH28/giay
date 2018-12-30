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

Route::get('admin/dangnhap',[
	'as'=>'login', 
	'uses'=>'AdminController@dangnhapadmin',
]);
Route::post('admin/dangnhap',[
	'as'=>'login',
	'uses'=>'AdminController@dangnhapadmin',
]);

Route::post('dangnhap',[
	'as'=>'login',
	'uses'=>'AdminController@postlogin',
]);

Route::group(['prefix'=>'admin'],function(){
	
	Route::group(['prefix'=>'category'],function(){
		Route::get('/','CategoryController@index')->name('category.index');
		Route::get('create','CategoryController@create')->name('category.create');
		Route::post('/','CategoryController@store')->name('category.store');
		Route::get('{id}/edit','CategoryController@edit')->name('category.edit');
		Route::post('{id}/update','CategoryController@update')->name('category.update');
		Route::get('delete/{id}','CategoryController@delete')->name('category.delete');
	});

	Route::group(['prefix'=>'user'],function(){
		Route::get('/','UserController@index')->name('user.index');
		Route::get('create','UserController@create')->name('user.create');
		Route::post('/','UserController@store')->name('user.store');
		Route::get('{id}/edit','UserController@edit')->name('user.edit');
		Route::post('{id}/update','UserController@update')->name('user.update');
		Route::get('delete/{id}','UserController@delete')->name('user.delete');
	});

	Route::group(['prefix'=>'product'],function(){
		Route::get('/','ProductController@index')->name('product.index');
		Route::get('create','ProductController@create')->name('product.create');
		Route::post('/','ProductController@store')->name('product.store');
		Route::get('{id}/edit','ProductController@edit')->name('product.edit');
		Route::post('{id}/update','ProductController@update')->name('product.update');
		Route::get('delete/{id}','ProductController@delete')->name('product.delete');
	});

	Route::group(['prefix'=>'order'],function(){
		Route::get('/','OrderController@index')->name('order.index');
		Route::get('create','OrderController@create')->name('order.create');
		Route::get('detail/{id}', 'OrderController@getdetail')->name('order.detail');
		Route::get('delete/{id}', 'OrderController@getdelete')->name('order.delete');
	});
});