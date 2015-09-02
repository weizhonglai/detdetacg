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
            <!-- Shopping Cart Section -->
            <div class="cart">
            	<h2 class="heading">Shopping Cart</h2>
                <div class="grey_bar">
                    <ul class="cartitems">
                        <li class="image">Image</li>
                        <li class="name">Name</li>
                        <li class="price">Price</li>
                        <li class="quantity">Quantity</li>
                        <li class="action">Action</li>
                        <li class="total">Total</li>
                    </ul>
            	</div>
                <div class="cart_sec">
            	<ul class="listing">
                	<li class="items">
                        <ul class="cartitems">
                            <li class="image"><img src="/templates/images/thumb1.gif" alt="" /></li>
                            <li class="name">
                                <h3>Juicy Couture</h3>
                            </li>
                            <li class="price smalltext">$187.95</li>
                            <li class="quantity smalltext"><input name="" type="text" value="1" /></li>
                            <li class="action"><a href="#" class="cross">&nbsp;<span class="dis_none">Delete Item</span></a></li>
                            <li class="total smalltext">$187.95</li>
                        </ul>
                	</li>
                    <li class="grey items">
                        <ul class="cartitems">
                            <li class="image"><img src="/templates/images/thumb2.gif" alt="" /></li>
                            <li class="name">
                                <h3>Juicy Couture</h3>
                            </li>
                            <li class="price smalltext">$187.95</li>
                            <li class="quantity smalltext"><input name="" type="text" value="1" /></li>
                            <li class="action"><a href="#" class="cross">&nbsp;<span class="dis_none">Delete Item</span></a></li>
                            <li class="total smalltext">$187.95</li>
                        </ul>
                	</li>
                    <li class="items">
                        <ul class="cartitems">
                            <li class="image"><img src="/templates/images/thumb3.gif" alt="" /></li>
                            <li class="name">
                                <h3>Juicy Couture</h3>
                            </li>
                            <li class="price smalltext">$187.95</li>
                            <li class="quantity smalltext"><input name="" type="text" value="1" /></li>
                            <li class="action"><a href="#" class="cross">&nbsp;<span class="dis_none">Delete Item</span></a></li>
                            <li class="total smalltext">$187.95</li>
                        </ul>
                	</li>
                    <li class="grey items">
                        <ul class="cartitems">
                            <li class="image"><img src="/templates/images/thumb4.gif" alt="" /></li>
                            <li class="name">
                                <h3>Juicy Couture</h3>
                            </li>
                            <li class="price smalltext">$187.95</li>
                            <li class="quantity smalltext"><input name="" type="text" value="1" /></li>
                            <li class="action"><a href="#" class="cross">&nbsp;<span class="dis_none">Delete Item</span></a></li>
                            <li class="total smalltext">$187.95</li>
                        </ul>
                	</li>
                    <li class="items">
                        <ul class="cartitems">
                            <li class="image"><img src="/templates/images/thumb5.gif" alt="" /></li>
                            <li class="name">
                                <h3>Juicy Couture</h3>
                            </li>
                            <li class="price smalltext">$187.95</li>
                            <li class="quantity smalltext"><input name="" type="text" value="1" /></li>
                            <li class="action"><a href="#" class="cross">&nbsp;<span class="dis_none">Delete Item</span></a></li>
                            <li class="total smalltext">$187.95</li>
                        </ul>
                	</li>
                </ul>
                <div class="sub_total">
                	<ul>
                    	<li class="s_total">Sub Total</li>
                        <li>$ 385.00</li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <a href="#" class="button left marg"><span>Continue Shopping</span></a>
            <a href="#" class="button left marglet"><span>Update</span></a>
            <a href="#" class="button right marg"><span>Checkout</span></a>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <!-- Right Column End-->
</div>
<div class="clear"></div>
@stop