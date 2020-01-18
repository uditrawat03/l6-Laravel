<?php

use Illuminate\Http\Request;


Route::post('register', 'UserController@register')->name('user.register');
Route::post('login', 'UserController@login')->name('user.login');
Route::middleware('auth:api')->post('/logout', 'UserController@logout')->name('user.logout');
Route::get('menus', 'MenuController@getMenus')->name('user.menu');

Route::post('modules', 'ModuleController@index')->name('module.list');
Route::post('module/create', 'ModuleController@create')->name('module.create');


// Route::middleware('auth:api')->group(
//     [
//         'as' => 'project::'
//     ], 
//     function(){
//         Route::post('create', 'ProjectContoller@create')->name('project.create');
// });

