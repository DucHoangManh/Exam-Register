@extends('admin.layouts.app')
@section('title', 'Tài khoản')
@section('page-title', 'Tài khoản')
@section('page-title-small', 'statistics, charts, recent events and reports')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption font-dark">
					<i class="icon-settings font-dark"></i>
					<span class="caption-subject bold uppercase">Quản lý lớp học</span>
				</div>
				<div class="actions">
					<div class="btn-group">
						<a href="{{URL::to('admin/class/create')}}">
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
						
					</div>
				</div>
				<div class="table-scrollable">
					<table class="table table-striped table-bordered table-hover table-checkable order-column dataTable no-footer" id="sample_1" role="grid" aria-describedby="sample_1_info">
						<thead>
							<tr role="row">
								<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 50px;">#
								</th>
								<th class="sorting_asc" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" style="width: 225px;"> Mã lớp </th>
								<th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" style="width: 431px;">Môn học</th>
								<th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" style="width: 100px;">Tín chỉ</th>
								<th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" style="width: 300px;">Giảng viên</th>
								<th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" style="width: 200px;">Sĩ số</th>
								<th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" style="width: 115px;"> Thao tác </th>
							</tr>
						</thead>
						<tbody>
							@foreach($classes as $class)
							<tr class="gradeX odd" role="row">
								<td>
									{{$loop->index+1}}
								</td>
								<td>
									<a href="{{route('class.show', $class->id)}}">{{$class->code}}</a>
								</td>
								<td>
									<a href="{{route('subject.show', $class->subject->id)}}">{{$class->subject->name}}</a>
								</td>
								<td>
									{{$class->subject->credit}}
								</td>
								<td>
									<a href="{{route('teacher.show', $class->teacher->id)}}">{{$class->teacher->name}}</a>
								</td>
								<td>
									{{$class->student->count()}}
								</td>

								<td>
									<div class="btn-group">
										<a href="{{route('class.edit', $class->id)}}" class="btn btn-icon-only blue">
											<i class="icon-pencil"></i>
										</a>
										<a href="{{URL::to('admin/class/delete/'.$class->id)}}" class="btn btn-icon-only red ml-10">
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
					{{ $classes->links() }}
				</div>
				<p class="text-left">
					Tổng số lớp: <strong>{{$classes->count()}}</strong>
				</p>
			</div>
		</div>
	</div>
</div>
@endsection