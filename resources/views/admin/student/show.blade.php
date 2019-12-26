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
							<th scope="col">Ngày thi</th>
							<th scope="col">Thời gian</th>
							<th scope="col">Địa điểm</th>
							<th scope="col">Ghi chú</th>
							<th scope="col">Xóa</th>
						</tr>
					</thead>
					<tbody>
						@foreach($student->registers as $register)
						<tr>
							<th scope="row">{{$register->class->id}}</th>
							<td>{{$register->class->module->subject->name}}</td>
							<td>{{$register->class->code}}</td>
							<td>{{$register->class->teacher->name}}</td>
							<td>{{$register->class->module->subject->credit}}</td>
							
							@if($register->test == null) 
								<td>-</td>
								<td>-</td>
								<td>-</td>
							@else
								<td> {{$register->test->shift->date}} </td>
								<td> {{$register->test->shift->start.' - '.$register->test->shift->end}} </td>
								<td> {{$register->test->room->name.' - '.$register->test->room->location->name}} </td>
							@endif
							<td>{{($register->is_baned == 0) ? '' : 'Cấm thi'}}</td>
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