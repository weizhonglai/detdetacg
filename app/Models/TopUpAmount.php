<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class TopUpAmount extends Eloquent {

	public $table = 't0204_topup_amount';
	protected $primaryKey = 'id';
	public $timestamps = true;
	protected $dates = ['deleted_at'];

}
