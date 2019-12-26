@extends('admin.layouts.app')
@section('title', 'Bài thi')
@section('page-title', 'Bài thi')
@section('page-title-small', 'statistics, charts, recent events and reports')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption font-dark">
					<i class="icon-settings font-dark"></i>
					<span class="caption-subject bold uppercase">Quản lý bài thi</span>
				</div>
				<div class="actions">
					<div class="btn-group">
						<a href="{{route('test.create')}}">
							<button id="sample_editable_1_new" class="btn sbold green"> Add New
							<i class="fa fa-plus"></i>
							</button>
						</a>
					</div>
				</div>
			</div>
			<div class="portlet-body">
				<div class="table-toolbar">
					<div class="row">
						<div class="col-md-8">
						</div>
						<div class="col-md-4" style="float: right; width: 270px">
							<div class="input-icon right">
								<i class="fa fa-search tooltips" data-original-title="Search" data-container="body"></i>
								<input type="text" class="form-control search" placeholder="Search...">
							</div>
						</div>
					</div>
				</div>
				<div class="table-scrollable">
					<table class="table table-striped table-bordered table-hover table-checkable order-column dataTable no-footer" id="sample_1" role="grid" aria-describedby="sample_1_info">
						<thead>
							<tr role="row">
								<th>#</th>
								<th>Môn thi</th>
								<th>Ca thi</th>
								<th>Phòng thi</th>
								<th>Mã lớp</th>
								<th>Giáo viên</th>
								<th>Số sinh viên đăng ký</th>
								<th>Chi tiết</th>
								<th>Chỉnh sửa</th>
							</tr>
						</thead>
						<tbody>
							@foreach($tests as $test)
							<tr class="gradeX odd" role="row">
								<td>
									{{$loop->index+1}}
								</td>
								<td>
									<a href="{{route('subject.show', $test->class->module->subject->id)}}">{{$test->class->module->subject->name}}</a>
								</td>
								<td>
									{{$test->shift->code}}
								</td>
								<td>
									{{$test->room->name}}
								</td>
								<td>
									<a href="{{route('class.show', $test->class->id)}}">{{$test->class->code}}</a>
								</td>
								<td>
									{{$test->class->teacher->name}}
								</td>
								<td>								
									{{$test->studentCount().'/'.$test->room->computer_quantity}}
								</td>
								<td>
									<a href="{{route('test.show', $test->id)}}">Xem</a>
								</td>
								<td>
									<div class="btn-group">
										<a href="{{route('test.edit', $test->id)}}" class="btn btn-icon-only blue">
											<i class="icon-pencil"></i>
										</a>
										<a href="{{URL::to('admin/test/delete/'.$test->id)}}" class="btn btn-icon-only red ml-10">
											<i class="icon-ban"></i>
										</a>
										
									</div>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<p class="text-left">
					Tổng số bài thi: <strong>{{$count}}</strong>
				</p>
				<div class="paginate" style="text-align: center;">
					{{ $tests->links() }}
				</div>
			</div>
		</div>
	</div>
</div>
<script src="assets/js/class/index.js"></script>
@endsection