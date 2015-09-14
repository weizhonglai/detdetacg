<!DOCTYPE html>
<html ng-app="detdetApp"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DetDetACG | CMS</title>
    <link rel="shortcut icon" href="/templates/admin/images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="/templates/admin/images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/templates/admin/images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/templates/admin/images/icons/favicon-114x114.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="/templates/admin/vendors/jquery-ui-1.10.4.custom/css/ui-lightness/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="/templates/admin/vendors/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="/templates/admin/vendors/bootstrap/css/bootstrap.min.css">
    <!--LOADING STYLESHEET FOR PAGE-->
    <link type="text/css" rel="stylesheet" href="/templates/admin/vendors/intro.js/introjs.css">
    <link type="text/css" rel="stylesheet" href="/templates/admin/vendors/calendar/zabuto_calendar.min.css">
    <link type="text/css" rel="stylesheet" href="/templates/admin/vendors/sco.message/sco.message.css">
    <link type="text/css" rel="stylesheet" href="/templates/admin/vendors/intro.js/introjs.css">
    <!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="/templates/admin/vendors/animate.css/animate.css">
    <link type="text/css" rel="stylesheet" href="/templates/admin/vendors/jquery-pace/pace.css">
    <link type="text/css" rel="stylesheet" href="/templates/admin/vendors/iCheck/skins/all.css">
    <link type="text/css" rel="stylesheet" href="/templates/admin/vendors/jquery-notific8/jquery.notific8.min.css">
    <link type="text/css" rel="stylesheet" href="/templates/admin/vendors/bootstrap-daterangepicker/daterangepicker-bs3.css">
    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="/templates/admin/css/themes/style1/orange-blue.css" class="default-style">
    <link type="text/css" rel="stylesheet" href="/templates/admin/css/themes/style1/orange-blue.css" id="theme-change" class="style-change color-change">
    <link type="text/css" rel="stylesheet" href="/templates/admin/css/style-responsive.css">
@yield('css_include')

</head>
<body>
<div ng-controller="MainController">
    <!--BEGIN BACK TO TOP--><a id="totop" href="#"><i class="fa fa-angle-up"></i></a><!--END BACK TO TOP-->
    <!--BEGIN TOPBAR-->
    <div id="header-topbar-option-demo" class="page-header-topbar">
        <nav id="topbar" role="navigation" style="margin-bottom: 0; z-index: 2;"
             class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span
                        class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                        class="icon-bar"></span><span class="icon-bar"></span></button>
                <a id="logo" href="index.html" class="navbar-brand"><span class="fa fa-rocket"></span><span
                        class="logo-text">DetDetACG</span><span style="display: none" class="logo-text-icon">µ</span></a>
            </div>
            <div class="topbar-main">

            </div>
        </nav>
    <!--END TOPBAR-->
    <div id="wrapper"><!--BEGIN SIDEBAR MENU-->
        <nav id="sidebar" role="navigation" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    <li>
                    </li>
                    <li><a href="#"><i class="fa fa-edit fa-fw">
                    </i><span class="menu-title">Member</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/admin/member"><i class="fa fa-user"></i><span class="submenu-title">Member</span></a></li>
                            <li><a href="/admin/top-up"><i class="fa fa-dollar fa-fw"></i><span class="submenu-title">Top Up</span></a></li>
                            <li><a href="/admin/reset-password"><i class="fa fa-cube"></i><span class="submenu-title">Reset Password</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-edit fa-fw">
                    </i><span class="menu-title">Content</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/admin/main-catergory"><i class="fa fa-user"></i><span class="submenu-title">Main Category</span></a></li>
                            <li><a href="/admin/avertisment"><i class="fa fa-cube"></i><span class="submenu-title">Avertisment</span></a></li>
                        </ul>
                    </li>
                    
                    
                    <!--li.charts-sum<div id="ajax-loaded-data-sidebar"></div>-->
                </ul>
            </div>
        </nav>
        <div id="page-wrapper">
            @yield('content')
        </div>
    </div>
</div>
</div>

<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/angular/angular.min.js"></script>

<script src="/templates/admin/js/jquery-1.10.2.min.js"></script>
<script src="/templates/admin/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/templates/admin/js/jquery-ui.js"></script>
<!--loading bootstrap js-->
<script src="/templates/admin/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="/templates/admin/vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
<script src="/templates/admin/js/html5shiv.js"></script>
<script src="/templates/admin/js/respond.min.js"></script>
<script src="/templates/admin/vendors/metisMenu/jquery.metisMenu.js"></script>
<script src="/templates/admin/vendors/slimScroll/jquery.slimscroll.js"></script>
<script src="/templates/admin/vendors/jquery-cookie/jquery.cookie.js"></script>
<script src="/templates/admin/vendors/iCheck/icheck.min.js"></script>
<script src="/templates/admin/vendors/responsive-tabs/responsive-tabs.js"></script>
<script src="/templates/admin/vendors/moment/moment.js"></script>
<script src="/templates/admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!--CORE JAVASCRIPT-->
<script src="/templates/admin/js/main.js"></script>
<!--LOADING SCRIPTS FOR PAGE-->

@yield('javascript_include')

</body>
</html>