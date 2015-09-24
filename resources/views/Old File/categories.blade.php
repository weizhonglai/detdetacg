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
            <!-- Categories Section -->
            <div class="categories">
            	<h2 class="heading">New products for this category</h2>
            	<ul>
                	<li>
                    	<h4><a href="listing">Endless Entertainment</a></h4>
                        <a href="listing"><img src="templates/images/category_img.gif" alt="" /></a>
                        <p>
                        	Lorem ipsum dolor sit amet, consectetur adipiscing elit.Mauris venenatis iaculis urna,
                        </p>
                    </li>
                    <li>
                    	<h4><a href="listing">Endless Entertainment</a></h4>
                        <a href="listing"><img src="templates/images/category_img.gif" alt="" /></a>
                        <p>
                        	Lorem ipsum dolor sit amet, consectetur adipiscing elit.Mauris venenatis iaculis urna,
                        </p>
                    </li>
                    <li class="last">
                    	<h4><a href="listing">Endless Entertainment</a></h4>
                        <a href="listing"><img src="templates/images/category_img.gif" alt="" /></a>
                        <p>
                        	Lorem ipsum dolor sit amet, consectetur adipiscing elit.Mauris venenatis iaculis urna,
                        </p>
                    </li>
                    <li>
                    	<h4><a href="listing">Endless Entertainment</a></h4>
                        <a href="listing"><img src="templates/images/category_img.gif" alt="" /></a>
                        <p>
                        	Lorem ipsum dolor sit amet, consectetur adipiscing elit.Mauris venenatis iaculis urna,
                        </p>
                    </li>
                    <li>
                    	<h4><a href="listing">Endless Entertainment</a></h4>
                        <a href="listing"><img src="templates/images/category_img.gif" alt="" /></a>
                        <p>
                        	Lorem ipsum dolor sit amet, consectetur adipiscing elit.Mauris venenatis iaculis urna,
                        </p>
                    </li>
                    <li class="last">
                    	<h4><a href="listing">Endless Entertainment</a></h4>
                        <a href="listing"><img src="templates/images/category_img.gif" alt="" /></a>
                        <p>
                        	Lorem ipsum dolor sit amet, consectetur adipiscing elit.Mauris venenatis iaculis urna,
                        </p>
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
            <!-- Product Listing Section -->
            <div class="prod_listing">
            	<h2 class="heading">New products for this category</h2>
                <ul>
                	<li>
                    	<a href="prod_detail"><img src="templates/images/img1.gif" alt="" /></a>
                        <p class="title">Die Hard With A Vengeance</p>
                        <p class="price bold">GP $ 500, 00</p>
                        <a href="cart" class="button"><span>Buy Now</span></a>
                    </li>
                    <li>
                    	<a href="prod_detail"><img src="templates/images/img1.gif" alt="" /></a>
                        <p class="title">Die Hard With A Vengeance</p>
                        <p class="price bold">GP $ 500, 00</p>
                        <a href="cart" class="button"><span>Buy Now</span></a>
                    </li>
                    <li>
                    	<a href="prod_detail"><img src="templates/images/img1.gif" alt="" /></a>
                        <p class="title">Die Hard With A Vengeance</p>
                        <p class="price bold">GP $ 500, 00</p>
                        <a href="cart" class="button"><span>Buy Now</span></a>
                    </li>
                    <li>
                    	<a href="prod_detail"><img src="templates/images/img1.gif" alt="" /></a>
                        <p class="title">Die Hard With A Vengeance</p>
                        <p class="price bold">GP $ 500, 00</p>
                        <a href="cart" class="button"><span>Buy Now</span></a>
                    </li>
                    <li>
                    	<a href="prod_detail"><img src="templates/images/img1.gif" alt="" /></a>
                        <p class="title">Die Hard With A Vengeance</p>
                        <p class="price bold">GP $ 500, 00</p>
                        <a href="cart" class="button"><span>Buy Now</span></a>
                    </li>
                    <li>
                    	<a href="prod_detail"><img src="templates/images/img1.gif" alt="" /></a>
                        <p class="title">Die Hard With A Vengeance</p>
                        <p class="price bold">GP $ 500, 00</p>
                        <a href="cart" class="button"><span>Buy Now</span></a>
                    </li>
                    <li>
                    	<a href="prod_detail"><img src="templates/images/img1.gif" alt="" /></a>
                        <p class="title">Die Hard With A Vengeance</p>
                        <p class="price bold">GP $ 500, 00</p>
                        <a href="cart" class="button"><span>Buy Now</span></a>
                    </li>
                    <li>
                    	<a href="prod_detail"><img src="templates/images/img1.gif" alt="" /></a>
                        <p class="title">Die Hard With A Vengeance</p>
                        <p class="price bold">GP $ 500, 00</p>
                        <a href="cart" class="button"><span>Buy Now</span></a>
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
            <!-- Pagination -->
            <div class="paging">
            	<p class="bold">1-90 IN 4934 ITEMS</p>
                <ul>
                	<li><a href="#" class="prev">&nbsp;<span class="dis_none">Previous</span></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#" class="next">&nbsp;<span class="dis_none">Next</span></a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
        <!-- Right Column End-->
</div>
<div class="clear"></div>
@stop