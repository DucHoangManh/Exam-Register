<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>@yield('title')</title>
        <link href="vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
        <link href="vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
        <link href="css/demo3/style.bundle.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="media/logos/favicon.ico" />
        <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
        @yield('custom-head')
    </head>
    <body>
        <div class="row">
            <div class="col-xl-12 col-lg-12 order-lg-3 order-xl-1">
                <!--begin:: Widgets/User Progress -->
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__body">
                        <div class="kt-section">
                            <div class="row text-center">
                                <div class="col-md-6">
                                    <h5>ĐẠI HỌC QUỐC GIA HÀ NỘI</h5>
                                    <h5><strong>TRƯỜNG ĐẠI HỌC CÔNG NGHỆ</strong></h5>
                                </div>
                                <div class="col-md-6">
                                    <h5>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</h5>
                                    <h5>Độc lập - Tự do - Hạnh phức</h5>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-md-12">
                                    <h4><strong>KẾT QUẢ ĐĂNG KÝ MÔN HỌC - HỌC KỲ 2 NĂM HỌC 2019-2020</strong></h4>
                                    <h5>Ngày 24 tháng 12 năm 2019</h5>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p>Họ và tên:</p>
                                            <p>Chương trình đào tạo:</p>
                                        </div>
                                        <div class="col-md-8">
                                            <p><strong>{{$student->name}}</strong></p>
                                            <p><strong>Lorem ipsum dolor amet</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p>Ngày sinh:</p>
                                            <p>Khóa:</p>
                                        </div>
                                        <div class="col-md-8">
                                            <p><strong>{{$student->birthday}}</strong></p>
                                            <p><strong>{{$student->code}}</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p>Mã số sinh viên:</p>
                                            <p>Email:</p>
                                        </div>
                                        <div class="col-md-8">
                                            <p><strong>{{$student->code}}</strong></p>
                                            <p><strong>{{$student->user->email}}</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Mã môn học</th>
                                            <th>Môn học</th>
                                            <th>Số tín chỉ</th>
                                            <th>Lớp môn học</th>
                                            <th>Thứ</th>
                                            <th>Tiết</th>
                                            <th>Phòng</th>
                                            <th>Giảng đường</th>
                                            <th>Số báo danh</th>
                                            <th>Hình thức thi</th>
                                            <th>Ghi chú</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($student->registers as $register)
                                        <tr>
                                            <td>{{$loop->index+1}}</td>
                                            <td>{{$register->class->module->subject->code}}</td>
                                            <td>{{$register->class->module->subject->name}}</td>
                                            <td>{{$register->class->module->subject->credit}}</td>
                                            <td>{{$register->class->code}}</td>
                                            @if($register->test == null)
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            @else
                                            <td>{{substr($register->test->shift->code, 1, 3)}}</td>
                                            <td>{{substr($register->test->shift->code, 1, 3)}}</td>
                                            <td>{{$register->test->room->name}}</td>
                                            <td>{{$register->test->room->location->name}}</td>
                                            @endif
                                            <td>{{$register->id}}</td>
                                            <td>Chua lam</td>
                                            <td>{{($register->is_baned == 1) ? 'Cấm thi' : ''}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <p>Tổng số môn học đã đăng ký: <strong>{{$student->registers->where('test_id', '<>', null)->count().'/'.$student->registers->count()}}</strong></p>
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <h5><strong>SINH VIÊN</strong></h5>
                                    <p>(Ký và ghi rõ họ tên)</p>
                                    <br>
                                    <br>
                                    <br>
                                    <p><strong>{{$student->name}}</strong></p>
                                </div>
                                <div class="col-md-6 text-center">
                                    <p>Hà Nội, ngày ... tháng ... năm ...</p>
                                    <h5><strong>XÁC NHẬN CỦA PHÒNG ĐÀO TẠO</strong></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end:: Widgets/User Progress -->
            </div>
        </div>
        <script>
        $(document).ready(function() {
        $('.print').click(function() {
        console.log('print');
        var printContents = $('.kt-section').html();
        var originalContents = $('body').html();
        $('body').html(printContents);
        window.print();
        $('body').html(originalContents);
        });
        });
        </script>
    </body>
</html>