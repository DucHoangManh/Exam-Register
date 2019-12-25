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
								Hạn đăng ký: {{session('exam')->deadline}}
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="kt-portlet__body">
				<div class="kt-section">
					<div class="kt-section__content">
						<table class="table">
						  	<thead class="thead-light">
						    	<tr>
						      		<th>#</th>
						      		<th>Tên học phân</th>
						      		<th>TC</th>
						      		<th>Mã học phần</th>
						      		<th>Giảng viên</th>
									<th>Trạng thái</th>
									<th>Thứ</th>
									<th>Ngày thi</th>
						      		<th>Giờ thi</th>
						      		<th>Giảng đường</th>
						      		<th>Số TT</th>
						      		<th>Sửa</th>
						    	</tr>
						  	</thead>
						  	<tbody>
						  		@foreach($student->registers as $register)
						    	<tr>
							      	<th scope="row">{{$loop->index + 1}}</th>
							      	<td>{{$register->class->module->subject->name}}</td>
							      	<td>{{$register->class->module->subject->credit}}</td>
							      	<td>{{$register->class->code}}</td>
							      	<td>{{$register->class->teacher->name}}</td>
									<td>
										<div class="kt-widget31__progress" style="text-align:center">
											<a href="#" class="kt-widget31__stats">
												<span>{{round($register->class->registerStatus()*100)}}%</span>					    							 
											</a>
											<div class="progress progress-sm">
												<div class="progress-bar bg-warning" role="progressbar" style="width: {{round($register->class->registerStatus()*100)}}%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
									</td>
									@if($register->test == null) 
									<td> - </td>
									<td> - </td>
									<td> - </td>
									<td> - </td>
									<td> - </td>
									<td>
										<button type="button" class="btn btn-info btn-icon add-test" data-class="{{$register->class->id}}" data-register="{{$register->id}}" data-toggle="modal" data-target="#kt_modal_6">
											<i class="flaticon2-add-circular-button"></i>
										</button>
									</td>
									@else
									<td>{{substr($register->test->shift->code, 0, 2)}}</td>
							      	<td>{{$register->test->shift->date}}</td>
							      	<td>{{$register->test->shift->start.' - '.$register->test->shift->end}}</td>
							      	<td>{{$register->test->room->name.' - '.$register->test->room->location->name}}</td>
									<td> {{$register->id_number}}</td>
									
									<td>
										<form action="{{route('user.register')}}" method="post">
											{{ csrf_field() }}
											<input type="hidden" name="register_id" value="{{$register->id}}">
											<button type="submit" class="btn btn-outline-danger btn-elevate btn-icon"><i class="flaticon2-trash"></i></button>
										</form>
									</td>
									@endif
						    	</tr>
						    	@endforeach
						  	</tbody>
						</table>
					</div>
				</div>
			</div>

		</div>

		<!--end:: Widgets/User Progress -->	
	</div>
</div>

<script src="user/js/registration.js"></script>
<!--End::Row-->
@endsection

@section('footer')
@include('user.modules.footer')
@endsection

@section('modal')
@include('user.modules.modals.exam-register')
@endsection