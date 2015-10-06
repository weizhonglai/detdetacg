<?php

Route::group(['prefix' => 'admin'], function(){
	Route::get('/', function(){ return view('admin.signin'); });
	

	Route::get('/member-list', function(){ return view('admin.member-list'); });
	Route::get('/top-up', function(){ return view('admin.top-up'); });
	Route::get('/advertisement', function(){ return view('admin.advertisement'); });
	Route::get('/advertisement/add-new', function(){ return view('admin.advertisement-new'); });


	//page Controller
	Route::get('member/{userId}/reset-password', 'AdminPageController@userAccess');
	Route::get('banner/advertisement/{id}', 'AdminPageController@bannerAdvertisement');
});
	
 