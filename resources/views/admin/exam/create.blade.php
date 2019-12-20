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
					<span class="caption-subject bold uppercase"> Thêm kỳ thi </span>
				</div>
			</div>
			<div id="form" class="portlet-body form">
				<form action="{{route('exam.store')}}" method="POST" class="form-horizontal" role="form">
					{{ csrf_field() }}
					<div class="form-body">
						<div class="form-group">
							<label class="col-md-4 control-label">Học kỳ</label>
							<div class="col-md-8">
								<select class="form-control input-small" name="type">
									<option value="I">Học kỳ I</option>
									<option value="II">Học kỳ II</option>
									<option value="Hè">Học kỳ hè</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Năm học</label>
							<div class="col-md-8">
								<select class="form-control input-small" name="school_year">
									@for($i = 2018; $i < 2050; $i++)
									<option value="{{$i}}">{{$i}}</option>
									@endfor
								</select>
							</div>
						</div>
					</div>
					<div class="form-actions">
						<div class="row">
							<div class="col-md-offset-4 col-md-8">
								<button type="submit" class="btn green">Submit</button>
								<a href="{{URL::to('admin/room')}}" type="button" class="btn default">Cancel</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/typeahead.bundle.js"></script>
<script src="assets/js/room/create.js"></script>
@endsection