<?php

Route::group(['prefix' => 'admin'], function(){
	Route::get('/', function(){ return view('admin.index'); });
	
	Route::get('/profiles/{profile_id}/edit', 'PageController@editProfile');

	//page Controller
	Route::get('member/{userId}/reset-password', 'PageController@userAccess');
});
	
 