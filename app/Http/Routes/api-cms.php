<?php

//Auth
Route::group(['prefix' => 'api/admin'], function(){
	Route::post('/sign-in', 'AdminAuthController@signIn');

	// Route::group(['middleware' => 'auth.admin'], function () {
		Route::group(['prefix' => 'member'], function(){
			Route::get('/list', 'CmsController@memberList');
			Route::put('/{userId}/reset-password', 'CmsController@resetPassword');
		});

		Route::group(['prefix' => 'category'], function(){
			Route::post('/main', 'CmsController@createMainCategory');
			Route::get('/main', 'CmsController@createMainCategory');
			Route::post('/sub', 'CmsController@createSubCategory'); 
		});

		Route::group(['prefix' => 'banner'], function(){
			Route::get('/advertisement', 'CmsController@getAdvtList');
			Route::post('/advertisement', 'CmsController@newAvtImage');
			Route::post('/advertisement/{id}', 'CmsController@updateAvtImage');
			Route::put('/advertisement/{id}/enable', 'CmsController@updateAvtEnable');
			Route::delete('/advertisement/{id}', 'CmsController@deleteAvtImage');
			Route::get('/advertisement/slide', 'CmsController@avtSlide');
		});

		Route::group(['prefix' => 'top-up'], function(){
			Route::post('/', 'CmsController@TopUp');
			Route::put('/deny', 'CmsController@topUpDeny');
			Route::post('/request', 'CmsController@topUpRequest');
			Route::get('/list/{type}', 'CmsController@topUpRequestList');

		});



	// });
});

