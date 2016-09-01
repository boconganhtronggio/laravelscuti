<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'txtUser' => 'requied|unique:users,username',
			'txtPass' => 'requied',
			'txtEmail'=>'requied|email',
		];
	}

	 public function messages(){
	 	return [
	 		'txtUser.required' => 'please enter user',
	 		'txtUser.unique' =>'username  is unique',
	 		'txtPass.requied' => 'please enter password',
	 		'txtEmail.requied' => 'please enter email',
	 		'txtPass.regex' => 'email incorrect formats'
	 		];
	 }

}
