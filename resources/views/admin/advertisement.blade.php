@extends('layouts.master-admin')
 
@section('css_include')
<link rel="stylesheet" type="text/css" href="/templates/admin/css/frontend/admin-template.css" />
@stop

@section('javascript_include')
<script src="/assets/admin/js/advertisement.js"></script>
@stop

@section('content')
<div class="row" data-ng-init="init()">
    <div class="col-lg-12">     

        <div style="padding-left:17px">
            <span>
                <a href="/admin/advertisement/add-new"><button class="btn btn-success" type="button">Add New</button></a>
            </span>
        </div>     

        <div class="row width-control ng-cloak">
            <div class="col-lg-12">
                <table class="agent-account-table table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="3%">#</th>
                            <th width="15%">Name</th>
                            <th width="30%">Description</th>
                            <th width="30%">File_path</th>
                            <th width="10%">Created At</th>
                            <th width="5%">Status</th>
                            <th width="10%" colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="a in advertisement">
                            <td>@{{$index+1}}</td> 
                            <td class="name">@{{a.name}}</td>
                            <td class="username">@{{a.description}}</td>
                            <td class="email">@{{a.image_path}}</td>
                            <td class="coin">@{{a.created_at}}</td>
                            <td class="coin">@{{a.enable}}</td>
                            <td>
                                <a href="/admin/banner/advertisement/@{{a.id}}"><button type="submit" class="btn btn-success btn-sm" >Update</button></a>
                            </td>
                             <td>
                                <a href="/admin/member/@{{m.id}}/reset-password"><button type="submit" class="btn btn-success btn-sm" >Remove </button></a>
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
