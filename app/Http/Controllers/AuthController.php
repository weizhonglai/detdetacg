<?php namespace App\Http\Controllers;

use App\Libraries\AuthHelper;
use App\Libraries\DatabaseUtilHelper;
use App\Libraries\EmailHelper;
use App\Libraries\LogHelper;
use App\Libraries\ResponseHelper;
use App\Libraries\UserRelationHelper;
use App\Models\LogPasswordReset;
use App\Models\User;
use App\Models\UserAccess;
use DB;
use Exception;
use Request;
use Session;

class AuthController extends Controller {

	public function SignIn() {
		$username = Request::input('username');
		$password = Request::input('password');
		
		if($username == 'admin' && $password == 'admin'){
			return ResponseHelper::OutputJSON('success');
		}
		return ResponseHelper::OutputJSON('fail');
	}

	public function SignUp() {

		$username = Request::input('username'); 
		$password = Request::input('password');
		$password_sha1 = sha1($password . Config::get('app.auth_salt'));
		$name = Request::input('name');
		$email = Request::input('email');

		if (!$username || !$password || !$name || !$email) {
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
			return ResponseHelper::OutputJSON('fail', "username used");
		}

		try {
			$user = new User;
			$user->name = $name;
			$user->email = $email;
			$user->save();

			// $accessToken = AuthHelper::GenerateAccessToken($user->id);

			$access = new UserAccess;
			$access->user_id = $user->id;
			$access->username = $username;
			$access->password_sha1 = $password_sha1;
			// $access->access_token = $accessToken;
			// $access->access_token_issue_at = DB::raw('NOW()');
			// $access->access_token_issue_ip = Request::ip();
			// $access->access_token_expired_at = DB::raw('DATE_ADD(NOW(), INTERVAL 10 YEAR)'); //we dont kick them out
			$access->save();

			$setting = new UserSetting;
			$setting->user_id = $user->id;
			$setting->save();

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
			// DatabaseUtilHelper::LogInsert($user->id, $user->table, $user->id);
			// DatabaseUtilHelper::LogInsert($user->id, $access->table, $user->id);
			// DatabaseUtilHelper::LogInsert($user->id, $extId->table, $user->id);
			// DatabaseUtilHelper::LogInsert($user->id, $extId->table, $user->id);
			// DatabaseUtilHelper::LogInsert($user->id, $profile->table, $profile->id);
			// DatabaseUtilHelper::LogInsert($user->id, $code->table, $code->id);

			Session::put('access_token', $accessToken);
			setcookie('access_token', $accessToken, time() + (86400 * 30), "/"); // 86400 = 1 day*/
		// });

			$userAccess = UserAccess::where('username', $username)->where('password_sha1', $password_sha1)->first();
		} catch (Exception $ex) {
			LogHelper::LogToDatabase($ex->getMessage(), ['environment' => json_encode([
				'source' => 'AuthUserController > signUp',
				'inputs' => Request::all(),
			])]);
			return ResponseHelper::OutputJSON('exception');
		}
			return ResponseHelper::OutputJSON('success', '', $userAccess, [
				'X-access-token' => $accessToken
			],[
				'access_token' => $accessToken
			]);	
	}

	public function MemberList(){
		$menberList = User::all();

		return ResponseHelper::OutputJSON('success' ,'',$menberList);
	}
}
