<?php

Route::group(['prefix' => 'api/member'], function(){
	Route::post('/top-up/request', 'MemberController@topUpRequest');
	Route::get('/top-up/list', 'MemberController@fetchTopupAmount');

	Route::put('/info/update', 'MemberController@userUpdate');
});

