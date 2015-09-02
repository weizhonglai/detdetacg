<?php

//Auth
Route::group(['prefix' => 'api'], function(){
	Route::post('/sign-up', 'AuthController@signUp');
});

