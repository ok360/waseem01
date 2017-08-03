<?php

Route::get('/',function (){
    return view('layout.master');
});
Route::get('login','LoginController@login');

Route::get('home','HomeController@index');
