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
use App\Libraries\OrderByHelper;

use Upload\File;
use Upload\Storage\FileSystem;
use Upload\Validation\Mimetype;
use Upload\Validation\Size;

use App\Models\User;
use App\Models\UserAccess;
use App\Models\UserAccount;
use App\Models\CategoryMain;
use App\Models\CategorySub;
use App\Models\TransactionBook;
use App\Models\BannerAdvertisement;


class CmsController extends Controller {

	public function memberList(){
		$orderBy = Request::input('orderby', 'id-asc');
		$page = Request::input("page", '1');
		$pageSize = Request::input("page_size", '15');
		$search = Request::input('search');
		$sqlSearch = '';

		if($search || $search == '0' ){
			$sqlSearch  = " WHERE r.`id` LIKE '%{$search}%' OR r.`name` LIKE '%{$search}%' OR r.`email` LIKE '%{$search}%' OR r.`username` LIKE '%{$search}%'  ";
		}

		try{	
			$startIndex = $pageSize * ($page - 1);
			
			$sql = "
			SELECT * 
				FROM (
					SELECT u.`id`, u.`name` , u.`email`, acc.`username` ,( SUM(`account_debit`) - IFNULL(SUM(`account_credit`),0) ) as `coin`
						FROM (`t0101_user` u, `t0102_user_access` acc )
						LEFT JOIN `t0202_transaction_book` tb ON (u.`id` = tb.`user_id`)
							WHERE  u.`id` = acc.`user_id`
							GROUP BY u.`id`
					)r
						{$sqlSearch}
						LIMIT {$startIndex} , {$pageSize}
			";

			$member = DB::select($sql);
			$total = UserAccess::all()->count();

			return ResponseHelper::OutputJSON('success', '', [
					'member' => $member,
					'page' => $page,
					'page_size' => $pageSize, 
					'pageTotal' => ceil($total/$pageSize) ,
				]);
		} catch (Exception $ex) {
			LogHelper::LogToDatabase($ex->getMessage(), ['environment' => json_encode([
				'inputs' => \Request::all(),
			])]);
			return ResponseHelper::OutputJSON('exception');
		}
	}

	public function createMainCategory() {
//need test
		$name = Request::input('name');
		$description = Request::input('description');
		$enable = Request::input('enable', 1);

		$mainCategory = CategoryMain::where('name' , $name)->first();

		if($mainCategory){
			return ResponseHelper::OutputJSON('fail', "name is already use");
		}

		$mainCategory = new CategoryMain;
		$mainCategory->name = $name;
		$mainCategory->description = $description;
		$mainCategory->enable = $enable;
		$mainCategory->save();

		return ResponseHelper::OutputJSON('success');

	}

	public function createSubCategory() {
//need test
		$mainId = Request::input('main_id');
		$name = Request::input('name');
		$description = Request::input('description');
		$enable = Request::input('enable' , 1);

		$subCategory = CategorySub::where('name' , $name)->first();

		if($subCategory){
			return ResponseHelper::OutputJSON('fail', "name is already use");
		}

		$subCategory = new CategorySub;
		$subCategory->main_id = $mainId;
		$subCategory->name = $name;
		$subCategory->description = $description;
		$subCategory->enable = $enable;
		$subCategory->save();

		return ResponseHelper::OutputJSON('success');

	}

	public function resetPassword($userId){
		$password = Request::input('password');
		$sendEmail = Request::input('send_email', 0);
		try {

			if (!$userId || !$password) {
				return ResponseHelper::OutputJSON('fail', 'missing parameters');
			}
			if (strlen($password) < 6) {
				return ResponseHelper::OutputJSON('fail', 'password must be atleast 6 chars');
			}
			$user = User::find($userId);
			$userAccess = UserAccess::find($userId);

			if (!$user || !$userAccess) {
				return ResponseHelper::OutputJSON('fail', 'user not found');
			}

			$userAccess->password_sha1 = sha1($password . config('app.auth_salt'));
			$userAccess->access_token = '';
			$userAccess->save();

			// if ($sendEmail) {
			// 	EmailHelper::SendEmail([
			// 		'about' => 'Password Reset',
			// 		'subject' => 'You FXUM password.',
			// 		'body' => 'emails.reset-account-password',
			// 		'bodyHtml' => 'emails.reset-account-password',
			// 		'toAddresses' => [$user->email], //['support@fxum.com'],
			// 		'bccAddresses' => [],
			// 		'replyToAddresses' => ['support@fxum.com'],
			// 		'data' => [
			// 			'name' =>  $user->name,
			// 			'username' => $userAccess->username,
			// 			'password' => $password,
			// 		],
			// 	]);
			// }
			return ResponseHelper::OutputJSON('success');

		} catch (Exception $ex) {
			LogHelper::LogToDatabase($ex->getMessage(), ['environment' => json_encode([
				'inputs' => Request::all(),
			])]);
			return ResponseHelper::OutputJSON('exception');
		}
	}

	public function accountTopUp(){
		$userId = Request::input('user_id');
		$amount = Request::input('amount');
		$remark = Request::input('remark', 'Top Up');
		$password = Request::input('password');

		if($password != Config::get('app.topup_key') ){
			return ResponseHelper::OutputJSON('fail', "invalid sercet key");
		}

		$userAccess = UserAccess::find($userId);
		if(!$userAccess){
			return ResponseHelper::OutputJSON('fail', "user not found");
		}
		
		$transcation = new TransactionBook;
		$transcation->user_id = $userId;
		$transcation->account_debit = $amount;
		$transcation->remark = $remark;
		$transcation->save();

		DatabaseUtilHelper::LogTopup($userId, $amount);
		return ResponseHelper::OutputJSON("success");
	}

	public function getAdvtList(){
		$page = Request::input("page", '1');
		$pageSize = Request::input("page_size", '15');

		$startIndex = $pageSize * ($page - 1);

		$sql = "
			SELECT `id`, `name` , `description` , `image_path` , `created_at` , IF(`enable` = 1 , 'Running', 'Stop') as `status` , `enable`
				FROM `t0311_banner_advertisement`
					WHERE `deleted_at` IS NULL

					ORDER BY `enable` DESC
					LIMIT {$startIndex} , {$pageSize}
		";

		$result = DB::select($sql);
		$total = count($result);
		return ResponseHelper::OutputJSON('success','' ,[
					'advertisement' => $result,
					'page' => $page,
					'page_size' => $pageSize, 
					'pageTotal' => ceil($total/$pageSize) ,
				]);
	}

	public function newAvtImage(){
		$imageName = Request::input("name");
		$imageDescription = Request::input("description");

		if(!$imageName){
			return ResponseHelper::OutputJSON('fail', 'missing parameters');
		}

		$slug = str_slug($imageName, "-");
		if (file_exists("./assets/images/advertisement/{$slug}.jpg")) {
			return ResponseHelper::OutputJSON('fail','image name already exist');
		}

		try{
			$storage = new FileSystem('./assets/images/advertisement/');
			$fileUpload = new File('fileUpload', $storage);

			$fileUpload->setName($slug);
			$fileUpload->addValidations(array(
				new Mimetype('image/jpeg'),
				new Size('5M'),
			));

			$fileUpload->upload();		

			$advertisement = new BannerAdvertisement;
			$advertisement->name = $imageName;
			$advertisement->description = $imageDescription;
			$advertisement->image_path = '/assets/images/advertisement/'.$slug.'.jpg';
			$advertisement->save();

			return view('/admin/advertisement');

		} catch (Exception $ex) {
			LogHelper::LogToDatabase($ex->getMessage(), ['environment' => json_encode([
				'inputs' => Request::all(),
			])]);
			return ResponseHelper::OutputJSON('exception');
		}
	}

	public function updateAvtImage($imageId){
		$imageDescription = Request::input("description");

		try{
			$advertisement = BannerAdvertisement::find($imageId);

			$storage = new FileSystem('./assets/images/advertisement/', true);
			$fileUpload = new File('fileUpload', $storage);
			$fileUpload->setName($advertisement->name);
			$fileUpload->addValidations([
				new Mimetype('image/jpeg'),
				new Size('5M'),
			]);

			if(!$fileUpload->getErrors()){
				$fileUpload->upload();	
			}

			$advertisement->description = $imageDescription;
			$advertisement->save();

			return view('/admin/advertisement');
		} catch (Exception $ex) {
			LogHelper::LogToDatabase($ex->getMessage(), ['environment' => json_encode([
				'inputs' => Request::all(),
			])]);
			return ResponseHelper::OutputJSON('exception', $fileUpload->getErrors());
		}
	}

	public function updateAvtEnable($imageId){
		$enable = Request::input('enable');

		$advertisement = BannerAdvertisement::find($imageId);

		if($enable){
			$advertisement->enable = 1;	
		}

		if(!$enable){
			$advertisement->enable = 0;			
		}

		$advertisement->save();
		return ResponseHelper::OutputJSON('success');
	}

	public function deleteAvtImage($imageId){
		$advertisement = BannerAdvertisement::find($imageId);

		if(!$advertisement){
			return ResponseHelper::OutputJSON('fail', 'advertiesment not found');
		}

		unlink('.'.$advertisement->image_path);
		$advertisement->delete();

		return ResponseHelper::OutputJSON('success');
	}

	public function avtSlide(){
		$avt = BannerAdvertisement::where('enable', 1)->orderBy('sequence', 'ASC')->get();
		return ResponseHelper::OutputJSON('success', '', $avt);
	}

}
