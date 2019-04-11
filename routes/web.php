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

Route::get('/', function() {
	return view('auth/login');
});



Auth::routes();

Route::group(['middleware' => 'auth'], function(){

	Route::get('dashboard', function(){
		return view('dashboard/index');
	});
	Route::resource('menu','MenuController');
	Route::resource('menu','MenuController')->except(['delete','destroy']);
	Route::post('/datamenu/update','MenuController@update');

	Route::post('inputdatamenu/store','MenuController@store');
	Route::get('delete/menu/{id}', 'MenuController@destroy');
	Route::resource('menu', 'MenuController');
	Route::get('menuedit/edit/{id}', 'MenuController@edit');


	//CRUD Data Jabatan
	Route::resource('jabatan', 'JabatanController');
	//Karyawan
	Route::resource('karyawan', 'KaryawanController');



	
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
