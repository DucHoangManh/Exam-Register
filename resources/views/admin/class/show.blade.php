@extends('admin.layouts.app')
@section('title', 'Thông tin lớp học phần')
@section('page-title', 'Thông tin lớp học phần')
@section('page-title-small', 'statistics, charts, recent events and reports')
@section('content')
<div class="row">
	<div class="col-md-8">
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-pointer font-blue"></i>
					<span class="caption-subject font-blue bold uppercase">Lớp học phần</span>
				</div>
			</div>
			<div class="portlet-body">
				<div class="row">
					<div class="col-md-6">
						<p>Tên môn học: <strong><a href="{{route('subject.show', $class->subject->id)}}">{{$class->subject->name}}</a></strong></p>
						<p>Giảng viên: <strong><a href="{{route('teacher.show', $class->teacher->id)}}">{{$class->teacher->name}}</a></strong></p>
						<p>Số tín chỉ: <strong>{{$class->subject->credit}}</strong></p>
					</div>
					<div class="col-md-6">
						<p>Mã lớp: <strong>{{$class->code}}</strong></p>
						<p>Email: <strong>{{$class->teacher->email}}</strong></p>
						<p>Sĩ số:  <strong>{{$class->student->count()}}</strong></p>
					</div>
				</div>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Họ và tên</th>
							<th scope="col">MSSV</th>
							<th scope="col">Email</th>
							<th scope="col">Giới tính</th>
							<th scope="col">Ngày sinh</th>
							<th scope="col">Xóa</th>
						</tr>
					</thead>
					<tbody>
						@foreach($class->student as $student)
						<tr>
							<th scope="row">{{$loop->index+1}}</th>
							<td>
								<a href="{{route('student.show', $student->id)}}">{{$student->name}}</a>
							</td>
							<td>{{$student->code}}</td>
							<td>{{$student->user->email}}</td>
							<td>
								@if ($student->gender == 0) Nam @else Nữ @endif
							</td>
							<td>{{$student->birthday}}</td>
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
					<i class="icon-calendar"></i>
					<span class="caption-subject font-blue bold uppercase">Thông tin ca thi</span>
				</div>
			</div>
			<div class="portlet-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Ngày thi</th>
							<th scope="col">Bắt đầu</th>
							<th scope="col">Kết thúc</th>
							<th scope="col">Xóa</th>
						</tr>
					</thead>
					<tbody>
						@foreach($class->shift as $shift)
						<tr>
							<th scope="row">{{$loop->index+1}}</th>
							<td>{{$shift->date}}</td>
							<td>{{$shift->start}}</td>
							<td>{{$shift->end}}</td>
							<td></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection