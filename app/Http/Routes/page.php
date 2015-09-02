<?php

Route::get('/',  function(){ return Redirect::to('/index'); });

Route::get('/index', function(){ return  view('index'); });

Route::get('/cart', function(){ return  view('cart'); });

Route::get('/listing', function(){ return view('listing'); });

Route::get('/categories', function(){ return view('categories'); });

Route::get('/prod_detail', function(){ return view('prod_detail'); });

Route::get('/contact', function(){ return view('contact'); });
