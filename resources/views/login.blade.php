@extends('layouts.master')
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
            <!-- Register Section -->
            <div class="register">
            	<h2 class="heading">Login</h2>
                <div class="gre_sec">
                	<h3>New Customer</h3>
                    <p class="bold">I am a new customer.</p>
                    <p>
By creating an account at osCommerce Online Demonstration you will be able to shop faster, be up to date on an orders status, and keep track of the orders you have previously made.
                    </p>
                    <a href="cart.html" class="button padng"><span>Register</span></a>
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
                    	<li class="inputfield"><a href="cart.html" class="button"><span>Register</span></a></li>
                    </ul>
                    <div class="clear"></div>
                </div>
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
