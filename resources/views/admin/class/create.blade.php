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
						<form action="{{URL::to('admin/import/class')}}" method="POST">
							{{ csrf_field() }}
							<label for="class-file">
								<div id="sample_editable_1_new" class="btn sbold green"> Add
									<i class="fa fa-plus"></i>
								</div>
							</label>
							<input id="class-file" type="file" name="class" class="hidden" accept=".xlsx, .xls, .csv, .ods">
							<button type="submit" class="btn green btn-outline">
							Import
							</button>
						</form>
					</div>
				</div>
			</div>
			<div class="portlet-body form">
				<form action="{{URL::to('admin/class')}}" method="POST" class="form-horizontal" role="form" id="form">
					{{ csrf_field() }}
					<div class="form-body row">
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-md-4 control-label">Giảng viên</label>
								<div class="col-md-8">
									<input type="text" class="form-control input-inline input-medium teacher" placeholder="Enter text" value="">
									<input type="hidden" name="teacher_id" class="teacher_id">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Môn học</label>
								<div class="col-md-8">
									<input type="text" class="form-control input-inline input-medium subject" placeholder="Enter text" value="">
									<input type="hidden" name="subject_id" class="subject_id">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Mã lớp</label>
								<div class="col-md-8">
									<input type="text" class="form-control input-inline input-medium class_code" readonly="readonly" value="">
									<span class="help-inline"> Không cần nhập </span>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Số tín chỉ</label>
								<div class="col-md-8">
									<input type="text" class="form-control input-inline input-medium class_credit" readonly="readonly" value="">
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
										<th> Giới tính </th>
										<th> Ngày sinh </th>
										<th>Thao tác</th>
									</tr>
								</thead>
								<tbody class="tbody">
									<tr class="student_clone" style="display: none;">
										<td class="tb-index">  </td>
										<td class="clone_name">
											<input type="hidden" name="student_id" class="clone_id">
										</td>
										<td class="clone_code">
											
										</td>
										<td class="clone_gender">
											
										</td>
										<td class="clone_birthday">  </td>
										<td>
											<button type="button" class="btn red btn-outline">Del</button>
										</td>
									</tr>
									<tr class="student-add">
										<td> </td>
										<td>
											<input type="text" class="form-control input-inline student">
											<input type="hidden" name="student_id" class="student_id">
											<input type="hidden" class="student_name">
										</td>
										<td>
											<input type="text" class="form-control input-inline student_code">
										</td>
										<td>
											<input type="text" class="form-control input-inline student_gender">
										</td>
										<td class="student_birthday"></td>
										<td>
											<button type="button" class="btn blue btn-outline add-student-btn">Add</button>
										</td>
									</tr>
								</tbody>
							</table>
							<div class="action">
								<div class="btn-group" style="float: right;">
									<form action="{{URL::to('admin/class/import')}}" method="POST">
										{{ csrf_field() }}
										<label for="class-file">
											<div id="sample_editable_1_new" class="btn sbold green"> Nhập sinh viên
												<i class="fa fa-plus"></i>
											</div>
										</label>
										<input id="class-file" type="file" name="class_file" class="hidden" accept=".xlsx, .xls, .csv, .ods">
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