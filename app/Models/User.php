<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Eloquent {
	use SoftDeletes;

	public $table = 't0101_user';
	protected $primaryKey = 'id';
	public $timestamps = true;
	protected $dates = ['deleted_at'];

	public function access() {
		return $this->hasOne('App\Models\UserAccess', 'user_id', 'id');
	}

}
