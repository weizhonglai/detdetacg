<?php

Route::group(['prefix' => 'admin'], function(){
	Route::get('/', function(){ return view('admin.signin'); });

	Route::get('/member-list', function(){ return view('admin.member-list'); });
	Route::get('/member/{id}/reset-password', function(){ return view('admin.reset-password'); });
});
	
