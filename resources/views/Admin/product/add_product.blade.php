@extends('Admin.master')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm Sản Phẩm
                          
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach    
                            </div>
                         @endif   
                         @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                            
                        </div>
                    @endif               
                        <form action="{{route('product.add')}}" method="POST"
                        enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Thể loại</label>
                                <select class="form-control" name="category">
                                            <option value="">Chọn thể loại</option>
                                            @foreach ($Category as $sp) 
                                            <option value="{{$sp->id}}">{{$sp->name}}</option>
                                            @endforeach; 
                                        </select>
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" placeholder=" Nhập tên sản phẩm  " />
                            </div>
                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea class="form-control" rows="3" name="content"></textarea>
                            </div>  
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input type="file" name="image" multiple>
                            </div>
                            <div class="form-group">
                                
                            </div>
                            <div class="form-group">
                                <label>Số lượng</label>
                                <input type="number" class="form-control" name="quantity" placeholder="Nhập số lượng sản phẩm" />
                            </div>
                           <!--  <div class="form-group">
                                        <label>Màu sản phẩm:</label>
                                        <input class="form-control" name="color" >
                            </div>
                            <div class="form-group">
                                        <label>Kích cỡ của sản phẩm:</label>
                                        <input class="form-control" name="size[] "  >
                             </div> -->
                             <div class="form-group">
                                    <label>Giá</label>
                                <input class="form-control" name="price" placeholder="Nhập giá tiền" >
                            </div>
                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection        