@extends('layouts.master-admin')
 
@section('css_include')
<link rel="stylesheet" type="text/css" href="/assets/admin/css/admin-template.css" />
@stop

@section('javascript_include')
<script src="/assets/admin/js/member.js"></script>
@stop

@section('content')
<div class="row" data-ng-init="init()">
    <div class="col-lg-12">

        <div class="row width-control">
            <div class="col-lg-4">
              <div class="input-group search">
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-btn">
                  <button class="btn btn-success" type="button" ng-click="fetchMemberList(1)">Search</button>
                </span>
              </div>
            </div>    
        </div>     

        <div class="clearfix">&nbsp;</div>

        <div class="row width-control ng-cloak">
            <div class="col-lg-12">
                <table class="agent-account-table table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th width="9%">Member ID</th>
                            <th width="10%">First Name</th>
                            <th width="10%">Last Name</th>
                            <th width="20%">Username</th>
                            <th width="20%">Email</th>
                            <th width="10%">Balance(Coin)</th>
                            <th width="10%">Account Details</th>
                            <th width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="m in member">
                            <td>@{{$index+1}}</td> 
                            <td class="user-id">@{{m.id}}</td>
                            <td class="name">@{{m.first_name}}</td>
                            <td class="name">@{{m.last_name}}</td>
                            <td class="username">@{{m.username}}</td>
                            <td class="email">@{{m.email}}</td>
                            <td class="coin">@{{m.coin}}</td>
                            <td>
                                <a href="/admin/member/@{{m.id}}/detail"><button type="submit" class="btn btn-success btn-sm" >View Account Info</button></a>
                            </td>
                             <td>
                                <a href="/admin/member/@{{m.id}}/reset-password"><button type="submit" class="btn btn-success btn-sm" >Reset Password</button></a>
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
</div>
@stop