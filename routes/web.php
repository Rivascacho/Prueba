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

Route::resource('areas','AreaController');
Route::get('areas/{area}/destroy', [
	'uses' => 'AreaController@destroy',
	'as'   => 'areas.destroy'
]);

Route::resource('priorities','PriorityController');
Route::get('priorities/{priority}/destroy', [
	'uses' => 'PriorityController@destroy',
	'as'   => 'priorities.destroy'
]);