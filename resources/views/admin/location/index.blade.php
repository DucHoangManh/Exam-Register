@extends('admin.layouts.app')
@section('title', 'Điểm thi')
@section('page-title', 'Điểm thi')
@section('page-title-small', 'statistics, charts, recent events and reports')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption font-dark">
					<i class="icon-settings font-dark"></i>
					<span class="caption-subject bold uppercase">Quản lý điểm thi</span>
				</div>
				<div class="actions">
					<div class="btn-group">
						<a href="{{route('location.create')}}">
							<button id="sample_editable_1_new" class="btn sbold green"> Add New
							<i class="fa fa-plus"></i>
							</button>
						</a>
						<a href="{{route('export.location')}}">
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
								<th class="sorting_asc" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-sort="ascending" style="width: 225px;"> Tên điểm thi </th>
								<th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" style="width: 431px;">Số phòng thi</th>
								<th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" style="width: 115px;"> Thao tác </th>
							</tr>
						</thead>
						<tbody>
							@foreach($locations as $location)
							<tr class="gradeX odd" role="row">
								<td>
									{{$loop->index+1}}
								</td>
								<td>
									<a href="{{route('location.show', $location->id)}}">{{$location->name}}</a>
								</td>
								<td>
									@if($location->room != null)
									{{$location->room->count()}}
									@else
									0
									@endif
								</td>

								<td>
									<div class="btn-group">
										<a href="{{URL::to('admin/location/'.$location->id.'/edit')}}" class="btn btn-icon-only blue">
											<i class="icon-pencil"></i>
										</a>
										<a href="{{URL::to('admin/location/delete/'.$location->id)}}" class="btn btn-icon-only red ml-10">
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
					{{ $locations->links() }}
				</div>
				<p class="text-left">
					Tổng số điểm thi: <strong>{{$locations->count()}}</strong>
				</p>
			</div>
		</div>
	</div>
</div>
<script src="assets/js/location/index.js"></script>
@endsection