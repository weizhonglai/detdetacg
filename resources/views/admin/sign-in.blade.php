<!DOCTYPE html>
<html lang="en" ng-app="cashApp">
<head><title>{{trans('sign-in.html_title')}}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="Thu, 19 Nov 1900 08:52:00 GMT">
    <link rel="shortcut icon" href="/assets/images/favicon.ico">
    <link rel="apple-touch-icon" href="/assets/images/apple-icon.png">
    <link rel="icon" type="image/png" href="/assets/images/apple-icon.png">
    <!--Loading bootstrap css-->
    <link type="text/css"
          href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,800italic,400,700,800">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="/templates/vendors/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="/templates/vendors/bootstrap/css/bootstrap.min.css">
    <!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="/templates/vendors/animate.css/animate.css">
    <link type="text/css" rel="stylesheet" href="/templates/vendors/iCheck/skins/all.css">
    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="/templates/css/themes/style1/orange-grey.css" class="default-style">
    <link type="text/css" rel="stylesheet" href="/templates/css/style-responsive.css">
    <link type="text/css" rel="stylesheet" href="/assets/admin/css/global.css">
    <style type="text/css">
        .page-form .body-content .col-md-12 p a { color: #777777; font-size: 12px; }
    </style>
</head>
<body id="signin-page" ng-controller="GlobalController">
<div class="page-form" ng-controller="MainController">
    <form class="form">
        <div class="header-content"><h1>{{trans('sign-in.signin_title')}}</h1></div>
        <div class="body-content">

        <p>{{trans('sign-in.signin_label')}}</p>
            <div class="form-group username">
                <div class="input-icon right"><i class="fa fa-user"></i><input type="text" placeholder="{{trans('sign-in.signin_input1')}}" class="form-control"></div>
            </div>
            <div class="form-group password">
                <div class="input-icon right"><i class="fa fa-key"></i><input type="password" placeholder="{{trans('sign-in.signin_input2')}}" class="form-control"></div>
            </div>

            <div class="form-group pull-right">
                <button type="button" class="btn btn-success" ng-click="signIn()">{{trans('sign-in.signin_btn')}} &nbsp;<i class="fa fa-chevron-circle-right"></i></button>
            </div>
            <div class="clearfix"></div>

            <p>{{trans('sign-in.signin_facebook')}}</p>

            <div class="row mbm text-center">
                <div class="col-md-6"><a href="javascript:;" class="btn btn-sm btn-facebook btn-block" ng-click="facebookConnect()"><i class="fa fa-facebook fa-fw"></i>{{trans('sign-in.signin_facebook_btn')}}</a></div>
            </div>

            <!-- <hr>
            <p>{{trans('sign-in.signin_label_forgot_password')}} <a id="btn-register" href="{{route('admin_forget_password')}}">{{trans('sign-in.signin_link_forgot_password')}}</a></p>
            <p>{{trans('sign-in.signin_label_signup')}} <a id="btn-register" href="{{route('admin_sign_up')}}">{{trans('sign-in.signin_link_signup')}}</a></p> -->

            <hr>
            <div class="row mbm">
                <div class="col-md-12">
                    <p><a href="{{route('privacy_policy')}}" target="_blank">{{trans('sign-in.signin_link1')}}</a>&nbsp; | &nbsp;<a href="{{route('terms')}}" target="_blank">{{trans('sign-in.signin_link2')}}</a>&nbsp; | 
                    &nbsp;<a href="{{route('reset_password')}}" target="_blank">{{trans('sign-in.signin_link3')}}</a></p>
                </div>
            </div>

            </div>
    </form>
</div>
<script src="/templates/js/jquery-1.10.2.min.js"></script>

<!--loading bootstrap js-->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/angular/angular.min.js"></script>
<script src="/assets/admin/js/global.js"></script>
<script src="/assets/admin/js/sign-in.js"></script>
<script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '{{\Config::get('facebook.app_id')}}',
          xfbml      : true,
          cookie     : true,
          version    : 'v2.3'
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