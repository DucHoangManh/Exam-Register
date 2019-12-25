@extends('user.layouts.master')

@section('title', 'Lịch thi')

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

@section('custom-head')

@endsection

@section('content')
<!--Begin::Row-->
<div class="row">
   <div class="col-lg-3">
    <!--begin::Portlet-->
    <div class="kt-portlet" id="kt_portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
						<i class="flaticon-map-location"></i>
					</span>
                <h3 class="kt-portlet__head-title">
						Môn thi đã đăng ký
					</h3>
            </div>
        </div>
        <div class="kt-portlet__body">
            <div id="kt_calendar_external_events" class="fc-unthemed">
                @foreach($subjectColor as $subject)
                <div class="fc-draggable-handle kt-badge kt-badge--lg kt-badge--primary kt-badge--inline kt-margin-b-15" style="background-color: {{$subject['color']}}">{{$subject['subject']}}</div>
                <br>
                @endforeach
                
            </div>
        </div>
    </div>
    <!--end::Portlet-->
</div>
<div class="col-lg-9">
    <!--begin::Portlet-->
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
						<i class="flaticon-map-location"></i>
					</span>
                <h3 class="kt-portlet__head-title">
						Lịch thi
					</h3>
            </div>
        </div>
        <div class="kt-portlet__body">
        {!! $calendar->calendar() !!}
        {!! $calendar->script() !!}
        </div>
    </div>
    <!--end::Portlet-->
</div>
</div>

@endsection

@section('footer')
@include('user.modules.footer')
@endsection
