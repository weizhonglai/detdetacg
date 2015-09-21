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
            	<h2 class="heading">Register</h2>
                <div class="contactform">
                	<ul class="c_forms">
                    	<li class="txt">Your name <span class="graytxt">(Required)</span></li>
                        <li class="inputfield"><input name="" type="text" class="bar" /></li>
                    </ul>
                    <ul class="c_forms">
                    	<li class="txt">Email Address <span class="graytxt">(Required)</span></li>
                        <li class="inputfield"><input name="" type="text" class="bar" /></li>
                    </ul>
                    <ul class="c_forms">
                    	<li class="txt">Company</li>
                        <li class="inputfield"><input name="" type="text" class="bar" /></li>
                    </ul>
                    <ul class="c_forms">
                    	<li class="txt">Telephone number</li>
                        <li class="inputfield"><input name="" type="text" class="bar" /></li>
                    </ul>
                    <ul class="c_forms">
                    	<li class="txt">Your message <span class="graytxt">(Required)</span></li>
                        <li class="inputtextfield"><textarea name="" cols="" rows="" class="bar"></textarea></li>
                    </ul>
                    <a href="cart.html" class="button left registerbtn"><span>Register</span></a>
                </div>
                <div class="contact_right">
                	<div class="map">
                    	<iframe width="218" height="154" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=london&amp;ie=UTF8&amp;hq=&amp;hnear=London,+United+Kingdom&amp;t=h&amp;z=14&amp;ll=51.500152,-0.126236&amp;output=embed"></iframe><br /><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=london&amp;ie=UTF8&amp;hq=&amp;hnear=London,+United+Kingdom&amp;t=h&amp;z=14&amp;ll=51.500152,-0.126236" class="enlarg">Enlarge</a><div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                    <div class="adres">
                    	<h3>Get in touch</h3>
                        <p>
                        	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a nisl lobortis nunc euismod.
                        </p>
                        <p class="black">
                        	Kyanmedia Ltd<br />
                            65 Smithbrook Kilns<br />
                            Cranleigh<br />
                            Surrey<br />
                            GU6 8JJ<br />
                        </p>
                        <p class="black">
                        	Kyanmedia Ltd<br />
                            65 Smithbrook Kilns<br />
                            Cranleigh<br />
                            Surrey<br />
                            GU6 8JJ<br />
                        </p>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <!-- Right Column End-->
</div>
<div class="clear"></div>
@stop