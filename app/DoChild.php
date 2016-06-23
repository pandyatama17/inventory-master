<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class DoChild extends Model {

	protected $table = 'do_childs';
	// public $timestaps = false;

	protected $fillable =
	[
		'parent_id',
		'item_id',
		'qty',
		'subtotal',
		'discount'
	];

}
