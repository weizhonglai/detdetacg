<?php

//Auth
Route::group(['prefix' => 'api/admin'], function(){
	Route::post('/sign-in', 'AdminAuthController@signIn');

	// Route::group(['middleware' => 'auth.admin'], function () {
		Route::group(['prefix' => 'member'], function(){
			Route::get('/list', 'CmsController@memberList');
			Route::put('/{userId}/reset-password', 'CmsController@resetPassword');
			Route::put('/account-topup', 'CmsController@accountTopUp');
		});

		Route::group(['prefix' => 'product'], function(){
			Route::post('/category-main', 'CmsController@createMainCategory');
			Route::post('/category-sub', 'CmsController@createSubCategory'); 
		});
	// });
});

