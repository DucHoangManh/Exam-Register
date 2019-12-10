@extends('admin.layouts.app')
@section('title', 'Sinh viên')
@section('page-title', 'Sinh viên')
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
					<span class="caption-subject bold uppercase"> Quản lý sinh viên </span>
				</div>
				<div class="actions">
					<div class="btn-group">
						<form action="{{URL::to('admin/student/import')}}" method="POST" enctype="multipart/form-data">
							{{ csrf_field() }}
							<label for="student-file">
								<div id="sample_editable_1_new" class="btn sbold green"> Add
									<i class="fa fa-plus"></i>
								</div>
							</label>
							<input id="student-file" type="file" name="student_file" class="hidden" accept=".xlsx, .xls, .csv, .ods">
							<button type="submit" class="btn green btn-outline">
							submit
							</button>
						</form>
					</div>
				</div>
			</div>
			<div class="portlet-body form">
				<form action="{{URL::to('admin/student')}}" method="POST" class="form-horizontal" role="form">
					{{ csrf_field() }}
					<div class="form-body">
						<div class="form-group">
							<label class="col-md-4 control-label">Họ và tên</label>
							<div class="col-md-8">
								<input type="text" name="name" class="form-control input-inline input-medium" placeholder="Enter text" value="">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Mã số sinh viên</label>
							<div class="col-md-8">
								<input type="text" name="code" class="form-control input-inline input-medium" placeholder="Enter text" value="">
								<span class="help-inline"> Trùng với username </span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4">Ngày sinh</label>
							<div class="col-md-8">
								<input name="birthday" class="form-control form-control-inline input-medium date-picker" size="16" type="text" value="">
								<span class="help-block"> Select date </span>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Giới tính</label>
							<div class="col-md-8">
								<div class="mt-radio-inline">
									<label class="mt-radio">
										<input type="radio" name="gender" id="optionsRadios25" value="0" checked="checked"> Nam
										<span></span>
									</label>
									<label class="mt-radio">
										<input type="radio" name="gender" id="optionsRadios26" value="1"> Nữ
										<span></span>
									</label>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Ngày thêm</label>
							<div class="col-md-8">
								<p class="form-control-static">  </p>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Ngày sửa</label>
							<div class="col-md-8">
								<p class="form-control-static">  </p>
							</div>
						</div>
						
					</div>
					<div class="form-actions">
						<div class="row">
							<div class="col-md-offset-4 col-md-8">
								<button type="submit" class="btn green">Submit</button>
								<button type="button" class="btn default">Cancel</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection