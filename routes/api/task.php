<?php

Route::get('/list/{projectId}', 'TaskController@index')->name('task.list');
Route::get('/{id}', 'TaskController@show')->name('task.show');
Route::post('create', 'TaskController@create')->name('task.create');
Route::post('update/{id}', 'TaskController@update')->name('task.update');
Route::post('moved', 'TaskController@moved')->name('task.moved');