@extends('Admin.master')  
@section('content')
  <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sửa san pham</h1>
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
                             <form  action="{{route('product.edit',$Product->id)}}" method="POST" enctype="multipart/form-data" role="form">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    
                                 
                                    
                                    <div class="form-group">
                                        <label>Tên Sản Phẩm:</label>
                                        <input class="form-control" name="name"  value="{{$Product->name}}"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Giá sản phẩm:</label>
                                        <input class="form-control" name="price"  value="{{$Product->price}}"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Mô Tả:</label>
                                        <input class="form-control" type="text" name="content" value="{{$Product->content}}"/>
                                        {{--<textarea class="form-control" rows="10"  name="content" placeholder="{{$Product->content}}"></textarea>--}}
                                    </div>
                                    <div class="form-group">
                                        <label>Hình ảnh hiện tại:</label><br>
                                        <img  src="{!! asset('images/'.$Product['image']) !!}" alt="">
                                        <input type="hidden" value="{!! $Product['image'] !!}}"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Hình ảnh:</label>
                                        <input type="file" name="image" multiple>
                                    </div>
                                    <div class="form-group">
                                        <label>Loại sản phẩm:</label>
                                        <select class="form-control" name="category">
                                            @foreach ($Category as $br) :?>
                                            <option  value="{{$br->id}}">{{$br->name}}</option>
                                             @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Số lượng:</label>
                                        <input class="form-control" name="quantity" value="{{$Product->quantity}}"  />
                                    </div>
                                    
                                    <button type="submit" class="btn btn-default">Cập nhật</button>
                                </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection
                                    
                                  