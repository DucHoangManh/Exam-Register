<div class="kt-subheader  kt-grid__item" id="kt_subheader">
	<div class="kt-container  kt-container--fluid ">
		<div class="kt-subheader__main">

			<h3 class="kt-subheader__title">Trang chủ</h3>

			<span class="kt-subheader__separator kt-subheader__separator--v"></span>

			<span class="kt-subheader__desc">#{{Auth::user()->username}}</span>

			<a href="#" class="btn btn-label-warning btn-bold btn-sm btn-icon-h kt-margin-l-10">
				Add New
			</a>

			<div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
				<input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
				<span class="kt-input-icon__icon kt-input-icon__icon--right">
					<span><i class="flaticon2-search-1"></i></span>
				</span>
			</div>
		</div>
		<div class="kt-subheader__toolbar">
			<div class="kt-subheader__wrapper">
				<a href="#" class="btn kt-subheader__btn-secondary">Today</a>

				<a href="#" class="btn kt-subheader__btn-secondary">Month</a>

				<a href="#" class="btn kt-subheader__btn-secondary">Year</a>
			</div>
		</div>
	</div>
</div>