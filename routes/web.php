<?php

Route::get('/', 'HomeController@index')->name('home');

Route::resource('product','ProductController');

Route::get('student/create','StudentController@create');


