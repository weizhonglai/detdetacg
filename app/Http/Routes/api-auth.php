<?php

//Auth
Route::group(['prefix' => 'api'], function(){
	Route::post('/sign-up', 'UserAuthController@signUp');
	Route::post('/sign-in', 'UserAuthController@signIn');
});

