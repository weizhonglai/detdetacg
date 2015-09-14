<!DOCTYPE html>
<html lang="en" ng-app="cashApp">
<head><title>{{trans('sign-up.html_title')}}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="Thu, 19 Nov 1900 08:52:00 GMT">
    <!--Loading bootstrap css-->
    <link type="text/css"
          href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,800italic,400,700,800">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="/templates/vendors/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="/templates/vendors/bootstrap/css/bootstrap.min.css">
    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="/templates/css/themes/style1/orange-grey.css" class="default-style">
    <link type="text/css" rel="stylesheet" href="/templates/css/style-responsive.css">
    <link rel="shortcut icon" href="/assets/admin/images/favicon.ico">
    <link rel="apple-touch-icon" href="/assets/admin/images/apple-icon.png">
    <link rel="icon" type="image/png" href="/assets/admin/images/apple-icon.png">
</head>
<body id="signup-page" ng-controller="MainController">
<div class="page-form">
    <form id="signup-form" class="form">
        <div class="header-content"><h1>{{trans('sign-up.signup_title')}}</h1></div>
        <div class="body-content">
            <div class="form-group name">
                <div class="input-icon right"><i class="fa fa-user"></i><input type="text" placeholder="{{trans('sign-up.signup_input1')}}" class="form-control"></div>
            </div>
            <div class="form-group username">
                <div class="input-icon right"><i class="fa fa-user"></i><input type="text" placeholder="{{trans('sign-up.signup_input2')}}" class="form-control"></div>
            </div>            
            <div class="form-group password1">
                <div class="input-icon right"><i class="fa fa-key"></i><input type="password" placeholder="{{trans('sign-up.signup_input3')}}" class="form-control"></div>
            </div>
            <div class="form-group password2">
                <div class="input-icon right"><i class="fa fa-key"></i><input type="password" placeholder="{{trans('sign-up.signup_input4')}}" class="form-control"></div>
            </div>

            <hr>

            <div class="form-group mbn" style="text-align: right">
                <button class="btn btn-success" ng-click="signUp()">{{trans('sign-up.signup_submit_btn')}} &nbsp;<i class="fa fa-chevron-circle-right"></i></button>
            </div>
            <hr>
            <div class="form-group mbn"><p>{{trans('sign-up.signup_label_account')}} <a id="btn-register" href="{{route('admin_sign_in')}}">{{trans('sign-up.signup_signin_btn')}}</a></p> </div>

        </div>
    </form>
</div>

<!--loading bootstrap js-->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/angular/angular.min.js"></script>
<script src="/bower_components/angular-cookie/angular-cookie.min.js"></script>
<script src="/assets/admin/js/sign-up.js"></script>

</body>
</html>