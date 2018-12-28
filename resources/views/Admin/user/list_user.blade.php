@extends('Admin.master')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">

                        <h1 class="page-header">Danh Sách Thành Viên</h1>

                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif    
                             
                            <thead>
                                <tr align="center">
                                    <th>ID</th>
                                    <th>Tên</th>
                                    <th>Email</th>
                                    <th>Số điện thoại</th>
                                    <th>Địa chỉ</th>
                                    <th>Quyền</th>
                                    <th>Xóa </th>
                                    <th>Sửa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($User as $u)
                                <tr class="odd gradeX" align="center">
                                        <td>{{$u->id}}</td>
                                        <td>{{$u->name}}</td>
                                        <td>{{$u->email}}</td>
                                        <td>{{$u->phone}}</td>
                                        <td>{{$u->address}}</td>
                                        
                                        <td>
                                            @if($u->user_type == 1 )
                                                {{'Admin'}}
                                            @else
                                                {{'Thành viên'}}   
                                            @endif    

                                        </td>
                                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('Bạn có muốn xóa không người dùng này không?')" href="{{route('user.delete',$u->id)}}"> Delete</a></td>
                                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('user.edit',$u->id)}}">Edit</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        
                    
                    </table>
              
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection        