<?php

Route::get('/', 'HomeController@index')->name('home');

Route::resource('product','ProductController');

Route::get('student/create','StudentController@create');
Route::post('student/store','StudentController@store');
Route::delete('student/delete/{id}','StudentController@destroy');
Route::get('student/create','StudentController@create');
Route::post('student/store','StudentController@store');
Route::delete('student/delete/{id}','StudentController@destroy');


    Route::resource('/','TeacherController');


