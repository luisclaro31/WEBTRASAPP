<?php

Route::group(['before' => 'guest'], function () {

    //Login
    Route::get('/',['as' => 'home','uses' => 'AuthController@index']);
    //envio de los datos inicico de seccion
    Route::post('login', ['as' => 'login', 'uses' => 'AuthController@login' ]);

});

Route::group(['before' => 'auth'], function () {

    Route::get('home',['as' => 'inicio','uses' => 'HomeController@index']);

});

Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logout' ]);


