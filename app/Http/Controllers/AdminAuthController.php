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


class AdminAuthController extends Controller {

	public function signIn() {
		$username = Request::input('username');
		$password = Request::input('password');
		$password_sha1 = sha1($password . Config::get('app.auth_salt'));
		try{
			$userAccess = UserAccess::where('username', $username)->where('password_sha1' , $password_sha1)->where('id' ,'<=' , 10)->first();
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

			Session::put('access_token', $accessToken);
			return ResponseHelper::OutputJSON('success', '', [], [
				'X-access-token' => $accessToken,
			], [
				'access_token' => $accessToken,
			]);

		} catch (Exception $ex) {
		LogHelper::LogToDatabase($ex->getMessage(), ['environment' => json_encode([
			'source' => 'AuthUserController > signIn',
			'inputs' => Request::all(),
		])]);
		return ResponseHelper::OutputJSON('exception');
		}
	}
}
