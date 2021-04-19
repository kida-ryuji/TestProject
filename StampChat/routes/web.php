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
    return view('top');
});

Route::get('/top', 'TopController@top');

Route::get('/uploadStamp', 'UploadStampController@uploadStamp');
Route::post('/upload', 'UploadStampController@upload')->name('upload');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/chatroom', 'ChatroomController@index');
Route::post('/add', 'ChatroomController@add')->name('add');
Route::get('/result', 'ChatroomController@getData');