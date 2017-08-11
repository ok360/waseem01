<?php

Route::get('/', 'HomeController@index')->name('home');

Route::resource('product','ProductController');

Route::get('student/create','StudentController@create');
Route::post('student/store','StudentController@store');
Route::delete('student/delete/{id}','StudentController@destroy');
Route::get('student/create','StudentController@create');
Route::post('student/store','StudentController@store');
Route::delete('student/delete/{id}','StudentController@destroy');

Route::group(['prefix'=>'admin'],function (){
    Route::resource('/teacher','TeacherController');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'admin','prefix'=>'admin'],function (){

    Route::get('home','AdminController@index');
    Route::get('product','AdminController@index');

});
