@extends('admin.layouts.app')
@section('title', 'Bài thi')
@section('page-title', 'Bài thi')
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
					<span class="caption-subject bold uppercase"> Quản lý bài thi </span>
				</div>
			</div>
			<div class="portlet-body form">
				<form action="{{route('test.store')}}" method="POST" class="form-horizontal" role="form" id="form">
					{{ csrf_field() }}
					<div class="form-body row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="col-md-5 control-label">Ca thi</label>
								<div class="col-md-7">
									<input type="text" name="shift_id" class="form-control input-inline input-medium shift" placeholder="Enter text" >
									<input type="hidden" name="teacher_id" class="teacher_id">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-5 control-label">Phòng thi</label>
								<div class="col-md-7">
									<input type="text" name="room_id" class="form-control input-inline input-medium room" placeholder="Enter text" >
									<input type="hidden" name="subject_id" class="subject_id">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-5 control-label">Mã lớp</label>
								<div class="col-md-7">
									<input type="text" name="class_id" class="form-control input-inline input-medium class_code" placeholder="Enter text" >
								</div>
							</div>
						</div>
					</div>
					<div class="form-actions">
						<div class="row">
							<div class="col-md-offset-5 col-md-12">
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

<script src="/js/typeahead.bundle.js"></script>
<script src="assets/js/test/create.js"></script>
@endsection