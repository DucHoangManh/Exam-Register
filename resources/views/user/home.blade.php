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
<div class="row" style="height: 100%">
	<div class="col-lg-6">
		<div class="kt-portlet" style="height: 100%">
			<div class="kt-portlet__body">
				<div class="kt-infobox">
					<div class="kt-infobox__header">
						<h2 class="kt-infobox__title">AirPlus SAAS License</h2>
						<div class="kt-infobox__badge">Blog</div>
					</div>
					<div class="kt-infobox__body">
						<div class="kt-infobox__section">
							<div class="kt-infobox__content">
								Windows 10 automatically downloads and installs updates to make sure your device is secure and up to date. This means you receive the latest fixes and security updates, helping your device run efficiently and stay protected. In most cases, restarting your device completes the update. Make sure your device is plugged in when you know updates will be installed. <br>
								<br>
								<a href="#" class="kt-link">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="kt-portlet">
			<div class="kt-portlet__body">
				<div class="kt-infobox kt-infobox--success">
					<div class="kt-infobox__header">
						<h2 class="kt-infobox__title">AirPlus SAAS License</h2>
						<div class="kt-infobox__badge">Blog</div>
					</div>
					<div class="kt-infobox__body">
						<div class="kt-infobox__section">
							<div class="kt-infobox__content">
								Windows 10 automatically downloads and installs updates to make sure your device is secure and up to date. <br>
								<br>
								<a href="#" class="kt-link">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--End::Row-->
@endsection

@section('footer')
@include('user.modules.footer')
@endsection
