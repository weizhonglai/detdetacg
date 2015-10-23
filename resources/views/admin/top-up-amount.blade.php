@extends('layouts.master-admin')
 
@section('css_include')
<link rel="stylesheet" type="text/css" href="/assets/admin/css/admin-template.css" />

@stop

@section('javascript_include')
<script src="/assets/admin/js/top-up-amount.js"></script>
@stop

@section('content')
<div class="row" data-ng-init="init()">
    <div class="col-lg-12">
        <div id="main" class="tab-pane fade in active">
          <div class="form form-horizontal col-lg-4">  
            <div class="form-group">
              <label for="amount" class="control-label col-lg-4">RM</label>
              <div class="col-xs-8 col-md-8 col-lg-8 amount">
                <input id="amount" type="text" class="fix-width form-control" />
              </div>
            </div>
            <div class="form-group">
              <label for="detdetcoin" class="control-label col-lg-4">DetDet Coin</label>
              <div class="col-xs-8 col-md-8 col-lg-8 detdetcoin">
                <input id="detdetcoin" type="text" class="fix-width form-control" />
              </div>
            </div>
            <div class="form-group">
              <div style="float:right; margin-right:16px;">
               <button type="submit" class="btn btn-success" ng-click="amountCreate()">Confirm</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <table class="agent-account-table table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th width="30%">RM</th>
                  <th width="30%">DetDet Coin</th>
                  <th width="20%">Status</th>
                  <th width="15%" colspan="2">Enable</th>
                  <th width="5%">Action</th>

                </tr>
              </thead>
              <tbody>
                <tr ng-repeat="a in amount">
                  <td>@{{a.amount}}</td>
                  <td>@{{a.detdetcoin}}</td>
                  <td>@{{a.enable}}</td>
                  <td>
                    <a ng-click="amountEnable( a.id , 1 )"><i class="glyphicon glyphicon-ok"></i></a>
                  </td>
                  <td>
                    <a ng-click="amountEnable( a.id , 0 )"><i class="glyphicon glyphicon-remove"></i></a>
                  </td>
                  <td>
                    <a><button type="submit" class="btn btn-success btn-sm" ng-click="amountDelete(a.id)">Remove</button></a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
    </div>
</div>        
@stop

