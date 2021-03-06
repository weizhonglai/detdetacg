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


class UserContoller extends Controller {

	public function userUpdate() {
		$userId = Request::input('user_id');
		
		$name = Request::input('name');
		$email = Request::input('email');
		$nric = Request::input('nric');
		$address1 = Request::input('address1');
		$address2 = Request::input('address2');
		$postCode = Request::input('post_code');
		$city = Request::input('city');
		$state = Request::input('state');
		$mobile = Request::input('mobile');
		$fax = Request::input('fax_number');
		$gender = Request::input('gender');
		$dob = Request::input('dob');

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			return ResponseHelper::OutputJSON('fail', "invalid email format");
		}

		try {
			$user = User::find($userId);
			$user->name = $name;
			$user->email = $email;
			$user->dob = $dob;
			$user->nric = $nric;
			$user->gender = $gender;
			$user->address1 = $address1;
			$user->address2 = $address2;
			$user->post_code = $postCode;
			$user->city = $city;
			$user->state = $state;
			$user->mobile = $mobile;
			$user->fax_number = $fax;
			$user->save();

		} catch (Exception $ex) {
			LogHelper::LogToDatabase($ex->getMessage(), ['environment' => json_encode([
				'source' => 'AuthUserController > signUp',
				'inputs' => Request::all(),
			])]);
			return ResponseHelper::OutputJSON('exception');
		}
	}
}
