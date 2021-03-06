<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests\CateRequest;
use App\cate;
class CateController extends Controller {

	public function getList(){
		$data = cate::select('id','name','parent_id')->orderBy('id','DESC')->get()->toArray();
		return view('admin.cate.list',compact('data'));
	}
	public function getAdd(){
		$parent = cate::select('id', 'name', 'parent_id')->get()->toArray();
		return view('admin.cate.add', compact('parent'));
	}
	public function postAdd(CateRequest $requ){
		/*print_r($requ->txtCateName);*/
		$cate = new cate;
		$cate->name= $requ ->txtCateName;
		$cate->alias= $requ ->txtCateName;
		$cate->order= $requ ->txtOrder;
		$cate->parent_id =5;
		$cate->keywords= $requ ->txtKeywords;
		$cate->description= $requ ->txtdescription;
		$cate->save();
		return redirect()->route('admin.cate.list')->with(['flash_level'=>'thành công','flash_message'=>'bạn đã thêm thành công']);
	}
	public function getdelete ($id) {
		$cate = cate::find($id);
		if($cate->parent_id === (int)$id){
			return redirect()->back()->withErrors('The Error Message');
		}else{
			$cate->delete();
		}
		return redirect()->back();
	}

	public function getedit ($id)
	{
		$data = cate::tofind($id)->toArray();
		return view ('admin.cate.edit',compact('parent','data','id'));
	}
	public function postedit(){

	}
	

}
