@extends('admin.layouts.app')
@section('title', 'Giáo viên')
@section('page-title', 'Giáo viên')
@section('page-title-small', 'statistics, charts, recent events and reports')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption font-dark">
					<i class="icon-settings font-dark"></i>
					<span class="caption-subject bold uppercase">Quản lý giáo viên</span>
				</div>
				<div class="actions">
					<div class="btn-group">
						<a href="{{route('teacher.create')}}">
							<button id="sample_editable_1_new" class="btn sbold green"> Add New
							<i class="fa fa-plus"></i>
							</button>
						</a>
						<a href="{{route('export.teacher')}}">
							<button id="sample_editable_1_new" class="btn sbold blue-madison"> Export
							<i class="fa fa-cloud-download"></i>
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
								<th rowspan="1" colspan="1" style="width: 225px;"> Tên giảng viên </th>
								<th rowspan="1" colspan="1" style="width: 225px;"> Email </th>
								<th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" style="width: 431px;">Số lớp đang dạy</th>
								<th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" style="width: 200px;">Mã lớp</th>
								<th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" style="width: 115px;"> Thao tác </th>
							</tr>
						</thead>
						<tbody>
							@foreach($teachers as $teacher)
							<tr class="gradeX odd" role="row">
								<td>
									{{$loop->index+1}}
								</td>
								<td>
									<a href="{{route('teacher.show', $teacher->id)}}">{{$teacher->name}}</a>
								</td>
								<td>
									{{$teacher->email}}
								</td>
								<td>
									{{$teacher->classes->count()}}
								</td>
								<td>
									@if($teacher->classes->count() != 0)
										@foreach($teacher->classes as $class)
											@if($loop->index != 0)
											, 
											@endif
											{{$class->code}}
										@endforeach
									@else
									Trống
									@endif
								</td>

								<td>
									<div class="btn-group">
										<a href="{{URL::to('admin/teacher/'.$teacher->id.'/edit')}}" class="btn btn-icon-only blue">
											<i class="icon-pencil"></i>
										</a>
										<a href="{{URL::to('admin/teacher/delete/'.$teacher->id)}}" class="btn btn-icon-only red ml-10">
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
					{{ $teachers->links() }}
				</div>
				<p class="text-left">
					Tổng số giáo viên: <strong>{{$teachers->count()}}</strong>
				</p>
			</div>
		</div>
	</div>
</div>
<script src="assets/js/teacher/index.js"></script>
@endsection