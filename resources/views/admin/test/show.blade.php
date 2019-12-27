@extends('admin.layouts.app')
@section('title', 'Danh sách thi')
@section('page-title', 'Danh sách thi')
@section('page-title-small', 'statistics, charts, recent events and reports')
@section('content')
<style type="text/css" media="print">
a[href]:after{
    content:"";
}
}
</style>
<div class="row">
	<div class="col-md-12">
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-pointer font-blue"></i>
					<span class="caption-subject font-blue bold uppercase">Danh sách thi</span>
				</div>
				<div class="actions">
					<div class="btn-group">
						<button id="printContent" class="btn sbold green"> Print
						<i class="fa fa-print"></i>
						</button>
					</div>
				</div>
			</div>
			<div class="portlet-body print-section">
				<div class="row">
					<div class="col-md-6">
						<p>Tên môn thi: <strong><a href="{{route('subject.show', $test->class->module->subject->id)}}">{{$test->class->module->subject->name}}</a></strong></p>
						<p>Giảng viên: <strong><a href="{{route('teacher.show', $test->class->teacher->id)}}">{{$test->class->teacher->name}}</a></strong></p>
						<p>Học kỳ: <strong>{{$test->class->module->exam->type}}</strong></p>
						<p>Số tín chỉ: <strong>{{$test->class->module->subject->credit}}</strong></p>
						<p>Phòng thi: <strong>{{$test->room->name}}</strong></p>
					</div>
					<div class="col-md-6">
						<p>Mã lớp: <strong>{{$test->class->code}}</strong></p>
						<p>Email: <strong>{{$test->class->teacher->email}}</strong></p>
						<p>Năm học: <strong>{{$test->class->module->exam->school_year}}</strong></p>
						<p>Số lượng đăng ký:  <strong>{{$test->studentCount().'/'.$test->room->computer_quantity}}</strong></p>
						<p>Điểm thi: <strong>{{$test->room->location->name}}</strong></p>
					</div>
				</div>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Họ và tên</th>
							<th scope="col">MSSV</th>
							<th scope="col">Email</th>
							<th scope="col">Giới tính</th>
							<th scope="col">Ngày sinh</th>
							<th scope="col">Số báo danh</th>
							<th scope="col">Chú thích</th>
						</tr>
					</thead>
					<tbody>
						@foreach($test->students as $student)
						<tr>
							<th scope="row">{{$loop->index+1}}</th>
							<td>
								<a href="{{route('student.show', $student->id)}}">{{$student->name}}</a>
							</td>
							<td>{{$student->code}}</td>
							<td>{{$student->user->email}}</td>
							<td>
								@if ($student->gender == 0) Nam @else Nữ @endif
							</td>
							<td>{{$student->birthday}}</td>
							<td>{{$student->pivot->id_number}}</td>
							<td></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
</div>
<script>
    $(document).ready(function() {
        $('#printContent').click(function() {

            var printContents = $('.print-section').html();
            var originalContents = $('body').html();

            $('body').html(printContents);

            window.print();

            $('body').html(originalContents);
        });
    });
</script>
<script src="assets/js/class/show.js"></script>
<script src="assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
<script src="assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<script src="assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
<script src="assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
@endsection