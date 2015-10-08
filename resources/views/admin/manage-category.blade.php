@extends('layouts.master-admin')
 
@section('css_include')
<link rel="stylesheet" type="text/css" href="/assets/admin/css/admin-template.css" />

@stop

@section('javascript_include')
<script src="/assets/admin/js/top-up.js"></script>
@stop

@section('content')
<div class="row" data-ng-init="init()">
    <div>
            <div class="col-lg-12">
                    <div class="col-lg-10">
                        <ul id="myTab" class="nav nav-tabs">
                            <li class="active"><a href="#new" data-toggle="tab" ng-click="topUpList(1,1,15)">New Request</a></li>
                            <li               ><a href="#approved" data-toggle="tab" ng-click="topUpList(2,1,15)">Approved</a></li>
                        </ul>
                        <!-- pendding -->
                        <div id="myTabContent" class="tab-content">
                            <div id="new" class="tab-pane fade in active">
                                
                            </div>
                            <!-- complete -->
                             <div id="approved" class="tab-pane fade">
                               
                             </div>
                       </div>
                  </div>       
             </div>
    </div>
</div>        
@stop

