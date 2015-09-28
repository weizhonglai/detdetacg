@extends('layouts.master-admin')
 
@section('css_include')
<link rel="stylesheet" type="text/css" href="/templates/admin/css/frontend/admin-template.css" />
@stop

@section('javascript_include')
<script src="/assets/admin/js/advertisement.js"></script>
@stop

@section('content')
<div class="row">
    <div class="col-lg-12">     

         <div class="form form-horizontal">  
        <div class="form-group">
          <label for="new-pass" class="control-label col-xs-4 col-md-3 col-lg-2">Name</label>
          <div class="col-xs-8 col-md-8 col-lg-8">
            <div class="input-icon right"><i class="fa fa-user"></i> <input type="text" class="fix-width form-control userid" ng-model="userId"/> </div>
          </div>
        </div>
        <div class="form-group">
          <label for="new-pass" class="control-label col-xs-4 col-md-3 col-lg-2">Description</label>
          <div class="col-xs-8 col-md-8 col-lg-8">
              <div class="input-icon right"><i class="fa fa-dollar"></i><input type="text" class="fix-width form-control amount" /></div>
          </div>
        </div>
        
        <div class="form-group">
          <div class="col-xs-offset-4 col-md-offset-3 col-lg-offset-2 col-xs-8 col-md-8 col-lg-4">
            <button type="submit" class="btn btn-success" ng-click="topUp()">Confirm</button>
          </div>
        </div>
      </div>
       
    </div>
</div>
@stop
