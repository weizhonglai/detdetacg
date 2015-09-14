<?php namespace App\Libraries;

use App\Models\BookCapital;
use App\Models\BookExpenses;
use App\Models\BookIncome;
use App\Models\BookPocket;
use App\Models\User;
use App\Models\UserAccess;
use App\Models\UserExternalId;
use App\Models\UserSetting;
use DB;

class AuthHelper {
	
	public static function GenerateAccessToken($userId) {
		return $userId . '|' . sha1(time() . config('app.auth_salt'));
	}

}