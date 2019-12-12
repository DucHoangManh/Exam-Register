@extends('admin.layouts.app')
@section('title', 'Môn học')
@section('page-title', 'Môn học')
@section('page-title-small', 'statistics, charts, recent events and reports')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption font-dark">
					<i class="icon-settings font-dark"></i>
					<span class="caption-subject bold uppercase">Danh sách môn học</span>
				</div>
				<div class="actions">
					<div class="btn-group">
						<a href="{{route('subject.create')}}">
							<button id="sample_editable_1_new" class="btn sbold green"> Add New
							<i class="fa fa-plus"></i>
							</button>
						</a>
						<a href="{{route('export.subject')}}">
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
								<th class="sorting_asc" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" style="width: 225px;"> Tên môn học</th>
								<th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" style="width: 200px;">Mã môn học</th>
								<th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" style="width: 200px;">Số tín chỉ</th>
								<th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" style="width: 115px;"> Số lớp </th>
								<th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" style="width: 115px;"> Thao tác </th>
							</tr>
						</thead>
						<tbody>
							@foreach($subjects as $subject)
							<tr class="gradeX odd" role="row">
								<td>
									{{$loop->index+1}}
								</td>
								<td>
									<a href="{{route('subject.show', $subject->id)}}">{{$subject->name}}</a>
								</td>
								<td>
									{{$subject->code}}
								</td>
								<td>
									{{$subject->credit}}
								</td>
								<td>
									{{$subject->class->count()}}
								</td>

								<td>
									<div class="btn-group">
										<a href="{{URL::to('admin/subject/'.$subject->id.'/edit')}}" class="btn btn-icon-only blue">
											<i class="icon-pencil"></i>
										</a>
										<a href="{{URL::to('admin/subject/delete/'.$subject->id)}}" class="btn btn-icon-only red ml-10">
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
					{{ $subjects->links() }}
				</div>
				<p class="text-left">
					Tổng số môn học: <strong>{{$subjects->count()}}</strong>
				</p>
			</div>
		</div>
	</div>
</div>
<script src="assets/js/subject/index.js"></script>
@endsection