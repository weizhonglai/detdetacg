@extends('layouts.master-admin')

@section('breadcrumb')
<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
    <div class="page-header pull-left">
        <div class="page-title">Member Reset Password</div>
    </div>
    <ol class="breadcrumb page-breadcrumb pull-left">
        <li><i class="fa fa-home"></i>&nbsp;<a href="{{route('home')}}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
        <li class="active">Member Reset Password</li>
    </ol>
    <ol class="breadcrumb pull-right">
        <li><a href="/help/" target="popUpWindow" onclick="window.open(this.href,'popUpWindow','width=420,height=600,screenX=200,screenY=200,scrollbars=no')"><i class="fa fa-question-circle"></i>&nbsp;{{trans('home.home_breadcrumb_how_to_use')}}</a></li>
    </ol>
    <div class="clearfix"></div>
</div>
@stop

@section('css_include')
<style type="text/css">
</style>
@stop

@section('javascript_include')
<script src="/assets/admin/js/member.js"></script>
@stop

@section('content')
<div class="row" data-ng-init="init()">
    <div class="col-lg-12">

      <div class="form form-horizontal">  
        <div class="form-group">
          <label for="new-pass" class="control-label col-xs-4 col-md-3 col-lg-2">New Password</label>
          <div class="col-xs-8 col-md-8 col-lg-3 new-pass">
            <input id="password1" type="password" class="fix-width form-control" />
          </div>
        </div>
        <div class="form-group">
          <label for="confirm-pass" class="control-label col-xs-4 col-md-3 col-lg-2">Confirm Password</label>
          <div class="col-xs-8 col-md-8 col-lg-3 confirm-pass">
            <input id="password2" type="password" class="fix-width form-control" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-offset-4 col-md-offset-3 col-lg-offset-2 col-xs-8 col-md-8 col-lg-4">
            <button type="submit" class="btn btn-success" ng-click="resetMemberPassword({{$userAccess->user_id}}, 0)">Reset Password</button>
          </div>
        </div>
      </div>

    </div>
</div>
@stop