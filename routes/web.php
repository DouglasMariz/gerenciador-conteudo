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

Route::get('/','HomeController@index');
Route::group(['prefix' => 'painel', 'middleware' => 'auth'], function() {
	Route::get('/', 'Painel\DashboardController@index')->name('painel');
    Route::resource('membros', 'Painel\MembrosController');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
