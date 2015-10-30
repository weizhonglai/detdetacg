<?php

Route::group(['prefix' => 'api/member'], function(){
	Route::post('/top-up/request', 'CmsController@topUpRequest');
	Route::get('/top-up/list', 'ProfileController@fetchTopupAmount');
});

