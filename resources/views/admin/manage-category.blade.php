@extends('layouts.master-admin')
 
@section('css_include')
<link type="text/css" rel="stylesheet" href="/templates/admin/vendors/font-awesome/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="/templates/admin/vendors/bootstrap/css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="/templates/admin/vendors/bootstrap/css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="/templates/admin/vendors/bootstrap-select/bootstrap-select.min.css">
<link type="text/css" rel="stylesheet" href="/templates/admin/vendors/font-awesome/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="/templates/admin/css/themes/style1/orange-blue.css" id="theme-change" class="style-change color-change">
<link rel="stylesheet" type="text/css" href="/assets/admin/css/admin-template.css" />
@stop

@section('javascript_include')
<script src="/templates/admin/js/ui-dropdown-select.js"></script>
<script src="/templates/admin/vendors/jquery-notific8/jquery.notific8.min.js"></script>
<script src="/templates/admin/js/jquery.menu.js"></script>
<script src="/templates/admin/vendors/select2/select2.min.js"></script>
<script src="/templates/admin/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="/templates/admin/vendors/multi-select/js/jquery.multi-select.js"></script>
<script src="/templates/admin/js/ui-dropdown-select.js"></script>

<script src="/assets/admin/js/category.js"></script>
@stop

@section('content')
<div class="row" >
    <div class="col-lg-10">
      <ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#main" data-toggle="tab">Main Category</a></li>
        <li               ><a href="#sub" data-toggle="tab">Sub Category</a></li>
      </ul>
      <!-- pendding -->
      <div id="myTabContent" class="tab-content" style="height:800px;">
        <div id="main" class="tab-pane fade in active">
          <div class="form form-horizontal col-lg-4" style="margin-left:-35;">  
            <div class="form-group">
              <label for="category-main" class="control-label col-lg-4">Category Name</label>
              <div class="col-xs-8 col-md-8 col-lg-8 category-main">
                <input id="category-main" type="text" class="fix-width form-control" />
              </div>
            </div>
            <div class="form-group">
              <div style="float:right; margin-right:16px;">
               <button type="submit" class="btn btn-success" ng-click="newCategoryMain()">Confirm</button>
              </div>
            </div>
          </div>
          <div>
            <table class="agent-account-table table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th width="5%">#</th>
                  <th width="50%">Name</th>
                  <th width="10%">Sequance</th>
                  <th width="10%">Status</th>
                  <th width="5%" colspan="2">Enable</th>
                  <th width="5%">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr ng-repeat="cm in categoryMain">
                  <td class="user-id"></td>
                  <td class="username"></td>
                  <td class="coin"></td>
                  <td class="status"></td>
                  <td>
                    <a ng-click="avtEnable( a.id , 1 )"><i class="glyphicon glyphicon-ok"></i></a>
                  </td>
                  <td>
                    <a ng-click="avtEnable( a.id , 0 )"><i class="glyphicon glyphicon-remove"></i></a>
                  </td>
                   <td>
                    <a><button type="submit" class="btn btn-success btn-sm">Remove</button></a>
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
@stop

