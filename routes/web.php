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


Route::get('/', function () {
    return view('welcome');
});
*/

/*E-commerce Front-end mastering Start*/

Route::get('', [

	'uses'  => 'HomeController@index',
	'as'    =>'/'
 ]);

Route::get('/product', [
	'uses' =>'HomeController@product',
	'as'   =>'/product'
]);

Route::get('/product-details',[

	'uses'=>'HomeController@productdetail',
	'as'  =>'/product-details'
]);
Route::get('/cart',[
	'uses'=>'HomeController@cart',
	'as'  =>'/cart'
]);
Route::get('/checkout',[
	'uses'=>'HomeController@checkout',
	'as'  =>'/checkout'
]);
Route::get('/login',[
	'uses'=>'HomeController@login',
	'as'  =>'/login'
]);
/*E-commerce Front-end mastering End*/

/*E-commerce Back-end mastering Start*/
Route::get('/backend',[
	'uses' =>'AdminController@dashboard',
	'as'   =>'/backend'
]);
/*E-commerce Back-end mastering End*/
