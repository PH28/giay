@extends('Admin.master')
@section('content')
	<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh Sách Đơn Hàng
                            
                        </h1>
                    </div>
                    <div class="col-lg-7" >
                        @if(session('thongbao'))
                        <div class="alert alert-success">     
                            {{session('success')}}
                        </div>
                        @endif
                     </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        
                        <thead>
                            <tr >
                                <th>ID</th>
                                <th>Người nhận</th>
                                <th>Tổng tiền</th>
                                <th>Ngày đặt hàng</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Status</th>
                                <!-- <th>Edit</th> -->
                                <th>Delete</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Order as $item)
                            <tr class="odd gradeX" >
                                <td><a href="{{route('order.detail',$item->id)}}"> {{$item->id}}</a></td>
                                <td>{{$item->receiver_name}}</td>
                                <td>{{number_format($item->total,0,',','.')}}VND</td>
                                <td>{{$item->date}}</td>
                                <td>{{$item->phone}}</td>
                                <td>{{$item->address}}</td>
                                <td><div class="dropdown">
                                 @if($item->status == 0)
                                <button class="btn btn-success  " type="button" id="dropdownMenu1" name="action" data-toggle="dropdown" disabled>
                                      Xác nhận thành công                      
                                    
                                </button>
                                @else
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu1" name="action" data-toggle="dropdown" >
                                      Đang chờ xác nhận
                                   
                                </button>
                                @endif
                                
                               
                                
                                
                                <td align="center"><a href="{{route('order.delete',$item->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa!')"><button type="button" class="btn btn-danger"><i class="fa fa-trash-o "></i>
                                </button></a></td>
                                
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