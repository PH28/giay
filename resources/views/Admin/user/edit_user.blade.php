@extends('Admin.master')    
@section('content')
  <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sửa Thành Viên</h1>
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
                            <form action="{{route('user.edit',$User->id)}}" method="POST">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-group">
                                    <label>Tên</label>
                                    <input class="form-control" name="name" value="{{$User->name}}">
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="changepass" id="changepass">
                                    <label>Đổi mật khẩu</label>
                                    <input type="password" class="form-control password" name="pass" disabled="" />
                                </div>
                                <div class="form-group">
                                    <label>Nhập lại mật khẩu</label>
                                    <input type="password" class="form-control password" name="repass" disabled="" />
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" value="{{$User->email}}" readonly="" />
                                </div>
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input type="number" class="form-control" name="phone" value="{{$User->phone}}" />
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <input type="text" class="form-control" name="address" value="{{$User->address}}" />
                                </div>
                                <div class="form-group">
                                    <label>Quyền</label>
                                    <label class="radio-inline">
                                        <input name="lv" value="1"  type="radio"
                                            @if($User->user_type == 1)
                                                {{'checked'}}  
                                            @endif >                     
                                        Admin
                                    </label>
                                    <label class="radio-inline">
                                        <input name="lv" value="0" type="radio" 
                                            @if($User->user_type == 0)
                                                {{'checked'}}  
                                            @endif          
                                        >Thành viên
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-default">Sửa</button>
                                <button type="reset" class="btn btn-default">Làm mới</button>
                            <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection    
@section('script')
    <script type="text/javascript">
        $(document).ready(function(){
            $("#changepass").change(function(){
                if($(this).is(":checked"))
                {
                    $(".password").removeAttr('disabled');
                }else
                {
                    $(".password").attr('disabled','');
                }
            });
        });
    </script>
@endsection    
