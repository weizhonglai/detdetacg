@extends('layouts.master-admin')
 
@section('css_include')
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
            <button type="submit" class="btn btn-success" ng-click="resetMemberPassword({{$useraccess->user_id}}, 0)">Reset Password</button>
          </div>
        </div>
      </div>

    </div>
</div>
@stop
