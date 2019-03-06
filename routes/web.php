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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('users', 'UserController')->only([ 'show', 'edit', 'update' ]);
Route::get('books/search', 'BookController@search')->name('books.search');
Route::get('books/result', 'BookController@result')->name('books.result');
Route::resource('books', 'BookController');
Route::resource('kids', 'KidController');
Route::resource('goals', 'GoalController');
Route::get('/records/create/{book}', 'RecordController@create')->name('records.create');
Route::resource('records', 'RecordController');
