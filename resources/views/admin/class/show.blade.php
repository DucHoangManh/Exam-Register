@extends('admin.layouts.app')
@section('title', 'Thông tin lớp học phần')
@section('page-title', 'Thông tin lớp học phần')
@section('page-title-small', 'statistics, charts, recent events and reports')
@section('content')
<style>
	.hidden {
		opacity: 0;
		position: absolute;
		z-index: 99;
	}
</style>	
<div class="row">
	<div class="col-md-8">
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-pointer font-blue"></i>
					<span class="caption-subject font-blue bold uppercase">Lớp học phần</span>
				</div>
				<div class="actions">
					<div class="btn-group">
						<form id="ban-form" action="{{URL::to('admin/import/studentBaned')}}" method="POST" enctype="multipart/form-data" style="display: inline-block;">
							{{ csrf_field() }}
							<input type="hidden" name="class_id" value="{{$class->id}}">
							<!--old-->
							<div id="sample_editable_1_new" class="btn sbold green btn-sm" style="display:none"> Import Ban
								<i class="fa fa-plus"></i>
							</div>
							<!--fixed-->
							<label class="btn sbold green btn-sm">Import Ban
								<i for="class-file" class="fa fa-plus"></i>
								<input id="class-file" type="file" name="ban_file" style="display:none" accept=".xlsx, .xls, .csv, .ods">
							</label>
							
						</form>
					</div>
					<div class="btn-group">
						<button id="sample_editable_1_new" class="btn sbold blue-madison" data-toggle="dropdown" aria-expanded="false"> Export
						<i class="fa fa-angle-down"></i>
						</button>
						<ul class="dropdown-menu">
							<li>
								<a href="{{route('export.classDetailExcel', $class->id)}}"> Excel </a>
							</li>
							<li>
								<a href="{{route('export.classDetailPdf', $class->id)}}"> PDF </a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="portlet-body">
				<div class="row">
					<div class="col-md-6">
						<p>Tên môn học: <strong><a href="{{route('subject.show', $class->module->subject->id)}}">{{$class->module->subject->name}}</a></strong></p>
						<p>Giảng viên: <strong><a href="{{route('teacher.show', $class->teacher->id)}}">{{$class->teacher->name}}</a></strong></p>
						<p>Học kỳ: <strong>{{$class->module->exam->type}}</strong></p>
						<p>Số tín chỉ: <strong>{{$class->module->subject->credit}}</strong></p>
					</div>
					<div class="col-md-6">
						<p>Mã lớp: <strong>{{$class->code}}</strong></p>
						<p>Email: <strong>{{$class->teacher->email}}</strong></p>
						<p>Năm học: <strong>{{$class->module->exam->school_year}}</strong></p>
						<p>Sĩ số:  <strong>{{$class->students->count()}}</strong></p>
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
						</tr>
					</thead>
					<tbody>
						@foreach($class->students as $student)
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
							<td>@if($student->pivot->is_baned == 1) Cấm thi @endif</td>
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
							<th scope="col">Phòng thi</th>
							<th scope="col">Bắt đầu</th>
							<th scope="col">Kết thúc</th>
						</tr>
					</thead>
					<tbody>
						@foreach($class->tests as $test)
						<tr>
							<th scope="row">{{$loop->index+1}}</th>
							<td>{{$test->shift->date}}</td>
							<td>{{$test->room->name.' - '.$test->room->location->name}}</td>
							<td>{{$test->shift->start}}</td>
							<td>{{$test->shift->end}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<script src="assets/js/class/show.js"></script>
<script src="assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
<script src="assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<script src="assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
<script src="assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
@endsection