<?php

Route::get('/',function (){
    return view ('welcome');
});

Route::resource('image','ImageController');

//Route::get('/', 'HomeController@index')->name('home');

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

Route::group(['middleware'=>'assitt'],function (){

    Route::get('assitt/home',function (){
        return 'Assitt dashboard';
    });

});
