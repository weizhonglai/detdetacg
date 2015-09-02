@extends('layouts.master-admin')

@section('breadcrumb')
<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
    <div class="page-header pull-left">
        <div class="page-title">{{trans('user-setting.user_setting_breadcrumb_title')}}</div>
    </div>
    <ol class="breadcrumb page-breadcrumb pull-left">
        <li><i class="fa fa-home"></i>&nbsp;<a href="{{route('home')}}">{{trans('user-setting.user_setting_breadcrumb1')}}</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
        <li class="active">{{trans('user-setting.user_setting_breadcrumb2')}}</li>
    </ol>
    <ol class="breadcrumb pull-right">
        <li><a href="/help/setting" target="popUpWindow" onclick="window.open(this.href,'popUpWindow','width=420,height=600,screenX=200,screenY=200,scrollbars=no')"><i class="fa fa-question-circle"></i>&nbsp;{{trans('user-setting.user_setting_breadcrumb_how_to_use')}}</a></li>
    </ol>
    <div class="clearfix"></div>
</div>
@stop


@section('css_include')
<link type="text/css" rel="stylesheet" href="/templates/vendors/bootstrap-select/bootstrap-select.min.css">
<link type="text/css" rel="stylesheet" href="/templates/vendors/iCheck/skins/all.css">

<style type="text/css">
.row.tblSetting { max-width: 500px; }

</style>
@stop

@section('javascript_include')
<script src="/templates/vendors/iCheck/icheck.min.js"></script>
<script src="/templates/js/ui-checkbox-radio.js"></script>
<script src="/templates/vendors/select2/select2.min.js"></script>
<script src="/templates/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="/templates/js/ui-dropdown-select.js"></script>
<script src="/assets/admin/js/setting.js"></script>
@stop

@section('content')
<div class="row tblSetting">
  <div class="col-lg-12">
      <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th>{{trans('user-setting.user_setting_table_row1_column1')}}</th>
            <th>{{trans('user-setting.user_setting_table_row1_column2')}}</th>
          </tr>
        </thead>
        <tbody>
          <tr>                    
              <td width="150">{{trans('user-setting.user_setting_table_row2_column1')}}</td>
              <td class="firstday">
                <select class="form-control">
                  <option value="sun">Sunday</option>
                  <option value="mon">Monday</option>
                  <option value="tue">Tuesday</option>
                  <option value="wed">Wednesday</option>
                  <option value="thu">Thursday</option>
                  <option value="fri">Friday</option>
                  <option value="sat">Saturday</option>
                </select>
              </td>
          </tr> 
          <tr>                    
              <td width="150">{{trans('user-setting.user_setting_table_row3_column1')}}</td>
              <td class="currency">
                <select class="selectpicker form-control" data-style="btn-white" data-show-subtext="true">
                  <option value="">None</option>
                  <option data-subtext="CNY" value="cny">Chinese Yuan Renminbi</option>
                  <option data-subtext="HKD" value="hkd">Hong Kong Dollar</option>
                  <option data-subtext="MYR" value="myr">Malaysia Ringgit</option>
                  <option data-subtext="SGD" value="sgd">Singapore Dollar</option>
                  <option data-subtext="THB" value="thb">Thai Baht</option>
                  <option data-subtext="USD" value="usd">US Dollar</option>
                  <option data-subtext="VND" value="vnd">Vietnam Dong</option>
                </select>
              </td>
          </tr>  
          <tr>                    
              <td width="150">{{trans('user-setting.user_setting_table_row4_column1')}}</td>
              <td class="pluginsb">
                <div id="square-skin" class="row skin skin-square">
                    <div class="col-md-8">
                        <ul class="list-unstyled">
                            <li class="pbm col-md-6">
                              <input id="square-radio-1" tabindex="11" type="radio" name="pluginsb-radio" value="on"/>&nbsp;&nbsp;
                              <label for="square-radio-1">{{trans('user-setting.user_setting_option1')}}</label>
                            </li>
                            <li class="pbm col-md-6">
                              <input id="square-radio-2" tabindex="12" type="radio" name="pluginsb-radio" checked="checked" value="off"/>&nbsp;&nbsp;
                              <label for="square-radio-2">{{trans('user-setting.user_setting_option2')}}</label>
                            </li>
                        </ul>
                    </div>
                </div>
              </td>
          </tr> 
          <tr>                    
              <td width="150">{{trans('user-setting.user_setting_table_row5_column1')}}</td>
              <td class="plugin4d">
                <div id="square-skin" class="row skin skin-square">
                    <div class="col-md-8">
                        <ul class="list-unstyled">
                            <li class="pbm col-md-6">
                              <input id="square-radio-1" tabindex="11" type="radio" name="plugin4d-radio" value="on" />&nbsp;&nbsp;
                              <label for="square-radio-1">{{trans('user-setting.user_setting_option1')}}</label>
                            </li>
                            <li class="pbm col-md-6">
                              <input id="square-radio-2" tabindex="12" type="radio" name="plugin4d-radio" checked="checked" value="off" />&nbsp;&nbsp;
                              <label for="square-radio-2">{{trans('user-setting.user_setting_option2')}}</label>
                            </li>
                        </ul>
                    </div>
                </div>
              </td>
          </tr>                          
        </tbody>
      </table>                                          
      <button type="submit" class="btn btn-success btn-sm" ng-click="saveUserSetting()">{{trans('user-setting.user_setting_btn')}}</button>
  </div>
</div>
@stop