<?php

Route::get('/', 'HomeController@index')->name('home');

Route::resource('product','ProductController');
