<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class product_image extends Model {

	protected $table = 'product_image';
	protected $fillable = ['image','product-id'];
	public $timestamps = false;


}
