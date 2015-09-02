<?php namespace App\Http\Controllers;

use App;
use DB;
use Exception;
use Redirect;
use Config;
use Request;
use Session;
use App\Libraries;
use App\Libraries\LogHelper;
use App\Libraries\AuthHelper;
use App\Libraries\EmailHelper;
use App\Libraries\ResponseHelper;
use App\Libraries\DatabaseUtilHelper;

use App\Models;
use App\Models\User;
use App\Models\UserAccess;
use App\Models\UserAccount;

Class AuthUserController extends Controller {

	public function signUp() {
		$username = Request::input('email');
		$password = Request::input('password');
		$password_sha1 = sha1($password . Config::get('app.auth_salt'));

		$firstName = Request::input('first_name');
		$lastName = Request::input('last_name');
		$email = Request::input('email');
		$country = Request::input('country');
		$address1 = Request::input('address1');
		$address1 = Request::input('address2');
		$postCode = Request::input('post_code');
		$city = Request::input('city');
		$state = Request::input('state');

		if (!$username || !$password) {
			return ResponseHelper::OutputJSON('fail', "missing parameters");
		}

		if (strlen($password) < 6) {
			return ResponseHelper::OutputJSON('fail', 'password must be atleast 6 chars');
		}

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			return ResponseHelper::OutputJSON('fail', "invalid email format");
		}

		$access = UserAccess::where('username', $username)->first();
		if($access){
			return ResponseHelper::OutputJSON('fail', "email used");
		}

		try {
			$user = new User;
			$user->first_name = $firstName;
			$user->last_name = $lastName;
			$user->email = $email;
			$user->country = $country;
			$user->address1 = $address1;
			$user->address2 = $address2;
			$user->post_code = $postCode;
			$user->city = $city;
			$user->state = $state;
			$user->save();

			$accessToken = AuthHelper::GenerateAccessToken($user->id);

			$access = new UserAccess;
			$access->user_id = $user->id;
			$access->username = $username;
			$access->password_sha1 = $password_sha1;
			$access->access_token = $accessToken;
			$access->access_token_issue_at = DB::raw('NOW()');
			$access->access_token_issue_ip = Request::ip();
			$access->access_token_expired_at = DB::raw('DATE_ADD(NOW(), INTERVAL 10 YEAR)'); //we dont kick them out
			$access->save();

			$UserAccount = new UserAccount;
			$UserAccount->user_id = $user->id;
			$UserAccount->account_type = 'vip0';
			$UserAccount->save();

			// $secretKey = sha1(time() . $email);
			// $edmHtml = (string) view('emails.account-activation', [
			// 	'name' => $name,
			// 	'app_store_address' => config('app.app_store_url'),
			// 	'username' => $email,
			// 	'zapzapmath_portal' => config('app.website_url') . '/sign-in',
			// 	'activation_link' => config('app.website_url') ."/api/auth/activate/{$secretKey}",
			// 	'email_support' => config('app.support_email'),
			// 	'social_media_links' => config('app.fanpage_url'),
			// ]);

			// EmailHelper::SendEmail([
			// 	'about' => 'Welcome',
			// 	'subject' => 'Your Zap Zap Account is now ready!',
			// 	'body' => $edmHtml,
			// 	'bodyHtml' => $edmHtml,
			// 	'toAddresses' => [$email],
			// ]);

			// $logOpenAcc = new LogAccountActivate;
			// $logOpenAcc->user_id = $user->id;
			// $logOpenAcc->secret = $secretKey;
			// $logOpenAcc->save();

			//job done - log it!
			DatabaseUtilHelper::LogInsert($user->id, $user->table, $user->id);
			DatabaseUtilHelper::LogInsert($user->id, $access->table, $user->id);
			DatabaseUtilHelper::LogInsert($user->id, $extId->table, $user->id);
			DatabaseUtilHelper::LogInsert($user->id, $extId->table, $user->id);
			DatabaseUtilHelper::LogInsert($user->id, $profile->table, $profile->id);
			DatabaseUtilHelper::LogInsert($user->id, $code->table, $code->id);

			Session::put('access_token', $accessToken);
			setcookie('access_token', $accessToken, time() + (86400 * 30), "/"); // 86400 = 1 day*/
			});

		} catch (Exception $ex) {
			LogHelper::LogToDatabase($ex->getMessage(), ['environment' => json_encode([
				'source' => 'AuthUserController > signUp',
				'inputs' => Request::all(),
			])]);
			return ResponseHelper::OutputJSON('exception');
		}

		return ResponseHelper::OutputJSON('success', '', , [
			'X-access-token' => $accessToken
		],[
			'access_token' => $accessToken
		]);	
		}

	public function signIn() {
		$username = Request::input('username');
		$password = Request::input('password');
		$password_sha1 = sha1($password.Config::get('app.auth_salt'));

		if (!$username || !$password) {
			return ResponseHelper::OutputJSON('fail', 'missing parameters');
		}

		try {
			$userAccess = UserAccess::where('username', $username)->where('password_sha1', $password_sha1)->first();
			if (!$userAccess) {
				$log = new LogSignInUser;
				$log->username = $username;
				$log->password_sha1 = $password_sha1;
				$log->success = 0;
				$log->created_ip = Request::ip();
				$log->save();
				return ResponseHelper::OutputJSON('fail', 'invalid username/password');
			}

			if ($userAccess->access_token == '') {
				$accessToken = AuthHelper::GenerateAccessToken($userAccess->user_id);
				$userAccess->access_token = $accessToken;
				$userAccess->access_token_issue_at = DB::Raw('NOW()');
				$userAccess->access_token_issue_ip = Request::ip();
			} else {
				$accessToken = $userAccess->access_token;
			}

			$userAccess->access_token_expired_at = DB::Raw('DATE_ADD(NOW(), INTERVAL 10 YEAR)');
			$userAccess->save();

			$log = new LogSignInUser;
			$log->username = $username;
			$log->password_sha1 = $password_sha1;
			$log->success = 1;
			$log->created_ip = Request::ip();
			$log->save();
			
			$list = User::select('role','name')->find($userAccess->user_id);


			Session::put('access_token', $accessToken);
			setcookie('access_token', $accessToken, time() + (86400 * 30), "/"); // 86400 = 1 day*/

			return ResponseHelper::OutputJSON('success', '', [], [
				'X-access-token' => $accessToken
			],[
				'access_token' => $accessToken
			]);				

		} catch (Exception $ex) {
			LogHelper::LogToDatabase($ex->getMessage(), ['environment' => json_encode([
				'source' => 'AuthUserController > signIn',
				'inputs' => Request::all(),
			])]);
			return ResponseHelper::OutputJSON('exception');
		}
	}


	public function signOut() {
		$accessToken = Request::header('X-access-token');
		try {
			$userAccess = UserAccess::where('access_token', $accessToken)->first();
			if ($userAccess) {
				$userAccess->access_token = '';
				$userAccess->access_token_issue_at = DB::Raw('NOW()');
				$userAccess->access_token_issue_ip = Request::ip();
				$userAccess->access_token_expired_at = DB::Raw('NOW()');
				$userAccess->save();
			}

			return ResponseHelper::OutputJSON('success');
		} catch (Exception $ex) {
			LogHelper::LogToDatabase($ex->getMessage(), ['environment' => json_encode([
				'source' => 'AuthUserController > signOut',
				'inputs' => Request::all(),
			])]);
			return ResponseHelper::OutputJSON('exception');
		}
	}

	public function changePassword() {

		$userId = Request::input('user_id');
		$password1 = Request::input('password1');
		$password2 = Request::input('password2');

		if (!$password1 || !$password2) {
			return ResponseHelper::OutputJSON('fail', 'missing parameters');
		}

		if (strlen($password2) < 6) {
			return ResponseHelper::OutputJSON('fail', 'password must be atleast 6 chars');
		}

		$password1Sha1 = sha1($password1 . Config::get('app.auth_salt'));
		$password2Sha1 = sha1($password2 . Config::get('app.auth_salt'));

		$userAccess = UserAccess::where('password_sha1', $password1Sha1)->where('user_id', $userId)->first();
		if (!$userAccess) {
			return ResponseHelper::OutputJSON('fail', 'invalid current password');
		}

		try {
			$wipedData = [
				'password_sha1'=>$userAccess->password_sha1
			];

			
			$userAccess->password_sha1 = $password2Sha1;
			$userAccess->save();

			DatabaseUtilHelper::LogUpdate($userId, $userAccess->table, $userId ,$wipedData);
			return ResponseHelper::OutputJSON('success');

		} catch (Exception $ex) {
			LogHelper::LogToDatabase($ex->getMessage(), ['environment' => json_encode([
				'source' => 'AuthUserController > changePassword',
				'inputs' => Request::all(),
			])]);
			return ResponseHelper::OutputJSON('exception');
		}

	}

	public function resetPassword() {

		$password = Request::input('password');
		$secret = Request::input('secret');

		if (!$password || !$secret) {
			return ResponseHelper::OutputJSON('fail', 'missing parameters');
		}

		if (strlen($password) < 6) {
			return ResponseHelper::OutputJSON('fail', 'password must be atleast 6 chars');
		}

		$logPasswordReset = LogPasswordReset::where('secret', $secret)->where('expired', '0')->whereNull('activated_at')->first();
		if (!$logPasswordReset) {
			return ResponseHelper::OutputJSON('fail', 'invalid secret');
		}

		$userId = $logPasswordReset->user_id;
		$userAccess = UserAccess::find($userId);
		if (!$userAccess) {
			return ResponseHelper::OutputJSON('fail', 'user not found');
		}


		try {
			$accessToken = AuthHelper::GenerateAccessToken($userId);

			$logPasswordReset->expired = 1;
			$logPasswordReset->activated_at = DB::raw('NOW()');
			$logPasswordReset->activated_ip = Request::ip();
			$logPasswordReset->save();

			$userAccess->password_sha1 = sha1($password . Config::get('app.auth_salt'));
			$userAccess->access_token = $accessToken;
			$userAccess->save();

			DatabaseUtilHelper::LogUpdate($userId, $userAccess->table, $userId ,json_encode(['password_sha1' => $userAccess->password_sha1]));

			Session::put('access_token', $accessToken);
			return ResponseHelper::OutputJSON('success', '', [], [
				'X-access-token' => $accessToken
			],[
				'access_token' => $accessToken
			]);		

		} catch (Exception $ex) {
			LogHelper::LogToDatabase($ex->getMessage(), ['environment' => json_encode([
				'source' => 'AuthUserController > resetPassword',
				'inputs' => Request::all(),
			])]);
			return ResponseHelper::OutputJSON('exception');
		}
	}

	public function forgotPassword() {

		$email = Request::input('email');

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			return ResponseHelper::OutputJSON('fail', "invalid email format");
		}

		$user = User::where('email', $email)->first();
		if (!$user) {
			return ResponseHelper::OutputJSON('fail', 'user not found');
		}

		try {

			 DB::table('t9202_log_password_reset')
				->where('user_id', $user->id)
				->update([
					'expired' => 1,
				]);

			$secret = sha1($user->name . time());

			$logPasswordReset = new LogPasswordReset;
			$logPasswordReset->user_id = $user->id;
			$logPasswordReset->secret = $secret;
			$logPasswordReset->save();

			$edmHtml = (string) view('emails.forgot-password', [
				'name' => $user->name,
				'username' => $email,
				'zapzapmath_portal' => Config::get('app.website_url').'/sign-in',
				'social_media_links' => Config::get('app.fanpage_url'),
				'reset_url' => 'http://staging.zapzapmath.com/user/reset-password/' . $secret,
			]);

			EmailHelper::SendEmail([
				'about' => 'Reset Password',
				'subject' => 'Password Recovery Assistance',
				'body' => $edmHtml,
				'bodyHtml' => $edmHtml,
				'toAddresses' => [$email],
			]);
			return ResponseHelper::OutputJSON('success');

		} catch (Exception $ex) {
			LogHelper::LogToDatabase($ex->getMessage(), ['environment' => json_encode([
				'source' => 'AuthUserController > forgotPassword',
				'inputs' => Request::all(),
			])]);
			return ResponseHelper::OutputJSON('exception');
		}

	}
}