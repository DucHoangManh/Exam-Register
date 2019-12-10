@extends('admin.layouts.app')
@section('title', 'Giảng viên')
@section('page-title', 'Giảng viên')
@section('page-title-small', 'statistics, charts, recent events and reports')
@section('content')
<style>
	.hidden {
		opacity: 0;
		position: absolute;
		z-index: -1;
	}
</style>
<div class="row">
	<div class="col-md-12">
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption font-dark">
					<i class="icon-settings font-dark"></i>
					<span class="caption-subject bold uppercase"> Quản lý giảng viên </span>
				</div>
				<div class="actions">
					<div class="btn-group">
						<form action="{{URL::to('admin/import/teacher')}}" method="POST" enctype="multipart/form-data">
							{{ csrf_field() }}
							<label for="teacher-file">
								<div id="sample_editable_1_new" class="btn sbold green"> Add
									<i class="fa fa-plus"></i>
								</div>
							</label>
							<input id="teacher-file" type="file" name="teacher_file" class="hidden" accept=".xlsx, .xls, .csv, .ods">
							<button type="submit" class="btn green btn-outline">
							submit
							</button>
						</form>
					</div>
				</div>
			</div>
			<div class="portlet-body form">
				<form action="{{URL::to('admin/teacher')}}" method="POST" class="form-horizontal" role="form">
					{{ csrf_field() }}
					<div class="form-body">
						<div class="form-group">
							<label class="col-md-4 control-label">Họ và tên</label>
							<div class="col-md-8">
								<input type="text" name="name" class="form-control input-inline input-medium" placeholder="Enter text">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Email</label>
							<div class="col-md-8">
								<input type="text" name="email" class="form-control input-inline input-medium" placeholder="Enter text">
								<span class="help-inline"> Duy nhất </span>
							</div>
						</div>
						
					</div>
					<div class="form-actions">
						<div class="row">
							<div class="col-md-offset-4 col-md-8">
								<button type="submit" class="btn green">Submit</button>
								<a href="{{URL::to('admin/teacher')}}" type="button" class="btn default">Cancel</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection