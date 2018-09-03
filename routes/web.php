<?php

// home routes
Route::get('/','AuthController@home');

// Show Registration and login form
Route::get('/user/create','UserController@userRegForm');
Route::get('/login','UserController@userLogForm');

// Registration and Login(user)
Route::post('/user','UserController@store');
Route::post('/login','AuthController@userLogin');
Route::get('/logout','AuthController@logout')->name('logout');
Route::get('/update/profile/{user}','UserController@userUpdatedForm')->name('user.edit');
Route::put('/update/user/{id}','UserController@userUpdated')->name('user.update');


// after login Todo shows here
Route::get('/todo','TodoController@index')->name('todo.index');
Route::get('/todo/create','TodoController@create');
Route::post('/todo','TodoController@storeTodo');

// todo
Route::put('/todo/{id}','TodoController@updateTodo')->name('todo.update');
Route::delete('/todo/{id}','TodoController@deleteTodo')->name('todo.destroy');