<?php namespace App\Http\Controllers;

use DB;
use Exception;
use Request;
use Session;
use Config;
use App\Libraries\AuthHelper;
use App\Libraries\DatabaseUtilHelper;
use App\Libraries\EmailHelper;
use App\Libraries\LogHelper;
use App\Libraries\ResponseHelper;

use App\Models\LogPasswordReset;
use App\Models\User;
use App\Models\UserAccess;
use App\Models\UserAccount;
use App\Models\UserSetting;
use App\Models\BannerAdvertisement;


class UserPageController extends Controller {

	public function userInformation($userId) {
		$userAccess = UserAccess::find($userId);
		$userSetting = UserSetting::find($userId)->toArray();

		if(!$userAccess || !$userSetting){
			return ResponseHelper::OutputJSON('fail' , 'user not found');
		}

		$select = '';

		foreach($userSetting as $key => $value ){
			if($value == 1){
				$select = $select.'`'.$key.'`,';
			} 
		}

		$sql = "
			SELECT {$select} `created_at`
				FROM `t0101_user`
					WHERE `id` = {$userId}
		";

		$db = DB::select($sql);
		$result = $db[0];
		
		var_export($result); die();

		return view('admin.reset-password' , [
			'useraccess' => $userAccess 
			]);
	}

	public function bannerAdvertisement($id) {
		$Advertisement = BannerAdvertisement::find($id);

		if(!$Advertisement){
			return ResponseHelper::OutputJSON('fail' , 'advertisement not found');
		}

		return view('admin.advertisement-edit' , [
			'advertisement' => $Advertisement 
			]);
	}
}
