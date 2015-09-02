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
            <!-- Product Detail Section -->
            <div class="prod_detail">
            	<h2 class="heading">New products for this category</h2>
                <div class="detail">
                	<p class="txt">
                    	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibulum in, volutpat eget, dapibus ac, lectus. Curabitur dolor sapien, hendrerit non, suscipit bibendum, auctor ac, arcu. Vestibulum dapibus. Sed pede lacus, pretium in, condimentum sit amet, mollis dapibus, magna. Ut bibendum dolor nec augue. Ut tempus luctus metus. Sed a velit. Pellentesque at libero elementum ante condimentum sollicitudin. Pellentesque lorem ipsum, semper quis, interdum et, sollicitudin eu, purus. Vivamus fringilla ipsum vel orci. Phasellus vitae massa at massa pulvinar pellentesque. Fusce tincidunt libero vitae odio. Donec malesuada diam nec mi. Integer hendrerit pulvinar ante. Donec eleifend, nisl eget aliquam congue, justo metus venenatis neque, vel tincidunt elit augue sit amet velit. Nulla facilisi. Aenean suscipit.
                    </p>
                  <div class="prod_info">
                    	<ul>
                        	<li>Price:</li>
                            <li>$ 10.00</li>
                        </ul>
                        
                        <ul>
                        	<li>Availability:</li>
                            <li>In Stock</li>
                        </ul>
                        <ul>
                        	<li>Model:</li>
                            <li>Keyboard</li>
                        </ul>
                    <ul>
                        	<li>Average Rating:</li>
                            <li>Not Rated</li>
                      </ul>
                      <ul>
                       	  <li>Color:</li>
                          <li>
                          	<select name="jumpMenu3" id="jumpMenu3" onchange="MM_jumpMenu('parent',this,0)">
                            	<option value="#">item1</option>
                                <option value="#">item2</option>
                                <option value="#">item3</option>
                            </select>
                          </li>
                      </ul>
                      <ul>
                       	  <li>Size:</li>
                          <li>
                          	<select name="jumpMenu4" id="jumpMenu4" onchange="MM_jumpMenu('parent',this,0)">
                            	<option value="#">item1</option>
                                <option value="#">item2</option>
                                <option value="#">item3</option>
                            </select>
                          </li>
                      </ul>
                      <ul>
                       	  <li class="addtocart">
							<a href="#" class="button"><span>Reviews</span></a>
                          </li>
                          <li>
							<a href="cart" class="button"><span>Add to Cart</span></a>
                          </li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                </div>
                <!-- Thumbnails -->
                <div class="thumbs">
                	<div id="gallery" class="ad-gallery">
      <div class="ad-image-wrapper">
      </div>
      
      <div class="ad-nav">
        <div class="ad-thumbs">
          <ul class="ad-thumb-list">
            <li>
              <a href="templates/images/prod1.gif">
                <img src="templates/images/thumbs/prod1.gif" alt="" class="image0" />
              </a>
            </li>
            <li>
              <a href="templates/images/prod2.gif">
                <img src="templates/images/thumbs/prod2.gif" alt="" class="image0" />
              </a>
            </li>
            <li>
              <a href="templates/images/prod3.gif">
                <img src="templates/images/thumbs/prod3.gif" alt="" class="image0" />
              </a>
            </li>
            <li>
              <a href="templates/images/prod4.gif">
                <img src="templates/images/thumbs/prod4.gif" alt="" class="image0" />
              </a>
            </li>
            <li>
              <a href="templates/images/prod5.gif">
                <img src="templates/images/thumbs/prod5.gif" alt="" class="image0" />
              </a>
            </li>
            <li>
              <a href="templates/images/prod6.gif">
                <img src="templates/images/thumbs/prod6.gif" alt="" class="image0" />
              </a>
            </li>
            <li>
              <a href="templates/images/prod7.gif">
                <img src="templates/images/thumbs/prod7.gif" alt="" class="image0" />
              </a>
            </li>
          </ul>
        </div>
      </div>

    </div>
                </div>
            </div>
            <div class="clear"></div>
            <!-- Product Listing Section -->
            <div class="prod_listing">
            	<h3 class="subheading">New products for this category</h3>
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
                </ul>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <!-- Right Column End-->
</div>
<div class="clear"></div>
@stop