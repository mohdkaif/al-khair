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

Route::get('/admin',
	function () {
	    return redirect('/login');
	}
);
Route::get('/', 'HomeController@index');
Route::get('doctors', 'HomeController@index');
Route::get('hospitals', 'HomeController@index');

Auth::routes();
	Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'],function(){
	Route::post('/associate/status', 'AssociateController@changeStatus');
	Route::resource('/associate', 'AssociateController');
	Route::resource('/investor', 'InvestorController');

});