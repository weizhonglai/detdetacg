<?php namespace App\Libraries;

use App\Models\LogInsert;
use App\Models\LogAccountTopup;
use App\Models\LogSigninAdmin;

use DB;
use Exception;
use PDO;
use Request;


class DatabaseUtilHelper {

	public static function StoredProcExecuter($storedProc, $params = []) {

		try {
			$pdo = DB::connection()->getPdo();
			$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
			$stmt = $pdo->prepare($storedProc);

			$ip = Request::ip();
			$stmt->bindParam(':ip', $ip);
			foreach ($params as $key => &$val) {
				$stmt->bindParam($key, $val);
			}

			$stmt->execute();
			$resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$stmt->closeCursor();

			$result = $pdo->query('SELECT @data, @message')->fetch(PDO::FETCH_ASSOC);
			//$result['result_set'] = $resultSet;
			return $result;

		} catch (Exception $ex) {
			LogHelper::LogToDatabase($ex->getMessage(), ['environment' => json_encode([
				'storedProc' => $storedProc,
				'params' => $params,
			])]);
			return false;
		}
	}

	public static function LogInsert($userId, $tableName, $tableId) {
		try {
			$log = new LogInsert;
			$log->user_id = $userId;
			$log->table_name = $tableName;
			$log->table_id = $tableId;
			$log->created_ip = Request::ip();
			$log->save();

		} catch (Exception $ex) {
			LogHelper::LogToDatabase($ex->getMessage(), ['environment' => json_encode([
				'userId' => $userId,
				'tableName' => $tableName,
				'tableId' => $tableId,
			])]);
			return ResponseHelper::OutputJSON('exception');
		}
	}

	public static function LogUpdate($userId, $tableName, $tableId, $wipedData = '') {
		try {
			$log = new LogUpdate;
			$log->user_id = $userId;
			$log->table_name = $tableName;
			$log->table_id = $tableId;
			$log->wiped_data = $wipedData;
			$log->created_ip = Request::ip();
			$log->save();

		} catch (Exception $ex) {
			LogHelper::LogToDatabase($ex->getMessage(), ['environment' => json_encode([
				'userId' => $userId,
				'tableName' => $tableName,
				'tableId' => $tableId,
				'wipedData' => $wipedData,
			])]);
			return ResponseHelper::OutputJSON('exception');
		}
	}

//pagination of data
	public static function GetData($model, $page, $pageSize) {

		$list = $model::orderby('created_at', 'DESC')->skip(($page - 1) * $pageSize)->take($pageSize)->get();
		$total = $model::count();

		return array(
			'list' => $list->toArray(),
			'page' => $page,
			'pageSize' => $pageSize,
			'pageTotal' => ceil($total / $pageSize),
		);

	}

	public static function TrafficControl($table, $limitInMinute = 5, $limitInCount = 10) {
		$count = LogInsert::where('table_name', $table)->where('created_ip', Request::ip())->whereRaw("DATE_ADD(`created_at`, INTERVAL {$limitInMinute} MINUTE) > NOW()")->count();
		return $count < $limitInCount;
	}

	public static function SignInControl($table, $username = '') {

		$ip = $_SERVER['REMOTE_ADDR'];
		$sqlForUsername = "
        SELECT COUNT(*) AS `count`
          FROM `{$table}`
             WHERE `tried_at` > DATE_SUB(NOW(), INTERVAL 60 SECOND)
                AND `username` = '{$username}'
                  AND  `tried_at` > (SELECT MAX(tried_at) FROM `{$table}` where success='0')
      ";

		$sqlForIp = "
       SELECT count(*) AS count
        FROM `{$table}`
          WHERE `trial_ip` = '{$ip}'
            AND `tried_at` > DATE_SUB(NOW(), INTERVAL 10 SECOND)
      ";

		$ipCount2 = DB::Select($sqlForIp);
		$userCount = DB::Select($sqlForUsername);

		if ($ipCount2[0]->count > 9) {return false;}
		if ($userCount[0]->count > 4) {return false;}

		return true;
	}

	public static function LogTopup($userId , $amount , $requestId , $status){
		$logTopUp = new LogAccountTopup;
		$logTopUp->user_id = $userId;		
		$logTopUp->request_id = $requestId;		
		$logTopUp->amount = $amount;
		$logTopUp->status = $status;
		$logTopUp->save();
	}

	public static function LogSigninAdmin($username , $password, $success){
		$logTopUp = new LogSigninAdmin;
		$logTopUp->username = $username;		
		$logTopUp->password_sha1 = $password;
		$logTopUp->success = $success;
		$logTopUp->created_ip = Request::ip();
		$logTopUp->save();
	}
}