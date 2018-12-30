 <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
                      
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Thể Loại<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('category.index')}}">Danh Sách Thể Loại</a>
                                </li>
                                <li>
                                    <a href="{{route('category.create')}}">Thêm Thể Loại</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-cube fa-fw"></i> Sản Phẩm<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('product.index')}}">Danh Sách Sản Phẩm</a>
                                </li>
                                <li>
                                    <a href="{{route('product.create')}}">Thêm Sản Phẩm</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Thành Viên<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('user.index')}}">Danh Sách Thành Viên</a>
                                </li>
                                <li>
                                    <a href="{{route('user.create')}}">Thêm Thành Viên</a>
                                </li>
                            </ul>   
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-cc-paypal fa-fw"></i> Đơn Hàng<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('order.index')}}">Danh Sách Đơn Hàng</a>
                                </li>
                               <!--  <li>
                                    <a href="{{route('order.create')}}">Thêm Đơn Hàng</a>
                                </li> -->
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>