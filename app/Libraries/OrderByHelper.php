<?php namespace App\Libraries;

use DB;
use Exception;
use Libraries\LogHelper;
use Models\User;
use Models\UserAccess;
use Models\UserAccount;
use Request;

class OrderByHelper {

	public static function GetUserInfo($orderBy) {
		switch ($orderBy) {
			case 'id-asc':$orderBy = 'ORDER BY u.`id` ASC';
				break;
			case 'id-desc':$orderBy = 'ORDER BY `id` DESC';
				break;
			case 'name-asc':$orderBy = 'ORDER BY `name` ASC';
				break;
			case 'name-desc':$orderBy = 'ORDER BY `name` DESC';
				break;
			case 'username-asc':$orderBy = 'ORDER BY `username` ASC';
				break;
			case 'username-desc':$orderBy = 'ORDER BY `username` DESC';
				break;
			case 'mt4-asc':$orderBy = 'ORDER BY `mt4_login_id` ASC';
				break;
			case 'mt4-desc':$orderBy = 'ORDER BY `mt4_login_id` DESC';
				break;
			case 'status-asc':$orderBy = 'ORDER BY `status` ASC';
				break;
			case 'status-desc':$orderBy = 'ORDER BY `status` DESC';
				break;
			case 'balance-asc':$orderBy = 'ORDER BY `balance` ASC';
				break;
			case 'balance-desc':$orderBy = 'ORDER BY `balance` DESC';
				break;
		}

		return $orderBy;
	}
}