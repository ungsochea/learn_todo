<?php

use Illuminate\Support\Facades\Route;

Route::put('todos/{todo}/complete','TodoController@complete')->name('todos.complete');
Route::put('todos/{todo}/incomplete','TodoController@incomplete')->name('todos.incomplete');
Route::resource('todos','TodoController');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
