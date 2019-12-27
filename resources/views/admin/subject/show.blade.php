@extends('admin.layouts.app')
@section('title', 'Thông tin môn học')
@section('page-title', 'Thông tin môn học')
@section('page-title-small', 'statistics, charts, recent events and reports')
@section('content')
<div class="row">
	<div class="col-md-8">
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-pointer font-blue"></i>
					<span class="caption-subject font-blue bold uppercase">Môn học</span>
				</div>
			</div>
			<div class="portlet-body">
				<div class="row">
					<div class="col-md-6">
						<p>Tên môn học: <strong>{{$subject->name}}</strong></p>
						<p>Số tín chỉ: <strong>{{$subject->credit}}</strong></p>
					</div>
					<div class="col-md-6">
						<p>Mã: <strong>{{$subject->code}}</strong></p>
						<p>Số lớp: <strong>{{$subject->modules->count()}}</strong></p>
					</div>
				</div>
				<br><br>
				@foreach($subject->modules as $module)
				<p>Học kỳ <strong>{{$module->exam->type}}</strong> năm học <strong>{{$module->exam->school_year}}</strong></p>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Mã lớp</th>
							<th scope="col">Giảng viên</th>
							<th scope="col">Sĩ số</th>
						</tr>
					</thead>
					<tbody>
						@foreach($module->classes as $class)
						<tr>
							<th scope="row">{{$loop->index+1}}</th>
							<td>
								<a href="{{route('class.show', $class->id)}}">{{$class->code}}</a>
							</td>
							<td>
								<a href="{{route('teacher.show', $class->teacher->id)}}">{{$class->teacher->name}}</a>
							</td>
							<td class ="count-class{{$module->id}}">{{$class->students->count()}}</td>
						</tr>
						@endforeach
						
						<tr>
							<th scope="row"></th>
							<td></td>
							<td></td>
							<td>
								<strong id="all-class-sum{{$module->id}}">
									Tổng
								</strong>
							</td>
						</tr>
					</tbody>
				</table>
				@endforeach
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
						<div class="form-group row">
							<label class="col-md-4 col-xs-12 control-label">Tên lớp</label>
							<div class="col-md-6 col-xs-12">
								<input type="text" name="name" class="form-control input-sm input-inline" placeholder="Enter text">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Mã lớp</label>
							<div class="col-md-8">
								<input type="text" name="" class="form-control input-inline input-sm location" readonly="readonly">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Số tín chỉ</label>
							<div class="col-md-8">
								<input type="text" name="" class="form-control input-inline input-sm location" readonly="readonly">
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
@foreach($subject->modules as $module)
<script>
 $(document).ready(function(){
	let sum =0;
	let module = ({!! json_encode($module->toArray()) !!});
	$('.count-class'+module.id).each(function(){
		sum+=parseInt($(this).html(),10);
	});
	$('#all-class-sum'+module.id).html('Tổng: '+ sum);
 })
</script>
@endforeach
@endsection
