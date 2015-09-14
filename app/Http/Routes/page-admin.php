<?php

Route::group(['prefix' => 'admin'], function(){
	Route::get('/signin', function(){ return view('admin.sign-in'); });
	
	Route::get('/index', function(){ return view('admin.index'); });
});
	
