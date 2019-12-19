@extends('admin.layouts.app')
@section('title', 'Tài khoản')
@section('page-title', 'Thông tin tài khoản')
@section('page-title-small', 'statistics, charts, recent events and reports')
@section('content')
<div class="row">
	<div class="col-md-8">
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-pointer font-blue"></i>
					<span class="caption-subject font-blue bold uppercase">Tài khoản</span>
				</div>
			</div>
			<div class="portlet-body">
				<div class="row">
					<div class="col-md-6">
						<p>Chủ tài khoản: <strong><a href="{{route('student.show', $user->student->id)}}">{{$user->student->name}}</a></strong></p>
						<p>Email: <strong>{{$user->email}}</strong></p>
					</div>
					<div class="col-md-6">
						<p>Tên TK: <strong>{{$user->username}}</strong></p>
						<p>Loại TK: <strong>@if ($user->type == 0) Sinh viên @endif</strong></p>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-refresh font-blue"></i>
					<span class="caption-subject font-blue bold uppercase">Reset mật khẩu</span>
				</div>
			</div>
			<div class="portlet-body">
				<form action="{{URL::to('admin/room')}}" method="POST" class="form-horizontal" role="form">
					{{ csrf_field() }}
					<div class="form-body">
						<div class="form-group">
							<label class="col-md-4 control-label">Mật khẩu mới</label>
							<div class="col-md-8">
								<input type="text" name="name" class="form-control input-inline input-medium" placeholder="Enter text">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Nhập lại mật khẩu</label>
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
@endsection