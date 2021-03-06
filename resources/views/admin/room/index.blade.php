@extends('admin.layouts.app')
@section('title', 'Phòng thi')
@section('page-title', 'Phòng thi')
@section('page-title-small', 'statistics, charts, recent events and reports')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption font-dark">
					<i class="icon-settings font-dark"></i>
					<span class="caption-subject bold uppercase">Quản lý phòng thi</span>
				</div>
				<div class="actions">
					<div class="btn-group">
						<a href="{{route('room.create')}}">
							<button id="sample_editable_1_new" class="btn sbold green"> Add New
							<i class="fa fa-plus"></i>
							</button>
						</a>
						<a href="{{route('export.room')}}">
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
								<th>#</th>
								<th> Tên phòng thi </th>
								<th>Điểm thi</th>
								<th>Số lượng máy</th>
								<th> Thao tác </th>
							</tr>
						</thead>
						<tbody>
							@foreach($rooms as $room)
							<tr class="gradeX odd" role="row">
								<td>
									{{$loop->index+1}}
								</td>
								<td> 
									<a href="{{route('room.show', $room->id)}}">{{$room->name}}</a>
								</td>
								<td>
									<a href="{{route('location.show', $room->location->id)}}">{{$room->location->name}}</a>
								</td>

								<td>{{$room->computer_quantity}}</td>

								<td>
									<div class="btn-group">
										<a href="{{URL::to('admin/room/'.$room->id.'/edit')}}" class="btn btn-icon-only blue">
											<i class="icon-pencil"></i>
										</a>
										<a href="{{URL::to('admin/room/delete/'.$room->id)}}" class="btn btn-icon-only red ml-10">
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
					{{ $rooms->links() }}
				</div>
				<p class="text-left">
					Tổng số phòng thi: <strong>{{$rooms->count()}}</strong>
				</p>
			</div>
		</div>
	</div>
</div>
<script src="assets/js/room/index.js"></script>
@endsection