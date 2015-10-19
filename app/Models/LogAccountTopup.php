<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class LogAccountTopup extends Eloquent {

	public $table = 't9402_log_account_topup';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $hidden = [];

}