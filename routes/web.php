<?php

use Illuminate\Support\Facades\Route;

Route::get('/todos','TodoController@index');
Route::get('/todos/create','TodoController@create');
Route::post('/todos/create','TodoController@store');
Route::get('/todos/{todo}/edit','TodoController@edit');
Route::patch('/todos/{todo}/update','TodoController@update');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
