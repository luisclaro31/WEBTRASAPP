<?php

Route::group(['before' => 'guest'], function () {

    //Login
    Route::get('/',['as' => 'home','uses' => 'AuthController@index']);
    //envio de los datos inicico de seccion
    Route::post('login', ['as' => 'login', 'uses' => 'AuthController@login' ]);

});


Route::get('home',['as' => 'home','uses' => 'HomeController@index']);

