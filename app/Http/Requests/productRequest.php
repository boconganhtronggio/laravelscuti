<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class productRequest extends Request {

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
			'txtName' => 'required|unique:products,name'
		];
	}
	 public function messages(){
	 	return [
	 		'txtName.required' => 'please enter product name',
	 		'txtName.unique' =>'product name is unique'
	 		];
	 }

}
