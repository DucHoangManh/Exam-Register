@extends('admin.layouts.master')




@section('input-js')
@include('admin.modules.input-js')
@endsection
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
				<th scope="col">Chú thích</th>
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
				<td>@if($student->is_baned == 1) Cấm thi @endif</td>
				<td></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>