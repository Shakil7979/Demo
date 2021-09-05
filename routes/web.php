<?php

use Illuminate\Support\Facades\Route;

 Route::get('/','siteController@home');

 Route::get('/about','siteController@about');

 Route::get('/contact','siteController@contact');
 