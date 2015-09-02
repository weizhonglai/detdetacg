@extends('layouts.master')
@extends('components.menu-left')
@extends('components.main-footer')
 
@section('css_include')
@stop

@section('javascript_include')
@stop

@section('content')
        <!-- Right Column Start-->
        <div class="right_colmn">
        	<!-- Bread Crumb and Search Section -->
        	<div class="breadcrumb_search">
            	<!-- Bread Crumb Section -->
            	<ul class="crumb">
                	<li><a href="#" class="home">&nbsp;<span class="dis_none">Home</span></a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Categories</a></li>
                </ul>
                <!-- Search Section -->
                <ul class="search">
                	<li><input name="" type="text" class="search_bar" /></li>
                    <li><input name="" type="button" class="go" /></li>
                </ul>
            </div>            
            <!-- Register Section -->
            <div class="register">
            	<h2 class="heading">Login</h2>
                <div class="gre_sec">
                	<h3>New Customer</h3>
                    <p class="bold">I am a new customer.</p>
                    <p>
By creating an account at osCommerce Online Demonstration you will be able to shop faster, be up to date on an orders status, and keep track of the orders you have previously made.
                    </p>
                    <a href="sign-up" class="button padng"><span>Register</span></a>
                </div>
                <div class="gre_sec">
                	<h3>Returning Customer</h3>
                    <ul class="forms">
                    	<li class="txt">Your name</li>
                    	<li class="inputfield"><input name="" type="text" class="bar" /></li>
                        <li class="req">(Required)</li>
                    </ul>
                    <ul class="forms">
                    	<li class="txt">Password</li>
                    	<li class="inputfield"><input name="" type="text" class="bar" /></li>
                        <li class="req">(Required)</li>
                    </ul>
                    <div class="clear"></div>
                    <ul class="forms">
                    	<li class="txt">&nbsp;</li>
                    	<li class="inputfield"><a href="sign-up" class="button"><span>Register</span></a></li>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <!-- Right Column End-->
<div class="clear"></div>
@stop