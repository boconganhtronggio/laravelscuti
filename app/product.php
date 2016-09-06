<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model {

	protected $table = 'products';
	protected $fillable = ['name','alias','price','intro','content','image','keywords'];
	public $timestamps = false;

	public function cate(){
		return $this->belongTo('App\cate');
	}

	public function User(){
		return $this->belongTo('App\User');
	}

	public function pimage(){
		return $this -> belongTo('App\product');
	}

}
