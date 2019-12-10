@extends('admin.layouts.app')
@section('title', 'Phòng thi')
@section('page-title', 'Phòng thi')
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
					<span class="caption-subject bold uppercase"> Quản lý phòng thi </span>
				</div>
				<div class="actions">
					<div class="btn-group">
						<form action="{{URL::to('admin/import/room')}}" method="POST" enctype="multipart/form-data">
							{{ csrf_field() }}
							<label for="room-file">
								<div id="sample_editable_1_new" class="btn sbold green"> Add
									<i class="fa fa-plus"></i>
								</div>
							</label>
							<input id="room-file" type="file" name="room_file" class="hidden" accept=".xlsx, .xls, .csv, .ods">
							<button type="submit" class="btn green btn-outline">
							Import
							</button>
						</form>
					</div>
				</div>
			</div>
			<div id="form" class="portlet-body form">
				<form action="{{URL::to('admin/room')}}" method="POST" class="form-horizontal" role="form">
					{{ csrf_field() }}
					<div class="form-body">
						<div class="form-group">
							<label class="col-md-4 control-label">Tên phòng thi</label>
							<div class="col-md-8">
								<input type="text" name="name" class="form-control input-inline input-medium" placeholder="Enter text">
							</div>
						</div>	
						<div class="form-group">
							<label class="col-md-4 control-label">Tên điểm thi</label>
							<div class="col-md-8">
								<input type="text" name="location_id" class="form-control input-inline input-medium location" placeholder="Enter text">
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

<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/typeahead.bundle.js"></script>
<script src="assets/js/room/create.js"></script>
@endsection