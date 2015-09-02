@extends('layouts.master-admin')

@section('breadcrumb')
<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
    <div class="page-header pull-left">
        <div class="page-title">{{trans('user-subscription.user_subscription_breadcrumb_title')}}</div>
    </div>
    <ol class="breadcrumb page-breadcrumb pull-left">
        <li><i class="fa fa-home"></i>&nbsp;<a href="{{route('home')}}">{{trans('user-subscription.user_subscription_breadcrumb1')}}</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
        <li class="active">{{trans('user-subscription.user_subscription_breadcrumb2')}}</li>
    </ol>
    <ol class="breadcrumb pull-right">
        <li><a href="/help/subscription" target="popUpWindow" onclick="window.open(this.href,'popUpWindow','width=420,height=600,screenX=200,screenY=200,scrollbars=no')"><i class="fa fa-question-circle"></i>&nbsp;{{trans('user-subscription.user_subscription_breadcrumb_how_to_use')}}</a></li>
    </ol>
    <div class="clearfix"></div>
</div>
@stop


@section('css_include')
<style type="text/css">
.row .tblSubscription { max-width: 800px; }

</style>
@stop

@section('javascript_include')
<script src="/assets/admin/js/subscription.js"></script>
@stop

@section('content')
<div class="row">
  <div class="col-lg-12">
      <table class="tblSubscription table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th>{{trans('user-subscription.user_subscription_table_field1')}}</th>
            <th>{{trans('user-subscription.user_subscription_table_field2')}}</th>
            <th>{{trans('user-subscription.user_subscription_table_field3')}}</th>
          </tr>
        </thead>
        <tbody>
          <tr>                    
              <td></td>
              <td></td>
              <td></td>
          </tr> 
        </tbody>
       </table>  

  </div>
</div>
@stop