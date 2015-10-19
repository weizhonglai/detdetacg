@extends('layouts.master-admin')
 
@section('css_include')
<link rel="stylesheet" type="text/css" href="/assets/admin/css/admin-template.css" />
@stop

@section('javascript_include')
@stop

@section('content')
<div class="row">
    <div class="col-lg-12">     
 	<form method="POST" enctype="multipart/form-data" action="/api/admin/banner/advertisement">
      <div class="form form-horizontal col-lg-5">  
        <div class="form-group">
          <label for="new-pass" class="control-label col-xs-4 col-md-3 col-lg-2">Name</label>
          <div class="col-xs-8 col-md-8 col-lg-8">
            <div class="input-icon right"><i class="fa fa-user"></i> <input type="text" class="fix-width form-control" name="name"/> </div>
          </div>
        </div>
        <div class="form-group">
          <label for="new-pass" class="control-label col-xs-4 col-md-3 col-lg-2">Description</label>
          <div class="col-xs-8 col-md-8 col-lg-8">
              <div class="input-icon right"><i class="fa fa-dollar"></i><input type="text" class="fix-width form-control" name="description"/></div>
          </div>
        </div>
        <div class="form-group">
          <label for="new-pass" class="control-label col-xs-4 col-md-3 col-lg-2">Picture</label>
          <div class="col-xs-8 col-md-8 col-lg-8">
              <div class="input-icon right"><input name="fileUpload" type="file" /></div>
          </div>
        </div>
        
          <div class="col-xs-offset-4 col-md-offset-3 col-lg-offset-2 col-xs-8 col-md-8 col-lg-4">
            <button type="submit" class="btn btn-success">Confirm</button>
          </div>
        </div>
    </form>
    </div>
       
</div>
@stop
