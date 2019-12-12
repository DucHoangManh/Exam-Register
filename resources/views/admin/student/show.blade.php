@extends('admin.layouts.app')
@section('title', 'Thông tin sinh viên')
@section('page-title', 'Thông tin sinh viên')
@section('page-title-small', 'statistics, charts, recent events and reports')
@section('content')

<div class="row">
	<div class="col-md-8">
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-pointer font-blue"></i>
					<span class="caption-subject font-blue bold uppercase">Sinh viên</span>
				</div>
			</div>
			<div class="portlet-body">
				<div class="row">
					<div class="col-md-6">
						<p>Họ và tên: <strong>{{$student->name}}</strong></p>
						<p>Ngày sinh: <strong>{{$student->birthday}}</strong></p>
						<p>Email: <strong>{{$student->user->email}}</strong></p>
					</div>
					<div class="col-md-6">
						<p>Mã sinh viên: <strong>{{$student->code}}</strong></p>
						<p>Giới tính: <strong>@if($student->gender == 0) Nam @else Nữ @endif</strong></p>
					</div>
				</div>

				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Tên môn học</th>
							<th scope="col">Mã lớp</th>
							<th scope="col">Giáo viên</th>
							<th scope="col">Số tín chỉ</th>
							<th scope="col">Điều kiện dự thi</th>
							<th scope="col">Ngày thi</th>
							<th scope="col">Thời gian</th>
							<th scope="col">Địa điểm</th>
							<th scope="col">Xóa</th>
						</tr>
					</thead>
					<tbody>
						@foreach($student->class as $class)
						<tr>
							<th scope="row">{{$loop->index+1}}</th>
							<td>{{$class->subject->name}}</td>
							<td>{{$class->code}}</td>
							<td>{{$class->teacher->name}}</td>
							<td>{{$class->subject->credit}}</td>
							<td>Đủ dk</td>
							<td>Chưa làm</td>
							<td>Chưa làm</td>
							<td>Chưa làm</td>
							<td></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-plus font-blue"></i>
					<span class="caption-subject font-blue bold uppercase">Thêm lớp</span>
				</div>
			</div>
			<div class="portlet-body">
				<form action="{{URL::to('admin/room')}}" method="POST" class="form-horizontal" role="form">
					{{ csrf_field() }}
					<div class="form-body">
						<div class="form-group">
							<label class="col-md-4 control-label">Tên lớp</label>
							<div class="col-md-8">
								<input type="text" name="name" class="form-control input-inline input-medium" placeholder="Enter text">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Mã lớp</label>
							<div class="col-md-8">
								<input type="text" name="" class="form-control input-inline input-medium location" readonly="readonly">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Số tín chỉ</label>
							<div class="col-md-8">
								<input type="text" name="" class="form-control input-inline input-medium location" readonly="readonly">
							</div>
						</div>
					</div>
					<div class="form-actions">
						<div class="row">
							<div class="col-md-offset-4 col-md-8">
								<button type="submit" class="btn green">Submit</button>
								<a href="{{URL::to('admin/room')}}" type="button" class="btn default">Cancel</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection