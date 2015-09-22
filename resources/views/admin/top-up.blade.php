@extends('layouts.master-admin')
 
@section('css_include')
<link rel="stylesheet" type="text/css" href="/templates/admin/css/frontend/admin-template.css" />

@stop

@section('javascript_include')
<script src="/assets/admin/js/top-up.js"></script>
@stop

@section('content')
<div class="row" data-ng-init="init()">

<!-- Top Up star -->
	<div class="col-lg-5">

      <div class="form form-horizontal">  
        <div class="form-group">
          <label for="new-pass" class="control-label col-xs-4 col-md-3 col-lg-2">User ID</label>
          <div class="col-xs-8 col-md-8 col-lg-8">
            <div class="input-icon right"><i class="fa fa-user"></i> <input type="text" class="fix-width form-control userid" ng-model="userId"/> </div>
          </div>
        </div>
        <div class="form-group">
          <label for="new-pass" class="control-label col-xs-4 col-md-3 col-lg-2">Amount</label>
          <div class="col-xs-8 col-md-8 col-lg-8">
              <div class="input-icon right"><i class="fa fa-dollar"></i><input type="text" class="fix-width form-control amount" /></div>
          </div>
        </div>
        <div class="form-group">
          <label for="new-pass" class="control-label col-xs-4 col-md-3 col-lg-2">Remark</label>
          <div class="col-xs-8 col-md-8 col-lg-8">
              <div class="input-icon right"><i class="fa fa-file-text-o"></i><input type="text" class="fix-width form-control remark" /></div>
          </div>
        </div>
        <div class="form-group">
          <label for="confirm-pass" class="control-label col-xs-4 col-md-3 col-lg-2">Confirm Password</label>
          <div class="col-xs-8 col-md-8 col-lg-8">
           <div class="input-icon right"><i class="fa fa-key"></i><input type="password" class="fix-width form-control password" /></div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-offset-4 col-md-offset-3 col-lg-offset-2 col-xs-8 col-md-8 col-lg-4">
            <button type="submit" class="btn btn-success" ng-click="topUp()">Confirm</button>
          </div>
        </div>
      </div>

    </div>

<!-- Top Up end -->


<!-- Member List star -->
    <div class="col-lg-7" style="float:right;">

        <div class="row width-control">
            <div class="col-lg-9" >
              <div class="input-group search" style="margin-right: -12px;">
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-btn">
                  <button class="btn btn-success" type="button" ng-click="fetchMemberList(1)">Search</button>
                </span>
              </div>
            </div>    
        </div>     

        <div class="clearfix">&nbsp;</div>

        <div class="row width-control ng-cloak">
            <div class="col-lg-5">
                <table class="agent-account-table table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="10%">Member ID</th>
                            <th width="10%">Username</th>
                            <th width="10%">Balance(Coin)</th>
                            <th width="10%">Select</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="m in member">
                            <td class="user-id">@{{m.id}}</td>
                            <td class="username">@{{m.username}}</td>
                            <td class="coin">@{{m.coin}}</td>
                      		<td>
                                <a><button type="submit" class="btn btn-success btn-sm"  ng-click="selectId(m.id)">Select</button></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <nav>
                    <ul class="pagination pagination-sm">
                        <li>
                          <a href="javascript:;" aria-label="Previous" ng-click="fetchMemberList(page - 1)">
                            <span aria-hidden="true">&laquo;</span>
                          </a>
                        </li>
                        <li ng-repeat="p in pagination" ng-class="{active:p.active}"><a href="javascript:;" ng-click="fetchMemberList($index + 1)">@{{$index + 1}}</a></li>
                        <li>
                          <a href="javascript:;" aria-label="Next" ng-click="fetchMemberList(page + 1)">
                            <span aria-hidden="true">&raquo;</span>
                          </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
       
    </div>
<!-- Member List end -->

</div>
@stop
