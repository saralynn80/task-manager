<?php

Route::get('/', function () {
    return view('welcome');
});

//Route::get('tasks', 'TasksController@index');
//Route::get('tasks/create', 'TasksController@create');
//Route::get('tasks/{id}', 'TasksController@show');
//Route::post('tasks', 'TasksController@store');
//Route::get('tasks/{id}/edit', 'TasksController@edit');

Route::resource('tasks', 'TasksController');