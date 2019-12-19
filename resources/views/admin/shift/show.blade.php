@extends('admin.layouts.app')
@section('title', 'Thông tin ca thi')
@section('page-title', 'Thông tin ca thi')
@section('page-title-small', 'statistics, charts, recent events and reports')
@section('content')
<div class="row">
	<div class="col-md-8">
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-pointer font-blue"></i>
					<span class="caption-subject font-blue bold uppercase">Ca thi</span>
				</div>
			</div>
			<div class="portlet-body">
				<div class="row">
					<div class="col-md-6">
						<p>Ngày thi: <strong>{{$shift->date}}</strong></p>
						<p>Số lớp thi: <strong>{{$shift->modules->count()}}</strong></p>
						<p>Số phòng thi: <strong>{{$shift->tests->count()}}</strong></p>
					</div>
					<div class="col-md-6">
						<p>Thời gian: <strong>{{$shift->start.' - '.$shift->end}}</strong></p>
						<p>Số sinh viên chưa đăng ký: <strong>{{rand(10, 25)}}</strong></p>
					</div>
				</div>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Tên phòng thi</th>
							<th scope="col">Điểm thi</th>
							<th scope="col">Môn thi</th>
							<th scope="col">Tên lớp</th>
							<th scope="col">Giáo viên</th>
							<th scope="col">Sĩ số</th>
							<th scope="col">Xóa</th>
						</tr>
					</thead>
					<tbody>
						@foreach($shift->tests as $test)
						<tr>
							<th scope="row">{{$loop->index+1}}</th>
							<td>
								<a href="{{route('room.show', $test->room->id)}}">{{$test->room->name}}</a>
							</td>
							<td>
								<a href="{{route('location.show', $test->room->location->id)}}">{{$test->room->location->name}}</a>
							</td>
							<td>
								<a href="{{route('subject.show', $test->class->module->subject->id)}}">{{$test->class->module->subject->name}}</a>
							</td>
							<td>
								<a href="{{route('class.show', $test->class->id)}}">{{$test->class->code}}</a>
							</td>
							<td>
								<a href="{{route('student.show', $test->class->teacher->id)}}">{{$test->class->teacher->name}}</a>
							</td>
							<td>{{$test->class->students->count()}}</td>
							<td></td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<p>Tổng số sinh viên đang học: <strong></strong></p>
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