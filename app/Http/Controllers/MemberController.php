<?php namespace App\Http\Controllers;

use DB;
use Exception;
use Request;
use Session;
use Config;

use Upload\File;
use Upload\Storage\FileSystem;
use Upload\Validation\Mimetype;
use Upload\Validation\Size;

use App\Libraries\AuthHelper;
use App\Libraries\DatabaseUtilHelper;
use App\Libraries\EmailHelper;
use App\Libraries\LogHelper;
use App\Libraries\ResponseHelper;

use App\Models\LogPasswordReset;
use App\Models\User;
use App\Models\UserAccess;
use App\Models\UserAccount;
use App\Models\TopUpAmount;
use App\Models\TopUpRequest;


class MemberController extends Controller {

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

			return ResponseHelper::OutputJSON('success');
		} catch (Exception $ex) {
			LogHelper::LogToDatabase($ex->getMessage(), ['environment' => json_encode([
				'source' => 'AuthUserController > signUp',
				'inputs' => Request::all(),
			])]);
			return ResponseHelper::OutputJSON('exception');
		}
	}

	public function fetchTopupAmount(){
		$topupAmount = TopUpAmount::where('enable' , 1)->get();

		return ResponseHelper::OutputJSON('success' , '' , [
			'topup_amount' => $topupAmount,
			]);
	}

	public function topUpRequest(){
		$userId = Request::input('user_id');
		$username = Request::input('username');
		$amount = Request::input('amount');
		var_export($amount); die();
		$description = Request::input('description');

		$userAccess = UserAccess::where('username' , $username)->first();
		if(!$userAccess){
			return ResponseHelper::OutputJSON('fail', "user_access not found");
		} 

		$user = User::find($userAccess->user_id);
		if(!$user){
			return ResponseHelper::OutputJSON('fail', "user not found");
		}

		$sha1 = sha1(date("Y-m-d H:i:s") );
		
		$path = './assets/images/topup-slip/';

		$storage = new FileSystem($path, true);
		$fileUpload = new File('fileUpload', $storage);
		$fileUpload->setName($userId.'-'.$sha1);
		$fileUpload->addValidations(array(
			new Mimetype('image/jpeg'),
			new Size('5M'),
		));

		$fileUpload->upload();	
		$topUpRequest = new TopUpRequest;
		$topUpRequest->user_id = $userAccess->user_id;
		$topUpRequest->username = $username;
		$topUpRequest->amount = $amount;
		$topUpRequest->description = $description;
		$topUpRequest->slip_path = $path.$userId.'-'.$sha1.'.jpg';
		$topUpRequest->save();

		return ResponseHelper::OutputJSON('success');
	}
}
