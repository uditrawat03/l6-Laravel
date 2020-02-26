<?php

Route::get('list/{project_id}', 'ProjectWorkflowController@index')->name('project.workflow.list');
Route::get('/{id}', 'ProjectWorkflowController@show')->name('project.workflow.show');
Route::post('create', 'ProjectWorkflowController@create')->name('project.workflow.create');
Route::post('update/{id}', 'ProjectWorkflowController@update')->name('project.workflow.update');