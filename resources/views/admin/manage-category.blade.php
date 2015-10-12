@extends('layouts.master-admin')
 
@section('css_include')
<link type="text/css" rel="stylesheet" href="/templates/admin/vendors/font-awesome/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="/templates/admin/vendors/bootstrap/css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="/templates/admin/vendors/bootstrap/css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="/templates/admin/vendors/bootstrap-select/bootstrap-select.min.css">
<link type="text/css" rel="stylesheet" href="/templates/admin/vendors/font-awesome/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="/templates/admin/css/themes/style1/orange-blue.css" id="theme-change" class="style-change color-change">
@stop

@section('javascript_include')
<script src="/templates/admin/js/ui-dropdown-select.js"></script>
<script src="/templates/admin/vendors/jquery-notific8/jquery.notific8.min.js"></script>
<script src="/templates/admin/js/jquery.menu.js"></script>
<script src="/templates/admin/vendors/select2/select2.min.js"></script>
<script src="/templates/admin/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="/templates/admin/vendors/multi-select/js/jquery.multi-select.js"></script>
<script src="/templates/admin/js/ui-dropdown-select.js"></script>
@stop

@section('content')
<div class="row" data-ng-init="init()">
    <div>
            <div class="col-lg-12">
                    <div class="col-lg-10">
                        <ul id="myTab" class="nav nav-tabs">
                            <li class="active"><a href="#main" data-toggle="tab">Main Category</a></li>
                            <li               ><a href="#sub" data-toggle="tab">Sub Category</a></li>
                        </ul>

                        <!-- pendding -->
                        <div id="myTabContent" class="tab-content">
                            <div id="main" class="tab-pane fade in active">
                           
                            </div>

                            <!-- complete -->
                             <div id="sub" class="tab-pane fade">
                             <label class="control-label col-md-3">Main Menu</label>
                                   
                                        <select data-style="btn-white" class="selectpicker form-control show-tick">
                                            <option>Mustard</option>
                                        </select>
                       </div>
                  </div>       
             </div>
    </div>
</div>        
@stop

