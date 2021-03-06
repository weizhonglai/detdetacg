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

use App\Models\User;
use App\Models\UserAccess;
use App\Models\CategoryMain;
use App\Models\CategorySub;


class CmsController extends Controller {

	public function memberList(){
		$orderBy = Request::input('orderby', 'id-asc');
		$page = Request::input("page", '1');
		$pageSize = Request::input("page_size", '100');
		
		try{
			$startIndex = $pageSize * ($page - 1);
			$total = User::select(`id`)->count();

			$orderBy = OrderByHelper::GetUserInfo($orderBy);

			$sql = "
				SELECT u.`id`, u.`name` ,acc.`username`,ua.`type`, ua.`coin` , ua.`account_type` , ua.`happened_at`, ua.`expirate_date` , count(pi.`id`) AS `total_product`
					FROM (`t0101_user` u,`t0103_user_account` ua , `t0102_user_access` acc )
					LEFT JOIN `t0200_product_item` pi ON (u.`id` = pi.`user_id` AND pi.`enable` = 1 AND pi.`deleted_at` IS NULL)
						WHERE u.`id` = ua.`user_id`
						AND u.`id` = acc.`user_id`

						GROUP BY u.`id`
						{$orderBy}

						LIMIT {$startIndex} , {$pageSize}
			";

			$member = DB::select($sql);

			return ResponseHelper::OutputJSON('success', '', $member);
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
			$userAccess = UserAccess::where('user_id', $userId)->first();

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

	public function accountTopUp($userId){
//need test
		$amount = Request::input('amount');
		$password = Request::input('password');

		if($password != Config::get('app.topup_key') ){
			return ResponseHelper::OutputJSON('fail', "invalid sercet key");
		}

		$userAccount = UserAccount::where('user_id', $userId)->first();
		$coin = $userAccount->coin;

		$userAccount->coin = $coin+$amount;
		$userAccount->save();

		return ResponseHelper::OutputJSON("success");
	}

	public function changeAvtImage(){
//need test
		$imageName = Request::input("image_name");
		$imageDescription = Request::input("image_description");


		$slug = str_slug($imageName, "-");

		$storage = new FileSystem('./assets/images/advertisement/', true);

		$fileUpload1 = new File('fileUpload1', $storage);

		if (!intval($fileUpload1->getSize())) {
			die('missing image: thumb');
		}

		$fileUpload1->setName($slug);
		$fileUpload1->addValidations(array(
			new Mimetype('image/jpeg'),
			new Size('1M'),
		));

		$fileUpload1->upload();	

		$article = new Article;
		$article->title = $title;
		$article->url_slug = $slug;
		$article->content = $content;
		$article->intro = $intro;
		$article->share_en = $shareEN;
		$article->share_ms = $shareBM;
		$article->published_at = $publishedAt;
		$article->meta_title = $metaTitle;
		$article->meta_description = $metaDescription;
		$article->save();



	}
}
