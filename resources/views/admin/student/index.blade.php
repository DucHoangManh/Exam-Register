@extends('admin.layouts.app')
@section('title', 'Sinh viên')
@section('page-title', 'Sinh viên')
@section('page-title-small', 'statistics, charts, recent events and reports')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption font-dark">
					<i class="icon-settings font-dark"></i>
					<span class="caption-subject bold uppercase">Quản lý sinh viên</span>
				</div>
				<div class="actions">
					<div class="btn-group">
						<a href="{{route('student.create')}}">
							<button id="sample_editable_1_new" class="btn sbold green"> Add New
							<i class="fa fa-plus"></i>
							</button>
						</a>
						<a href="{{route('export.student')}}">
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
								<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 110px;">#
								</th>
								<th class="sorting_asc" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label=" Username : activate to sort column descending" style="width: 225px;"> MSSV </th>
								<th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" style="width: 431px;">Họ và tên </th>
								<th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" style="width: 200px;">Username</th>
								<th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" style="width: 200px;">Email</th>
								<th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" style="width: 242px;"> Giới tính </th>
								<th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" style="width: 242px;"> Ngày sinh </th>
								<th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" style="width: 171px;"> Số môn thi </th>
								<th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" style="width: 115px;"> Thao tác </th>
							</tr>
						</thead>
						<tbody>
							@foreach($students as $student)
							<tr class="gradeX odd" role="row">
								<td>
									{{$loop->index+1}}
								</td>
								<td class="sorting_1"> {{$student->code}} </td>
								<td>
									<a href="{{route('student.show', $student->id)}}">{{$student->name}}</a>
								</td>
								<td>
									@if($student->user != null)
									{{$student->user->username}}
									@else
									null
									@endif
								</td>
								<td>
									@if($student->user != null)
									{{$student->user->email}}
									@else
									null
									@endif
								</td>
								<td>
									@if($student->gender == 1)
									Nam
									@else
									Nữ
									@endif
								</td>
								<td class="center"> {{$student->birthday}} </td>
								<td class="center"> {{$student->class->count()}} </td>
								<td>
									<div class="btn-group">
										<a href="{{URL::to('admin/student/'.$student->id.'/edit')}}" class="btn btn-icon-only blue">
											<i class="icon-pencil"></i>
										</a>
										<a href="{{URL::to('admin/student/delete/'.$student->id)}}" class="btn btn-icon-only red ml-10">
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
					{{ $students->links() }}
				</div>
				<p class="text-left">
					Tổng số sinh viên: <strong>{{$students->count()}}</strong>
				</p>
			</div>
		</div>
	</div>
</div>
@endsection