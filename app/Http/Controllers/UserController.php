<?php namespace App\Http\Controllers;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Http\Requests\UserRequest;
use App\Http\Requests\LoginRequesr;
use App\User;

/*use Illuminate\Support\MessageBag;*/

class UserController extends Controller {

	public function getAdd(){
		return view('admin.user.register');
	}
	public function getLogin (){
		return view('admin.user.login');
	}
	/*public function postLogin (LoginRequesr $reqest){
		$login = array(
				'username' => $reqest ->username,
				'password' => $reqest ->password,
				'level' =>1
			);
		
			if($this->auth->attempt($login))
			{
				return redirect()->route('admin.cate.list');
			}
			else
			{
				return redirect()->back();
			}
		
	}*/
	public function postLogin(LoginRequesr $request){
		$user=$request['username'];
		$password=$request['password'];
			if (Auth::attempt(['username' => $user, 'password' => $password]))
		    {


		    	if(Auth::user()->level >1){
		    		return view('welcome');
		    	}
		    	else{	   	
		    		return redirect()->action('CateController@getList')->with(['flash_level'=>'succses','flash_message'=>'đăng nhập thành công']);
		        //return view('admin.cate.add');
		    	}
		    }

		    	return redirect()->back()->with(['flash_level'=>'dangerous','flash_message'=>'chưa được']);
		    
	}
	public function postregister(Request $request){
			$name=$request['txtUser'];
			$pass=bcrypt($request['txtPass']);
			$email=$request['txtEmail'];
			$lv=$request['rdoLevel'];
			$user=new User();
			$user->username=$name;
			$user->password=$pass;
			$user->email=$email;
			$user->level=$lv;
			if($user->save()){
				return redirect()->route('admin.user.login')->with(['flash_level'=>'succses','flash_message'=>'bạn đã đăng ký thành công']);
			}
			else{
				return redirect()->back()->with(['flash_level'=>'dangerous','flash_message'=>'chưa được']);
			}
	}
public function doLogout()
{
    Auth::logout(); // log the user out of our application
    return Redirect('admin/user/login'); // redirect the user to the login screen
}
	/*ublic function getList() {
		return view('admin.cate.list');
	}*/
}
