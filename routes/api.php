<?php

use Illuminate\Http\Request;


Route::post('register', 'UserController@register')->name('user.register');
Route::post('login', 'UserController@login')->name('user.login');
Route::middleware('auth:api')->post('/logout', 'UserController@logout')->name('user.logout');
Route::get('menus', 'MenuController@getMenus')->name('user.menu');

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
