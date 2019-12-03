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
            <!-- <li class="heading">
                <h3 class="uppercase">Kỳ thi</h3>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">UI Features</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu" style="display: none;">
                    <li class="nav-item  ">
                        <a href="ui_tiles.html" class="nav-link ">
                            <span class="title">Tiles</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="ui_datepaginator.html" class="nav-link ">
                            <span class="title">Date Paginator</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="ui_nestable.html" class="nav-link ">
                            <span class="title">Nestable List</span>
                        </a>
                    </li>
                </ul>
            </li> -->
            
            
            <li class="heading">
                <h3 class="uppercase">Sinh viên</h3>
            </li>
            
            
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class=" icon-wrench"></i>
                    <span class="title">Quản lý</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu" style="display: none;">
                    <li class="nav-item  ">
                        <a href="{{URL::to('admin/student')}}" class="nav-link ">
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
            
        </ul>
    </div>
</div>