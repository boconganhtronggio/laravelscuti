@extends('admin.master')
@section('controller','Category')
@section('action','edit')
@section('content')
<div class="col-lg-7" style="padding-bottom:120px">
    @if (count($errors)>0)
        <div class="alert alert-danger" >
            <ul>
                @foreach($errors->all() as $error)
                    <li>{!! $error !!}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{!! url('admin/cate/edit/' . $id) !!}" method="POST">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
         <div class="form-group">
            <label>Category Parent</label>
            <select class="form-control">
                 <option value="0">Please Choose Category</option>
                @foreach($parent as $item)
               <option value="">{!! $item['name'] !!}</option>
               @endforeach()
            </select>
        </div>
        <div class="form-group">
            <label>Category Name</label>
            <input class="form-control" name="txtCateName" placeholder="Please Enter Category Name" value="{!! old('txtCateName',isset($data) ? $data['name'] : null )!!}" />
        </div>
        <div class="form-group">
            <label>Category Order</label>
            <input class="form-control" name="txtOrder" placeholder="Please Enter Category Order" value="{!! old('txtOrder',isset($data) ? $data['parent_id'] : null )!!}"/>
        </div>
        <div class="form-group">
            <label>Category Keywords</label>
            <input class="form-control" name="txtKeywords" placeholder="Please Enter Category Keywords" value="{!! old('txtKeywords',isset($data) ? $data['name'] : null )!!}"/>
        </div>
        <div class="form-group">
            <label>Category Description</label>
            <textarea class="form-control" rows="3" name="txtdescription" >{!! old('txtdescription',isset($data) ? $data['description'] : null )!!}</textarea>
        </div>
        <button type="submit" class="btn btn-default">Category Edit</button>
        <button type="reset" class="btn btn-default">Reset</button>
    <form>
</div>
@endsection()                 

                