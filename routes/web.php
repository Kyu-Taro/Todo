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

Auth::routes();

Route::gorup(['middleware' => 'auth'], function() {
    //Todoの一覧表示
    Route::get('/todo', 'TodoController@index')->name('todo.index');
});

