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

Route::get('/home', 'ItemsController@index')->name('home');

Route::resource('items', 'ItemsController');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

// Route::get('show/{$id}', ['as' => 'show', 'uses' => 'ItemsController@show']);

// Route::get('edit', ['as' => 'edit', 'uses' => 'ItemsController@edit']);

// Route::get('create', ['as' => 'create', 'uses' => 'ItemsController@create']);

Route::get('about', ['as' => 'about', 'uses' => 'PagesController@about']);

Auth::routes();

Route::get('/', ['as' => 'home', 'uses' => 'ItemsController@index'])->name('/home');

Route::get('/{any}', 'ItemsController@index')->name('/home');
