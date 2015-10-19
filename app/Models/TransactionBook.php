<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class TransactionBook extends Eloquent {

	public $table = 't0202_transaction_book';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $hidden = [];

}