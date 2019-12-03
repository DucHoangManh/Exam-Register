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
					<span class="caption-subject bold uppercase"> Quản lý sinh viên </span>
				</div>
				<div class="actions">
					<div class="btn-group btn-group-devided" data-toggle="buttons">
						<label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
							<input type="radio" name="options" class="toggle" id="option1">Actions
						</label>
						<label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
							<input type="radio" name="options" class="toggle" id="option2">Settings
						</label>
					</div>
				</div>
			</div>
			<div class="portlet-body">
				<div class="table-toolbar">
					<div class="row">
						<div class="col-md-6">
							<div class="btn-group">
								<button id="sample_editable_1_new" class="btn sbold green"> Import
								<i class="fa fa-plus"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="table-scrollable">
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection