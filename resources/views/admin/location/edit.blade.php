@extends('admin.layouts.app')
@section('title', 'Điểm thi')
@section('page-title', 'Điểm thi')
@section('page-title-small', 'statistics, charts, recent events and reports')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-settings font-dark"></i>
					<span class="caption-subject font-dark sbold uppercase">Sửa thông tin</span>
				</div>
			</div>
			<div class="portlet-body form">
				<form action="{{URL::to('admin/location/'.$location->id)}}" method="POST" class="form-horizontal" role="form">
					{{ csrf_field() }}
					<input type="hidden" name="_method" value="PUT">
					<div class="form-body">
						<div class="form-group">
							<label class="col-md-4 control-label">Tên điểm thi</label>
							<div class="col-md-8">
								<input type="text" name="name" class="form-control input-inline input-medium" placeholder="Enter text" value="{{$location->name}}">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Ngày thêm</label>
							<div class="col-md-8">
								<p class="form-control-static"> {{$location->created_at}} </p>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Ngày sửa</label>
							<div class="col-md-8">
								<p class="form-control-static"> {{$location->updated_at}} </p>
							</div>
						</div>
						
					</div>
					<div class="form-actions">
						<div class="row">
							<div class="col-md-offset-4 col-md-8">
								<button type="submit" class="btn green">Submit</button>
								<a href="{{URL::to('admin/location')}}" type="button" class="btn default">Cancel</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script src="assets/pages/scripts/components-date-time-pickers.min.js"></script>
@endsection