@extends('Admin.master')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product
                            
                        </h1>
                    </div>
                     @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                     @endif   
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                
                                <th>Tên sản phẩm</th>
                                <th>Mô tả</th>
                                <th>Giá</th>
                                <th>Hình ảnh</th>
                                <th>Số lượng</th>
                                <th>Thể loại</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Product as $pr)
                                <tr class="odd gradeX" align="center">
                                    
                                    <td>{{$pr->name}}</td>
                                    <td>{{$pr->content}}</td>
                                    <td>{{number_format($pr->price,0,",",".")}}VND</td>
                                    <td><img src="{!!asset('images/'.$pr['image'])!!}" alt="{{$pr->name}}" style="width: 300px"></td>
                                    <td>{{$pr->quantity}}</td>
                                    <td>
                                        <?php $Category = DB::table('categories')->where('id',$pr->category_id)->first() ?>
                                        @if (!empty($Category->name))
                                            {!! $Category->name!!}
                                        @endif    
                                    </td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('product.delete',$pr->id)}}" onclick="return confirm('Bạn có muốn xóa không')"> Delete</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('product.edit',$pr->id)}}">Edit</a></td>
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