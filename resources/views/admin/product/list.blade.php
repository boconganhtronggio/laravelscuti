@extends('admin.master')
@section('controller','Product')
@section('action','list')
@section('content')                   
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Image</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
         @foreach ($data as $item)
        <tr class="odd gradeX" align="center">
            <td>1</td>
            <td>{!! $item["name"] !!}</td>
            <td>{!! number_format($item["price"]) !!}</td>
            <td>{!! $item["image"] !!}</td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
        </tr>
        @endforeach
        <!-- <tr class="even gradeC" align="center">
            <td>2</td>
            <td>Áo Thun Polo</td>
            <td>250.000 VNĐ</td>
            <td>1 Hours Age</td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
        </tr> -->
    </tbody>
</table>
@endsection() 