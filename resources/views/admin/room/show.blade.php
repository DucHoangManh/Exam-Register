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
							<th scope="col">Môn thi</th>
							<th scope="col">Mã lớp</th>
							<th scope="col">Tên giảng viên</th>
							<th scope="col">Sĩ số</th>
							<th scope="col">Ngày thi</th>
							<th scope="col">Bắt đầu</th>
							<th scope="col">Kết thúc</th>
							<th scope="col">Xóa</th>
						</tr>
					</thead>
					<tbody>
						@foreach($room->shift as $shift)
						<tr>
							<th scope="row">{{$loop->index+1}}</th>
							<td>{{$shift->class->subject->name}}</td>
							<td>{{$shift->class->code}}</td>
							<td>{{$shift->class->teacher->name}}</td>
							<td>{{$shift->class->student->count()}}</td>
							<td>{{$shift->date}}</td>
							<td>{{$shift->start}}</td>
							<td>{{$shift->end}}</td>
							<td></td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<p>Tổng số ca thi: <strong>{{$room->shift->count()}}</strong></p>
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