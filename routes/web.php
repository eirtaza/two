<?php

//App::setLocale("ur");

Route::get('/', function () {
    return view('home');
});

Route::get('register', "registerController@get");
Route::post('register', "registerController@post");

