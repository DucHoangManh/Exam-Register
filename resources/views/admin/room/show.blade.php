@extends('admin.layouts.app')
@section('title', 'Phòng thi')
@section('page-title', 'Phòng thi')
@section('page-title-small', 'statistics, charts, recent events and reports')
@section('content')
<div class="row">
	<div class="col-md-8">
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-pointer font-blue"></i>
					<span class="caption-subject font-blue bold uppercase">Phòng thi</span>
				</div>
			</div>
			<div class="portlet-body">
				<div class="row m-b-15">
					<div class="col-md-6">
						<h4>Tên phòng thi: <strong>{{$room->name}}</strong></h4>
					</div>
					<div class="col-md-6">
						<h4>Điểm thi: <strong>{{$room->location->name}}</strong></h4>
					</div>
				</div>
				
				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Ca thi</th>
							<th scope="col">Môn thi</th>
							<th scope="col">Mã lớp</th>
							<th scope="col">Tên giảng viên</th>
							<th scope="col">Sĩ số</th>
							<th scope="col">Ngày thi</th>
							<th scope="col">Bắt đầu</th>
							<th scope="col">Kết thúc</th>
							<th scope="col">Chi tiết</th>
						</tr>
					</thead>
					<tbody>
						@foreach($room->tests as $test)
						<tr>
							<th scope="row">{{$loop->index+1}}</th>
							<td>
								<a href="{{route('shift.show', $test->shift->id)}}">{{$test->shift->code}}</a>
							</td>
							<td>
								<a href="{{route('subject.show', $test->class->module->subject->id)}}">{{$test->class->module->subject->name}}</a>
							</td>
							<td>
								<a href="{{route('class.show', $test->class->id)}}">{{$test->class->code}}</a>
							</td>
							<td>
								<a href="{{route('teacher.show', $test->class->teacher->id)}}">{{$test->class->teacher->name}}</a>
							</td>
							<td>{{$test->class->students->count()}}</td>
							<td>{{$test->shift->date}}</td>
							<td>{{$test->shift->start}}</td>
							<td>{{$test->shift->end}}</td>
							<td><a href="{{route('test.show', $test->id)}}">Xem</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<p>Tổng số ca thi: <strong>{{$room->tests->count()}}</strong></p>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-plus font-blue"></i>
					<span class="caption-subject font-blue bold uppercase">Thêm ca thi</span>
				</div>
			</div>
			<div class="portlet-body">
				<form action="{{URL::to('admin/room')}}" method="POST" class="form-horizontal" role="form">
					{{ csrf_field() }}
					<div class="form-body">
						<div class="form-group">
							<label class="col-md-4 control-label">Tên phòng thi</label>
							<div class="col-md-8">
								<input type="text" name="name" class="form-control input-inline input-medium" placeholder="Enter text">
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