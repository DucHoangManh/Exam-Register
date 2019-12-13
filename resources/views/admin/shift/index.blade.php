@extends('admin.layouts.app')
@section('title', 'Ca thi')
@section('page-title', 'Ca thi')
@section('page-title-small', 'statistics, charts, recent events and reports')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption font-dark">
					<i class="icon-settings font-dark"></i>
					<span class="caption-subject bold uppercase">Danh sách ca thi</span>
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
						
					</div>
				</div>
				<div class="table-scrollable">
					<table class="table table-striped table-bordered table-hover table-checkable order-column dataTable no-footer" id="sample_1" role="grid" aria-describedby="sample_1_info">
						<thead>
							<tr role="row">
								<th rowspan="1" colspan="1" style="width: 110px;">#</th>
								<th rowspan="1" colspan="1" style="width: 225px;">Mã ca thi</th>
								<th rowspan="1" colspan="1" style="width: 225px;">Môn thi</th>
								<th rowspan="1" colspan="1" style="width: 115px;">Mã lớp</th>
								<th rowspan="1" colspan="1" style="width: 200px;">Giảng viên</th>
								<th rowspan="1" colspan="1" style="width: 115px;">Ngày thi</th>
								<th rowspan="1" colspan="1" style="width: 115px;">Thời gian</th>
								<th rowspan="1" colspan="1" style="width: 115px;">Phòng thi</th>
								<th rowspan="1" colspan="1" style="width: 115px;">Thao tác</th>
							</tr>
						</thead>
						<tbody>
							@foreach($shifts as $shift)
							<tr class="gradeX odd" role="row">
								<td>
									{{$loop->index+1}}
								</td>
								<td>
									<a href="{{route('shift.show', $shift->id)}}">{{$shift->code}}</a>
								</td>
								<td>
									<a href="{{route('subject.show', $shift->class->subject->id)}}">{{$shift->class->subject->name}}</a>
								</td>
								<td>
									<a href="{{route('class.show', $shift->class->id)}}">{{$shift->class->code}}</a>
								</td>
								<td>
									<a href="{{route('teacher.show', $shift->class->teacher->id)}}">{{$shift->class->teacher->name}}</a>
								</td>
								<td>
									{{$shift->date}}
								</td>
								<td>
									{{$shift->start.' - '.$shift->end}}
								</td>
								<td>
									@foreach($shift->room as $room)
									{{$room->name.' - '.$room->location->name}}
									@endforeach
								</td>

								<td>
									<div class="btn-group">
										<a href="{{route('shift.edit', $shift->id)}}" class="btn btn-icon-only blue">
											<i class="icon-pencil"></i>
										</a>
										<a href="{{URL::to('admin/shift/delete/'.$shift->id)}}" class="btn btn-icon-only red ml-10">
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
					{{ $shifts->links() }}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection