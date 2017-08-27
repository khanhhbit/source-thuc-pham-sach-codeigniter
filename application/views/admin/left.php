
               <div class="sidebar-collapse nano">
                    <div class="nano-content">
                        <ul class="nav metismenu" id="side-menu">
                            <li class="nav-header">
                                <div class="dropdown side-profile text-left"> 
                                    <span style="display: block;">
                                        <img alt="<?php echo $admin_info->images ?>" class="img-circle" src="<?php echo base_url('upload/avatar/'.$admin_info->images)?>" width="40">
                                    </span>
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                        <span class="clear" style="display: block;"> <span class="block m-t-xs"> <strong class="font-bold" > <?php echo $admin_info->name ?> <b class="caret"></b></strong>
                                            </span></span> </a>
                                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                        <li><a href="<?php echo admin_url('admin/edit') ?>"><i class="fa fa-user"></i>Thông Tin</a></li>
                                        <li><a href="<?php echo admin_url('admin/logout') ?>"><i class="fa fa-key"></i>Đăng Xuất</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="active">
                                <a href="<?php echo admin_url('')?>"><i class="fa fa-th-large"></i> <span class="nav-label">Bảng Điều Khiển </span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="<?php echo admin_url('')?>">Bảng Điều Khiển </a></li>
                                </ul>
                            </li>
                             <li>
                                <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Quản Lý Bán Hàng</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="<?php echo admin_url('transaction') ?>">Giao Dịch</a></li>
                                    <li><a href="<?php echo admin_url('order') ?>">Đơn Hàng Sản Phẩm</a></li>

                                </ul>
                            </li>                         
                            <li>
                                <a href="#"><i class="fa fa-product-hunt"></i> <span class="nav-label">Sản Phẩm</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="<?php echo admin_url('product') ?>">Sản Phẩm</a></li>
                                    <li><a href="<?php echo admin_url('catalog') ?>">Danh Mục</a></li>
                                </ul>
                            </li>
                           
                             <li>
                                <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Tài Khoản</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="<?php echo admin_url('admin') ?>">Ban Quản Trị</a></li>
                                    <li><a href="<?php echo admin_url('user') ?>">Thành Viên</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">Liên Hệ</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="<?php echo admin_url('contact') ?>">Liên hệ</a></li>
                                </ul>
                            </li>                           
                            <li>
                                <a href="#"><i class="fa fa-table"></i> <span class="nav-label">Nội Dung</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="<?php echo admin_url('slide') ?>">Slide</a></li>
                                    <li><a href="<?php echo admin_url('news') ?>">Tin Tức</a></li>
                                    <li><a href="<?php echo admin_url('video') ?>">Video</a></li>
                                </ul>
                            </li>              
                        </ul>
                    </div>
                </div>