<!DOCTYPE html>
<html lang="en" ng-app="detdetApp">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DetDetACG</title>
<!-- //      Start Stylesheets       // -->
    <link rel="stylesheet" type="text/css" href="/templates/css/gray.css" title="gray" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="/templates/css/blue.css" title="blue" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="/templates/css/orange.css" title="orange" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="/templates/css/green.css" title="green" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="/templates/css/red.css" title="red" media="screen" />
    <link rel="stylesheet" type="text/css" href="/templates/css/sexylightbox.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/templates/css/ddsmoothmenu.css" />
    <link rel="stylesheet" type="text/css" href="/templates/css/page.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/templates/css/jquery.ad-gallery.css" />
    <link rel="stylesheet" type="text/css" href="/templates/css/nivo-slider.css" media="screen" />
@yield('css_include')
</head>
<body>
<div id="wrapper">
	<!-- Header Start -->
    <div id="header">
    	<!-- Logo Start -->
        <div class="logo">
        	<a href="index">&nbsp;<span class="dis_none">Estore 3</span></a>
        </div>
        <!-- Logo End -->
        <!-- Cart and Top Navigation Section Start -->
        <div class="cart_topnavi">
        	<!-- Cart Tab Start -->
        	<div class="cart_tab">
            	<div class="left_curv">&nbsp;</div>
                <div class="center_curv">
                	<ul>
                    	<li class="bag bold"><a href="/cart">Shopping Bag</a></li>
                        <li class="items"><a href="/cart">5 items</a></li>
                        <li class="price"><a href="/cart">$ 150</a></li>
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
                    <li><a href="/cart">My Cart</a></li>
                    <li><a href="#">Checkout</a></li>
                    <li class="last"><a href="#TB_inline?height=255&amp;width=440&amp;inlineId=myOnPageContent" rel="sexylightbox[22]" >Log In</a>
                    	<div id="myOnPageContent" style="display:none;">
              				<h1 class="lightboxheading">Login</h1>
                        <p class="lightboxtxt">Don’t have an account? <a href="user/signup">Creat one</a>, It’s simple and free.</p>
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
                    <li class="icon"><a href="/index">&nbsp;<span class="dis_none">Home</span></a></li>
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
                            <li><a href="/index">Home</a></li>
                            <li><a href="/categories">Categories</a></li>
                            <li><a href="/listing">Listing</a></li>
                            <li><a href="/prod_detail">Product Details</a></li>
                            <li><a href="/cart">Cart</a></li>
                            <li><a href="/login">Login</a></li>
                            <li><a href="/sign-up">Register</a></li>
                        </ul>
                    </li>
                    <li><a href="/contact">Contact Us</a></li>
                </ul>
				<div class="clear"></div>
			</div>
        </div>
        <!-- Navigation End -->
    </div>
    <!-- Navi End -->
    <!-- Banner Start -->
        <div id="slider">
            <a href="#"><img src="/templates/images/01.jpg" alt="" /></a>
            <a href="#"><img src="/templates/images/02.jpg" alt="" /></a>
            <a href="#"><img src="/templates/images/03.jpg" alt="" /></a>
            <a href="#"><img src="/templates/images/04.jpg" alt="" /></a>
            <a href="#"><img src="/templates/images/05.jpg" alt="" /></a>
        </div>
    <!-- Navi End -->
     <!-- Content Start -->
        <div id="content">
            @yield('menu-left')
            @yield('content')
        </div>
    <!-- Content End -->
    @yield('footer')
</div>

<!-- //      Javascript Files        // -->
    <script type="text/javascript" src="/templates/js/jquery.min1.3.js"></script>
    <script type="text/javascript" src="/templates/js/ddsmoothmenu.js"></script>
    <script type="text/javascript" src="/templates/js/menu.js"></script>
    <script type="text/javascript" src="/templates/js/ddaccordion.js"></script>
    <script type="text/javascript" src="/templates/js/acordin.js"></script>
    <script type="text/javascript" src="/templates/js/jcarousellite_1.0.1.js"></script>
    <script type="text/javascript">
        $(function() {
        $(".anyClass").jCarouselLite({
            btnNext: ".next_btn",
            btnPrev: ".prev_btn"
        });
    });
    </script>
    <script type="text/javascript" src="/templates/js/jquery.min1.js"></script>
    <script type="text/javascript">jq13 = jQuery.noConflict(true);</script>
    <script type="text/javascript" src="/templates/js/jquery.easing.1.2.js"></script>
    <script type="text/javascript" src="/templates/js/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
    <script type="text/javascript" src="/templates/js/sexylightbox.v2.3.jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
          SexyLightbox.initialize({color:'white'});
        });
    </script>
    <script type="text/javascript" src="/templates/js/styleswitch.js"></script>
    <script type="text/javascript" src="/templates/js/jquery.ad-gallery.js?rand=995"></script>
    <script type="text/javascript" src="/templates/js/thumbgallery.js"></script>

     
@yield('javascript_include')
</body>
</html>