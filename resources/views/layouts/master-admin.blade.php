<!DOCTYPE html>
<html lang="en" ng-app="cashApp">
<head><title>{{trans('master.html_title')}}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="Thu, 19 Nov 1900 08:52:00 GMT">
    <link rel="shortcut icon" href="/assets/admin/images/favicon.ico">
    <link rel="apple-touch-icon" href="/assets/admin/images/apple-icon.png">
    <link rel="icon" type="image/png" href="/assets/admin/images/apple-icon.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet"
          href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">

    <link type="text/css" rel="stylesheet" href="/templates/vendors/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="/templates/vendors/bootstrap/css/bootstrap.min.css">
    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="/templates/css/themes/style1/red-grey.css" class="default-style">
    <link type="text/css" rel="stylesheet" href="/templates/css/style-responsive.css">
    <link type="text/css" rel="stylesheet" href="/assets/admin/css/global.css">
    @yield('css_include')
</head>
<body class="sidebar-icons" ng-controller="GlobalController">
<div ng-controller="MainController">
    <div id="header-topbar-option-demo" class="page-header-topbar">
        <nav id="topbar" role="navigation" style="margin-bottom: 0; z-index: 2;"
             class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span
                        class="sr-only">/</span><span class="icon-bar"></span><span
                        class="icon-bar"></span><span class="icon-bar"></span></button>
                <a id="logo" href="{{route('home')}}" class="navbar-brand"><span class="fa fa-rocket"></span><span
                        class="logo-text">$932</span><span style="display: none" class="logo-text-icon">$932</span></a>
            </div>

            <div class="topbar-main  hidden-xs">
                <ul class="nav navbar navbar-top-links navbar-right mbn">
                    <li class="dropdown topbar-user hidden-xs"><a data-hover="dropdown" href="javascript:;" class="dropdown-toggle">
                        <span>Admin</span>&nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-user pull-right">
                            <li><a href="{{route('admin_profile')}}"><i class="fa fa-user"></i> {{trans('master.top_nav_user_dropdown1')}}</a></li>
                            <li><a href="{{route('admin_subscription')}}"><i class="fa fa-cart-arrow-down"></i> {{trans('master.top_nav_user_dropdown2')}}</a></li>
                            <li><a href="{{route('admin_setting')}}"><i class="fa fa-cog"></i> {{trans('master.top_nav_user_dropdown3')}}</a></li>
                            <li class="divider"></li>
                            <li><a href="{{route('admin_change_password')}}"><i class="fa fa-keyboard-o"></i> {{trans('master.top_nav_user_dropdown4')}}</a></li>
                            <li><a href="javascript:;" ng-click="signout();"><i class="fa fa-key"></i> {{trans('master.top_nav_user_dropdown5')}}</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar navbar-top-links navbar-right mbn">
                    <li class="dropdown topbar-user hidden-xs"><a data-hover="dropdown" href="javascript:;" class="dropdown-toggle">
                        <span>English</span>&nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-user pull-right">
                            <li><a href="{{$switchEn}}"><i class="fa fa-language"></i> English</a></li>
                            <li><a href="{{$switchZh}}"><i class="fa fa-language"></i> 简体中文</a></li>
                            <li><a href="{{$switchTh}}"><i class="fa fa-language"></i> Thai</a></li>
                            <li><a href="{{$switchVi}}"><i class="fa fa-language"></i> Vietnamese</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!--END TOPBAR-->
    <div id="wrapper"><!--BEGIN SIDEBAR MENU-->
        <nav id="sidebar" role="navigation" class="navbar-icons navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    <li></li>
                    <!-- <li><a href="{{route('home')}}"><i class="fa fa-diamond fa-fw"><div class="icon-bg bg-orange"></div></i>
                        <span class="menu-title">{{trans('master.side_nav_menu1')}}</span></a></li> -->
                    <li><a href="javascript:;"><i class="fa fa-refresh">
                        <div class="icon-bg bg-green"></div></i><span class="menu-title">Status</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{route('buffer_ticket')}}"><i class="fa fa-ticket"></i><span class="submenu-title">Buffer Ticket</span></a></li>
                            <li><a href="{{route('buffer_latency')}}"><i class="fa fa-line-chart"></i><span class="submenu-title">Buffer Latency</span></a></li>
                            <li><a href="{{route('agent_account')}}"><i class="fa fa-edit"></i><span class="submenu-title">Agent Account</span></a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('member')}}"><i class="fa fa-users fa-fw"><div class="icon-bg bg-orange"></div></i>
                        <span class="menu-title">Member</span></a></li>
                    <li><a href="javascript:;" ng-click="signout();"><i class="fa fa-sign-out">
                        <div class="icon-bg bg-green"></div>
                    </i><span class="menu-title">{{trans('master.side_nav_menu4')}}</span></a></li>
                </ul>
            </div>
        </nav>
        <!--BEGIN PAGE WRAPPER-->
        <div id="page-wrapper"><!--BEGIN TITLE & BREADCRUMB PAGE-->
             @yield('breadcrumb')
            <!--END TITLE & BREADCRUMB PAGE--><!--BEGIN CONTENT-->
            <div class="page-content" data-ng-init="init()">
                <div id="tab-general">
                    @yield('content')
                </div>
            </div>
            <!--END CONTENT-->
        </div>
        <!--END PAGE WRAPPER-->
    </div>
</div>
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/angular/angular.min.js"></script>

<!--loading bootstrap js-->
<script src="/templates/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="/templates/vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
<script src="/templates/js/html5shiv.js"></script>
<script src="/templates/js/respond.min.js"></script>
<script src="/templates/vendors/metisMenu/jquery.metisMenu.js"></script>
<script src="/templates/vendors/slimScroll/jquery.slimscroll.js"></script>
<script src="/templates/vendors/jquery-cookie/jquery.cookie.js"></script>
<script src="/templates/js/jquery.menu.js"></script>
<script src="/templates/vendors/holder/holder.js"></script>
<script src="/templates/vendors/responsive-tabs/responsive-tabs.js"></script>
<script src="/templates/vendors/moment/moment.js"></script>

<!--CORE JAVASCRIPT-->
<script src="/templates/js/main.js"></script>
<script src="/assets/admin/js/global.js"></script>
@yield('javascript_include')
<script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '{{\Config::get('facebook.app_id')}}',
          xfbml      : true,
          version    : 'v2.3'
        });

        FB.getLoginStatus(function(response) {

            if (response.status === 'connected') {
                var uid = response.authResponse.userID;
                var accessToken = response.authResponse.accessToken;

            } else if (response.status === 'not_authorized') {
                // the user is logged in to Facebook,
                // but has not authenticated your app
            } else {
                // the user isn't logged in to Facebook.
            }
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
</script>
<div class="loading">
    <div class="loadingContainer">
        <img src="/assets/admin/images/loading.gif" />
        <div class="loadingText"></div>
    </div>
</div>
</body>
</html>