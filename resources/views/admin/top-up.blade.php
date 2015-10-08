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
                            <li               ><a href="#denied" data-toggle="tab" ng-click="topUpList(3,1,15)">Denied</a></li>
                        </ul>
                        <!-- pendding -->
                        <div id="myTabContent" class="tab-content">
                            <div id="new" class="tab-pane fade in active">
                                <table class="agent-account-table table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th width="10%">Top-Up ID</th>
                                            <th width="10%">Member ID</th>
                                            <th width="20%">Username</th>
                                            <th width="20%">Amount</th>
                                            <th width="25%">Description</th>
                                            <th width="25%" colspan="3" style="text-align:center;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr ng-repeat="t in topUp">
                                            <td >@{{t.id}}</td>
                                            <td >@{{t.user_id}}</td>
                                            <td >@{{t.username}}</td>
                                            <td >@{{t.amount}}</td>
                                            <td >@{{t.description}}</td>
                                            <td>
                                                <button type="submit" class="btn btn-topup btn-sm" data-target="#modal-detail" data-toggle="modal" ng-click="selectId(t.user_id,t.username,t.amount,t.description)" >Details</button>
                                            </td>
                                             <td>
                                                <button type="submit" class="btn btn-topup btn-sm" ng-click="topUpApprove(t.id, t.user_id, t.amount)">Approve</button>
                                            </td>
                                             <td>
                                                <button type="submit" class="btn btn-topup btn-sm" ng-click="topUpDeny(t.id)">Deny</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- complete -->
                             <div id="approved" class="tab-pane fade">
                                 <table class="agent-account-table table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th width="10%">Top-Up ID</th>
                                            <th width="10%">Member ID</th>
                                            <th width="20%">Username</th>
                                            <th width="20%">Amount</th>
                                            <th width="25%">Description</th>
                                            <th width="15%">Updated_at</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr ng-repeat="t in topUp">
                                            <td >@{{t.id}}</td>
                                            <td >@{{t.user_id}}</td>
                                            <td >@{{t.username}}</td>
                                            <td >@{{t.amount}}</td>
                                            <td >@{{t.description}}</td>
                                            <td >@{{t.updated_at}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                             <!-- deny -->
                            <div id="denied" class="tab-pane fade">
                                <table class="agent-account-table table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th width="10%">Top-Up ID</th>
                                            <th width="10%">Member ID</th>
                                            <th width="20%">Username</th>
                                            <th width="20%">Amount</th>
                                            <th width="25%">Description</th>
                                            <th width="15%">Updated_at</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr ng-repeat="t in topUp">
                                            <td >@{{t.id}}</td>
                                            <td >@{{t.user_id}}</td>
                                            <td >@{{t.username}}</td>
                                            <td >@{{t.amount}}</td>
                                            <td >@{{t.description}}</td>
                                            <td >@{{t.updated_at}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                            <!-- pagination -->
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
                    <!-- Pop out start-->
                        <div id="modal-detail" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body"><h4>Information</h4></div>
                                    <table class="topup-confirm">
                                      <tr>
                                        <td>User ID </td>
                                        <td>  :</td>
                                        <td>@{{userId}}</td>
                                      </tr>
                                      <tr>
                                        <td>Username </td>
                                        <td> :</td>
                                        <td>@{{username}}</td>
                                      </tr>
                                      <tr>
                                        <td>Amount </td>
                                        <td> :</td>
                                        <td>@{{amount}}</td>
                                      </tr>
                                      <tr>
                                        <td style="position:absolute;">Description </td>
                                        <td style="padding-bottom:150px;"> :</td>
                                        <td><textarea style="width:430px; height:160px; border:none;">@{{description}}</textarea></td>
                                      </tr>
                                    </table>
                                    <div class="modal-footer">
                                        <button type="button" data-dismiss="modal" class="btn btn-primary">Ok</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- Pop out end-->

            </div>
        </div>        
@stop

