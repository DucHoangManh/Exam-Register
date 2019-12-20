@extends('admin.layouts.app')
@section('title', 'Kỳ thi')
@section('page-title', 'Kỳ thi')
@section('page-title-small', 'statistics, charts, recent events and reports')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption font-dark">
					<i class="icon-settings font-dark"></i>
					<span class="caption-subject bold uppercase">Quản lý kỳ thi</span>
				</div>
				<div class="actions">
					<div class="btn-group">
						<a href="{{route('exam.create')}}">
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
								<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 110px;">#
								</th>
								<th> Học kỳ </th>
								<th> Năm học </th>
								<th> Số môn học </th>
								<th> Số lớp học </th>
								<th> Thao tác </th>
							</tr>
						</thead>
						<tbody>
							@foreach($exams as $exam)
							<tr class="gradeX odd" role="row">
								<td>
									{{$loop->index+1}}
								</td>
								<td>
									<a href="{{route('exam.show', $exam->id)}}">{{$exam->type}}</a>
								</td>
								<td>
									{{$exam->school_year}}
								</td>
								<td>
									{{$exam->modules->count()}}
								</td>
								<td>
									----
								</td>

								<td>
									<div class="btn-group">
										<a href="{{route('exam.edit', $exam->id)}}" class="btn btn-icon-only blue">
											<i class="icon-pencil"></i>
										</a>
										<a href="{{URL::to('admin/exam/delete/'.$exam->id)}}" class="btn btn-icon-only red ml-10">
											<i class="icon-ban"></i>
										</a>
										
									</div>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<div class="paginate" style="text-align: center;">
					{{ $exams->links() }}
				</div>
			</div>
		</div>
	</div>
</div>
<script src="assets/js/teacher/index.js"></script>
@endsection
