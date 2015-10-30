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


class UserAuthController extends Controller {

	public function signIn() {
		try{
			$username = Request::input('username');
			$password = Request::input('password');
			$password_sha1 = sha1($password . Config::get('app.auth_salt'));
			
			$userAccess = UserAccess::where('username', $username)->where('password_sha1' , $password_sha1)->first();
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
				'username' => $userAccess->username,
				'user_id' => $userAccess->user_id,
			]);

		} catch (Exception $ex) {
		LogHelper::LogToDatabase($ex->getMessage(), ['environment' => json_encode([
			'source' => 'AuthUserController > signIn',
			'inputs' => Request::all(),
		])]);
		return ResponseHelper::OutputJSON('exception');
		}
	}

	public function signUp() {
		$username = Request::input('username'); 
		$password = Request::input('password');
		$password_sha1 = sha1($password . Config::get('app.auth_salt'));

		$firstName = Request::input('first_name');
		$lastName = Request::input('last_name');
		$email = Request::input('email');
		$nric = Request::input('nric');
		$passport = Request::input('passport');
		$dob = Request::input('dob');
		$gender = Request::input('gender');

		$address1 = Request::input('address1');
		$address2 = Request::input('address2');
		$postCode = Request::input('post_code');
		$city = Request::input('city');
		$states = Request::input('state');

		$fax = Request::input('fax_number');
		$officeNumber = Request::input('office_number');
		$homeNumber = Request::input('home_number');
		$mobileNumber = Request::input('mobile_number');

		// if (!$password || !$name || !$email || !$nric || !$dob || !$mobile) {
		// 	return ResponseHelper::OutputJSON('fail', "missing parameters");
		// }

		if (strlen($password) < 6) {
			return ResponseHelper::OutputJSON('fail', 'password must be atleast 6 chars');
		}

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			return ResponseHelper::OutputJSON('fail', "invalid email format");
		}

		$access = UserAccess::where('username', $username)->first();

		if($access){
			return ResponseHelper::OutputJSON('fail', "username used");
		}

		$state = strtolower($states);

		// try {
			$user = new User;
			$user->first_name = $firstName;
			$user->last_name = $lastName;
			$user->email = $email;
			$user->dob = $dob;
			$user->nric = $nric;
			$user->passport = $passport;
			$user->gender = $gender;
			$user->address1 = $address1;
			$user->address2 = $address2;
			$user->post_code = $postCode;
			$user->city = $city;
			$user->state = $state;
			$user->home_number = $homeNumber;
			$user->office_number = $officeNumber;
			$user->mobile_number = $mobileNumber;
			$user->fax_number = $fax;
			$user->save();
// var_export($user); die();
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

			$userAccount = new UserAccount;
			$userAccount->user_id = $user->id;
			$userAccount->save();

			$userSetting = new UserSetting;
			$userSetting->user_id = $user->id;
			$userSetting->save();


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
			DatabaseUtilHelper::LogInsert($user->id, $userAccount->table, $user->id);

			Session::put('access_token', $accessToken);
			setcookie('access_token', $accessToken, time() + (86400 * 30), "/"); // 86400 = 1 day*/

			$userAccess = UserAccess::where('username', $username)->where('password_sha1', $password_sha1)->first();
		// } catch (Exception $ex) {
		// 	LogHelper::LogToDatabase($ex->getMessage(), ['environment' => json_encode([
		// 		'source' => 'AuthUserController > signUp',
		// 		'inputs' => Request::all(),
		// 	])]);
		// 	return ResponseHelper::OutputJSON('exception');
		// }
			return ResponseHelper::OutputJSON('success', '', ['user_id'=>$userAccess->user_id,'username'=>$userAccess->username] , [
				'X-access-token' => $accessToken
			],[
				'access_token' => $accessToken
			]);	
	}
}
