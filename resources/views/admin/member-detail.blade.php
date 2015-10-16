@extends('layouts.master-admin')
 
@section('css_include')
<link rel="stylesheet" type="text/css" href="/assets/admin/css/admin-template.css" />
@stop

@section('javascript_include')
<script src="/assets/admin/js/member-detail.js"></script>
@stop

@section('content')
<div class="col-md-12">
    <div class="row" data-ng-init="init({{$user->id}})">
        <div class="col-md-3" style="padding-left:0px;">
            <div class="form-group">
                <div class="text-center mbl">
                    <img src="https://s3.amazonaws.com/uifaces/faces/twitter/oliveirasimoes/128.jpg" style="border: 5px solid #fff; box-shadow: 0 2px 3px rgba(0,0,0,0.25);" class="img-circle"/>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <tbody>
                    <tr>
                        <td width="50%">First Name</td>
                        <td>{{$user->first_name}}</td>
                    </tr>
                    <tr>
                        <td width="50%">Last Name</td>
                        <td>{{$user->last_name}}</td>
                    </tr>
                    <tr>
                        <td width="50%">NRIC</td>
                        <td>{{$user->nric}}</td>
                    </tr>
                    <tr>
                        <td width="50%">Gender</td>
                        <td>{{$user->gender}}</td>
                    </tr>
                    <tr>
                        <td width="50%">Email</td>
                        <td>{{$user->email}}</td>
                    </tr>
                    <tr>
                        <td width="50%">DOB </td>
                        <td>{{$user->dob}}</td>
                    </tr>
                    <tr>
                        <td width="50%">Address</td>
                        <td>{{$user->address1}}, {{$user->address2}}, {{$user->post_code}} , {{$user->city}}, {{$user->state}}</td>
                    </tr>
                    <tr>
                        <td width="50%">Status</td>
                        <td><span class="label label-success">Active</span></td>
                    </tr>
                    <tr>
                        <td width="50%">Join Since</td>
                        <td>{{$user->created_at}}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="col-md-9">
            <ul class="nav nav-tabs ul-edit responsive">
                <li class="active">
                    <a href="#tab-product" data-toggle="tab"><i class="fa fa-bolt"></i>&nbsp; Product</a>
                </li>

                <li>
                    <a href="#tab-topup" data-toggle="tab"><i class="fa fa-dollar"></i>&nbsp; Top Up History</a>
                </li>

                <li>
                    <a href="#tab-transaction" data-toggle="tab"><i class="fa fa-edit"></i>&nbsp; Transaction History</a>
                </li>
            </ul>

             <div id="generalTabContent" class="tab-content">
                <div id="tab-product" class="tab-pane fade in active">
                    
                </div>
                <div id="tab-topup" class="tab-pane fade">
                      <table>
                        <tbody>
                            <tr ng-repeat="t in topUpHistory">
                                <td >@{{t.created_at}}</td>
                                <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Top Up </td>
                                <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; RM@{{t.amount}}</td>
                                <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; @{{t.status}}</td>
                            </tr>
                        </tbody>
                    </table>
                     <nav>
                        <ul class="pagination pagination-sm">
                            <li>
                              <a href="javascript:;" aria-label="Previous" ng-click="fetchMemberDetail({{$user->id}}, page - 1 , 25)">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <li ng-repeat="p in pagination" ng-class="{active:p.active}"><a href="javascript:;" ng-click="fetchMemberDetail({{$user->id}} , $index + 1, 25)">@{{$index + 1}}</a></li>
                            <li>
                              <a href="javascript:;" aria-label="Next" ng-click="fetchMemberDetail({{$user->id}}, page + 1 ,  25)">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            
                <div id="tab-transaction" class="tab-pane fade in">
                
                </div>
            </div>
        </div>
    </div>
</div>
@stop
