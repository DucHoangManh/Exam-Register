<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="nav-item start active">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu" style="display: none;">
                    <li class="nav-item start active open">
                        <a href="index-2.html" class="nav-link ">
                            <i class="icon-bar-chart"></i>
                            <span class="title">Dashboard 1</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a href="dashboard_2.html" class="nav-link ">
                            <i class="icon-bulb"></i>
                            <span class="title">Dashboard 2</span>
                            <span class="badge badge-success">1</span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a href="dashboard_3.html" class="nav-link ">
                            <i class="icon-graph"></i>
                            <span class="title">Dashboard 3</span>
                            <span class="badge badge-danger">5</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="heading">
                <h3 class="uppercase">Kỳ thi</h3>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-calendar"></i>
                    <span class="title">Ca thi</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu" style="display: none;">
                    <li class="nav-item  ">
                        <a href="{{route('shift.index')}}" class="nav-link ">
                            <span class="title">Show</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('shift.create')}}" class="nav-link ">
                            <span class="title">Create</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-flag"></i>
                    <span class="title">Phòng thi</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu" style="display: none;">
                    <li class="nav-item  ">
                        <a href="{{route('room.index')}}" class="nav-link ">
                            <span class="title">Show</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('room.create')}}" class="nav-link ">
                            <span class="title">Create</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-pointer"></i>
                    <span class="title">Điểm thi</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu" style="display: none;">
                    <li class="nav-item  ">
                        <a href="{{route('location.index')}}" class="nav-link ">
                            <span class="title">Show</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('location.create')}}" class="nav-link ">
                            <span class="title">Create</span>
                        </a>
                    </li>
                </ul>
            </li>
            
            
            <li class="heading">
                <h3 class="uppercase">Quản lý</h3>
            </li>
            
            
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-briefcase"></i>
                    <span class="title">Sinh viên</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu" style="display: none;">
                    <li class="nav-item  ">
                        <a href="{{route('student.index')}}" class="nav-link ">
                            <span class="title">Show</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{URL::to('admin/student/create')}}" class="nav-link ">
                            <span class="title">Create</span>
                        </a>
                    </li>
                </ul>
            </li>
             <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-users"></i>
                    <span class="title">Giảng viên</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu" style="display: none;">
                    <li class="nav-item  ">
                        <a href="{{URL::to('admin/teacher')}}" class="nav-link ">
                            <span class="title">Show</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{URL::to('admin/teacher/create')}}" class="nav-link ">
                            <span class="title">Create</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-graduation"></i>
                    <span class="title">Lớp</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu" style="display: none;">
                    <li class="nav-item  ">
                        <a href="{{URL::to('admin/class')}}" class="nav-link ">
                            <span class="title">Show</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{URL::to('admin/class/create')}}" class="nav-link ">
                            <span class="title">Create</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-book-open"></i>
                    <span class="title">Môn học</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu" style="display: none;">
                    <li class="nav-item  ">
                        <a href="{{URL::to('admin/subject')}}" class="nav-link ">
                            <span class="title">Show</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{URL::to('admin/subject/create')}}" class="nav-link ">
                            <span class="title">Create</span>
                        </a>
                    </li>
                </ul>
            </li>
            
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-user"></i>
                    <span class="title">Tài khoản</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu" style="display: none;">
                    <li class="nav-item  ">
                        <a href="{{URL::to('admin/user')}}" class="nav-link ">
                            <span class="title">Show</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{URL::to('admin/user/create')}}" class="nav-link ">
                            <span class="title">Create</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>