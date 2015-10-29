@extends('layouts.master')
@extends('components.menu-left')
@extends('components.main-footer')
 
@section('css_include')
<link type="text/css" rel="stylesheet" href="/templates/admin/vendors/bootstrap-datepicker/css/datepicker.css">
@stop

@section('javascript_include')
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/templates/admin/vendors/moment/moment.js"></script>
<script src="/templates/admin/vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="/templates/admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="/templates/admin/vendors/jquery-maskedinput/jquery-maskedinput.js"></script>

<script src="/assets/js/sign-up.js"></script>
@stop

@section('content')
    <!-- Right Column Start-->
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" data-ng-init="init()">
        <div class="right_colmn">           
            <!-- Register Section -->
            <div class="register">
            	<h2 class="heading">Register</h2>
                <div class="gre_sec">
                	<h3>Your Personal Details</h3>
                    <ul class="forms">
                    	<li class="txt">Name</li>
                    	<li class="inputfield">
                            <div class="row">
                                <div class="col-xs-6" style="padding-right:0px">
                                    <input type="text" class="first_name" style="width: 90%" placeholder="First Name"/>
                                </div>
                                <div class="col-xs-6" style="padding-left:0px">
                                    <input type="text" class="last_name" style="width: 90%" placeholder="Last Name" />
                                </div>
                            </div>
                        </li>
                        <li class="req">(Required)</li>
                    </ul>
                    <div class="clear"></div>
                    <div class="option_gender">
                    <ul class="forms" >
                        <li class="txt">Gender</li>
                        <li class="radiobutton"><input name="gender" type="radio" value="male" /> <span>Mr.</span><input name="gender" type="radio" value="female"/> <span>Mrs.</span></li>
                    </ul>
                    </div>
                    <div class="clear"></div>
                    <ul class="forms">
                        <li class="txt">Date of Birth</li>
                        <li class="inputfield"><input type="text" data-date-format="yyyy-mm-dd" class="dob datepicker-default" placeholder="yyyy-mm-dd" />
                        </li>
                        <li class="req">(Required)</li>
                    </ul>
                    <div class="clear"></div>
                    <ul class="forms">
                        <li class="txt">NRIC</li>
                        <li class="inputfield"><input type="text" id="date" class="nric" placeholder="______-__-____"/>
                        </li>
                        <li class="req">(Required)</li>
                    </ul>
                    <div class="clear"></div>
                    <ul class="forms">
                        <li class="txt">Passport Num</li>
                        <li class="inputfield"><input type="text" class="passport" /></li>
                        <li class="req">(Required)</li>
                    </ul>
                    <div class="clear"></div>
                    <ul class="forms">
                        <li class="txt">E-Mail Address</li>
                        <li class="inputfield">
                            <div class="row">
                                <div class="col-xs-7">
                                    <input type="text" class="mail_domain" style="width: 90%"/>&nbsp;&nbsp;@
                                </div>
                                <div class="col-xs-5" style="padding-left:0px">
                                    <select class="mail_sys" style="height: 21px; width: 90%; ">
                                        <option>gmail.com</option>
                                        <option>hotmail.com</option>
                                    </select>
                                </div>
                            </div>
                        </li>
                        <li class="req">(Required)</li>
                    </ul>
                    <div class="clear"></div>

                </div>
                <div class="gre_sec">
                	<h3>Your Address</h3>
                    <ul class="forms">  
                    	<li class="txt">Street Address 1</li>
                        <li class="inputfield"><input type="text" class="address1" /></li>
                    </ul>
                    <div class="clear"></div>
                    <ul class="forms">
                        <li class="txt">Street Address 2</li>
                        <li class="inputfield"><input type="text" class="address2" /></li>
                    </ul>
                    <div class="clear"></div>
                    <ul class="forms">
                    	<li class="txt">Post Code</li>
                    	<li class="inputfield"><input type="text" class="post_code" /></li>
                    </ul>
                    <div class="clear"></div>
                    <ul class="forms">
                    	<li class="txt">City</li>
                    	<li class="inputfield"><input type="text" class="city" /></li>
                    </ul>
                    <div class="clear"></div>
                    <ul class="forms">
                    	<li class="txt">State/Province</li>
                    	<li class="inputfield">
                            <select class="state" style="height: 21px; width: 96%">
                                <option>Johor</option>
                                <option>Kedah</option>
                                <option>Kelantan</option>
                                <option>Malacca</option>
                                <option>Negeri Sembilan</option>
                                <option>Pahang</option>
                                <option>Perak</option>
                                <option>Perlis</option>
                                <option>Penang</option>
                                <option>Sabah</option>
                                <option>Sarawak</option>
                                <option>Selangor</option>
                                <option>Terengganu</option>
                            </select>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div>
                <div class="gre_sec">
                	<h3>Your Contact Information</h3>
                    <ul class="forms">
                    	<li class="txt">Phone Number</li>
                    	<li class="inputfield">
                            <div class="row">
                                <div class="col-xs-2">
                                    <span style="position: absolute">01</span><input type="text" class="phone_area_code" style="width: 100%; margin-left: 18px" />
                                </div>
                                <div class="col-xs-10">
                                    <span style="position: absolute; left: 6px"> - </span><input type="text" class="phone_num" style="width: 95%;" />
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="forms">
                    	<li class="txt">Home Number</li>
                    	<li class="inputfield">
                            <div class="row">
                                <div class="col-xs-2">
                                    <span style="position: absolute">0</span><input type="text" class="home_area_code" style="width: 100%; margin-left: 15px" />
                                </div>
                                <div class="col-xs-10">
                                    <span style="position: absolute; left: 5px"> - </span><input type="text" class="home_num" style="width: 95%;" />
                                </div>
                            </div>
                        </li>
                        <li class="req"></li>
                    </ul>
                    <ul class="forms">
                        <li class="txt">Office Number</li>
                        <li class="inputfield">
                            <div class="row">
                                <div class="col-xs-2">
                                    <span style="position: absolute">0</span><input type="text" class="office_area_code" style="width: 100%; margin-left: 15px" />
                                </div>
                                <div class="col-xs-10">
                                    <span style="position: absolute; left: 5px"> - </span><input type="text" class="office_num" style="width: 95%;" />
                                </div>
                            </div>
                        </li>
                        <li class="req"></li>
                    </ul>
                    <ul class="forms">
                        <li class="txt">Fax Number</li>
                        <li class="inputfield">
                            <li class="inputfield"><input type="text" class="fax_number" /></li>
                        </li>
                        <li class="req"></li>
                    </ul>
                    <div class="clear"></div>
                </div>
                
                <div class="gre_sec">
                	<h3>Login Information</h3>
                    <ul class="forms">
                        <li class="txt">Username</li>
                        <li class="inputfield"><input type="text" class="username" /></li>
                        <li class="req">(Required)</li>
                    </ul>
                    <div class="clear"></div>
                    <ul class="forms">
                    	<li class="txt">Password</li>
                    	<li class="inputfield"><input type="password" class="first_password" /></li>
                        <li class="req">(Required)</li>
                    </ul>
                    <ul class="forms">
                    	<li class="txt">Confirm</li>
                    	<li class="inputfield"><input type="password" class="confirm_password" /></li>
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

@stop