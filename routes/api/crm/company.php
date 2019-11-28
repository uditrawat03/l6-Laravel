<?php


Route::match(['get', 'post'], '/', 'CompanyController@index')->name('company.index');
Route::post('/store', 'CompanyController@store')->name('company.store');


Route::get('/company-source', '\App\Http\Controllers\MasterController@companySource');
Route::get('/company-class', 'MasterController@companyClass');
Route::get('/company-importance', 'MasterController@companyImportance');
