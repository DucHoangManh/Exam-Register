@extends('admin.layouts.app')
@section('title', 'Môn học')
@section('page-title', 'Môn học')
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
					<span class="caption-subject bold uppercase"> Thêm môn học </span>
				</div>
				<div class="actions">
					<div class="btn-group">
						<form action="{{URL::to('admin/import/subject')}}" method="POST" enctype="multipart/form-data">
							{{ csrf_field() }}
							<label for="subject-file">
								<div id="sample_editable_1_new" class="btn sbold green"> Add
									<i class="fa fa-plus"></i>
								</div>
							</label>
							<input id="subject-file" type="file" name="subject_file" class="hidden" accept=".xlsx, .xls, .csv, .ods">
							<button type="submit" class="btn green btn-outline">
							submit
							</button>
						</form>
					</div>
				</div>
			</div>
			<div class="portlet-body form">
				<form action="{{URL::to('admin/subject')}}" method="POST" class="form-horizontal" role="form">
					{{ csrf_field() }}
					<div class="form-body">
						<div class="form-group">
							<label class="col-md-4 control-label">Tên môn học</label>
							<div class="col-md-8">
								<input type="text" name="name" class="form-control input-inline input-medium" placeholder="Enter text" value="">
								<span class="help-inline"> Duy nhất </span>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Mã môn học</label>
							<div class="col-md-8">
								<input type="text" name="code" class="form-control input-inline input-medium" placeholder="Enter text" value="">
								<span class="help-inline"> Duy nhất </span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4">Số tín chỉ</label>
							<div class="col-md-8">
								<input name="credit" class="form-control form-control-inline input-medium date-picker" size="16" type="number" value="">
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