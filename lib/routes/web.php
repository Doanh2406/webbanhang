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

Route::get('/','FrontendController@getHome');
Route::get('detail/{id}/{slug}.html','FrontendController@getDetail');
Route::get('category/{id}/{slug}.html','FrontendController@getCategory');
Route::get('search','FrontendController@getSearch');



Route::group(['namespace'=>'Admin'],function(){
	Route::group(['prefix'=>'login'],function(){
		Route::get('/','LoginController@getLogin')->name('login');
		Route::post('/','LoginController@postLogin')->name('login');

	});
	Route::get('logout','HomeController@getLogout')->name('logout');

	Route::group(['prefix'=>'admin'],function(){
		Route::get('home','HomeController@getHome');


		Route::group(['prefix'=>'category'], function(){
		Route::get('/','CategoryController@getCate')->name('category');
		Route::post('/','CategoryController@postCate')->name('category');

		Route::get('edit/{id}','CategoryController@getEditCate');
		Route::post('edit/{id}','CategoryController@postEditCate');

		Route::get('delete/{id}','CategoryController@getDeleteCate');
		
	});
	Route::group(['prefix'=>'product'], function(){
		Route::get('/','ProductController@getProduct')->name('product');

		Route::get('add','ProductController@getAddProduct');
		Route::post('add','ProductController@postAddProduct');

		Route::get('edit/{id}','ProductController@getEditProduct');
		Route::post('edit/{id}','ProductController@postEditProduct');

		Route::get('delete/{id}','ProductController@getDeleteProduct');
		
	});
});
	});

