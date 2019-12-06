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
						<form action="{{URL::to('admin/student/import')}}" method="POST">
							{{ csrf_field() }}
							<label for="student-file">
								<div id="sample_editable_1_new" class="btn sbold green"> Add
									<i class="fa fa-plus"></i>
								</div>
							</label>
							<input id="student-file" type="file" name="student_file" class="hidden" accept=".xlsx, .xls, .csv, .ods">
							<button type="submit" class="btn green btn-outline">
							submit
							</button>
						</form>
					</div>
				</div>
			</div>
			<div class="portlet-body form">
				<form action="{{URL::to('admin/student')}}" method="POST" class="form-horizontal" role="form" id="form">
					{{ csrf_field() }}
					<div class="form-body row">
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-md-4 control-label">Giảng viên</label>
								<div class="col-md-8">
									<input type="text" name="teacher_name" class="form-control input-inline input-medium teacher" placeholder="Enter text" value="">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Môn học</label>
								<div class="col-md-8">
									<input type="text" name="subject_code" class="form-control input-inline input-medium" placeholder="Enter text" value="">
									<span class="help-inline"> Nhập mã môn học </span>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Mã lớp</label>
								<div class="col-md-8">
									<input type="text" name="code" class="form-control input-inline input-medium" readonly="readonly" value="">
									<span class="help-inline"> Không cần nhập </span>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Số tín chỉ</label>
								<div class="col-md-8">
									<input type="text" class="form-control input-inline input-medium" readonly="readonly" value="">
									<span class="help-inline"> Không cần nhập </span>
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th> # </th>
										<th> Họ và tên </th>
										<th> Mã Sinh viên </th>
										<th> Email </th>
										<th> Ngày sinh </th>
										<th>Thao tác</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td> 1 </td>
										<td>
											Luu Manh Ha
										</td>
										<td>
											17020506
										</td>
										<td>
											Halm@asdas.asd
										</td>
										<td> 01.01.1111 </td>
										<td>
											<button type="button" class="btn red btn-outline">Del</button>
										</td>
									</tr>
									<tr>
										<td></td>
										<td>
											<input type="text" name="code" class="form-control input-inline">
										</td>
										<td>
											<input type="text" name="code" class="form-control input-inline">
										</td>
										<td>
											<input type="text" name="code" class="form-control input-inline">
										</td>
										<td></td>
										<td>
											<button type="button" class="btn blue btn-outline">Add</button>
										</td>
									</tr>
								</tbody>
							</table>
							<div class="action">
								<div class="btn-group" style="float: right;">
									<form action="{{URL::to('admin/student/import')}}" method="POST">
										{{ csrf_field() }}
										<label for="student-file">
											<div id="sample_editable_1_new" class="btn sbold green"> Nhập sinh viên
												<i class="fa fa-plus"></i>
											</div>
										</label>
										<input id="student-file" type="file" name="student_file" class="hidden" accept=".xlsx, .xls, .csv, .ods">
									</form>
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

<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/typeahead.bundle.js"></script>
<script src="assets/js/class/create.js"></script>
@endsection