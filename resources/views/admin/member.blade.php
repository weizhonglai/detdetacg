@extends('layouts.master-admin')

@section('breadcrumb')
<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
    <div class="page-header pull-left">
        <div class="page-title">Member</div>
    </div>
    <ol class="breadcrumb page-breadcrumb pull-left">
        <li><i class="fa fa-home"></i>&nbsp;<a href="{{route('home')}}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
        <li class="active">Member List</li>
    </ol>
    <ol class="breadcrumb pull-right">
        <li><a href="/help/" target="popUpWindow" onclick="window.open(this.href,'popUpWindow','width=420,height=600,screenX=200,screenY=200,scrollbars=no')"><i class="fa fa-question-circle"></i>&nbsp;{{trans('home.home_breadcrumb_how_to_use')}}</a></li>
    </ol>
    <div class="clearfix"></div>
</div>
@stop

@section('css_include')
<style type="text/css">
.row .agent-account-table { max-width: 1000px; }

.agent-account-table th { vertical-align: top; font-weight: bold; font-size: 12px; background-color:#656; color: #FFF; }
.agent-account-table th.title { text-transform: uppercase; }
.agent-account-table tr.bufferList > td.status.active { font-weight: bold; background-color: #91e22a } 
.agent-account-table tr.bufferList > td.status.inactive { font-weight: bold; background-color: #f92672 } 
.agent-account-table tr.bufferList:hover > td { background-color:#ff9!important; }
.agent-account-table td { color: #222; padding: 4px 10px!important; }

/*.agent-account-table tr > td > input.form-control { background-color: #f9f9f9; border: none; height: 22px;}
.agent-account-table tr:nth-child(2n) >  td > input.form-control { background-color: #F0F2F5; border: none; height: 22px;}*/

</style>
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
                <input type="text" class="form-control" placeholder="Search for User's ID, Username, Name, Email">
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
                            <th width="10%">User ID</th>
                            <th width="15%">Username</th>
                            <th width="20%">Name</th>
                            <th>Email</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="m in member">
                            <td>@{{$index+1}}</td> 
                            <td class="user-id">@{{m.id}}</td>
                            <td class="username">@{{m.username}}</td>
                            <td class="status">@{{m.name}}</td>
                            <td class="status">@{{m.email}}</td>
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