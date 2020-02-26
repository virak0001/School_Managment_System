<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('showProfile', 'UserController@showProfile');
Route::get('showForm', 'UserController@showForm')->name('showForm');
// Route::POST('store', 'UserController@store')->name('store');
Route::resource('users', 'UserController');

