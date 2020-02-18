<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('addProfile', 'UserController@addProfile');
Route::get('showProfile', 'UserController@showProfile');
