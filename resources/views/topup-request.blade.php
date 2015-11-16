@extends('layouts.master2')
@section('title', 'User Profile Page')
@extends('components.menu-left2')
@extends('components.main-footer')
 
@section('css_include')
@stop

@section('javascript_include')
<script src="/assets/js/topup-request.js"></script>
@stop

@section('content')
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" data-ng-init="init()">
    <div class="row">
        <div class="col-lg-12">
            <form method="POST" enctype="multipart/form-data" action="/api/member/top-up/request?username={{\Request::cookie('username')}}&user_id={{\Request::cookie('user_id')}}">
                <div class="form-group amount">
                    <select ng-model="onRootAmmount"
                        ng-options="a.amount as ' RM' + a.amount + ' => $' + a.detdetcoin for a in rootAmmount"
                            class="form-control" style="width: 96%" name="amount">
                    </select>
                </div>
                <div class="form-group">
                    <textarea rows="10" cols="83" name="description"></textarea>
                </div>
                <div class="form-group">
                    <label>Please upload your bank slip</label>
                    <input type="file" name="fileUpload">
                </div>
                <div class="form-group">
                    <input type="submit" value="Upload" />
                </div>
            </form>
        </div>
    </div>

</div>   
   
@stop