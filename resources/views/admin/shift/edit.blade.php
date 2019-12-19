@extends('admin.layouts.app')
@section('title', 'Sinh viên')
@section('page-title', 'Sinh viên')
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
				<form action="{{URL::to('admin/subject/'.$subject->id)}}" method="POST" class="form-horizontal" role="form">
					{{ csrf_field() }}
					<input type="hidden" name="_method" value="PUT">
					<div class="form-body">
						<div class="form-group">
							<label class="col-md-4 control-label">Tên môn học</label>
							<div class="col-md-8">
								<input type="text" name="name" class="form-control input-inline input-medium" placeholder="Enter text" value="{{$subject->name}}">
								<span class="help-inline"> Duy nhất </span>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Mã Môn học</label>
							<div class="col-md-8">
								<input type="text" name="code" class="form-control input-inline input-medium" placeholder="Enter text" value="{{$subject->code}}">
								<span class="help-inline"> Duy nhất </span>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Số tín chỉ</label>
							<div class="col-md-8">
								<input type="number" name="credit" class="form-control input-inline input-medium" value="{{$subject->credit}}">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Ngày thêm</label>
							<div class="col-md-8">
								<p class="form-control-static"> {{$subject->created_at}} </p>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Ngày sửa</label>
							<div class="col-md-8">
								<p class="form-control-static"> {{$subject->updated_at}} </p>
							</div>
						</div>
						
					</div>
					<div class="form-actions">
						<div class="row">
							<div class="col-md-offset-4 col-md-8">
								<button type="submit" class="btn green">Submit</button>
								<a href="{{URL::to('admin/subject')}}" type="button" class="btn default">Cancel</a>
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