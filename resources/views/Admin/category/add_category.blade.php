  @extends('Admin.master')
  @section('content')

  <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm Thể Loại </h1>
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
                            <form action="{{route('category.create')}}" method="POST">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                
                                <!-- <label>Category parent</label>
                                <select class="form-control" name="parent_id">
                                      <option value="">Chọn thể loại</option>
                                      @foreach($category as $item)
                                        <option value="{{$item->id}}">{{$item["name"]}}</option>  
                                      @endforeach  
                                </select> -->
                                    
                                <div class="form-group">
                                        <label>Tên</label>
                                    <input class="form-control" name="name" placeholder="Nhập Tên " >
                                </div>

                                
                                    
                                <button type="submit" class="btn btn-default">Lưu</button>
                                <button type="reset" class="btn btn-default">Làm mới</button>
                            <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection        