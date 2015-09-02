<?php

//Auth
Route::group(['prefix' => 'api'], function(){
	Route::post('/sign-in', 'AuthController@signIn');
	Route::post('/sign-up', 'AuthController@signUp');
});

