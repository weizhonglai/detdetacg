@extends('layouts.master2')
@section('title', 'User Profile Page')
@extends('components.menu-left2')
@extends('components.main-footer')
 
@section('css_include')
@stop

@section('javascript_include')
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/templates/admin/vendors/moment/moment.js"></script>
<script src="/templates/admin/vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="/templates/admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="/templates/admin/vendors/jquery-maskedinput/jquery-maskedinput.js"></script>

<script src="/assets/js/profile.js"></script>
@stop

@section('content')
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" data-ng-init="init()">
	<div class="profile">
    	<h2 class="heading">My Profile</h2>
        <div class="gre_sec">
        	<h3>Your Personal Details</h3>
            <ul class="forms">
            	<li class="txt">Name</li>
            	<li class="inputfield">
                    <div class="row">
                        <div class="col-xs-6 first_name" style="padding-right:0px">
                            <input type="text" class="first_name" style="width: 92%" value="{{$user->first_name}}" />
                        </div>
                        <div class="col-xs-6 last_name" style="padding-left:0px">
                            <input type="text" class="last_name" style="width: 92%" value="{{$user->last_name}}" />
                        </div>
                    </div>
                </li>
            </ul>
            <div class="clear"></div>
            <ul class="forms">
                <li class="txt">E-Mail Address</li>
                <li class="inputfield email"><input type="text" class="email" value="{{$user->email}}" /></li>
            </ul>
            <div class="clear"></div>
            <ul class="forms">
                <li class="txt">Date of Birth</li>
                <li class="inputfield dob"><input type="text" data-date-format="yyyy-mm-dd" class="dob datepicker-default" placeholder="yyyy-mm-dd" value="{{$user->dob}}" /></li>
            </ul>
            <div class="clear"></div>
            @if ($user->nric != '')
            <ul class="forms">
                <li class="txt">NRIC</li>
                <li class="inputfield nric"><input type="text" id="date" class="nric" placeholder="______-__-____" value="{{$user->nric}}"/></li>
            </ul>
            <div class="clear"></div>
            @endif
            @if ($user->passport != '')
            <ul class="forms">
                <li class="txt">Passport Num</li>
                <li class="inputfield passport"><input type="text" class="passport" value="{{$user->passport}}" /></li>
            </ul>
            <div class="clear"></div>
            @endif
            <ul class="forms">
            	<li class="txt">Gender</li>
            	<li class="radiobutton gender">
                @if ($user->gender == 'male')
                    <input name="gender" type="radio" value="male" checked="true"/> <span>Mr.</span>
                @else
                    <input name="gender" type="radio" value="male"/> <span>Mr.</span>
                @endif
                @if ($user->gender == 'female')
                    <input name="gender" type="radio" value="female" checked="true"/> <span>Mrs.</span>
                @else
                    <input name="gender" type="radio" value="female"/> <span>Mrs.</span>    
                @endif
                </li>
            </ul>
            <div class="clear"></div>
            @if ($user->mobile_number != '')
            <ul class="forms">
                <li class="txt">Mobile Number</li>
                <li class="inputfield mobile"><input type="text" id="phone" class="mobile" placeholder="___-_______" value="{{$user->mobile_number}}"/></li>
            </ul>
            <div class="clear"></div>
            @endif
            @if ($user->home_number != '0-')
            <ul class="forms">
                <li class="txt">Home Number</li>
                <li class="inputfield home"><input type="text" class="home" value="{{$user->home_number}}" /></li>
            </ul>
            <div class="clear"></div>
            @endif
            @if ($user->office_number != '0-')
            <ul class="forms">
                <li class="txt">Office Number</li>
                <li class="inputfield office"><input type="text" class="office" value="{{$user->office_number}}" /></li>
            </ul>
            <div class="clear"></div>
            @endif
             @if ($user->fax_number != '')
            <ul class="forms">
                <li class="txt">Fax Number</li>
                <li class="inputfield fax"><input type="text" class="fax" value="{{$user->fax_number}}" /></li>
            </ul>
            <div class="clear"></div>
            @endif
        </div>
    </div>
    <div class="row" style="width: 698px;">
        <a href="#" class="button right" ng-click="updateInfo()"><span>Save</span></a>

    </div>
    
</div>   
   
@stop