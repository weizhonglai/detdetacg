@extends('layouts.master-admin')

@section('breadcrumb')
<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
    <div class="page-header pull-left">
        <div class="page-title">{{trans('change-password.change_password_breadcrumb_title')}}</div>
    </div>
    <ol class="breadcrumb page-breadcrumb pull-left">
        <li><i class="fa fa-home"></i>&nbsp;<a href="{{route('home')}}">{{trans('change-password.change_password_breadcrumb1')}}</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
        <li class="active">{{trans('change-password.change_password_breadcrumb2')}}</li>
    </ol>
    <ol class="breadcrumb pull-right">
        <li><a href="/help/change-password" target="popUpWindow" onclick="window.open(this.href,'popUpWindow','width=420,height=600,screenX=200,screenY=200,scrollbars=no')"><i class="fa fa-question-circle"></i>&nbsp;{{trans('change-password.change_password_breadcrumb_how_to_use')}}</a></li>
    </ol>
    <div class="clearfix"></div>
</div>
@stop

@section('css_include')

@stop

@section('javascript_include')
<script src="/assets/admin/js/change-password.js"></script>
@stop

@section('content')
<div class="row">

	<div class="form form-horizontal">	
		<div class="form-group">
			<label for="current-pass" class="control-label col-xs-4 col-md-3 col-lg-2">{{trans('change-password.change_password_input_label1')}}</label>
			<div class="col-xs-8 col-md-9 col-lg-3">
				<input id="password0" type="password" class="fix-width form-control" />
			</div>
		</div>
		<div class="form-group">
			<label for="new-pass" class="control-label col-xs-4 col-md-3 col-lg-2">{{trans('change-password.change_password_input_label2')}}</label>
			<div class="col-xs-8 col-md-9 col-lg-3">
				<input id="password1" type="password" class="fix-width form-control" />
			</div>
		</div>
		<div class="form-group">
			<label for="confirm-pass" class="control-label col-xs-4 col-md-3 col-lg-2">{{trans('change-password.change_password_input_label3')}}</label>
			<div class="col-xs-8 col-md-9 col-lg-3">
				<input id="password2" type="password" class="fix-width form-control" />
			</div>
		</div>
		<div class="form-group">
			<div class="col-xs-offset-4 col-md-offset-3 col-lg-offset-2 col-xs-8 col-md-9 col-lg-3">
				<button type="submit" class="btn btn-success" ng-click="changePassword()">{{trans('change-password.change_password_btn')}}</button>
			</div>
		</div>
	</div>

</div>
@stop