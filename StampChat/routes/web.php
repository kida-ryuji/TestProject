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

Route::get('/top', 'TopController@top');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/chatroom', 'ChatroomController@index');
Route::post('/add', 'ChatroomController@add')->name('add');
Route::get('/result', 'ChatroomController@getData');