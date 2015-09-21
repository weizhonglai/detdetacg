@extends('layouts.master')
@extends('components.menu-left')
@extends('components.main-footer')
 
@section('css_include')
@stop

@section('javascript_include')
<script src="/assets/js/sign-up.js"></script>
@stop

@section('content')
        <!-- Right Column Start-->
        <div class="right_colmn" ng-controller="MainController">
        	<!-- Bread Crumb and Search Section -->
        	<div class="breadcrumb_search">
            	<!-- Bread Crumb Section -->
            	<ul class="crumb">
                	<li><a href="#" class="home">&nbsp;<span class="dis_none">Home</span></a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">{{\Request::input('username')}}</a></li>

                </ul>
                <!-- Search Section -->
                <ul class="search">
                	<li><input name="" type="text" class="search_bar" /></li>
                    <li><input name="" type="button" class="go" /></li>
                </ul>
            </div>            
            <!-- Register Section -->
            <div class="register">
            	<h2 class="heading">Register</h2>
                <div class="gre_sec">
                	<h3>Your Personal Details</h3>
                    <ul class="forms">
                    	<li class="txt">Name</li>
                    	<li class="inputfield"><input name="" type="text" class="name" /></li>
                        <li class="req">(Required)</li>
                    </ul>
                    <div class="clear"></div>
                    <ul class="forms">
                    	<li class="txt">E-Mail Address</li>
                    	<li class="inputfield"><input name="" type="text" class="email" /></li>
                        <li class="req">(Required)</li>
                    </ul>
                    <div class="clear"></div>
                    <ul class="forms">
                        <li class="txt">NRIC</li>
                        <li class="inputfield"><input name="" type="text" class="nric" /></li>
                        <li class="req">(Required)</li>
                    </ul>
                    <div class="clear"></div>
                    <ul class="forms">
                        <li class="txt">Date of Birth</li>
                        <li class="inputfield"><input name="" type="text" class="dob" /></li>
                        <li class="req">(Required)</li>
                    </ul>
                    <div class="clear"></div>
                    <div class="option_gender">
                    <ul class="forms" >
                        <li class="txt">Gender</li>
                        <li class="radiobutton"><input name="gender" type="radio" value="male" /> <span>Male</span><input name="gender" type="radio" value="female"/> <span>Female</span></li>
                    </ul>
                    </div>
                    <div class="clear"></div>

                </div>
                <div class="gre_sec">
                	<h3>Your Address</h3>
                    <ul class="forms">  
                    	<li class="txt">Street Address 1</li>
                        <li class="inputfield"><input name="" type="text" class="address1" /></li>
                        <li class="req">(Required)</li>
                    </ul>
                    <div class="clear"></div>
                    <ul class="forms">
                        <li class="txt">Street Address 2</li>
                        <li class="inputfield"><input name="" type="text" class="address2" /></li>
                        <li class="req">(Required)</li>
                    </ul>
                    <div class="clear"></div>
                    <ul class="forms">
                    	<li class="txt">Post Code</li>
                    	<li class="inputfield"><input name="" type="text" class="post_code" /></li>
                        <li class="req">(Required)</li>
                    </ul>
                    <div class="clear"></div>
                    <ul class="forms">
                    	<li class="txt">City</li>
                    	<li class="inputfield"><input name="" type="text" class="city" /></li>
                        <li class="req">(Required)</li>
                    </ul>
                    <div class="clear"></div>
                    <ul class="forms">
                    	<li class="txt">State/Province</li>
                    	<li class="inputfield"><input name="" type="text" class="state" /></li>
                        <li class="req">(Required)</li>
                    </ul>
                    <div class="clear"></div>
                </div>
                <div class="gre_sec">
                	<h3>Your Contact Information</h3>
                    <ul class="forms">
                    	<li class="txt">Telephone Number</li>
                    	<li class="inputfield"><input name="" type="text" class="mobile" /></li>
                        <li class="req">(Required)</li>
                    </ul>
                    <ul class="forms">
                    	<li class="txt">Fax Number</li>
                    	<li class="inputfield"><input name="" type="text" class="fax_number" /></li>
                        <li class="req"></li>
                    </ul>
                    <div class="clear"></div>
                </div>
                
                <div class="gre_sec">
                	<h3>Your Password</h3>
                    <ul class="forms">
                    	<li class="txt">Password</li>
                    	<li class="inputfield"><input name="" type="text" class="first_password" /></li>
                        <li class="req">(Required)</li>
                    </ul>
                    <ul class="forms">
                    	<li class="txt">Confirm</li>
                    	<li class="inputfield"><input name="" type="text" class="confirm_password" /></li>
                        <li class="req">(Required)</li>
                    </ul>
                    <div class="clear"></div>
                </div>
                <a href="#" class="button right" ng-click="signUp()"><span>Register</span></a>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <!-- Right Column End-->
        </div>
<div class="clear"></div>


@stop