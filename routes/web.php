<?php

Route::get('/gateway/{any}', 'AppController@index')->where('any', '.*');
