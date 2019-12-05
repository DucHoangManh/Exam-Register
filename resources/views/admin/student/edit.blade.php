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
				<form action="{{URL::to('admin/student/'.$student->id)}}" method="POST" class="form-horizontal" role="form">
					{{ csrf_field() }}
					<input type="hidden" name="_method" value="PUT">
					<div class="form-body">
						<div class="form-group">
							<label class="col-md-4 control-label">Họ và tên</label>
							<div class="col-md-8">
								<input type="text" name="name" class="form-control input-inline input-medium" placeholder="Enter text" value="{{$student->name}}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Mã số sinh viên</label>
							<div class="col-md-8">
								<input type="text" name="code" class="form-control input-inline input-medium" placeholder="Enter text" value="{{$student->code}}">
								<span class="help-inline"> Trùng với username </span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4">Ngày sinh</label>
							<div class="col-md-8">
								<input name="birthday" class="form-control form-control-inline input-medium date-picker" size="16" type="text" value="{{$student->birthday}}">
								<span class="help-block"> Select date </span>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Giới tính</label>
							<div class="col-md-8">
								<div class="mt-radio-inline">
									<label class="mt-radio">
										<input type="radio" name="gender" id="optionsRadios25" value="0" @if($student->gender == 0)checked="checked"@endif> Nam
										<span></span>
									</label>
									<label class="mt-radio">
										<input type="radio" name="gender" id="optionsRadios26" value="1" @if($student->gender == 1)checked="checked"@endif> Nữ
										<span></span>
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Username</label>
							<div class="col-md-8">
								<p class="form-control-static">
									{{$student->user->username}}
									<a href="{{URL::to('admin/user/'.$student->user->username.'/edit')}}"> edit</a>
								</p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Email</label>
							<div class="col-md-8">
								<p class="form-control-static"> {{$student->user->email}} </p>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Ngày thêm</label>
							<div class="col-md-8">
								<p class="form-control-static"> {{$student->created_at}} </p>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Ngày sửa</label>
							<div class="col-md-8">
								<p class="form-control-static"> {{$student->updated_at}} </p>
							</div>
						</div>
						
					</div>
					<div class="form-actions">
						<div class="row">
							<div class="col-md-offset-4 col-md-8">
								<button type="submit" class="btn green">Submit</button>
								<a href="{{URL::to('admin/student')}}" type="button" class="btn default">Cancel</a>
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