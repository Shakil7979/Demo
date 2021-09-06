<?php

use Illuminate\Support\Facades\Route;

 Route::get('/','myController');

 Route::resource('photos','photoController');

 Route::get('/mySelf','homeController@mySelf');