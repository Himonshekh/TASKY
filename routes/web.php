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

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/task/entry', 'addController@index');
// Route::get('/task/manage', 'manageController@index');
// Route::get('/tasks/show', 'taskController@index');


/*
===========
	CATEGORY ROUTE
===========
*/
Route::prefix('category')->group(function(){

	Route::get('entry','categoryController@index');
	Route::post('save','categoryController@save');

	Route::get('manage','categoryController@manage');

	Route::get('edit/{id}','categoryController@edit');
	Route::post('edit','categoryController@update');

	Route::get('delete/{id}','categoryController@delete');
});
/*
===========
	TAG ROUTE
===========
*/
Route::prefix('tag')->group(function(){

	Route::get('entry','tagController@index');
	Route::post('save','tagController@save');

	Route::get('manage','tagController@manage');

	Route::get('edit/{id}','tagController@edit');
	Route::post('edit','tagController@update');

	Route::get('delete/{id}','tagController@delete');
});
/*
===========
	Task ROUTE
===========
*/
Route::prefix('task')->group(function(){

	Route::get('entry','taskController@index');
	Route::get('entryFrom','taskController@indexFrom');

	Route::post('save','taskController@save');
	Route::post('saveFrom','taskController@saveFrom');

	// Route::get('manage','taskController@manage');

	// Route::get('edit/{id}','taskController@edit');
	// Route::post('edit','taskController@update');

	// Route::get('delete/{id}','taskController@delete');
});




