@extends('layouts.master2')
@section('title', 'User Profile Page')
@extends('components.menu-left2')
@extends('components.main-footer')
 
@section('css_include')
@stop

@section('javascript_include')
@stop

@section('content')
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
	<div class="profile">
    	<h2 class="heading">My Profile</h2>
        <div class="gre_sec">
        	<h3>Your Personal Details</h3>
            <ul class="forms">
            	<li class="txt">Name</li>
            	<li class="inputfield"><input type="text" class="name" /></li>
            </ul>
            <div class="clear"></div>
            <ul class="forms">
            	<li class="txt">Gender</li>
            	<li class="inputfield"><input type="text" class="gender" /></li>
            </ul>
            <div class="clear"></div>
            <ul class="forms">
                <li class="txt">Date of Birth</li>
                <li class="inputfield"><input type="text" class="dob" /></li>
            </ul>
            <div class="clear"></div>
            <ul class="forms">
                <li class="txt">NRIC</li>
                <li class="inputfield"><input type="text" class="nric" /></li>
            </ul>
            <div class="clear"></div>
            <ul class="forms">
                <li class="txt">Passport Num</li>
                <li class="inputfield"><input type="text" class="passport" /></li>
            </ul>
            <div class="clear"></div>
            <ul class="forms">
                <li class="txt">E-Mail Address</li>
                <li class="inputfield"><input type="text" class="email" /></li>
            </ul>
            <div class="clear"></div>
        </div>

    </div>
</div>   
   
@stop