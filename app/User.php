<?php namespace App;


use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract{

	use Authenticatable, CanResetPassword;
	
    // use SoftDeletes;
	/**
	
	 * The database table used by the model.
	 *
	 * @va string
	 */
	/*protected $table = 'users';*/

	/**
	 * The attributes that are mass assignable.
	 *
	 * @va array
	 */
	/*protected $fillable = ['username', 'email', 'password','level'];*/

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @va array
	 */
	protected $hidden = ['password', 'remember_token'];
	protected $table = 'users';
	protected $fillable = ['username','password','email','level'];
	public $timestamps = false;

	/*public function produc(){
		return $this->hasMany('App\produc');
	}*/

}
