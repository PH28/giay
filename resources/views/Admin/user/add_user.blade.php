 @extends('Admin.master')
 @section('content')
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm Thành Viên
                          
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
                        <form action="{{route('user.add')}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Tên</label>
                                <input class="form-control" name="name" placeholder="Nhập tên của bạn" />
                             <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Nhập địa chỉ email của bạn" />
                            </div>
                            
                            <div class="form-group">
                                <label>Mật khẩu</label>
                                <input type="password" class="form-control" name="pass" placeholder="Nhập mật khẩu của bạn" />
                            </div>
                            <div class="form-group">
                                <label>Nhập lại mật khẩu</label>
                                <input type="password" class="form-control" name="repass" placeholder="Nhập lại mật khẩu của bạn" />
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input type="number" name="phone" class="form-control" placeholder="Nhập số điện thoại">
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input type="text" name="address" class="form-control" placeholder="Nhập địa chỉ">
                            </div>
                            
                            <div class="form-group">
                                
                                <label class="radio-inline">
                                    <input name="lv" value="0" type="radio" checked="">Thành Viên
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="lv" value="1">Admin
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Hủy</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection        