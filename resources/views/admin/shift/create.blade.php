@extends('admin.layouts.app')
@section('title', 'Thêm ca thi')
@section('page-title', 'Ca thi')
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
					<span class="caption-subject bold uppercase"> Thêm ca thi </span>
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
				<form id="shift-create-form" action="{{route('shift.store')}}" method="POST" class="form-horizontal" role="form">
					{{ csrf_field() }}
					<div class="form-body">
						<div class="form-group">
							<label class="col-md-4 control-label">Mã ca thi</label>
							<div class="col-md-8">
								<input type="text" name="code" class="form-control input-inline input-medium" readonly="readonly">
								<span class="help-inline"> Duy nhất </span>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Ngày thi</label>
							<div class="col-md-8">
								<input class="form-control form-control-inline input-medium shift-input" name="date" size="16" type="date" value="">
								<p class="font-red-mint date-error"></p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Thời gian</label>
							<div class="col-md-8">
								<div class="input-group input-medium" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
									<input name="start" type="time" class="form-control shift-input" min="07:00" max="18:00" step="1800" value="07:00">
									<span class="input-group-addon"> to </span>
									<input name="end" type="time" class="form-control shift-input" min="07:30" max="19:00" step="1800" value="08:00">
								</div>
								<p class="font-red-mint time-error"></p>
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

<script src="assets/js/shift/create.js" type="text/javascript"></script>
<script src="assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script> 
@endsection