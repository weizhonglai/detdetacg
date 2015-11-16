<!DOCTYPE html>
<html ng-app="detdetApp">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google-site-verification" content="qtpQeHr_--jYsGm7ZGTRRrSzDT0Bq9-tikaET9ho8OY" />
<title>DetDetACG - @yield('title')</title>
<!-- //      Start Stylesheets       // -->
    <link rel="stylesheet" href="/templates/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/templates/css/gray.css" title="gray" media="screen" />
    <link rel="stylesheet" type="text/css" href="/templates/css/sexylightbox.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/templates/css/ddsmoothmenu.css" />
    <link rel="stylesheet" type="text/css" href="/templates/css/page.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/templates/css/jquery.ad-gallery.css" />
    <link rel="stylesheet" type="text/css" href="/templates/css/nivo-slider.css" media="screen" />
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/templates/js/bootstrap.min.js"></script>
    @yield('css_include')
</head>
<body>
  <div class="row">
    <div class="container">
        <div class="blank">
          <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2 ">
              <img style="width:180px; height:80px; padding: 10px" src="/templates/images/logo_detdet.jpg">
          </div>
        </div>
        <div class="cart_topnavi" style="margin-top: 25px">
              <!-- Cart Tab Start -->
              <div class="cart_tab">
                  <div class="left_curv">&nbsp;</div>
                  <div class="center_curv">
                      @if (\Request::cookie('access_token')=='') 
                      <ul>
                          <li><a href="#myModal" data-toggle="modal" data-target="#modal-login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                      </ul>
                      @else
                        <div><a href="/profile/{{\Request::cookie('user_id')}}">{{\Request::cookie('username')}}</a></div>
                      @endif
                  </div>
                  <div class="right_curv">&nbsp;</div>
              </div>
              <div class="clear"></div>
              <!-- Cart Tab End -->
          </div>
    </div>
  </div>
     
  <!-- <div class="row">
    <div class="container"> 
        <div class="col-lg-12 ">
            <img style="width: 100px; height:120px" src="/templates/images/logo_detdet.jpg">
        </div>
        <div class="clear">&nbsp;</div>
    </div>
  </div> -->

  <div class="row"> 
    <div class="container">
      <div id="navi">
        <!-- Navigation Start Home | Auction | Service & Upgrade | DETDET Forum | FAQ & Help | Contact Us -->
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
    </div>
  </div>

  <div class="row"> 
    <div class="container">
        <h4 style="font-size: 18px">Member Page</h4>
        <div class="col-xs-2 col-lg-2" style="padding: 0">
          <img style="width: 100px; height:120px" src="/#">
        </div>
        <div class="col-xs-6 col-lg-6">
          <label>Account Name: XXX</label><br>
          <label>Email: YYY</label>
        </div>
          
        <div class="col-xs-12 col-lg-12"><hr></div>
        
    </div>

  </div>

    <!-- Header End -->
    <!-- Banner Start -->  
    <!-- Navi End -->
  <!-- Content Start -->
  <div div class="container" ng-controller="MainController">
      @yield('menu-left')   
      @yield('content')
      @yield('menu-right')
  <!-- Content End -->
  </div>
 
  @yield('footer')

<!-- //      Javascript Files        // -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/angular/angular.min.js"></script>

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
<script src="/templates/js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(window).load(function() {
  $('#slider').nivoSlider();
  $('#slider1').nivoSlider();
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