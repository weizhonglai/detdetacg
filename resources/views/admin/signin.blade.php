<!DOCTYPE html>
<html lang="en" ng-app="detdetApp">
<head><title>Sign In | Extras</title>
    <meta charset="utf-8">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="/templates/admin/vendors/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="/templates/admin/vendors/bootstrap/css/bootstrap.min.css">
    <!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="/templates/admin/vendors/animate.css/animate.css">
    <link type="text/css" rel="stylesheet" href="/templates/admin/vendors/iCheck/skins/all.css">
    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="/templates/admin/css/themes/style1/pink-blue.css" id="theme-change" class="style-change color-change">
    <link type="text/css" rel="stylesheet" href="/templates/admin/css/style-responsive.css">
    <link rel="shortcut icon" href="/templates/admin/images/favicon.ico">
</head>
<body id="signin-page">
<div class="page-form" ng-controller="SignInController">
    <form class="form">
        <div class="header-content"><h1>DetDetACG</h1></div>
        <div class="body-content">

            <div class="form-group">
                <div class="input-icon right"><i class="fa fa-user"></i><input id="username" type="text" placeholder="Username" name="username" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="input-icon right"><i class="fa fa-key"></i><input id="password" type="password" placeholder="Password" name="password" class="form-control">
                </div>
            </div>
            
            <div class="form-group pull-right">
                <button type="submit" class="btn btn-success" ng-click="signIn()">Log In
                    &nbsp;<i class="fa fa-chevron-circle-right"></i></button>
            </div>
            <div class="clearfix"></div>
            </div>
    </form>
</div>

<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/angular/angular.min.js"></script>
<script src="/assets/admin/js/sign-in.js"></script>
</body>
</html>