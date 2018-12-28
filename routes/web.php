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
		Route::get('list','CategoryController@getlist')->name('category.list');
		Route::get('add','CategoryController@getadd')->name('category.add');
		Route::post('add','CategoryController@postadd')->name('category.add');
		Route::get('edit/{id}','CategoryController@getedit')->name('category.edit');
		Route::post('edit/{id}','CategoryController@postedit')->name('category.edit');
		Route::get('delete/{id}','CategoryController@getdelete')->name('category.delete');
	});

	Route::group(['prefix'=>'user'],function(){
		Route::get('list','UserController@getlist')->name('user.list');
		Route::get('add','UserController@getadd')->name('user.add');
		Route::post('add','UserController@postadd')->name('user.add');
		Route::get('edit/{id}','UserController@getedit')->name('user.edit');
		Route::post('edit/{id}','UserController@postedit')->name('user.edit');
		Route::get('delete/{id}','UserController@getdelete')->name('user.delete');
	});

	Route::group(['prefix'=>'product'],function(){
		Route::get('list','ProductController@getlist')->name('product.list');
		Route::get('add','ProductController@getadd')->name('product.add');
		Route::post('add','ProductController@postadd')->name('product.add');
		Route::get('edit/{id}','ProductController@getedit')->name('product.edit');
		Route::post('edit/{id}','ProductController@postedit')->name('product.edit');
		Route::get('delete/{id}','ProductController@getdelete')->name('product.delete');
	});

	Route::group(['prefix'=>'order'],function(){
		Route::get('list','OrderController@getlist')->name('order.list');
		Route::get('add','OrderController@getadd')->name('order.add');
		Route::get('detail/{id}', 'OrderController@getdetail')->name('order.detail');
		Route::get('delete/{id}', 'OrderController@getdelete')->name('order.delete');
	});
});