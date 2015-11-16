<?php

use App\Models\User;

Route::get('/',  function(){ return Redirect::to('/index'); });

Route::get('/index', function(){ return view('index'); });

Route::get('/home', function(){ return view('home'); });

Route::get('/profile/{id}', function($id){ 
	$user = User::find($id);
	return view('profile', ['user' => $user]); 
});

Route::get('/topup-request', function(){ return view('topup-request'); });

Route::get('/aution', function(){ return view('aution'); });

Route::get('/services', function(){ return view('services'); });

Route::get('/detdetforum', function(){ return view('detdetforum'); });

Route::get('/faq', function(){ return view('faq'); });

Route::get('/contact', function(){ return view('contact'); });
