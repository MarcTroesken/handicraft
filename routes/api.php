<?php

// ToDo: Add auth
Route::get('/customers', 'CustomerController@index');
Route::post('/customers', 'CustomerController@store');
Route::patch('/customers/{id}', 'CustomerController@update');

Route::get('/projects', 'ProjectsController@index');
Route::post('/projects', 'ProjectsController@store');
Route::patch('/projects/{id}', 'ProjectsController@update');
