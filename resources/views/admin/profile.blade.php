@extends('layouts.master-admin')

@section('breadcrumb')
<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
    <div class="page-header pull-left">
        <div class="page-title">{{trans('user-profile.user_profile_breadcrumb_title')}}</div>
    </div>
    <ol class="breadcrumb page-breadcrumb pull-left">
        <li><i class="fa fa-home"></i>&nbsp;<a href="{{route('home')}}">{{trans('user-profile.user_profile_breadcrumb1')}}</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
        <li class="active">{{trans('user-profile.user_profile_breadcrumb2')}}</li>
    </ol>
    <ol class="breadcrumb pull-right">
        <li><a href="/help/user-profile" target="popUpWindow" onclick="window.open(this.href,'popUpWindow','width=420,height=600,screenX=200,screenY=200,scrollbars=no')"><i class="fa fa-question-circle"></i>&nbsp;{{trans('user-profile.user_profile_breadcrumb_how_to_use')}}</a></li>
    </ol>
    <div class="clearfix"></div>
</div>
@stop


@section('css_include')
<style type="text/css">
.page-form { margin: 0px; }

</style>
@stop

@section('javascript_include')
<script src="/assets/admin/js/profile.js"></script>
@stop

@section('content')
<div class="row" data-ng-init="init()">
  <div class="col-lg-12">
                                              
      <div class="page-form">
          <div class="body-content">
            <div class="row mbm">
              <label for="current-pass" class="col-lg-3 pull-left">{{trans('user-profile.user_profile_label_name')}}</label>
              <div class="col-lg-9">
                <span class="fix-width"></span>
              </div>
            </div>

            <div class="row mbm">
              <label for="new-pass" class="col-lg-3">{{trans('user-profile.user_profile_label_username')}}</label>
              <div class="col-lg-9">
                <span class="fix-width"></span>
              </div>
            </div>

            <div class="row mbm">
              <label for="new-pass" class="col-lg-3">{{trans('user-profile.user_profile_label_email')}}</label>
              <div class="col-lg-9">
                <span class="fix-width"></span>
              </div>
            </div>            
              
            <div class="clearfix">&nbsp;</div>



          </div>
      </div>

  </div>
</div>
@stop