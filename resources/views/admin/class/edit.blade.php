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
				<form action="{{URL::to('admin/user/'.$user->id)}}" method="POST" class="form-horizontal" role="form">
					{{ csrf_field() }}
					<input type="hidden" name="_method" value="PUT">
					<div class="form-body">
						<div class="form-group">
							<label class="col-md-4 control-label">Họ và tên</label>
							<div class="col-md-8">
								<p class="form-control-static"> {{$user->student->name}} </p>
								<a href="{{URL::to('admin/student/'.$user->student->id.'/edit')}}"> edit</a>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Mã số sinh viên</label>
							<div class="col-md-8">
								<p class="form-control-static"> {{$user->student->code}} </p>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Username</label>
							<div class="col-md-8">
								<input type="text" name="username" class="form-control input-inline input-medium" placeholder="Enter text" value="{{$user->username}}">
								<span class="help-inline"> Duy nhất </span>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Email</label>
							<div class="col-md-8">
								<input type="text" name="code" class="form-control input-inline input-medium" placeholder="Enter text" value="{{$user->email}}">
								<span class="help-inline"> Duy nhất </span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4">Mật khẩu</label>
							<div class="col-md-8">
								<a href="URL::to('admin/user/'.$user->id./resetPassword')}}" class="btn green">Reset</a>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Ngày thêm</label>
							<div class="col-md-8">
								<p class="form-control-static"> {{$user->created_at}} </p>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Ngày sửa</label>
							<div class="col-md-8">
								<p class="form-control-static"> {{$user->updated_at}} </p>
							</div>
						</div>
						
					</div>
					<div class="form-actions">
						<div class="row">
							<div class="col-md-offset-4 col-md-8">
								<button type="submit" class="btn green">Submit</button>
								<a href="{{URL::to('admin/user')}}" type="button" class="btn default">Cancel</a>
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