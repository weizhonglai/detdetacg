<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class TopUpRequest extends Eloquent {

	public $table = 't0203_topup_request';
	protected $primaryKey = 'id';
	public $timestamps = true;
	protected $dates = ['deleted_at'];

}
