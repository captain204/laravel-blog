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


Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/', 'PostsController@index')->name('home');

Route::group(['prefix'=>'admin', 'namespace' => 'admin', 'middleware' => 'admin'], function()
{
    Route::resource('user','UsersController');
});