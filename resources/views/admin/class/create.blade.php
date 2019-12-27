@extends('admin.layouts.app')
@section('title', 'Lớp học')
@section('page-title', 'Lớp học')
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
					<span class="caption-subject bold uppercase"> Quản lý lớp học </span>
				</div>
				<div class="actions">
					<div class="btn-group">
						<form action="{{URL::to('admin/import/class')}}" method="POST">
							{{ csrf_field() }}
							<label for="class-file">
								<div id="sample_editable_1_new" class="btn sbold green"> Add
									<i class="fa fa-plus"></i>
								</div>
							</label>
							<input id="class-file" type="file" name="class" class="hidden" accept=".xlsx, .xls, .csv, .ods">
							<button type="submit" class="btn green btn-outline">
							Import
							</button>
						</form>
					</div>
				</div>
			</div>
			<div class="portlet-body form">
				<form action="{{URL::to('admin/class')}}" method="POST" class="form-horizontal" role="form" id="form">
					{{ csrf_field() }}
					<div class="form-body row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="col-md-4 control-label">Giảng viên</label>
								<div class="col-md-8">
									<input type="text" class="form-control input-inline input-medium teacher" placeholder="Enter text" value="">
									<input type="hidden" name="teacher_id" class="teacher_id">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Môn học</label>
								<div class="col-md-8">
									<input type="text" class="form-control input-inline input-medium subject" placeholder="Enter text" value="">
									<input type="hidden" name="subject_id" class="subject_id">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Mã lớp</label>
								<div class="col-md-8">
									<input type="text" class="form-control input-inline input-medium class_code" readonly="readonly" value="">
									<span class="help-inline"> Không cần nhập </span>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Số tín chỉ</label>
								<div class="col-md-8">
									<input type="text" class="form-control input-inline input-medium class_credit" readonly="readonly" value="">
									<span class="help-inline"> Không cần nhập </span>
								</div>
							</div>
						</div>
					</div>
					<div class="form-actions">
						<div class="row">
							<div class="col-md-offset-4 col-md-12">
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

<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/typeahead.bundle.js"></script>
<script src="assets/js/class/create.js"></script>
@endsection