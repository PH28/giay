@extends('Admin.master')
@section('content')
   <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thể Loại</h1>
                        
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif    
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <!-- <th>Category Parents</th> -->
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Category as $tl)
                                <tr class="even gradeC" align="center">
                                    <td>{{$tl->id}}</td>
                                    <td>{{$tl->name}}</td>
                                    <!-- <td>{{$tl->parent_id}}</td> -->
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('Bạn có muốn xóa không')" href="{{route('category.delete',$tl->id)}}">Xóa</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('category.edit',$tl->id)}}">Edit</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

@endsection        
 
    