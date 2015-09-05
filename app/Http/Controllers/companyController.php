<?php namespace App\Http\Controllers;

use DB;
use Exception;
use Request;
use Session;
use App\Libraries\AuthHelper;
use App\Libraries\DatabaseUtilHelper;
use App\Libraries\EmailHelper;
use App\Libraries\LogHelper;
use App\Libraries\ResponseHelper;

use App\Models\LogPasswordReset;
use App\Models\User;
use App\Models\UserAccess;


class companyController extends Controller {

	public function registerCompany() {
		try{
			$userId = Request::input('user_id');
			$companyName = Request::input('company_name');
			$description = Request::input('description');
			$companyEmail = Request::input('company_email');
			$companyMobile = Request::input('company_mobile');
			$companyAddress1 = Request::input('company_address1');
			$companyAddress2 = Request::input('company_address2');
			$companyPostCode = Request::input('company_post_code');
			$companyCity = Request::input('company_city');
			$companyState = Request::input('company_state');
			$companyCountry = Request::input('company_country');



			$userAccess = UserAccess::where('username', $username)->where('password' , $password)->first();
			if(!$userAccess){
				return ResponseHelper::OutputJSON('fail', "invalid username or password");
			}

			if ($userAccess->access_token == '') {
					$accessToken = AuthHelper::GenerateAccessToken($userAccess->user_id);
					$userAccess->access_token = $accessToken;
					$userAccess->access_token_issue_at = DB::Raw('NOW()');
					$userAccess->access_token_issue_ip = $_SERVER["REMOTE_ADDR"];
			} else {
				$accessToken = $userAccess->access_token;
			}

			$userAccess->access_token_expired_at = DB::Raw('DATE_ADD(NOW(), INTERVAL 7 DAY)');
			$userAccess->save();
			
			} catch (Exception $ex) {
			LogHelper::LogToDatabase($ex->getMessage(), array('environment' => json_encode(array(
				'inputs' => Request::all(),
			))));
			return ResponseHelper::OutputJSON('exception');
		}
	}
}
