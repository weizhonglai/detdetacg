<!DOCTYPE html>
<html ng-app="detdetApp">+
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google-site-verification" content="qtpQeHr_--jYsGm7ZGTRRrSzDT0Bq9-tikaET9ho8OY" />
<title>DetDetACG - @yield('title')</title>
<!-- //      Start Stylesheets       // -->
    <link rel="stylesheet" type="text/css" href="/templates/css/gray.css" title="gray" media="screen" />
    <link rel="stylesheet" type="text/css" href="/templates/css/sexylightbox.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/templates/css/ddsmoothmenu.css" />
    <link rel="stylesheet" type="text/css" href="/templates/css/page.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/templates/css/jquery.ad-gallery.css" />
    <link rel="stylesheet" type="text/css" href="/templates/css/nivo-slider.css" media="screen" />
   <link rel="stylesheet" href="/templates/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="/templates/js/bootstrap.min.js"></script>
@yield('css_include')
</head>
<body>
<div class="row">
  <div class="container">
     <div class="cart_topnavi">
            <!-- Cart Tab Start -->
            <div class="cart_tab">
                <div class="left_curv">&nbsp;</div>
                <div class="center_curv">
                    <ul>
                       <!--  <li class="bag bold"><a href="/cart">Shopping Bag</a></li>
                        <li class="items"><a href="/cart">5 items</a></li>
                        <li class="items"><a href="/cart">$ 150 </a></li> -->
                        <li><a href="#myModal" data-toggle="modal" data-target="#modal-login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
                <div class="right_curv">&nbsp;</div>
            </div>
            <div class="clear"></div>
            <!-- Cart Tab End -->
            <!-- Cart Tab End -->
        </div>
  </div>
  </div>
     
<div class="row">
        <div class="container"> 
  <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2 ">
      <img style="width:180px; height:80px;" src="/templates/images/logo_detdet.jpg">
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
 <div class="row"> 
   <div class="container">
     <div id="navi">
        <!-- Navigation Start Home | Auction | Service & Upgrade | DETDET Forum | FAQ & Help | Contact 

Us -->
        <div class="navigation">
            <div id="smoothmenu1" class="ddsmoothmenu">
                <ul>
                    <li class="icon"><a href="/index">&nbsp;<span class="dis_none">Home</span></a></li>
                    <li><a href="/aution">Auction</a></li>
                    <li><a href="/services">Service & Upgrade</a></li>
                    <li><a href="/detdetforum">DETDET Forum</a></li>
                    <li><a href="/faq">FAQ & Help</a></li>
                    <li><a href="/contact">Contact Us</a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
        <!-- Navigation End -->
    </div>
    <div class="row">
      <div class="container">
          <div class="col-sm-12">
      <div class="pull-right">
         <form class="navbar-form navbar-left" role="search">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
    </div>
    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
</form>
      </div>
  </div>
      </div>

</div>
   </div>
  </div>
<div class="row" ng-controller="GlobalController">
	<!-- Header Start -->
    <!-- Modal -->
       <!--  <div class="modal fade" id="myModal" role="dialog" ng-controller="SignInController"> -->
       <div id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true"
                     class="modal fade" ng-controller="SignInController">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" data-dismiss="modal" aria-hidden="true"
                                        class="close">&times;</button>
                                <h4 id="modal-login-label" class="modal-title">Login</h4></div>
                            <div class="modal-body">
                                <div class="form">
                                    <form class="form-horizontal">
                                        <div class="form-group"><label for="username" class="control-label col-md-3">Username</label>

                                            <div class="col-md-9"><input id="username" type="text"
                                                                         class="form-control username" name="username" placeholder="Username"/></div>
                                        </div>
                                        <div class="form-group"><label for="password" class="control-label col-md-3">Password</label>

                                            <div class="col-md-9"><input id="password" type="password"
                                                                         class="form-control password" name="password" placeholder="Password"/></div>
                                        </div>
                                        <div class="form-group">
                                          <div class="col-md-9 col-md-offset-3">
                                                <span>New User? <a href="/user/signup">Click Here to Register</a></span>
                                            </div>
                                            <div class="col-md-9 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary" ng-click="signIn()">Login</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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
          @yield('menu-left')   
          @yield('content')
          @yield('menu-right')
    <!-- Content End -->
   
</div>
 @yield('footer')

<!-- //      Javascript Files        // -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/angular/angular.min.js"></script>
<script src="/assets/js/sign-in.js"></script>

    <script type="text/javascript" src="/templates/js/jquery.min1.3.js"></script>
     <!-- <script type="text/javascript" src="/templates/js/menu.js"></script> -->
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
        $('#slider1').nivoSlider();
    });
    </script>
   
   
    <script type="text/javascript" src="/templates/js/styleswitch.js"></script>
    <script type="text/javascript" src="/templates/js/jquery.ad-gallery.js?rand=995"></script>
    <script type="text/javascript" src="/templates/js/thumbgallery.js"></script>
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script>  
 
      function init_map() {
    var var_location = new google.maps.LatLng(5.365450, 100.458868);
 
        var var_mapoptions = {
          center: var_location,
          zoom: 14
        };
 
    var var_marker = new google.maps.Marker({
      position: var_location,
      map: var_map,
      title:"Venice"});
 
        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);
 
    var_marker.setMap(var_map); 
 
      }
 
      google.maps.event.addDomListener(window, 'load', init_map);
 
    </script>
@yield('javascript_include')
</body>
</html>