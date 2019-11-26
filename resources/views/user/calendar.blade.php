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
						Môn thi
					</h3>
            </div>
        </div>
        <div class="kt-portlet__body">
            <div id="kt_calendar_external_events" class="fc-unthemed">
                <div class="fc-draggable-handle kt-badge kt-badge--lg kt-badge--primary kt-badge--inline kt-margin-b-15" data-color="fc-event-primary">Meeting</div>
                <br>
                <div class="fc-draggable-handle kt-badge kt-badge--lg kt-badge--brand kt-badge--inline kt-margin-b-15" data-color="fc-event-brand">Conference Call</div>
                <br>
                <div class="fc-draggable-handle kt-badge kt-badge--lg kt-badge--success kt-badge--inline kt-margin-b-15" data-color="fc-event-success">Dinner</div>
                <br>
                <div class="fc-draggable-handle kt-badge kt-badge--lg kt-badge--warning kt-badge--inline kt-margin-b-15" data-color="fc-event-warning">Product Launch</div>
                <br>
                <div class="fc-draggable-handle kt-badge kt-badge--lg kt-badge--danger kt-badge--inline kt-margin-b-15" data-color="fc-event-danger">Reporting</div>
                <br>

                <div class="kt-separator kt-separator--border-dashed kt-separator--space-md"></div>

                <div class="fc-draggable-handle kt-badge kt-badge--lg kt-badge--success kt-badge--inline kt-margin-b-15" data-color="fc-event-success">Project Update</div>
                <br>
                <div class="fc-draggable-handle kt-badge kt-badge--lg kt-badge--info kt-badge--inline kt-margin-b-15" data-color="fc-event-info">Staff Meeting</div>
                <br>
                <div class="fc-draggable-handle kt-badge kt-badge--lg kt-badge--dark kt-badge--inline kt-margin-b-15" data-color="fc-event-dark">Lunch</div>

                <div class="kt-separator kt-separator--border-dashed kt-separator--space-md"></div>

                <div>
                    <label class="kt-checkbox kt-checkbox--brand">
                        <input type="checkbox" id="kt_calendar_external_events_remove"> Remove after drop
                        <span></span>
                    </label>
                </div>
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
            <div id="kt_calendar" class="fc fc-ltr fc-unthemed" style="">
                <div class="fc-toolbar fc-header-toolbar">
                    <div class="fc-left">
                        <div class="fc-button-group">
                            <button type="button" class="fc-prev-button fc-button fc-button-primary" aria-label="prev"><span class="fc-icon fc-icon-chevron-left"></span></button>
                            <button type="button" class="fc-next-button fc-button fc-button-primary" aria-label="next"><span class="fc-icon fc-icon-chevron-right"></span></button>
                        </div>
                        <button type="button" class="fc-today-button fc-button fc-button-primary" disabled="">today</button>
                    </div>
                    <div class="fc-center">
                        <h2>November 2019</h2></div>
                    <div class="fc-right">
                        <div class="fc-button-group">
                            <button type="button" class="fc-dayGridMonth-button fc-button fc-button-primary fc-button-active">month</button>
                            <button type="button" class="fc-timeGridWeek-button fc-button fc-button-primary">week</button>
                            <button type="button" class="fc-timeGridDay-button fc-button fc-button-primary">day</button>
                        </div>
                    </div>
                </div>
                <div class="fc-view-container">
                    <div class="fc-view fc-dayGridMonth-view fc-dayGrid-view" style="">
                        <table class="">
                            <thead class="fc-head">
                                <tr>
                                    <td class="fc-head-container fc-widget-header">
                                        <div class="fc-row fc-widget-header">
                                            <table class="">
                                                <thead>
                                                    <tr>
                                                        <th class="fc-day-header fc-widget-header fc-sun"><span>Sun</span></th>
                                                        <th class="fc-day-header fc-widget-header fc-mon"><span>Mon</span></th>
                                                        <th class="fc-day-header fc-widget-header fc-tue"><span>Tue</span></th>
                                                        <th class="fc-day-header fc-widget-header fc-wed"><span>Wed</span></th>
                                                        <th class="fc-day-header fc-widget-header fc-thu"><span>Thu</span></th>
                                                        <th class="fc-day-header fc-widget-header fc-fri"><span>Fri</span></th>
                                                        <th class="fc-day-header fc-widget-header fc-sat"><span>Sat</span></th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </thead>
                            <tbody class="fc-body">
                                <tr>
                                    <td class="fc-widget-content">
                                        <div class="fc-scroller fc-day-grid-container" style="overflow: hidden; height: 740px;">
                                            <div class="fc-day-grid">
                                                <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 123px;">
                                                    <div class="fc-bg">
                                                        <table class="">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2019-10-27"></td>
                                                                    <td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2019-10-28"></td>
                                                                    <td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2019-10-29"></td>
                                                                    <td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2019-10-30"></td>
                                                                    <td class="fc-day fc-widget-content fc-thu fc-other-month fc-past" data-date="2019-10-31"></td>
                                                                    <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2019-11-01"></td>
                                                                    <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2019-11-02"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="fc-content-skeleton">
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2019-10-27"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-10-27&quot;,&quot;type&quot;:&quot;day&quot;}">27</a></td>
                                                                    <td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2019-10-28"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-10-28&quot;,&quot;type&quot;:&quot;day&quot;}">28</a></td>
                                                                    <td class="fc-day-top fc-tue fc-other-month fc-past" data-date="2019-10-29"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-10-29&quot;,&quot;type&quot;:&quot;day&quot;}">29</a></td>
                                                                    <td class="fc-day-top fc-wed fc-other-month fc-past" data-date="2019-10-30"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-10-30&quot;,&quot;type&quot;:&quot;day&quot;}">30</a></td>
                                                                    <td class="fc-day-top fc-thu fc-other-month fc-past" data-date="2019-10-31"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-10-31&quot;,&quot;type&quot;:&quot;day&quot;}">31</a></td>
                                                                    <td class="fc-day-top fc-fri fc-past" data-date="2019-11-01"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-11-01&quot;,&quot;type&quot;:&quot;day&quot;}">1</a></td>
                                                                    <td class="fc-day-top fc-sat fc-past" data-date="2019-11-02"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-11-02&quot;,&quot;type&quot;:&quot;day&quot;}">2</a></td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td class="fc-event-container">
                                                                        <a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-event-danger fc-event-solid-warning fc-draggable fc-resizable" data-original-title="" title="">
                                                                            <div class="fc-content"> <span class="fc-title">All Day Event</span></div>
                                                                            <div class="fc-resizer fc-end-resizer"></div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="fc-event-container">
                                                                        <a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-event-primary fc-draggable fc-resizable" data-original-title="" title="">
                                                                            <div class="fc-content"> <span class="fc-title">Company Trip</span></div>
                                                                            <div class="fc-resizer fc-end-resizer"></div>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 123px;">
                                                    <div class="fc-bg">
                                                        <table class="">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2019-11-03"></td>
                                                                    <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2019-11-04"></td>
                                                                    <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2019-11-05"></td>
                                                                    <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2019-11-06"></td>
                                                                    <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2019-11-07"></td>
                                                                    <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2019-11-08"></td>
                                                                    <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2019-11-09"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="fc-content-skeleton">
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <td class="fc-day-top fc-sun fc-past" data-date="2019-11-03"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-11-03&quot;,&quot;type&quot;:&quot;day&quot;}">3</a></td>
                                                                    <td class="fc-day-top fc-mon fc-past" data-date="2019-11-04"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-11-04&quot;,&quot;type&quot;:&quot;day&quot;}">4</a></td>
                                                                    <td class="fc-day-top fc-tue fc-past" data-date="2019-11-05"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-11-05&quot;,&quot;type&quot;:&quot;day&quot;}">5</a></td>
                                                                    <td class="fc-day-top fc-wed fc-past" data-date="2019-11-06"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-11-06&quot;,&quot;type&quot;:&quot;day&quot;}">6</a></td>
                                                                    <td class="fc-day-top fc-thu fc-past" data-date="2019-11-07"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-11-07&quot;,&quot;type&quot;:&quot;day&quot;}">7</a></td>
                                                                    <td class="fc-day-top fc-fri fc-past" data-date="2019-11-08"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-11-08&quot;,&quot;type&quot;:&quot;day&quot;}">8</a></td>
                                                                    <td class="fc-day-top fc-sat fc-past" data-date="2019-11-09"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-11-09&quot;,&quot;type&quot;:&quot;day&quot;}">9</a></td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="fc-event-container" colspan="2">
                                                                        <a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-event-light fc-event-solid-primary fc-draggable fc-resizable" data-original-title="" title="">
                                                                            <div class="fc-content"> <span class="fc-title">ICT Expo 2017 - Product Release</span></div>
                                                                            <div class="fc-resizer fc-end-resizer"></div>
                                                                        </a>
                                                                    </td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td class="fc-event-container">
                                                                        <a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-event-danger fc-draggable" data-original-title="" title="">
                                                                            <div class="fc-content"><span class="fc-time">4p</span> <span class="fc-title">Repeating Event</span></div>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 123px;">
                                                    <div class="fc-bg">
                                                        <table class="">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2019-11-10"></td>
                                                                    <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2019-11-11"></td>
                                                                    <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2019-11-12"></td>
                                                                    <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2019-11-13"></td>
                                                                    <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2019-11-14"></td>
                                                                    <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2019-11-15"></td>
                                                                    <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2019-11-16"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="fc-content-skeleton">
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <td class="fc-day-top fc-sun fc-past" data-date="2019-11-10"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-11-10&quot;,&quot;type&quot;:&quot;day&quot;}">10</a></td>
                                                                    <td class="fc-day-top fc-mon fc-past" data-date="2019-11-11"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-11-11&quot;,&quot;type&quot;:&quot;day&quot;}">11</a></td>
                                                                    <td class="fc-day-top fc-tue fc-past" data-date="2019-11-12"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-11-12&quot;,&quot;type&quot;:&quot;day&quot;}">12</a></td>
                                                                    <td class="fc-day-top fc-wed fc-past" data-date="2019-11-13"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-11-13&quot;,&quot;type&quot;:&quot;day&quot;}">13</a></td>
                                                                    <td class="fc-day-top fc-thu fc-past" data-date="2019-11-14"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-11-14&quot;,&quot;type&quot;:&quot;day&quot;}">14</a></td>
                                                                    <td class="fc-day-top fc-fri fc-past" data-date="2019-11-15"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-11-15&quot;,&quot;type&quot;:&quot;day&quot;}">15</a></td>
                                                                    <td class="fc-day-top fc-sat fc-past" data-date="2019-11-16"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-11-16&quot;,&quot;type&quot;:&quot;day&quot;}">16</a></td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td class="fc-event-container">
                                                                        <a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable" data-original-title="" title="">
                                                                            <div class="fc-content"> <span class="fc-title">Dinner</span></div>
                                                                            <div class="fc-resizer fc-end-resizer"></div>
                                                                        </a>
                                                                    </td>
                                                                    <td></td>
                                                                    <td class="fc-event-container">
                                                                        <a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-event-success fc-draggable" data-original-title="" title="">
                                                                            <div class="fc-content"><span class="fc-time">1:30p</span> <span class="fc-title">Reporting</span></div>
                                                                        </a>
                                                                    </td>
                                                                    <td></td>
                                                                    <td class="fc-event-container">
                                                                        <a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" data-original-title="" title="">
                                                                            <div class="fc-content"><span class="fc-time">4p</span> <span class="fc-title">Repeating Event</span></div>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 123px;">
                                                    <div class="fc-bg">
                                                        <table class="">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2019-11-17"></td>
                                                                    <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2019-11-18"></td>
                                                                    <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2019-11-19"></td>
                                                                    <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2019-11-20"></td>
                                                                    <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2019-11-21"></td>
                                                                    <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2019-11-22"></td>
                                                                    <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2019-11-23"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="fc-content-skeleton">
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <td class="fc-day-top fc-sun fc-past" data-date="2019-11-17"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-11-17&quot;,&quot;type&quot;:&quot;day&quot;}">17</a></td>
                                                                    <td class="fc-day-top fc-mon fc-past" data-date="2019-11-18"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-11-18&quot;,&quot;type&quot;:&quot;day&quot;}">18</a></td>
                                                                    <td class="fc-day-top fc-tue fc-past" data-date="2019-11-19"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-11-19&quot;,&quot;type&quot;:&quot;day&quot;}">19</a></td>
                                                                    <td class="fc-day-top fc-wed fc-past" data-date="2019-11-20"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-11-20&quot;,&quot;type&quot;:&quot;day&quot;}">20</a></td>
                                                                    <td class="fc-day-top fc-thu fc-past" data-date="2019-11-21"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-11-21&quot;,&quot;type&quot;:&quot;day&quot;}">21</a></td>
                                                                    <td class="fc-day-top fc-fri fc-past" data-date="2019-11-22"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-11-22&quot;,&quot;type&quot;:&quot;day&quot;}">22</a></td>
                                                                    <td class="fc-day-top fc-sat fc-past" data-date="2019-11-23"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-11-23&quot;,&quot;type&quot;:&quot;day&quot;}">23</a></td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 123px;">
                                                    <div class="fc-bg">
                                                        <table class="">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2019-11-24"></td>
                                                                    <td class="fc-day fc-widget-content fc-mon fc-today " data-date="2019-11-25"></td>
                                                                    <td class="fc-day fc-widget-content fc-tue fc-future" data-date="2019-11-26"></td>
                                                                    <td class="fc-day fc-widget-content fc-wed fc-future" data-date="2019-11-27"></td>
                                                                    <td class="fc-day fc-widget-content fc-thu fc-future" data-date="2019-11-28"></td>
                                                                    <td class="fc-day fc-widget-content fc-fri fc-future" data-date="2019-11-29"></td>
                                                                    <td class="fc-day fc-widget-content fc-sat fc-future" data-date="2019-11-30"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="fc-content-skeleton">
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <td class="fc-day-top fc-sun fc-past" data-date="2019-11-24"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-11-24&quot;,&quot;type&quot;:&quot;day&quot;}">24</a></td>
                                                                    <td class="fc-day-top fc-mon fc-today " data-date="2019-11-25"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-11-25&quot;,&quot;type&quot;:&quot;day&quot;}">25</a></td>
                                                                    <td class="fc-day-top fc-tue fc-future" data-date="2019-11-26"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-11-26&quot;,&quot;type&quot;:&quot;day&quot;}">26</a></td>
                                                                    <td class="fc-day-top fc-wed fc-future" data-date="2019-11-27"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-11-27&quot;,&quot;type&quot;:&quot;day&quot;}">27</a></td>
                                                                    <td class="fc-day-top fc-thu fc-future" data-date="2019-11-28"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-11-28&quot;,&quot;type&quot;:&quot;day&quot;}">28</a></td>
                                                                    <td class="fc-day-top fc-fri fc-future" data-date="2019-11-29"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-11-29&quot;,&quot;type&quot;:&quot;day&quot;}">29</a></td>
                                                                    <td class="fc-day-top fc-sat fc-future" data-date="2019-11-30"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-11-30&quot;,&quot;type&quot;:&quot;day&quot;}">30</a></td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="fc-event-container" colspan="2">
                                                                        <a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-event-brand fc-draggable fc-resizable" data-original-title="" title="">
                                                                            <div class="fc-content"> <span class="fc-title">Conference</span></div>
                                                                            <div class="fc-resizer fc-end-resizer"></div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="fc-event-container">
                                                                        <a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-event-solid-danger fc-event-light fc-draggable" data-original-title="" title="">
                                                                            <div class="fc-content"><span class="fc-time">5a</span> <span class="fc-title">Dinner</span></div>
                                                                        </a>
                                                                    </td>
                                                                    <td rowspan="5"></td>
                                                                    <td class="fc-event-container" rowspan="5">
                                                                        <a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-event-solid-info fc-event-light fc-draggable fc-resizable" href="http://google.com/" data-original-title="" title="">
                                                                            <div class="fc-content"> <span class="fc-title">Click for Google</span></div>
                                                                            <div class="fc-resizer fc-end-resizer"></div>
                                                                        </a>
                                                                    </td>
                                                                    <td rowspan="5"></td>
                                                                    <td rowspan="5"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td rowspan="4"></td>
                                                                    <td class="fc-event-container fc-limited">
                                                                        <a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" data-original-title="" title="">
                                                                            <div class="fc-content"><span class="fc-time">10:30a</span> <span class="fc-title">Meeting</span></div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="fc-more-cell" rowspan="1">
                                                                        <div><a class="fc-more">+4 more</a></div>
                                                                    </td>
                                                                    <td class="fc-event-container" rowspan="4">
                                                                        <a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-event-primary fc-draggable" data-original-title="" title="">
                                                                            <div class="fc-content"><span class="fc-time">7a</span> <span class="fc-title">Birthday Party</span></div>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="fc-limited">
                                                                    <td class="fc-event-container">
                                                                        <a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-event-info fc-draggable" data-original-title="" title="">
                                                                            <div class="fc-content"><span class="fc-time">12p</span> <span class="fc-title">Lunch</span></div>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="fc-limited">
                                                                    <td class="fc-event-container">
                                                                        <a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-event-warning fc-draggable" data-original-title="" title="">
                                                                            <div class="fc-content"><span class="fc-time">2:30p</span> <span class="fc-title">Meeting</span></div>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="fc-limited">
                                                                    <td class="fc-event-container">
                                                                        <a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-event-info fc-draggable" data-original-title="" title="">
                                                                            <div class="fc-content"><span class="fc-time">5:30p</span> <span class="fc-title">Happy Hour</span></div>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 125px;">
                                                    <div class="fc-bg">
                                                        <table class="">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="fc-day fc-widget-content fc-sun fc-other-month fc-future" data-date="2019-12-01"></td>
                                                                    <td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2019-12-02"></td>
                                                                    <td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2019-12-03"></td>
                                                                    <td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2019-12-04"></td>
                                                                    <td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2019-12-05"></td>
                                                                    <td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2019-12-06"></td>
                                                                    <td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2019-12-07"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="fc-content-skeleton">
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <td class="fc-day-top fc-sun fc-other-month fc-future" data-date="2019-12-01"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-12-01&quot;,&quot;type&quot;:&quot;day&quot;}">1</a></td>
                                                                    <td class="fc-day-top fc-mon fc-other-month fc-future" data-date="2019-12-02"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-12-02&quot;,&quot;type&quot;:&quot;day&quot;}">2</a></td>
                                                                    <td class="fc-day-top fc-tue fc-other-month fc-future" data-date="2019-12-03"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-12-03&quot;,&quot;type&quot;:&quot;day&quot;}">3</a></td>
                                                                    <td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2019-12-04"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-12-04&quot;,&quot;type&quot;:&quot;day&quot;}">4</a></td>
                                                                    <td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2019-12-05"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-12-05&quot;,&quot;type&quot;:&quot;day&quot;}">5</a></td>
                                                                    <td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2019-12-06"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-12-06&quot;,&quot;type&quot;:&quot;day&quot;}">6</a></td>
                                                                    <td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2019-12-07"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2019-12-07&quot;,&quot;type&quot;:&quot;day&quot;}">7</a></td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Portlet-->
</div>
</div>
<!--End::Row-->
@endsection

@section('footer')
@include('user.modules.footer')
@endsection
