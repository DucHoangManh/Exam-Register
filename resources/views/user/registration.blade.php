@extends('user.layouts.master')

@section('title', 'Đăng ký thi')

@section('header-mobile')
@include('user.modules.header-mobile')
@endsection

@section('aside')
@include('user.modules.aside')
@endsection

@section('header')
@include('user.modules.header')
@endsection

@section('content-head')
@include('user.modules.content-head')
@endsection

@section('content')
<!--Begin::Row-->
<div class="row">
	<div class="col-xl-12 col-lg-12 order-lg-3 order-xl-1">
		<!--begin:: Widgets/User Progress -->
		<div class="kt-portlet kt-portlet--height-fluid">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Danh sách lớp học phần
					</h3>
				</div>
				<div class="kt-portlet__head-toolbar">
					<ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#kt_widget31_tab2_content" role="tab">					
								Hạn đăng ký: 01/01/2020
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="kt-portlet__body">
				<div class="kt-section">
					<span class="kt-section__info">
						Nếu qua thời gian đăng ký mà sinh viên chưa đăng ký lịch thi phù hợp thì hệ thống sẽ chọn ngẫu nhiên ca thi.
					</span>
					<div class="kt-section__content">
						<table class="table" style="text-align: center;">
						  	<thead class="thead-light">
						    	<tr>
						      		<th>#</th>
						      		<th>Tên học phân</th>
						      		<th>TC</th>
						      		<th>Mã học phần</th>
						      		<th>Giảng viên</th>
						      		<th>Thứ</th>
						      		<th>Giờ thi</th>
						      		<th>Giảng đường</th>
						      		<th>Số TT</th>
						      		<th>Trạng thái</th>
						      		<th>Sửa</th>
						    	</tr>
						  	</thead>
						  	<tbody>
						  		@for($i = 0; $i < 6; $i++)
						    	<tr>
							      	<th scope="row">{{$i + 1}}</th>
							      	<td>Phát triển ứng dụng web</td>
							      	<td>3</td>
							      	<td>INT3306 10</td>
							      	<td>TS. Lê Đình Thanh</td>
							      	<td>4</td>
							      	<td>11:00 - 13:00</td>
							      	<td>Phòng 101-G2</td>
									<td>36</td>
									<td>
										<div class="kt-widget31__progress">
											<a href="#" class="kt-widget31__stats">
												<span>33%</span>					    							 
											</a>
											<div class="progress progress-sm">
												<div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
									</td>
									<td>
										@if ($i == 4)
										<button type="button" class="btn btn-info btn-icon" data-toggle="modal" data-target="#kt_modal_6">
											<i class="flaticon2-add-circular-button"></i>
										</button>
										@else
										<button type="button" class="btn btn-outline-danger btn-elevate btn-icon"><i class="flaticon2-trash"></i></button>
										@endif
									</td>
						    	</tr>
						    	@endfor
						  	</tbody>
						</table>
					</div>
				</div>
			</div>

		</div>

		<!--end:: Widgets/User Progress -->	
	</div>
</div>
<!--End::Row-->
@endsection

@section('footer')
@include('user.modules.footer')
@endsection

@section('modal')
@include('user.modules.modals.exam-register')
@endsection
