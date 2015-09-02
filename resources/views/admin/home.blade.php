@extends('layouts.master-admin')

@section('breadcrumb')
<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
    <div class="page-header pull-left">
        <div class="page-title">{{trans('home.home_breadcrumb_title')}}</div>
    </div>
    <ol class="breadcrumb page-breadcrumb pull-left">
        <li><i class="fa fa-home"></i>&nbsp;<a href="/admin">{{trans('home.home_breadcrumb1')}}</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
        <li class="active">{{trans('home.home_breadcrumb2')}}</li>
    </ol>
    <ol class="breadcrumb pull-right">
        <li><a href="/help/" target="popUpWindow" onclick="window.open(this.href,'popUpWindow','width=420,height=600,screenX=200,screenY=200,scrollbars=no')"><i class="fa fa-question-circle"></i>&nbsp;{{trans('home.home_breadcrumb_how_to_use')}}</a></li>
    </ol>
    <div class="clearfix"></div>
</div>
@stop

@section('css_include')
<!-- <link type="text/css" rel="stylesheet" href="/sample.css"> -->
@stop

@section('javascript_include')
<script src="/assets/admin/js/home.js"></script>
@stop

@section('content')
/
@stop