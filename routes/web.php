<?php

// gets all users
Route::get('/', 'UserController@getUsers');

// Add a user
Route::post('/user/add', 'UserController@addUser');

// Delete a user
Route::get('/user/delete/{id}', 'UserController@deleteUser');

// Edit a user
Route::post('/user/edit/{id}', 'UserController@editUser');

// User Form
Route::get('/user/form/{id?}', 'UserController@formUser');
