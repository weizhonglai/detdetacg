<?php

Route::group(['prefix' => 'admin'], function(){
	Route::get('/', function(){ return view('admin.signin'); });
	

	Route::get('/member-list', function(){ return view('admin.member-list'); });
	Route::get('/member-detail', function(){ return view('admin.member-detail'); });
	Route::get('/top-up', function(){ return view('admin.top-up'); });

	Route::get('/advertisement', function(){ return view('admin.advertisement'); });
	Route::get('/advertisement/add-new', function(){ return view('admin.advertisement-new'); });

	Route::get('/category', function(){ return view('admin.manage-category'); });

	Route::get('/top-up-amount', function(){ return view('admin.top-up-amount'); });

	//page Controller
	Route::get('member/{userId}/detail', 'AdminPageController@user');
	Route::get('member/{userId}/reset-password', 'AdminPageController@userAccess');
	Route::get('banner/advertisement/{id}', 'AdminPageController@bannerAdvertisement');
	
});
	
 