<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="utf-8"/>
	<title>@yield('title')</title>

	<!--begin::Page Vendors Styles(used by this page) -->
	<link href="vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Page Vendors Styles -->

	<!--begin::Global Theme Styles(used by all pages) -->
	<link href="vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
	<link href="css/demo3/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Theme Styles -->

	<!--begin::Layout Skins(used by all pages) -->
	<!--end::Layout Skins -->

	<link rel="shortcut icon" href="media/logos/favicon.ico" />
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
</head>
<!-- end::Head -->

<!-- begin::Body -->
<!-- begin :: Header Mobile -->
@yield('header-mobile')
<!-- end :: Header Mobile -->
<body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
	<div class="kt-grid kt-grid--hor kt-grid--root">
		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
			<!-- begin :: Aside -->
			@yield('aside')
			<!-- end :: Aside -->
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
				<!-- begin:: Header -->
				@yield('header')
				<!-- end:: Header -->
				<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
					<!-- begin:: Content Head -->
					@yield('content-head')
					<!-- end:: Content Head -->					
					<!-- begin:: Content -->
					<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid mt-25 mb-25">
						@yield('content')
					</div>
					<!-- end:: Content -->	
					@yield('footer')	


				</div>				
			</div>
		</div>
	</div>
	<div id="kt_scrolltop" class="kt-scrolltop">
		<i class="fa fa-arrow-up"></i>
	</div>
	
	@yield('modal')	

	<script>
            var KTAppOptions = {"colors":{"state":{"brand":"#2c77f4","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>

        <script src="vendors/global/vendors.bundle.js" type="text/javascript"></script>
        <script src="js/demo3/scripts.bundle.js" type="text/javascript"></script>
        <script src="vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
        <script src="vendors/custom/gmaps/gmaps.js" type="text/javascript"></script>
        <script src="js/demo3/pages/dashboard.js" type="text/javascript"></script>
</body>


