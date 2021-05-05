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

Route::group(['middleware' => 'auth'], function() {
    //Todoの一覧表示
    Route::get('/todo', 'TodoController@index')->name('todo.index');

    //Todoの登録
    Route::post('/todo', 'TodoController@store')->name('todo.store');

    //Todo削除
    Route::delete('/todo/{todo}', 'TodoController@destroy')->name('todo.destroy');

    //Todo更新画面
    Route::get('/todo/{todo}/edit', 'TodoController@edit')->name('todo.edit');

    //Todo更新処理
    Route::put('/todo/{todo}', 'TodoController@update')->name('todo.update');
});

