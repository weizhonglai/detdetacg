@extends('layouts.master')
<body>
<div id="wrapper">
	<!-- Header Start -->
    <div id="header">
    	<!-- Logo Start -->
        <div class="logo">
        	<a href="index.html">&nbsp;<span class="dis_none">Estore 3</span></a>
        </div>
        <!-- Logo End -->
        <!-- Cart and Top Navigation Section Start -->
        <div class="cart_topnavi">
        	<!-- Cart Tab Start -->
        	<div class="cart_tab">
            	<div class="left_curv">&nbsp;</div>
                <div class="center_curv">
                	<ul>
                    	<li class="bag bold"><a href="cart.html">Shopping Bag</a></li>
                        <li class="items"><a href="cart.html">5 items</a></li>
                        <li class="price"><a href="cart.html">$ 150</a></li>
                    </ul>
                </div> 
                <div class="right_curv">&nbsp;</div>
            </div>
            <div class="clear"></div>
            <!-- Cart Tab End -->
            <div class="topnavi">
            	<ul>
                	<li><a href="#">My Account</a></li>
                    <li><a href="#">My Wishlist</a></li>
                    <li><a href="cart.html">My Cart</a></li>
                    <li><a href="#">Checkout</a></li>
                    <li class="last"><a href="#TB_inline?height=255&amp;width=440&amp;inlineId=myOnPageContent" rel="sexylightbox[22]" >Log In</a>
                    	<div id="myOnPageContent" style="display:none;">
              				<h1 class="lightboxheading">Login</h1>
                        <p class="lightboxtxt">Don’t have an account? <a href="register.html">Creat one</a>, It’s simple and free.</p>
                        <div class="gray">
                            <ul class="lightboxforms">
                                <li class="txt">User Name:</li>
                                <li class="inputfield"><input name="" type="text" /></li>
                            </ul>
                            <ul class="lightboxforms last">
                                <li class="txt">Password:</li>
                                <li class="inputfield"><input name="" type="text" /></li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                        <ul class="buttons padbutn">
                            <li class="left"><a href="#" class="button"><span>Cancel</span></a></li>
                            <li class="right"><a href="#" class="button"><span>Sign In</span></a></li>
                        </ul>
            			</div>
                    </li>
                </ul>
            </div>
            <!-- Cart Tab End --> 
        </div>
        <!-- Cart and Top Navigation Section Start -->
    </div>
    <!-- Header End -->
    <!-- Navi Start -->
    <div id="navi">
    	<!-- Navigation Start -->
    	<div class="navigation">
        	<div id="smoothmenu1" class="ddsmoothmenu">
                <ul>
                    <li class="icon"><a href="index.html">&nbsp;<span class="dis_none">Home</span></a></li>
                    <li><a href="#">About Us</a>
                        <ul>
                            <li><a href="#">General help</a></li>
                            <li><a href="#">Posts</a></li>
                            <li><a class="last" href="#">Pages</a></li>
                        </ul>
                    </li>
                    <li><a href="#">How to Buy</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Pages</a>
                        <ul>
                            <li><a href="#" class="last">Colors</a>
                                <ul>
                                    <li><a href="javascript:chooseStyle('none', 60)">Gray</a></li>
                                    <li><a href="javascript:chooseStyle('blue', 60)">Blue</a></li>
                                    <li><a href="javascript:chooseStyle('red', 60)">Red</a></li>
                                    <li><a href="javascript:chooseStyle('orange', 60)">Orange</a></li>
                                    <li><a href="javascript:chooseStyle('green', 60)">Green</a></li>
                                </ul>
                            </li>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="categories.html">Categories</a></li>
                            <li><a href="listing.html">Listing</a></li>
                            <li><a href="prod_detail.html">Product Details</a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
				<div class="clear"></div>
			</div>
        </div>
        <!-- Navigation End -->
        <!-- Flags and currencies Start -->
        <div class="flags_currencies">
        	<ul>
            	<li>
                	<a href="#" class="english">&nbsp;<span class="dis_none">English</span></a>
                    <a href="#" class="dutch">&nbsp;<span class="dis_none">Dutch</span></a>
                    <a href="#" class="spanish">&nbsp;<span class="dis_none">Spanish</span></a>
                </li>
                <li>
                	<select name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)">
                		<option value="#">US Dollar</option>
                	    <option value="#">Euro</option>
                	    <option value="#">GBP</option>
              	    </select>
                </li>
            </ul>
        </div>
        <!-- Flags and currencies End -->
    </div>
    <!-- Navi End -->
    <!-- Content Start -->
    <div id="content">
    	<!-- Left Column Start-->
        <div class="left_colmn">
        	<!-- Categories Section -->
        	<div class="section">
            	<h4>Categories</h4>
                <div class="glossymenu">
                    <a class="menuitem submenuheader" href="categories.html" >Bracelets</a>
                    <div class="submenu">
                        <ul>
                            <li><a href="listing.html">Round Brilliant</a></li>
                            <li><a href="listing.html">Princess Cut</a></li>
                            <li><a href="listing.html">Emerald Cut</a></li>
                            <li><a href="listing.html">Diamond Set</a></li>
                        </ul>
                    </div>
                    <a class="menuitem submenuheader" href="categories.html" >Earrings</a>
                    <div class="submenu">
                        <ul>
                            <li><a href="listing.html">Round Brilliant</a></li>
                            <li><a href="listing.html">Princess Cut</a></li>
                            <li><a href="listing.html">Emerald Cut</a></li>
                            <li><a href="listing.html">Diamond Set</a></li>
                        </ul>
                    </div>
                    <a class="menuitem submenuheader" href="categories.html" >Jewellery boxes</a>
                    <div class="submenu">
                        <ul>
                            <li><a href="listing.html">Round Brilliant</a></li>
                            <li><a href="listing.html">Princess Cut</a></li>
                            <li><a href="listing.html">Emerald Cut</a></li>
                            <li><a href="listing.html">Diamond Set</a></li>
                        </ul>
                    </div>
                    <a class="menuitem submenuheader" href="categories.html" >Key rings &lt; charms</a>
                    <div class="submenu">
                        <ul>
                            <li><a href="listing.html">Round Brilliant</a></li>
                            <li><a href="listing.html">Princess Cut</a></li>
                            <li><a href="listing.html">Emerald Cut</a></li>
                            <li><a href="listing.html">Diamond Set</a></li>
                        </ul>
                    </div>
                    <a class="menuitem submenuheader" href="categories.html" >Matching sets</a>
                    <div class="submenu">
                        <ul>
                            <li><a href="listing.html">Round Brilliant</a></li>
                            <li><a href="listing.html">Princess Cut</a></li>
                            <li><a href="listing.html">Emerald Cut</a></li>
                            <li><a href="listing.html">Diamond Set</a></li>
                        </ul>
                    </div>
                    <a class="menuitem submenuheader" href="categories.html" >Necklaces</a>
                    <div class="submenu">
                        <ul>
                            <li><a href="listing.html">Round Brilliant</a></li>
                            <li><a href="listing.html">Princess Cut</a></li>
                            <li><a href="listing.html">Emerald Cut</a></li>
                            <li><a href="listing.html">Diamond Set</a></li>
                        </ul>
                    </div>
                    <a class="menuitem submenuheader" href="categories.html" >Rings</a>
                    <div class="submenu">
                        <ul>
                            <li><a href="listing.html">Round Brilliant</a></li>
                            <li><a href="listing.html">Princess Cut</a></li>
                            <li><a href="listing.html">Emerald Cut</a></li>
                            <li><a href="listing.html">Diamond Set</a></li>
                        </ul>
                    </div>
                    <a class="menuitem submenuheader" href="categories.html" >Tiaras</a>
                    <div class="submenu">
                        <ul>
                            <li><a href="listing.html">Round Brilliant</a></li>
                            <li><a href="listing.html">Princess Cut</a></li>
                            <li><a href="listing.html">Emerald Cut</a></li>
                            <li><a href="listing.html">Diamond Set</a></li>
                        </ul>
                    </div>
            	</div>
            </div>
            <!-- Manugacturers Section -->
			<div class="section">
                <h4>Compare Products</h4>
                <select name="jumpMenu2" id="jumpMenu2" onchange="MM_jumpMenu('parent',this,0)">
                    <option value="#">Show manufacturer list</option>
                    <option value="#">Sony</option>
                    <option value="#">Canon</option>
                    <option value="#">Samsung</option>
                </select>
			</div>
        	<!-- Newsletter Section -->
            <div class="section">
                <h4>Newsletter</h4>
                <p>
                    Sign Up for Newsletter
                </p>
                <input name="" type="text" class="bar" />
                <input name="" type="submit" class="subscribe" value="Subscribe" />
                <div class="clear"></div>
            </div>
        	<!-- Advertise Section -->
            <div class="section margn_end">
                <a href="#"><img src="images/ad.gif" class="adv" alt="" /><br /></a>
                <a href="#" class="readmore bold">Read More</a>
                <div class="clear"></div>
            </div>
        </div>
        <!-- Left Column End-->
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
							<a href="cart.html" class="button"><span>Add to Cart</span></a>
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
              <a href="images/prod1.gif">
                <img src="images/thumbs/prod1.gif" alt="" class="image0" />
              </a>
            </li>
            <li>
              <a href="images/prod2.gif">
                <img src="images/thumbs/prod2.gif" alt="" class="image0" />
              </a>
            </li>
            <li>
              <a href="images/prod3.gif">
                <img src="images/thumbs/prod3.gif" alt="" class="image0" />
              </a>
            </li>
            <li>
              <a href="images/prod4.gif">
                <img src="images/thumbs/prod4.gif" alt="" class="image0" />
              </a>
            </li>
            <li>
              <a href="images/prod5.gif">
                <img src="images/thumbs/prod5.gif" alt="" class="image0" />
              </a>
            </li>
            <li>
              <a href="images/prod6.gif">
                <img src="images/thumbs/prod6.gif" alt="" class="image0" />
              </a>
            </li>
            <li>
              <a href="images/prod7.gif">
                <img src="images/thumbs/prod7.gif" alt="" class="image0" />
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
                    	<a href="prod_detail.html"><img src="images/img1.gif" alt="" /></a>
                        <p class="title">Die Hard With A Vengeance</p>
                        <p class="price bold">GP $ 500, 00</p>
                        <a href="cart.html" class="button"><span>Buy Now</span></a>
                    </li>
                    <li>
                    	<a href="prod_detail.html"><img src="images/img1.gif" alt="" /></a>
                        <p class="title">Die Hard With A Vengeance</p>
                        <p class="price bold">GP $ 500, 00</p>
                        <a href="cart.html" class="button"><span>Buy Now</span></a>
                    </li>
                    <li>
                    	<a href="prod_detail.html"><img src="images/img1.gif" alt="" /></a>
                        <p class="title">Die Hard With A Vengeance</p>
                        <p class="price bold">GP $ 500, 00</p>
                        <a href="cart.html" class="button"><span>Buy Now</span></a>
                    </li>
                    <li>
                    	<a href="prod_detail.html"><img src="images/img1.gif" alt="" /></a>
                        <p class="title">Die Hard With A Vengeance</p>
                        <p class="price bold">GP $ 500, 00</p>
                        <a href="cart.html" class="button"><span>Buy Now</span></a>
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <!-- Right Column End-->
    </div>
    <!-- Content End -->
</div>
<div class="clear"></div>
<!-- Footer Start -->
<div id="footer">
	<div class="inner_sec">
    	<div class="foot_sec">
        	<h4>Useful Links</h4>
            <ul class="botm_links">
            	<li><a href="index.html">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">How to buy</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </div>
        <div class="foot_sec">
        	<h4>SOCIAL NETWORKING</h4>
            <ul class="botm_links">
            	<li class="linkd"><a href="http://www.linkedin.com/">Linkedin</a></li>
                <li class="facebook"><a href="http://www.facebook.com/">Facebook</a></li>
                <li class="twitter"><a href="http://twitter.com/">Twitter</a></li>
                <li class="rss"><a href="#">RSS</a></li>
                <li class="technorat"><a href="http://technorati.com/">Technorat</a></li>
            </ul>
        </div>
        <div class="foot_sec last">
        	<h4>Site Info</h4>
            <br />
            <p>
            	Build adhering to web standards valid XHTML and CSS
            </p>
            <p>
            	©2010  DUMMY, All Rights Reserved.
            </p>
            <p>
            	Web Design and Development: <a href="#"><img src="images/flower.gif" alt="" /></a>
            </p>
            <ul class="cards">
            	<li><a href="#" class="visa">&nbsp;<span class="dis_none">Visa</span></a></li>
                <li><a href="#" class="a_expres">&nbsp;<span class="dis_none">American Express</span></a></li>
                <li><a href="#" class="paypal">&nbsp;<span class="dis_none">Paypal</span></a></li>
                <li><a href="#" class="mastercard">&nbsp;<span class="dis_none">Master Card</span></a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<!-- Footer End -->
</body>
</html>
