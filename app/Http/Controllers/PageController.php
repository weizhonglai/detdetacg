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


class PageController extends Controller {

	public function userAccess($userId) {
		$userAccess = UserAccess::find($userId);

		if(!$userAccess){
			return ResponseHelper::OutputJSON('fail' , 'user not found');
		}

		return view('admin.reset-password' , [
			'useraccess' => $userAccess 
			]);
	}
}
