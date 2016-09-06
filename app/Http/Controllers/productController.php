<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\productRequest;
use App\product;
use App\cate;
class productController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
	public function getAdd(){
		$parent = product::select('id','name','price','Intro','Content')->get()->toArray();
		return view('admin.product.add', compact('parent'));
	}
	public function getList(){
		$data = product::select('id','name','price','image')->orderBy('id','DESC')->get()->toArray();
		return view('admin.product.list',compact('data'));
	}
	public function postAdd(productRequest $request){
		
		$product = new product;
		$file_name = $product->file('fImages')->getClientOriginalName();
		var_dump($file_name);
		die;	
		$product->name= $request ->txtCateName;
		$product->price= $request ->txtPrice;
		$product->intro= $request ->txtIntro;
		$product->content =$request->txtContent;
		$product->image =$file_name;
		$product->keywords= $request ->txtOrder;
		$product->save();
		$product->file('fImages')->move('resources/upload',$file_name);
		return redirect()->route('admin.product.list')->with(['flash_level'=>'thành công','flash_message'=>'bạn đã thêm thành công']);
	}
}
