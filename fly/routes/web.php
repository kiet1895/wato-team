<?php
Route::get('/','HomeController@index');
Auth::routes();
Route::resource('tasks','TasksController', ['middleware' => ['auth']]);
// Route::get('/home', 'HomeController@index')->name('home');
