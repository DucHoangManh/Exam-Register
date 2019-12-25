@extends('user.layouts.master')

@section('title', 'Home')

@section('header-mobile')
@include('user.modules.header-mobile')
@endsection

@section('aside')
@include('user.modules.aside')
@endsection

@section('header')
@include('user.modules.header')
@endsection

@section('content-head')
@include('user.modules.content-head')
@endsection

@section('content')
<!--Begin::Row-->
<div class="row height-100">
	<div class="col-lg-8">
		<div class="kt-portlet height-100">
			<div class="kt-portlet__body">
				<div class="kt-infobox">
					<div class="kt-infobox__header">
						<h2 class="kt-infobox__title">Thông báo - Hướng dẫn</h2>
						<div class="kt-infobox__badge">Blog</div>
					</div>
					<div class="kt-infobox__body">
						<div class="kt-infobox__section">
							<div class="kt-infobox__content">
								@for($i=0; $i<6; $i++)
								Windows 10 automatically downloads and installs updates to make sure your device is secure and up to date. This means you receive the latest fixes and security updates, helping your device run efficiently and stay protected. <br>
								<br>
								@endfor
								
								<a href="#" class="kt-link">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-4">
		<div class="kt-portlet height-100">
			<div class="kt-portlet__body">
				<div class="kt-section">
					<div class="kt-section__info">
						Toggle sub navigation:
					</div>
					<div class="kt-section__content kt-section__content--border kt-section__content--fit">
						<ul class="kt-nav kt-nav--active-bg" id="kt_nav" role="tablist">
							<li class="kt-nav__item">
								<a href="#" class="kt-nav__link">
									<i class="kt-nav__link-icon flaticon2-help"></i>
									<span class="kt-nav__link-text">Đào tạo</span>
								</a>
							</li>
							<li class="kt-nav__item">
								<a href="#" class="kt-nav__link">
									<i class="kt-nav__link-icon flaticon2-open-text-book"></i>
									<span class="kt-nav__link-text">Courses</span>
								</a>
							</li>
							<li class="kt-nav__item">
								<a href="#" class="kt-nav__link">
									<i class="kt-nav__link-icon flaticon-calendar-with-a-clock-time-tools"></i>
									<span class="kt-nav__link-text">Đăng ký học</span>
								</a>
							</li>

							<li class="kt-nav__item kt-nav__item--active">
								<a class="kt-nav__link" role="tab" id="kt_nav_link_2" data-toggle="collapse" href="#kt_nav_sub_2" aria-expanded="true">
									<i class="kt-nav__link-icon flaticon-notes"></i>
									<span class="kt-nav__link-text">Các khóa học đăng ký</span>
									<span class="kt-nav__link-badge">
										<span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded">{{$student->classes->count()}}</span>
									</span>
									<span class="kt-nav__link-arrow"></span>
								</a>
								<ul class="kt-nav__sub collapse show" id="kt_nav_sub_2" role="tabpanel" aria-labelledby="m_nav_link_2" data-parent="#kt_nav" style="">
									@foreach($student->classes as $class)
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
											<span class="kt-nav__link-bullet kt-nav__link-bullet--line"><span></span></span>
											<span class="kt-nav__link-text">{{$class->module->subject->name.' ('.$class->code.')'}}</span>
										</a>
									</li>
									@endforeach
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--End::Row-->
<script src="vendors/global/vendors.bundle.js" type="text/javascript"></script>
@endsection

@section('footer')
@include('user.modules.footer')
@endsection
