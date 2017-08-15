<?php

Route::get('image',function (){
    return view ('image.create');
});

Route::post('image','AdminController@image');

Route::get('/', 'HomeController@index')->name('home');

Route::resource('product','ProductController');

Route::get('student/create','StudentController@create');
Route::post('student/store','StudentController@store');
Route::delete('student/delete/{id}','StudentController@destroy');
Route::get('student/create','StudentController@create');
Route::post('student/store','StudentController@store');
Route::delete('student/delete/{id}','StudentController@destroy');


Route::resource('/teacher','TeacherController');

Route::post('search','TeacherController@search');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'admin','prefix'=>'admin'],function (){

    Route::get('home','AdminController@index');


});

