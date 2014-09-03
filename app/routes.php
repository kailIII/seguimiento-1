<?php

Route::get('/', ['as'=>'home','uses'=>'HomeController@index']);
Route::post('login', ['as'=>'login','uses'=>'AuthController@login']);

Route::group(['before'=>'auth'], function(){
	require (__DIR__ . '/routes/auth.php');
	require (__DIR__ . '/routes/users.php');
	require (__DIR__ . '/routes/solicitudes.php');
    require (__DIR__ . '/routes/seguimiento.php');


	require (__DIR__ . '/routes/ajax.php');
	require (__DIR__ . '/routes/impresion.php');
});



