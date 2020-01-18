<?php

Route::get('/', 'ProjectController@index')->name('project.list');
Route::get('/{id}', 'ProjectController@show')->name('project.show');
Route::post('create', 'ProjectController@create')->name('project.create');
Route::post('update/{id}', 'ProjectController@update')->name('project.update');