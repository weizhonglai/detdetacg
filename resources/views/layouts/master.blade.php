<!DOCTYPE html>
<html ng-app="detdetApp"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DetDetACG</title>
<!-- //      Start Stylesheets       // -->
    <link rel="stylesheet" type="text/css" href="/templates/css/gray.css" title="gray" media="screen" />
    <link rel="stylesheet" type="text/css" href="/templates/css/sexylightbox.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/templates/css/ddsmoothmenu.css" />
    <link rel="stylesheet" type="text/css" href="/templates/css/page.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/templates/css/jquery.ad-gallery.css" />
    <link rel="stylesheet" type="text/css" href="/templates/css/nivo-slider.css" media="screen" />
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
@yield('css_include')
</head>
<body>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/index">DetDetACG</a>
    </div>
    <div>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Bag</span></a>
          <ul class="dropdown-menu">
            <li><a href="/cart">5 items</a></li>
            <li><a href="/cart">$ 150</a></li>
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#myModal" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="row">
        <div class="container"> 
  <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2 ">
      <span>Logo</span>
  </div>
  <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
      <div id="slider">
            <a href="#"><img src="/templates/images/01.jpg" alt="" /></a>
            <a href="#"><img src="/templates/images/02.jpg" alt="" /></a>
            <a href="#"><img src="/templates/images/03.jpg" alt="" /></a>
            <a href="#"><img src="/templates/images/04.jpg" alt="" /></a>
            <a href="#"><img src="/templates/images/05.jpg" alt="" /></a>
        </div>
  </div>
</div>
</div>
<div class="row" ng-controller="GlobalController">
	<!-- Header Start -->
    <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog" ng-controller="SignInController">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Login</h4>
            </div>
            <div class="modal-body">
                <div class="container">
                <h2>Login</h2>
                        <p><input type="text" class="span3 username" name="username" id="username" placeholder="Username"></p>
                        <p><input type="password" class="span3 password" name="password" id="password" placeholder="Password"></p>
                        <p><button type="submit" class="btn btn-primary" ng-click="signIn()">Sign in</button>
                        <a href="#">Forgot Password?</a>
                        </p>  
                </div>
                <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </div>
            </div>
          </div>
        </div>
    <!-- Header End -->
    <!-- Banner Start -->  
    <!-- Navi End -->
     <!-- Content Start -->
        <div div class="container">
            <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">About Us <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">General help</a></li>
            <li><a href="#">Posts</a></li>
          </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Pages<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/index">Home</a></li>
            <li><a href="/categories">Categories</a></li>
            <li><a href="/listing">Listing</a></li>
            <li><a href="/prod_detail">Product Details</a></li>
            <li><a href="/cart">Cart</a></li>
            <li><a href="/login">Login</a></li>
            <li><a href="/sign-up">Register</a></li>
          </ul>
        </li>
        <li><a href="#">How to Buy</a></li> 
        <li><a href="#">FAQs</a></li> 
      </ul>
    </div>
  </div>
</nav>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                @yield('menu-left')
                 @yield('menu-right')
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
            @yield('content')
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
              <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#">Search</a></li>
            <li><a href="#">Submenu 1-1</a></li>
            <li><a href="#">Submenu 1-2</a></li>
            <li><a href="#">Submenu 1-3</a></li>                        
        </li>
        <li><a href="#">Example Menu 2</a></li>
        <li><a href="#">Example Menu 3</a></li>
        
        </div>
    <!-- Content End -->
   
</div>
 @yield('footer')

<!-- //      Javascript Files        // -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/angular/angular.min.js"></script>
<script src="/assets/js/sign-in.js"></script>

    <script type="text/javascript" src="/templates/js/jquery.min1.3.js"></script>
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
   
   
    <script type="text/javascript" src="/templates/js/styleswitch.js"></script>
    <script type="text/javascript" src="/templates/js/jquery.ad-gallery.js?rand=995"></script>
    <script type="text/javascript" src="/templates/js/thumbgallery.js"></script>
@yield('javascript_include')
</body>
</html>