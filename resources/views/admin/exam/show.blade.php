@extends('admin.layouts.app')
@section('title', 'Thông tin học kỳ')
@section('page-title', 'Thông tin học kỳ')
@section('page-title-small', 'statistics, charts, recent events and reports')
@section('content')

<div class="row">
	<div class="col-md-8">
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-pointer font-blue"></i>
					<span class="caption-subject font-blue bold uppercase">Học kỳ</span>
				</div>
			</div>
			<div class="portlet-body">
				<div class="row">
					<div class="col-md-6">
						<p>Học kỳ <strong>{{$exam->type}}</strong> năm học <strong>{{$exam->school_year}}</strong></p>
						<p>Số môn học: <strong>{{$exam->modules->count()}}</strong></p>
					</div>
					<div class="col-md-6">
						<p>Số lớp học phần: <strong>---</strong></p>
						<p>Hạn đăng ký ca thi: <strong>{{$exam->deadline}}</strong></p>
					</div>
				</div>

				<div class="panel-group accordion" id="accordion1">
				@foreach($exam->modules as $module)
				<div class="panel">
					<div class="">
						<h4 class="panel-title">
						<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion{{$loop->index+1}}" href="#collapse_{{$loop->index+1}}" aria-expanded="false"> - {{$module->subject->name.' - '.$module->subject->credit.'TC'}} </a>
						</h4>
					</div>
					<div id="collapse_{{$loop->index+1}}" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
						<div class="panel-body">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">Mã lớp</th>
										<th scope="col">Giáo viên</th>
										<th scope="col">Số sinh viên</th>
										<th scope="col">Số ca thi</th>
										<th scope="col">Xóa</th>
									</tr>
								</thead>
								<tbody>
									@foreach($module->classes as $class)
									<tr>
										<td> {{$loop->index+1}} </td>
										<td> 
											<a href="{{route('class.show', $class->id)}}">{{$class->code}}</a>
										</td>
										<td> {{$class->teacher->name}} </td>
										<td> {{$class->students->count()}} </td>
										<td> {{$class->tests->count()}} </td>
										<td></td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<br>
				@endforeach
					
					
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-plus font-blue"></i>
					<span class="caption-subject font-blue bold uppercase">Thêm môn học</span>
				</div>
			</div>
			<div class="portlet-body">
				<form action="{{route('exam.addSubject')}}" method="post" class="form-horizontal" role="form">
					{{ csrf_field() }}
					<input type="hidden" name="exam_id" value="{{$exam->id}}">
					<div class="form-body">
						<div class="form-group">
							<label class="col-md-4 control-label">Tên môn học</label>
							<div class="col-md-8">
								<input type="text" name="subject_id" class="form-control input-inline input-medium subject_search" placeholder="Enter text">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Mã Môn học</label>
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
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script src="assets/js/exam/show.js"></script>
@endsection