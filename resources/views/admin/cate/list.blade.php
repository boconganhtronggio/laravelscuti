@extends('admin.master')
@section('controller','Category')
@section('action','list')
@section('content')
<div class="col-lg-7" style="padding-bottom:20px">
    @if (count($errors)>0)
        <div class="alert alert-danger" >
            <ul>
                @foreach($errors->all() as $error)
                    <li>{!! $error !!}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>ID</th>
            <th>Name</th>
            <th>Category Parent</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        <?php $stt = 0 ?>
        @foreach ($data as $item)
        <?php $stt = $stt+1 ?>
        <tr class="odd gradeX" align="center">
            <td>{!! $item["id"] !!}</td>
            <td>{!! $stt !!}</td>
            <td>{!! $item["name"] !!}</td>
            <td>
              {!! $item["parent_id"] !!}
            </td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i>
                <form action="{!! route('admin.cate.getdelete', $item['id']) !!}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit">Delete</button>
                    <!-- <a href="{!! URL::route('admin.cate.getdelete', $item['id']) !!}"> Delete</a> 
                        {!! URL::route('admin.cate.getedit', $item['id']) !!}
                -->
                </form>
            </td>
           <td class="center"><i class="fa fa-trash-o  fa-fw"></i>
               <form action="{!! route('admin.cate.getedit', $item['id']) !!}" method="GET">
                   <button type="submit">Edit</button>
               </form>
           </td> 
        </tr>
        @endforeach
    </tbody>
</table>
@endsection() 
    <!-- /#page-wrapper -->

   