<?php

// gets all users
Route::get('/', 'UserController@getUsers');

// Add a user
Route::post('/user/add', 'UserController@addUser')->name('addUser');

// Delete a user
Route::get('/user/delete/{id}', 'UserController@deleteUser')->name('deleteUser');

// Edit a user
Route::post('/user/edit/{id}', 'UserController@editUser')->name('editUser');

// User Form
Route::get('/user/form/{id?}', 'UserController@formUser')->name('userForm');
