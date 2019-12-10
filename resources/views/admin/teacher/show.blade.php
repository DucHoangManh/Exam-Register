@extends('admin.layouts.app')
@section('title', 'Thông tin giáo viên')
@section('page-title', 'Thông tin giáo viên')
@section('page-title-small', 'statistics, charts, recent events and reports')
@section('content')
<div class="row">
	<div class="col-md-8">
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-pointer font-blue"></i>
					<span class="caption-subject font-blue bold uppercase">Giáo viên</span>
				</div>
			</div>
			<div class="portlet-body">
				<p>Họ và tên: <strong>{{$teacher->name}}</strong></p>
				<p>Email: <strong>{{$teacher->email}}</strong></p>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Tên môn học</th>
							<th scope="col">Mã lớp</th>
							<th scope="col">Số tín chỉ</th>
							<th scope="col">Xóa</th>
						</tr>
					</thead>
					<tbody>
						@foreach($teacher->class as $class)
						<tr>
							<th scope="row">{{$loop->index+1}}</th>
							<td>
								<a href="{{route('subject.show', $class->subject->id)}}">{{$class->subject->name}}</a>
							</td>
							<td>
								<a href="{{route('class.show', $class->id)}}">{{$class->code}}</a>
							</td>
							<td>{{$class->subject->credit}}</td>
							<td></td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<p>Tổng số lớp: <strong>{{$teacher->class->count()}}</strong></p>
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