<?php

//Auth
Route::group(['prefix' => 'api/admin'], function(){
	Route::get('/sign-in', 'AdminAuthController@signIn');

	// Route::group(['middleware' => 'auth.admin'], function () {
		Route::group(['prefix' => 'cms/member'], function(){
			Route::get('/list', 'CmsController@memberList');


		});
	// });
});

