<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserAccount extends Eloquent {
	use SoftDeletes;

	public $table = 't0103_user_account';
	protected $primaryKey = 'user_id';
	public $timestamps = true;
	protected $dates = ['deleted_at'];

}