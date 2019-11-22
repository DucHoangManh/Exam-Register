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
<div class="row">
	<div class="col-xl-12 col-lg-12 order-lg-3 order-xl-1">
		<!--begin:: Widgets/User Progress -->
		<div class="kt-portlet kt-portlet--height-fluid">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Lớp học
					</h3>
				</div>
				<div class="kt-portlet__head-toolbar">
					<ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
<!-- 						<li class="nav-item">					
							<a class="nav-link active" data-toggle="tab" href="#kt_widget31_tab1_content" role="tab">					
								Today
							</a>
						</li> -->
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#kt_widget31_tab2_content" role="tab">					
								Hạn đăng ký: 01/01/2020
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="kt-portlet__body">
				<div class="tab-content">
					<div class="tab-pane active" id="kt_widget31_tab1_content">
						<div class="kt-widget31">

							@for($i = 0; $i < 4; $i++)
							<div class="kt-widget31__item">
								<div class="kt-widget31__content">
									<span>1</span>
									<div class="kt-widget31__info">
										<a href="#" class="kt-widget31__username">
											Milano Esco
										</a>
										<p class="kt-widget31__text">
											Product Designer, Apple Inc 
										</p>							 		 
									</div>
								</div>

								<div class="kt-widget31__content">
									<div class="kt-widget31__progress">
										<a href="#" class="kt-widget31__stats">
											<span>33%</span>
											<span>Paris</span>						    							 
										</a>
										<div class="progress progress-sm">
											<div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>	
									<a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>													
								</div>							 
							</div>
							@endfor

							<div class="kt-widget31__item">
								<div class="kt-widget31__content">
									<span>2</span>
									<div class="kt-widget31__info">
										<a href="#" class="kt-widget31__username">
											Nick Bold
										</a>
										<p class="kt-widget31__text">
											Web Developer, Facebook Inc 
										</p>							 		 
									</div>
								</div>
								<div class="kt-widget31__content">
									<div class="kt-widget31__progress">
										<a href="#" class="kt-widget31__stats">
											<span>13%</span>
											<span>London</span>						    							 
										</a>
										<div class="progress progress-sm">
											<div class="progress-bar bg-info" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>	
									<a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>													
								</div>						
							</div>

							<div class="kt-widget31__item">
								<div class="kt-widget31__content">
									<div class="kt-widget31__pic kt-widget4__pic--pic">
										<img src="media/users/100_1.jpg" alt="">    
									</div>
									<div class="kt-widget31__info">
										<a href="#" class="kt-widget31__username">
											Wiltor Delton
										</a>
										<p class="kt-widget31__text">
											Project Manager, Amazon Inc 
										</p>							 		 
									</div>
								</div>	
								<div class="kt-widget31__content">
									<div class="kt-widget31__progress">
										<div class="kt-widget31__stats">
											<span>93%</span>
											<span>New York</span>						    							 
										</div>
										<div class="progress progress-sm">
											<div class="progress-bar bg-danger" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>	
									<a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>													
								</div>						
							</div>	

							<div class="kt-widget31__item">
								<div class="kt-widget31__content">
									<div class="kt-widget31__pic">
										<img src="media/users/100_6.jpg" alt="">    
									</div>
									<div class="kt-widget31__info">
										<a href="#" class="kt-widget31__username">
											Sam Stone
										</a>
										<p class="kt-widget31__text">
											Project Manager, Kilpo Inc 
										</p>							 		 
									</div>
								</div>
								<div class="kt-widget31__content">
									<div class="kt-widget31__progress">
										<div class="kt-widget31__stats">
											<span>50%</span>
											<span>New York</span>						    							 
										</div>
										<div class="progress progress-sm">
											<div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>	
									<a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>													
								</div>													 
							</div>	
						</div>            
					</div>
				</div>
			</div>
		</div>
		<!--end:: Widgets/User Progress -->	
	</div>
</div>
<!--End::Row-->
@endsection

@section('footer')
@include('user.modules.footer')
@endsection
