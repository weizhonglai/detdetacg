<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class UserAccess extends Eloquent {

	public $table = 't0102_user_access';
	protected $primaryKey = 'user_id';
	public $timestamps = false;

	public function user() {
		return $this->hasOne('App\Models\User', 'id', 'user_id');
	}

}