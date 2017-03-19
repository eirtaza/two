<?php

//App::setLocale("ur");

Route::get('/', function () {
    return view('home');
});

Route::get('register', "registerController@get");
Route::post('register', "registerController@post");
Route::get('verify/{id}/{code}', "registerController@verify");
Route::get('created', "registerController@created");

//dashboard
Route::get('dashboard', "dashboardController@index");


Route::get('login', "loginController@get");
Route::post('login', "loginController@post");

