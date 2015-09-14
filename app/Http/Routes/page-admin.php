<?php

Route::group(['prefix' => 'admin'], function(){
	Route::get('/', function(){ return view('admin.index'); });
	
	Route::get('/index', function(){ return view('admin.index'); });
});
	
