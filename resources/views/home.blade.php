@extends('layouts.app')

@section('subheader')
    <h3 class="kt-subheader__title">Dashboard</h3>
    <span class="kt-subheader__separator kt-subheader__separator--v"></span>
    <span class="kt-subheader__desc">#XRS-45670</span>
    <a href="#" class="btn btn-label-warning btn-bold btn-sm btn-icon-h kt-margin-l-10">
        Add New
    </a>
    <div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
        <input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
        <span class="kt-input-icon__icon kt-input-icon__icon--right">
            <span><i class="flaticon2-search-1"></i></span>
        </span>
    </div>
@endsection

@section('subheader-toolbar')
    <div class="kt-subheader__toolbar">
        <div class="kt-subheader__wrapper">
            <a href="#" class="btn kt-subheader__btn-secondary">Today</a>
            <a href="#" class="btn kt-subheader__btn-secondary">Month</a>
            <a href="#" class="btn kt-subheader__btn-secondary">Year</a>
            <a href="#" class="btn kt-subheader__btn-daterange" id="kt_dashboard_daterangepicker" data-toggle="kt-tooltip" title="Select dashboard daterange" data-placement="left">
                <span class="kt-subheader__btn-daterange-title" id="kt_dashboard_daterangepicker_title">Today</span>&nbsp;
                <span class="kt-subheader__btn-daterange-date" id="kt_dashboard_daterangepicker_date">Aug 16</span>
                <i class="flaticon2-calendar-1"></i>
            </a>
            <div class="dropdown dropdown-inline" data-toggle-="kt-tooltip" title="Quick actions" data-placement="left">
                <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000" />
                        </g>
                    </svg>

                    <!--<i class="flaticon2-plus"></i>-->
                </a>
                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">

                    <!--begin::Nav-->
                    <ul class="kt-nav">
                        <li class="kt-nav__head">
                            Add anything or jump to:
                            <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
                        </li>
                        <li class="kt-nav__separator"></li>
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon flaticon2-drop"></i>
                                <span class="kt-nav__link-text">Order</span>
                            </a>
                        </li>
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                <span class="kt-nav__link-text">Ticket</span>
                            </a>
                        </li>
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
                                <span class="kt-nav__link-text">Goal</span>
                            </a>
                        </li>
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                <span class="kt-nav__link-text">Support Case</span>
                                <span class="kt-nav__link-badge">
																<span class="kt-badge kt-badge--brand kt-badge--rounded">5</span>
															</span>
                            </a>
                        </li>
                        <li class="kt-nav__separator"></li>
                        <li class="kt-nav__foot">
                            <a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade plan</a>
                            <a class="btn btn-clean btn-bold btn-sm kt-hidden" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                        </li>
                    </ul>

                    <!--end::Nav-->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!--Begin::Dashboard 1-->

    <!--Begin::Row-->
    <div class="row">
        <div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">

            <!--begin:: Widgets/Activity-->
            <div class="kt-portlet kt-portlet--fit kt-portlet--head-lg kt-portlet--head-overlay kt-portlet--skin-solid kt-portlet--height-fluid">
                <div class="kt-portlet__head kt-portlet__head--noborder kt-portlet__space-x">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Activity
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <a href="#" class="btn btn-label-light btn-sm btn-bold dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                            <ul class="kt-nav">
                                <li class="kt-nav__section kt-nav__section--first">
                                    <span class="kt-nav__section-text">Finance</span>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-graph-1"></i>
                                        <span class="kt-nav__link-text">Statistics</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                                        <span class="kt-nav__link-text">Events</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-layers-1"></i>
                                        <span class="kt-nav__link-text">Reports</span>
                                    </a>
                                </li>
                                <li class="kt-nav__section">
                                    <span class="kt-nav__section-text">Customers</span>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                                        <span class="kt-nav__link-text">Notifications</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-file-1"></i>
                                        <span class="kt-nav__link-text">Files</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body kt-portlet__body--fit">
                    <div class="kt-widget17">
                        <div class="kt-widget17__visual kt-widget17__visual--chart kt-portlet-fit--top kt-portlet-fit--sides" style="background-color: #fd397a">
                            <div class="kt-widget17__chart" style="height:320px;">
                                <canvas id="kt_chart_activities"></canvas>
                            </div>
                        </div>
                        <div class="kt-widget17__stats">
                            <div class="kt-widget17__items">
                                <div class="kt-widget17__item">
															<span class="kt-widget17__icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
																		<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
																	</g>
																</svg> </span>
                                    <span class="kt-widget17__subtitle">
																Delivered
															</span>
                                    <span class="kt-widget17__desc">
																15 New Paskages
															</span>
                                </div>
                                <div class="kt-widget17__item">
															<span class="kt-widget17__icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<polygon points="0 0 24 0 24 24 0 24" />
																		<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
																		<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
																	</g>
																</svg> </span>
                                    <span class="kt-widget17__subtitle">
																Ordered
															</span>
                                    <span class="kt-widget17__desc">
																72 New Items
															</span>
                                </div>
                            </div>
                            <div class="kt-widget17__items">
                                <div class="kt-widget17__item">
															<span class="kt-widget17__icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--warning">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z" fill="#000000" opacity="0.3" />
																		<path d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z" fill="#000000" />
																	</g>
																</svg> </span>
                                    <span class="kt-widget17__subtitle">
																Reported
															</span>
                                    <span class="kt-widget17__desc">
																72 Support Cases
															</span>
                                </div>
                                <div class="kt-widget17__item">
															<span class="kt-widget17__icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--danger">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
																		<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
																	</g>
																</svg> </span>
                                    <span class="kt-widget17__subtitle">
																Arrived
															</span>
                                    <span class="kt-widget17__desc">
																34 Upgraded Boxes
															</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/Activity-->
        </div>
        <div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">

            <!--begin:: Widgets/Inbound Bandwidth-->
            <div class="kt-portlet kt-portlet--fit kt-portlet--head-noborder kt-portlet--height-fluid-half">
                <div class="kt-portlet__head kt-portlet__space-x">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Inbound Bandwidth
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <a href="#" class="btn btn-label-success btn-sm btn-bold dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                            <ul class="kt-nav">
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                        <span class="kt-nav__link-text">Reports</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-send"></i>
                                        <span class="kt-nav__link-text">Messages</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                        <span class="kt-nav__link-text">Charts</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                        <span class="kt-nav__link-text">Members</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-settings"></i>
                                        <span class="kt-nav__link-text">Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body kt-portlet__body--fluid">
                    <div class="kt-widget20">
                        <div class="kt-widget20__content kt-portlet__space-x">
                            <span class="kt-widget20__number kt-font-brand">670+</span>
                            <span class="kt-widget20__desc">Successful transactions</span>
                        </div>
                        <div class="kt-widget20__chart" style="height:130px;">
                            <canvas id="kt_chart_bandwidth1"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/Inbound Bandwidth-->
            <div class="kt-space-20"></div>

            <!--begin:: Widgets/Outbound Bandwidth-->
            <div class="kt-portlet kt-portlet--fit kt-portlet--head-noborder kt-portlet--height-fluid-half">
                <div class="kt-portlet__head kt-portlet__space-x">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Outbound Bandwidth
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <a href="#" class="btn btn-label-warning btn-sm  btn-bold dropdown-toggle" data-toggle="dropdown">
                            Download
                        </a>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                            <ul class="kt-nav">
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                        <span class="kt-nav__link-text">Reports</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-send"></i>
                                        <span class="kt-nav__link-text">Messages</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                        <span class="kt-nav__link-text">Charts</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                        <span class="kt-nav__link-text">Members</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-settings"></i>
                                        <span class="kt-nav__link-text">Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body kt-portlet__body--fluid">
                    <div class="kt-widget20">
                        <div class="kt-widget20__content kt-portlet__space-x">
                            <span class="kt-widget20__number kt-font-danger">1340+</span>
                            <span class="kt-widget20__desc">Completed orders</span>
                        </div>
                        <div class="kt-widget20__chart" style="height:130px;">
                            <canvas id="kt_chart_bandwidth2"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/Outbound Bandwidth-->
        </div>
        <div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">

            <!--Begin::Portlet-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Recent Activities
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="dropdown dropdown-inline">
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flaticon-more-1"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">

                                <!--begin::Nav-->
                                <ul class="kt-nav">
                                    <li class="kt-nav__head">
                                        Export Options
                                        <span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
																			<rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
																			<rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
																		</g>
																	</svg> </span>
                                    </li>
                                    <li class="kt-nav__separator"></li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-drop"></i>
                                            <span class="kt-nav__link-text">Activity</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                            <span class="kt-nav__link-text">FAQ</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
                                            <span class="kt-nav__link-text">Settings</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                            <span class="kt-nav__link-text">Support</span>
                                            <span class="kt-nav__link-badge">
																		<span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
																	</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__separator"></li>
                                    <li class="kt-nav__foot">
                                        <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
                                        <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                                    </li>
                                </ul>

                                <!--end::Nav-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">

                    <!--Begin::Timeline 3 -->
                    <div class="kt-timeline-v2">
                        <div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
                            <div class="kt-timeline-v2__item">
                                <span class="kt-timeline-v2__item-time">10:00</span>
                                <div class="kt-timeline-v2__item-cricle">
                                    <i class="fa fa-genderless kt-font-danger"></i>
                                </div>
                                <div class="kt-timeline-v2__item-text  kt-padding-top-5">
                                    Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
                                    incididunt ut labore et dolore magna
                                </div>
                            </div>
                            <div class="kt-timeline-v2__item">
                                <span class="kt-timeline-v2__item-time">12:45</span>
                                <div class="kt-timeline-v2__item-cricle">
                                    <i class="fa fa-genderless kt-font-success"></i>
                                </div>
                                <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
                                    AEOL Meeting With
                                </div>
                                <div class="kt-list-pics kt-list-pics--sm kt-padding-l-20">
                                    <a href="#"><img src="assets/media/users/100_4.jpg" title=""></a>
                                    <a href="#"><img src="assets/media/users/100_13.jpg" title=""></a>
                                    <a href="#"><img src="assets/media/users/100_11.jpg" title=""></a>
                                    <a href="#"><img src="assets/media/users/100_14.jpg" title=""></a>
                                </div>
                            </div>
                            <div class="kt-timeline-v2__item">
                                <span class="kt-timeline-v2__item-time">14:00</span>
                                <div class="kt-timeline-v2__item-cricle">
                                    <i class="fa fa-genderless kt-font-brand"></i>
                                </div>
                                <div class="kt-timeline-v2__item-text kt-padding-top-5">
                                    Make Deposit <a href="#" class="kt-link kt-link--brand kt-font-bolder">USD 700</a> To ESL.
                                </div>
                            </div>
                            <div class="kt-timeline-v2__item">
                                <span class="kt-timeline-v2__item-time">16:00</span>
                                <div class="kt-timeline-v2__item-cricle">
                                    <i class="fa fa-genderless kt-font-warning"></i>
                                </div>
                                <div class="kt-timeline-v2__item-text kt-padding-top-5">
                                    Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
                                    incididunt ut labore et dolore magna elit enim at minim<br>
                                    veniam quis nostrud
                                </div>
                            </div>
                            <div class="kt-timeline-v2__item">
                                <span class="kt-timeline-v2__item-time">17:00</span>
                                <div class="kt-timeline-v2__item-cricle">
                                    <i class="fa fa-genderless kt-font-info"></i>
                                </div>
                                <div class="kt-timeline-v2__item-text kt-padding-top-5">
                                    Placed a new order in <a href="#" class="kt-link kt-link--brand kt-font-bolder">SIGNATURE MOBILE</a> marketplace.
                                </div>
                            </div>
                            <div class="kt-timeline-v2__item">
                                <span class="kt-timeline-v2__item-time">16:00</span>
                                <div class="kt-timeline-v2__item-cricle">
                                    <i class="fa fa-genderless kt-font-brand"></i>
                                </div>
                                <div class="kt-timeline-v2__item-text kt-padding-top-5">
                                    Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
                                    incididunt ut labore et dolore magna elit enim at minim<br>
                                    veniam quis nostrud
                                </div>
                            </div>
                            <div class="kt-timeline-v2__item">
                                <span class="kt-timeline-v2__item-time">17:00</span>
                                <div class="kt-timeline-v2__item-cricle">
                                    <i class="fa fa-genderless kt-font-danger"></i>
                                </div>
                                <div class="kt-timeline-v2__item-text kt-padding-top-5">
                                    Received a new feedback on <a href="#" class="kt-link kt-link--brand kt-font-bolder">FinancePro App</a> product.
                                </div>
                            </div>
                            <div class="kt-timeline-v2__item">
                                <span class="kt-timeline-v2__item-time">15:30</span>
                                <div class="kt-timeline-v2__item-cricle">
                                    <i class="fa fa-genderless kt-font-danger"></i>
                                </div>
                                <div class="kt-timeline-v2__item-text kt-padding-top-5">
                                    New notification message has been received on <a href="#" class="kt-link kt-link--brand kt-font-bolder">LoopFin Pro</a> product.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--End::Timeline 3 -->
                </div>
            </div>

            <!--End::Portlet-->
        </div>
        <div class="col-xl-8 order-lg-2 order-xl-1">
            <div class="kt-portlet kt-portlet--height-fluid kt-portlet--mobile ">
                <div class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Exclusive Datatable Plugin
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="dropdown dropdown-inline">
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flaticon-more-1"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-md dropdown-menu-fit">

                                <!--begin::Nav-->
                                <ul class="kt-nav">
                                    <li class="kt-nav__head">
                                        Export Options
                                        <span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
																			<rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
																			<rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
																		</g>
																	</svg> </span>
                                    </li>
                                    <li class="kt-nav__separator"></li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-drop"></i>
                                            <span class="kt-nav__link-text">Activity</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                            <span class="kt-nav__link-text">FAQ</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
                                            <span class="kt-nav__link-text">Settings</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                            <span class="kt-nav__link-text">Support</span>
                                            <span class="kt-nav__link-badge">
																		<span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
																	</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__separator"></li>
                                    <li class="kt-nav__foot">
                                        <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
                                        <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                                    </li>
                                </ul>

                                <!--end::Nav-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body kt-portlet__body--fit">

                    <!--begin: Datatable -->
                    <div class="kt-datatable" id="kt_datatable_latest_orders"></div>

                    <!--end: Datatable -->
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">

            <!--begin:: Widgets/Blog-->
            <div class="kt-portlet kt-portlet--height-fluid kt-widget19">
                <div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
                    <div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 300px; background-image: url(assets/media/products/product4.jpg)">
                        <h3 class="kt-widget19__title kt-font-light">
                            Introducing New Feature
                        </h3>
                        <div class="kt-widget19__shadow"></div>
                        <div class="kt-widget19__labels">
                            <a href="#" class="btn btn-label-light-o2 btn-bold ">Recent</a>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="kt-widget19__wrapper">
                        <div class="kt-widget19__content">
                            <div class="kt-widget19__userpic">
                                <img src="assets/media/users/user1.jpg" alt="">
                            </div>
                            <div class="kt-widget19__info">
                                <a href="#" class="kt-widget19__username">
                                    Anna Krox
                                </a>
                                <span class="kt-widget19__time">
															UX/UI Designer, Google
														</span>
                            </div>
                            <div class="kt-widget19__stats">
														<span class="kt-widget19__number kt-font-brand">
															18
														</span>
                                <a href="#" class="kt-widget19__comment">
                                    Comments
                                </a>
                            </div>
                        </div>
                        <div class="kt-widget19__text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting scrambled a type specimen book text of the dummy text of the printing printing and typesetting industry scrambled dummy text of the printing.
                        </div>
                    </div>
                    <div class="kt-widget19__action">
                        <a href="#" class="btn btn-sm btn-label-brand btn-bold">Read More...</a>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/Blog-->
        </div>
    </div>

    <!--End::Row-->

    <!--Begin::Row-->
    <div class="row">
        <div class="col-xl-8 col-lg-12 order-lg-3 order-xl-1">

            <!--begin:: Widgets/Best Sellers-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Best Sellers
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#kt_widget5_tab1_content" role="tab">
                                    Latest
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_widget5_tab2_content" role="tab">
                                    Month
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_widget5_tab3_content" role="tab">
                                    All time
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="kt_widget5_tab1_content" aria-expanded="true">
                            <div class="kt-widget5">
                                <div class="kt-widget5__item">
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__pic">
                                            <img class="kt-widget7__img" src="assets/media/products/product27.jpg" alt="">
                                        </div>
                                        <div class="kt-widget5__section">
                                            <a href="#" class="kt-widget5__title">
                                                Great Logo Designn
                                            </a>
                                            <p class="kt-widget5__desc">
                                                Metronic admin themes.
                                            </p>
                                            <div class="kt-widget5__info">
                                                <span>Author:</span>
                                                <span class="kt-font-info">Keenthemes</span>
                                                <span>Released:</span>
                                                <span class="kt-font-info">23.08.17</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">19,200</span>
                                            <span class="kt-widget5__sales">sales</span>
                                        </div>
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">1046</span>
                                            <span class="kt-widget5__votes">votes</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget5__item">
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__pic">
                                            <img class="kt-widget7__img" src="assets/media/products/product22.jpg" alt="">
                                        </div>
                                        <div class="kt-widget5__section">
                                            <a href="#" class="kt-widget5__title">
                                                Branding Mockup
                                            </a>
                                            <p class="kt-widget5__desc">
                                                Metronic bootstrap themes.
                                            </p>
                                            <div class="kt-widget5__info">
                                                <span>Author:</span>
                                                <span class="kt-font-info">Fly themes</span>
                                                <span>Released:</span>
                                                <span class="kt-font-info">23.08.17</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">24,583</span>
                                            <span class="kt-widget5__sales">sales</span>
                                        </div>
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">3809</span>
                                            <span class="kt-widget5__votes">votes</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget5__item">
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__pic">
                                            <img class="kt-widget7__img" src="assets/media/products/product15.jpg" alt="">
                                        </div>
                                        <div class="kt-widget5__section">
                                            <a href="#" class="kt-widget5__title">
                                                Awesome Mobile App
                                            </a>
                                            <p class="kt-widget5__desc">
                                                Metronic admin themes.Lorem Ipsum Amet
                                            </p>
                                            <div class="kt-widget5__info">
                                                <span>Author:</span>
                                                <span class="kt-font-info">Fly themes</span>
                                                <span>Released:</span>
                                                <span class="kt-font-info">23.08.17</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">210,054</span>
                                            <span class="kt-widget5__sales">sales</span>
                                        </div>
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">1103</span>
                                            <span class="kt-widget5__votes">votes</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="kt_widget5_tab2_content">
                            <div class="kt-widget5">
                                <div class="kt-widget5__item">
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__pic">
                                            <img class="kt-widget7__img" src="assets/media/products/product10.jpg" alt="">
                                        </div>
                                        <div class="kt-widget5__section">
                                            <a href="#" class="kt-widget5__title">
                                                Branding Mockup
                                            </a>
                                            <p class="kt-widget5__desc">
                                                Metronic bootstrap themes.
                                            </p>
                                            <div class="kt-widget5__info">
                                                <span>Author:</span>
                                                <span class="kt-font-info">Fly themes</span>
                                                <span>Released:</span>
                                                <span class="kt-font-info">23.08.17</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">24,583</span>
                                            <span class="kt-widget5__sales">sales</span>
                                        </div>
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">3809</span>
                                            <span class="kt-widget5__votes">votes</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget5__item">
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__pic">
                                            <img class="kt-widget7__img" src="assets/media/products/product11.jpg" alt="">
                                        </div>
                                        <div class="kt-widget5__section">
                                            <a href="#" class="kt-widget5__title">
                                                Awesome Mobile App
                                            </a>
                                            <p class="kt-widget5__desc">
                                                Metronic admin themes.Lorem Ipsum Amet
                                            </p>
                                            <div class="kt-widget5__info">
                                                <span>Author:</span>
                                                <span class="kt-font-info">Fly themes</span>
                                                <span>Released:</span>
                                                <span class="kt-font-info">23.08.17</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">210,054</span>
                                            <span class="kt-widget5__sales">sales</span>
                                        </div>
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">1103</span>
                                            <span class="kt-widget5__votes">votes</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget5__item">
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__pic">
                                            <img class="kt-widget7__img" src="assets/media/products/product6.jpg" alt="">
                                        </div>
                                        <div class="kt-widget5__section">
                                            <a href="#" class="kt-widget5__title">
                                                Great Logo Designn
                                            </a>
                                            <p class="kt-widget5__desc">
                                                Metronic admin themes.
                                            </p>
                                            <div class="kt-widget5__info">
                                                <span>Author:</span>
                                                <span class="kt-font-info">Keenthemes</span>
                                                <span>Released:</span>
                                                <span class="kt-font-info">23.08.17</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">19,200</span>
                                            <span class="kt-widget5__sales">sales</span>
                                        </div>
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">1046</span>
                                            <span class="kt-widget5__votes">votes</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="kt_widget5_tab3_content">
                            <div class="kt-widget5">
                                <div class="kt-widget5__item">
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__pic">
                                            <img class="kt-widget7__img" src="assets/media/products/product11.jpg" alt="">
                                        </div>
                                        <div class="kt-widget5__section">
                                            <a href="#" class="kt-widget5__title">
                                                Awesome Mobile App
                                            </a>
                                            <p class="kt-widget5__desc">
                                                Metronic admin themes.Lorem Ipsum Amet
                                            </p>
                                            <div class="kt-widget5__info">
                                                <span>Author:</span>
                                                <span class="kt-font-info">Fly themes</span>
                                                <span>Released:</span>
                                                <span class="kt-font-info">23.08.17</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">210,054</span>
                                            <span class="kt-widget5__sales">sales</span>
                                        </div>
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">1103</span>
                                            <span class="kt-widget5__votes">votes</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget5__item">
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__pic">
                                            <img class="kt-widget7__img" src="assets/media/products/product6.jpg" alt="">
                                        </div>
                                        <div class="kt-widget5__section">
                                            <a href="#" class="kt-widget5__title">
                                                Great Logo Designn
                                            </a>
                                            <p class="kt-widget5__desc">
                                                Metronic admin themes.
                                            </p>
                                            <div class="kt-widget5__info">
                                                <span>Author:</span>
                                                <span class="kt-font-info">Keenthemes</span>
                                                <span>Released:</span>
                                                <span class="kt-font-info">23.08.17</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">19,200</span>
                                            <span class="kt-widget5__sales">sales</span>
                                        </div>
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">1046</span>
                                            <span class="kt-widget5__votes">votes</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget5__item">
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__pic">
                                            <img class="kt-widget7__img" src="assets/media/products/product10.jpg" alt="">
                                        </div>
                                        <div class="kt-widget5__section">
                                            <a href="#" class="kt-widget5__title">
                                                Branding Mockup
                                            </a>
                                            <p class="kt-widget5__desc">
                                                Metronic bootstrap themes.
                                            </p>
                                            <div class="kt-widget5__info">
                                                <span>Author:</span>
                                                <span class="kt-font-info">Fly themes</span>
                                                <span>Released:</span>
                                                <span class="kt-font-info">23.08.17</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">24,583</span>
                                            <span class="kt-widget5__sales">sales</span>
                                        </div>
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">3809</span>
                                            <span class="kt-widget5__votes">votes</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/Best Sellers-->
        </div>
        <div class="col-xl-4 col-lg-6 order-lg-3 order-xl-1">

            <!--begin:: Widgets/New Users-->
            <div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            New Users
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#kt_widget4_tab1_content" role="tab">
                                    Today
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_widget4_tab2_content" role="tab">
                                    Month
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="kt_widget4_tab1_content">
                            <div class="kt-widget4">
                                <div class="kt-widget4__item">
                                    <div class="kt-widget4__pic kt-widget4__pic--pic">
                                        <img src="assets/media/users/100_4.jpg" alt="">
                                    </div>
                                    <div class="kt-widget4__info">
                                        <a href="#" class="kt-widget4__username">
                                            Anna Strong
                                        </a>
                                        <p class="kt-widget4__text">
                                            Visual Designer,Google Inc
                                        </p>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-label-brand btn-bold">Follow</a>
                                </div>
                                <div class="kt-widget4__item">
                                    <div class="kt-widget4__pic kt-widget4__pic--pic">
                                        <img src="assets/media/users/100_14.jpg" alt="">
                                    </div>
                                    <div class="kt-widget4__info">
                                        <a href="#" class="kt-widget4__username">
                                            Milano Esco
                                        </a>
                                        <p class="kt-widget4__text">
                                            Product Designer, Apple Inc
                                        </p>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-label-warning btn-bold">Follow</a>
                                </div>
                                <div class="kt-widget4__item">
                                    <div class="kt-widget4__pic kt-widget4__pic--pic">
                                        <img src="assets/media/users/100_11.jpg" alt="">
                                    </div>
                                    <div class="kt-widget4__info">
                                        <a href="#" class="kt-widget4__username">
                                            Nick Bold
                                        </a>
                                        <p class="kt-widget4__text">
                                            Web Developer, Facebook Inc
                                        </p>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-label-danger btn-bold">Follow</a>
                                </div>
                                <div class="kt-widget4__item">
                                    <div class="kt-widget4__pic kt-widget4__pic--pic">
                                        <img src="assets/media/users/100_1.jpg" alt="">
                                    </div>
                                    <div class="kt-widget4__info">
                                        <a href="#" class="kt-widget4__username">
                                            Wiltor Delton
                                        </a>
                                        <p class="kt-widget4__text">
                                            Project Manager, Amazon Inc
                                        </p>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-label-success btn-bold">Follow</a>
                                </div>
                                <div class="kt-widget4__item">
                                    <div class="kt-widget4__pic kt-widget4__pic--pic">
                                        <img src="assets/media/users/100_5.jpg" alt="">
                                    </div>
                                    <div class="kt-widget4__info">
                                        <a href="#" class="kt-widget4__username">
                                            Nick Stone
                                        </a>
                                        <p class="kt-widget4__text">
                                            Visual Designer, Github Inc
                                        </p>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-label-primary btn-bold">Follow</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="kt_widget4_tab2_content">
                            <div class="kt-widget4">
                                <div class="kt-widget4__item">
                                    <div class="kt-widget4__pic kt-widget4__pic--pic">
                                        <img src="assets/media/users/100_2.jpg" alt="">
                                    </div>
                                    <div class="kt-widget4__info">
                                        <a href="#" class="kt-widget4__username">
                                            Kristika Bold
                                        </a>
                                        <p class="kt-widget4__text">
                                            Product Designer,Apple Inc
                                        </p>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-label-success">Follow</a>
                                </div>
                                <div class="kt-widget4__item">
                                    <div class="kt-widget4__pic kt-widget4__pic--pic">
                                        <img src="assets/media/users/100_13.jpg" alt="">
                                    </div>
                                    <div class="kt-widget4__info">
                                        <a href="#" class="kt-widget4__username">
                                            Ron Silk
                                        </a>
                                        <p class="kt-widget4__text">
                                            Release Manager, Loop Inc
                                        </p>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-label-brand">Follow</a>
                                </div>
                                <div class="kt-widget4__item">
                                    <div class="kt-widget4__pic kt-widget4__pic--pic">
                                        <img src="assets/media/users/100_9.jpg" alt="">
                                    </div>
                                    <div class="kt-widget4__info">
                                        <a href="#" class="kt-widget4__username">
                                            Nick Bold
                                        </a>
                                        <p class="kt-widget4__text">
                                            Web Developer, Facebook Inc
                                        </p>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-label-danger">Follow</a>
                                </div>
                                <div class="kt-widget4__item">
                                    <div class="kt-widget4__pic kt-widget4__pic--pic">
                                        <img src="assets/media/users/100_2.jpg" alt="">
                                    </div>
                                    <div class="kt-widget4__info">
                                        <a href="#" class="kt-widget4__username">
                                            Wiltor Delton
                                        </a>
                                        <p class="kt-widget4__text">
                                            Project Manager, Amazon Inc
                                        </p>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-label-success">Follow</a>
                                </div>
                                <div class="kt-widget4__item">
                                    <div class="kt-widget4__pic kt-widget4__pic--pic">
                                        <img src="assets/media/users/100_8.jpg" alt="">
                                    </div>
                                    <div class="kt-widget4__info">
                                        <a href="#" class="kt-widget4__username">
                                            Nick Bold
                                        </a>
                                        <p class="kt-widget4__text">
                                            Web Developer, Facebook Inc
                                        </p>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-label-info">Follow</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/New Users-->
        </div>
        <div class="col-xl-4 col-lg-4 order-lg-2 order-xl-1">

            <!--begin:: Widgets/Daily Sales-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-widget14">
                    <div class="kt-widget14__header kt-margin-b-30">
                        <h3 class="kt-widget14__title">
                            Daily Sales
                        </h3>
                        <span class="kt-widget14__desc">
													Check out each collumn for more details
												</span>
                    </div>
                    <div class="kt-widget14__chart" style="height:120px;">
                        <canvas id="kt_chart_daily_sales"></canvas>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/Daily Sales-->
        </div>
        <div class="col-xl-4 col-lg-4 order-lg-2 order-xl-1">

            <!--begin:: Widgets/Profit Share-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-widget14">
                    <div class="kt-widget14__header">
                        <h3 class="kt-widget14__title">
                            Profit Share
                        </h3>
                        <span class="kt-widget14__desc">
													Profit Share between customers
												</span>
                    </div>
                    <div class="kt-widget14__content">
                        <div class="kt-widget14__chart">
                            <div class="kt-widget14__stat">45</div>
                            <canvas id="kt_chart_profit_share" style="height: 140px; width: 140px;"></canvas>
                        </div>
                        <div class="kt-widget14__legends">
                            <div class="kt-widget14__legend">
                                <span class="kt-widget14__bullet kt-bg-success"></span>
                                <span class="kt-widget14__stats">37% Sport Tickets</span>
                            </div>
                            <div class="kt-widget14__legend">
                                <span class="kt-widget14__bullet kt-bg-warning"></span>
                                <span class="kt-widget14__stats">47% Business Events</span>
                            </div>
                            <div class="kt-widget14__legend">
                                <span class="kt-widget14__bullet kt-bg-brand"></span>
                                <span class="kt-widget14__stats">19% Others</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/Profit Share-->
        </div>
        <div class="col-xl-4 col-lg-4 order-lg-2 order-xl-1">

            <!--begin:: Widgets/Revenue Change-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-widget14">
                    <div class="kt-widget14__header">
                        <h3 class="kt-widget14__title">
                            Revenue Change
                        </h3>
                        <span class="kt-widget14__desc">
													Revenue change breakdown by cities
												</span>
                    </div>
                    <div class="kt-widget14__content">
                        <div class="kt-widget14__chart">
                            <div id="kt_chart_revenue_change" style="height: 150px; width: 150px;"></div>
                        </div>
                        <div class="kt-widget14__legends">
                            <div class="kt-widget14__legend">
                                <span class="kt-widget14__bullet kt-bg-success"></span>
                                <span class="kt-widget14__stats">+10% New York</span>
                            </div>
                            <div class="kt-widget14__legend">
                                <span class="kt-widget14__bullet kt-bg-warning"></span>
                                <span class="kt-widget14__stats">-7% London</span>
                            </div>
                            <div class="kt-widget14__legend">
                                <span class="kt-widget14__bullet kt-bg-brand"></span>
                                <span class="kt-widget14__stats">+20% California</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/Revenue Change-->
        </div>
        <div class="col-xl-4 col-lg-6 order-lg-3 order-xl-1">

            <!--begin:: Widgets/Tasks -->
            <div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Tasks
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#kt_widget2_tab1_content" role="tab">
                                    Today
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_widget2_tab2_content" role="tab">
                                    Week
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_widget2_tab3_content" role="tab">
                                    Month
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="kt_widget2_tab1_content">
                            <div class="kt-widget2">
                                <div class="kt-widget2__item kt-widget2__item--primary">
                                    <div class="kt-widget2__checkbox">
                                        <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                            <input type="checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="kt-widget2__info">
                                        <a href="#" class="kt-widget2__title">
                                            Make Metronic Great Again.Lorem Ipsum Amet
                                        </a>
                                        <a href="#" class="kt-widget2__username">
                                            By Bob
                                        </a>
                                    </div>
                                    <div class="kt-widget2__actions">
                                        <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                            <i class="flaticon-more-1"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                            <ul class="kt-nav">
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                        <span class="kt-nav__link-text">Reports</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-send"></i>
                                                        <span class="kt-nav__link-text">Messages</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                        <span class="kt-nav__link-text">Charts</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                        <span class="kt-nav__link-text">Members</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                        <span class="kt-nav__link-text">Settings</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget2__item kt-widget2__item--warning">
                                    <div class="kt-widget2__checkbox">
                                        <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                            <input type="checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="kt-widget2__info">
                                        <a href="#" class="kt-widget2__title">
                                            Prepare Docs For Metting On Monday
                                        </a>
                                        <a href="#" class="kt-widget2__username">
                                            By Sean
                                        </a>
                                    </div>
                                    <div class="kt-widget2__actions">
                                        <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                            <i class="flaticon-more-1"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                            <ul class="kt-nav">
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                        <span class="kt-nav__link-text">Reports</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-send"></i>
                                                        <span class="kt-nav__link-text">Messages</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                        <span class="kt-nav__link-text">Charts</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                        <span class="kt-nav__link-text">Members</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                        <span class="kt-nav__link-text">Settings</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget2__item kt-widget2__item--brand">
                                    <div class="kt-widget2__checkbox">
                                        <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                            <input type="checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="kt-widget2__info">
                                        <a href="#" class="kt-widget2__title">
                                            Make Widgets Development. Estudiat Communy Elit
                                        </a>
                                        <a href="#" class="kt-widget2__username">
                                            By Aziko
                                        </a>
                                    </div>
                                    <div class="kt-widget2__actions">
                                        <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                            <i class="flaticon-more-1"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                            <ul class="kt-nav">
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                        <span class="kt-nav__link-text">Reports</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-send"></i>
                                                        <span class="kt-nav__link-text">Messages</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                        <span class="kt-nav__link-text">Charts</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                        <span class="kt-nav__link-text">Members</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                        <span class="kt-nav__link-text">Settings</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget2__item kt-widget2__item--success">
                                    <div class="kt-widget2__checkbox">
                                        <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                            <input type="checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="kt-widget2__info">
                                        <a href="#" class="kt-widget2__title">
                                            Make Metronic Development. Lorem Ipsum
                                        </a>
                                        <a class="kt-widget2__username">
                                            By James
                                        </a>
                                    </div>
                                    <div class="kt-widget2__actions">
                                        <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                            <i class="flaticon-more-1"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                            <ul class="kt-nav">
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                        <span class="kt-nav__link-text">Reports</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-send"></i>
                                                        <span class="kt-nav__link-text">Messages</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                        <span class="kt-nav__link-text">Charts</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                        <span class="kt-nav__link-text">Members</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                        <span class="kt-nav__link-text">Settings</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget2__item kt-widget2__item--danger">
                                    <div class="kt-widget2__checkbox">
                                        <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                            <input type="checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="kt-widget2__info">
                                        <a href="#" class="kt-widget2__title">
                                            Completa Financial Report For Emirates Airlines
                                        </a>
                                        <a href="#" class="kt-widget2__username">
                                            By Bob
                                        </a>
                                    </div>
                                    <div class="kt-widget2__actions">
                                        <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                            <i class="flaticon-more-1"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                            <ul class="kt-nav">
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                        <span class="kt-nav__link-text">Reports</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-send"></i>
                                                        <span class="kt-nav__link-text">Messages</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                        <span class="kt-nav__link-text">Charts</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                        <span class="kt-nav__link-text">Members</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                        <span class="kt-nav__link-text">Settings</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget2__item kt-widget2__item--info">
                                    <div class="kt-widget2__checkbox">
                                        <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                            <input type="checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="kt-widget2__info">
                                        <a href="#" class="kt-widget2__title">
                                            Completa Financial Report For Emirates Airlines
                                        </a>
                                        <a href="#" class="kt-widget2__username">
                                            By Sean
                                        </a>
                                    </div>
                                    <div class="kt-widget2__actions">
                                        <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                            <i class="flaticon-more-1"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                            <ul class="kt-nav">
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                        <span class="kt-nav__link-text">Reports</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-send"></i>
                                                        <span class="kt-nav__link-text">Messages</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                        <span class="kt-nav__link-text">Charts</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                        <span class="kt-nav__link-text">Members</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                        <span class="kt-nav__link-text">Settings</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="kt_widget2_tab2_content">
                            <div class="kt-widget2">
                                <div class="kt-widget2__item kt-widget2__item--success">
                                    <div class="kt-widget2__checkbox">
                                        <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                            <input type="checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="kt-widget2__info">
                                        <a href="#" class="kt-widget2__title">
                                            Make Metronic Development.Lorem Ipsum
                                        </a>
                                        <a class="kt-widget2__username">
                                            By James
                                        </a>
                                    </div>
                                    <div class="kt-widget2__actions">
                                        <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                            <i class="flaticon-more-1"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                            <ul class="kt-nav">
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                        <span class="kt-nav__link-text">Reports</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-send"></i>
                                                        <span class="kt-nav__link-text">Messages</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                        <span class="kt-nav__link-text">Charts</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                        <span class="kt-nav__link-text">Members</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                        <span class="kt-nav__link-text">Settings</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget2__item kt-widget2__item--warning">
                                    <div class="kt-widget2__checkbox">
                                        <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                            <input type="checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="kt-widget2__info">
                                        <a href="#" class="kt-widget2__title">
                                            Prepare Docs For Metting On Monday
                                        </a>
                                        <a href="#" class="kt-widget2__username">
                                            By Sean
                                        </a>
                                    </div>
                                    <div class="kt-widget2__actions">
                                        <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                            <i class="flaticon-more-1"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                            <ul class="kt-nav">
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                        <span class="kt-nav__link-text">Reports</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-send"></i>
                                                        <span class="kt-nav__link-text">Messages</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                        <span class="kt-nav__link-text">Charts</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                        <span class="kt-nav__link-text">Members</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                        <span class="kt-nav__link-text">Settings</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget2__item kt-widget2__item--danger">
                                    <div class="kt-widget2__checkbox">
                                        <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                            <input type="checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="kt-widget2__info">
                                        <a href="#" class="kt-widget2__title">
                                            Completa Financial Report For Emirates Airlines
                                        </a>
                                        <a href="#" class="kt-widget2__username">
                                            By Bob
                                        </a>
                                    </div>
                                    <div class="kt-widget2__actions">
                                        <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                            <i class="flaticon-more-1"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                            <ul class="kt-nav">
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                        <span class="kt-nav__link-text">Reports</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-send"></i>
                                                        <span class="kt-nav__link-text">Messages</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                        <span class="kt-nav__link-text">Charts</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                        <span class="kt-nav__link-text">Members</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                        <span class="kt-nav__link-text">Settings</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget2__item kt-widget2__item--primary">
                                    <div class="kt-widget2__checkbox">
                                        <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                            <input type="checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="kt-widget2__info">
                                        <a href="#" class="kt-widget2__title">
                                            Make Metronic Great Again.Lorem Ipsum Amet
                                        </a>
                                        <a href="#" class="kt-widget2__username">
                                            By Bob
                                        </a>
                                    </div>
                                    <div class="kt-widget2__actions">
                                        <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                            <i class="flaticon-more-1"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                            <ul class="kt-nav">
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                        <span class="kt-nav__link-text">Reports</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-send"></i>
                                                        <span class="kt-nav__link-text">Messages</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                        <span class="kt-nav__link-text">Charts</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                        <span class="kt-nav__link-text">Members</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                        <span class="kt-nav__link-text">Settings</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget2__item kt-widget2__item--info">
                                    <div class="kt-widget2__checkbox">
                                        <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                            <input type="checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="kt-widget2__info">
                                        <a href="#" class="kt-widget2__title">
                                            Completa Financial Report For Emirates Airlines
                                        </a>
                                        <a href="#" class="kt-widget2__username">
                                            By Sean
                                        </a>
                                    </div>
                                    <div class="kt-widget2__actions">
                                        <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                            <i class="flaticon-more-1"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                            <ul class="kt-nav">
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                        <span class="kt-nav__link-text">Reports</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-send"></i>
                                                        <span class="kt-nav__link-text">Messages</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                        <span class="kt-nav__link-text">Charts</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                        <span class="kt-nav__link-text">Members</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                        <span class="kt-nav__link-text">Settings</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget2__item kt-widget2__item--brand">
                                    <div class="kt-widget2__checkbox">
                                        <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                            <input type="checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="kt-widget2__info">
                                        <a href="#" class="kt-widget2__title">
                                            Make Widgets Development.Estudiat Communy Elit
                                        </a>
                                        <a href="#" class="kt-widget2__username">
                                            By Aziko
                                        </a>
                                    </div>
                                    <div class="kt-widget2__actions">
                                        <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                            <i class="flaticon-more-1"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                            <ul class="kt-nav">
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                        <span class="kt-nav__link-text">Reports</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-send"></i>
                                                        <span class="kt-nav__link-text">Messages</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                        <span class="kt-nav__link-text">Charts</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                        <span class="kt-nav__link-text">Members</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                        <span class="kt-nav__link-text">Settings</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="kt_widget2_tab3_content">
                            <div class="kt-widget2">
                                <div class="kt-widget2__item kt-widget2__item--warning">
                                    <div class="kt-widget2__checkbox">
                                        <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                            <input type="checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="kt-widget2__info">
                                        <a href="#" class="kt-widget2__title">
                                            Make Metronic Development. Lorem Ipsum
                                        </a>
                                        <a class="kt-widget2__username">
                                            By James
                                        </a>
                                    </div>
                                    <div class="kt-widget2__actions">
                                        <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                            <i class="flaticon-more-1"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                            <ul class="kt-nav">
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                        <span class="kt-nav__link-text">Reports</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-send"></i>
                                                        <span class="kt-nav__link-text">Messages</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                        <span class="kt-nav__link-text">Charts</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                        <span class="kt-nav__link-text">Members</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                        <span class="kt-nav__link-text">Settings</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget2__item kt-widget2__item--danger">
                                    <div class="kt-widget2__checkbox">
                                        <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                            <input type="checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="kt-widget2__info">
                                        <a href="#" class="kt-widget2__title">
                                            Completa Financial Report For Emirates Airlines
                                        </a>
                                        <a href="#" class="kt-widget2__username">
                                            By Bob
                                        </a>
                                    </div>
                                    <div class="kt-widget2__actions">
                                        <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                            <i class="flaticon-more-1"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                            <ul class="kt-nav">
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                        <span class="kt-nav__link-text">Reports</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-send"></i>
                                                        <span class="kt-nav__link-text">Messages</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                        <span class="kt-nav__link-text">Charts</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                        <span class="kt-nav__link-text">Members</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                        <span class="kt-nav__link-text">Settings</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget2__item kt-widget2__item--brand">
                                    <div class="kt-widget2__checkbox">
                                        <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                            <input type="checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="kt-widget2__info">
                                        <a href="#" class="kt-widget2__title">
                                            Make Widgets Development.Estudiat Communy Elit
                                        </a>
                                        <a href="#" class="kt-widget2__username">
                                            By Aziko
                                        </a>
                                    </div>
                                    <div class="kt-widget2__actions">
                                        <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                            <i class="flaticon-more-1"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                            <ul class="kt-nav">
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                        <span class="kt-nav__link-text">Reports</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-send"></i>
                                                        <span class="kt-nav__link-text">Messages</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                        <span class="kt-nav__link-text">Charts</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                        <span class="kt-nav__link-text">Members</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                        <span class="kt-nav__link-text">Settings</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget2__item kt-widget2__item--info">
                                    <div class="kt-widget2__checkbox">
                                        <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                            <input type="checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="kt-widget2__info">
                                        <a href="#" class="kt-widget2__title">
                                            Completa Financial Report For Emirates Airlines
                                        </a>
                                        <a href="#" class="kt-widget2__username">
                                            By Sean
                                        </a>
                                    </div>
                                    <div class="kt-widget2__actions">
                                        <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                            <i class="flaticon-more-1"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                            <ul class="kt-nav">
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                        <span class="kt-nav__link-text">Reports</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-send"></i>
                                                        <span class="kt-nav__link-text">Messages</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                        <span class="kt-nav__link-text">Charts</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                        <span class="kt-nav__link-text">Members</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                        <span class="kt-nav__link-text">Settings</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget2__item kt-widget2__item--success">
                                    <div class="kt-widget2__checkbox">
                                        <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                            <input type="checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="kt-widget2__info">
                                        <a href="#" class="kt-widget2__title">
                                            Completa Financial Report For Emirates Airlines
                                        </a>
                                        <a href="#" class="kt-widget2__username">
                                            By Bob
                                        </a>
                                    </div>
                                    <div class="kt-widget2__actions">
                                        <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                            <i class="flaticon-more-1"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                            <ul class="kt-nav">
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                        <span class="kt-nav__link-text">Reports</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-send"></i>
                                                        <span class="kt-nav__link-text">Messages</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                        <span class="kt-nav__link-text">Charts</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                        <span class="kt-nav__link-text">Members</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                        <span class="kt-nav__link-text">Settings</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget2__item kt-widget2__item--primary">
                                    <div class="kt-widget2__checkbox">
                                        <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                            <input type="checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="kt-widget2__info">
                                        <a href="#" class="kt-widget2__title">
                                            Make Metronic Great Again.Lorem Ipsum Amet
                                        </a>
                                        <a href="#" class="kt-widget2__username">
                                            By Bob
                                        </a>
                                    </div>
                                    <div class="kt-widget2__actions">
                                        <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                            <i class="flaticon-more-1"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                                            <ul class="kt-nav">
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                        <span class="kt-nav__link-text">Reports</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-send"></i>
                                                        <span class="kt-nav__link-text">Messages</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                        <span class="kt-nav__link-text">Charts</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                        <span class="kt-nav__link-text">Members</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                        <span class="kt-nav__link-text">Settings</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/Tasks -->
        </div>
        <div class="col-xl-4 col-lg-6 order-lg-3 order-xl-1">

            <!--begin:: Widgets/Notifications-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Notifications
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#kt_widget6_tab1_content" role="tab">
                                    Latest
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_widget6_tab2_content" role="tab">
                                    Week
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_widget6_tab3_content" role="tab">
                                    Month
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="kt_widget6_tab1_content" aria-expanded="true">
                            <div class="kt-notification">
                                <a href="#" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
                                                <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                                            </g>
                                        </svg> </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title">
                                            New order has been received.
                                        </div>
                                        <div class="kt-notification__item-time">
                                            2 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.98630124,11 4.48466491,11.0516454 4,11.1500272 L4,7 C4,5.8954305 4.8954305,5 6,5 L20,5 C21.1045695,5 22,5.8954305 22,7 L22,16 C22,17.1045695 21.1045695,18 20,18 L12.9835977,18 Z M19.1444251,6.83964668 L13,10.1481833 L6.85557487,6.83964668 C6.4908718,6.6432681 6.03602525,6.77972206 5.83964668,7.14442513 C5.6432681,7.5091282 5.77972206,7.96397475 6.14442513,8.16035332 L12.6444251,11.6603533 C12.8664074,11.7798822 13.1335926,11.7798822 13.3555749,11.6603533 L19.8555749,8.16035332 C20.2202779,7.96397475 20.3567319,7.5091282 20.1603533,7.14442513 C19.9639747,6.77972206 19.5091282,6.6432681 19.1444251,6.83964668 Z" fill="#000000" />
                                                <path d="M8.4472136,18.1055728 C8.94119209,18.3525621 9.14141644,18.9532351 8.89442719,19.4472136 C8.64743794,19.9411921 8.0467649,20.1414164 7.5527864,19.8944272 L5,18.618034 L5,14.5 C5,13.9477153 5.44771525,13.5 6,13.5 C6.55228475,13.5 7,13.9477153 7,14.5 L7,17.381966 L8.4472136,18.1055728 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            </g>
                                        </svg> </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title">
                                            New member is registered and pending for approval.
                                        </div>
                                        <div class="kt-notification__item-time">
                                            3 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M12,10.9996338 C12.8356605,10.3719448 13.8743941,10 15,10 C17.7614237,10 20,12.2385763 20,15 C20,17.7614237 17.7614237,20 15,20 C13.8743941,20 12.8356605,19.6280552 12,19.0003662 C11.1643395,19.6280552 10.1256059,20 9,20 C6.23857625,20 4,17.7614237 4,15 C4,12.2385763 6.23857625,10 9,10 C10.1256059,10 11.1643395,10.3719448 12,10.9996338 Z M13.3336047,12.504354 C13.757474,13.2388026 14,14.0910788 14,15 C14,15.9088933 13.7574889,16.761145 13.3336438,17.4955783 C13.8188886,17.8206693 14.3938466,18 15,18 C16.6568542,18 18,16.6568542 18,15 C18,13.3431458 16.6568542,12 15,12 C14.3930587,12 13.8175971,12.18044 13.3336047,12.504354 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <circle fill="#000000" cx="12" cy="9" r="5" />
                                            </g>
                                        </svg> </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title">
                                            Membership application has been added.
                                        </div>
                                        <div class="kt-notification__item-time">
                                            3 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <path d="M18.5,8 C17.1192881,8 16,6.88071187 16,5.5 C16,4.11928813 17.1192881,3 18.5,3 C19.8807119,3 21,4.11928813 21,5.5 C21,6.88071187 19.8807119,8 18.5,8 Z M18.5,21 C17.1192881,21 16,19.8807119 16,18.5 C16,17.1192881 17.1192881,16 18.5,16 C19.8807119,16 21,17.1192881 21,18.5 C21,19.8807119 19.8807119,21 18.5,21 Z M5.5,21 C4.11928813,21 3,19.8807119 3,18.5 C3,17.1192881 4.11928813,16 5.5,16 C6.88071187,16 8,17.1192881 8,18.5 C8,19.8807119 6.88071187,21 5.5,21 Z" fill="#000000" opacity="0.3" />
                                                <path d="M5.5,8 C4.11928813,8 3,6.88071187 3,5.5 C3,4.11928813 4.11928813,3 5.5,3 C6.88071187,3 8,4.11928813 8,5.5 C8,6.88071187 6.88071187,8 5.5,8 Z M11,4 L13,4 C13.5522847,4 14,4.44771525 14,5 C14,5.55228475 13.5522847,6 13,6 L11,6 C10.4477153,6 10,5.55228475 10,5 C10,4.44771525 10.4477153,4 11,4 Z M11,18 L13,18 C13.5522847,18 14,18.4477153 14,19 C14,19.5522847 13.5522847,20 13,20 L11,20 C10.4477153,20 10,19.5522847 10,19 C10,18.4477153 10.4477153,18 11,18 Z M5,10 C5.55228475,10 6,10.4477153 6,11 L6,13 C6,13.5522847 5.55228475,14 5,14 C4.44771525,14 4,13.5522847 4,13 L4,11 C4,10.4477153 4.44771525,10 5,10 Z M19,10 C19.5522847,10 20,10.4477153 20,11 L20,13 C20,13.5522847 19.5522847,14 19,14 C18.4477153,14 18,13.5522847 18,13 L18,11 C18,10.4477153 18.4477153,10 19,10 Z" fill="#000000" />
                                            </g>
                                        </svg> </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title">
                                            New report file has been uploaded.
                                        </div>
                                        <div class="kt-notification__item-time">
                                            5 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z" fill="#000000" />
                                                <path d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z" fill="#000000" opacity="0.3" />
                                            </g>
                                        </svg> </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title">
                                            New user feedback received and pending for review.
                                        </div>
                                        <div class="kt-notification__item-time">
                                            8 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="#000000" />
                                                <circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
                                            </g>
                                        </svg> </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title">
                                            Database sever #2 has been fully restarted.
                                        </div>
                                        <div class="kt-notification__item-time">
                                            23 hrs ago
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane" id="kt_widget6_tab2_content" aria-expanded="false">
                            <div class="kt-notification">
                                <a href="#" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M9.35321926,16.3736278 L16.3544311,10.3706602 C16.5640654,10.1909158 16.5882961,9.87526197 16.4085517,9.66562759 C16.3922584,9.64662485 16.3745611,9.62887247 16.3556091,9.6125202 L9.35439731,3.57169798 C9.14532254,3.39130299 8.82959492,3.41455255 8.64919993,3.62362732 C8.5708616,3.71442013 8.52776329,3.83034375 8.52776329,3.95026134 L8.52776329,15.9940512 C8.52776329,16.2701936 8.75162092,16.4940512 9.02776329,16.4940512 C9.14714624,16.4940512 9.2625893,16.4513356 9.35321926,16.3736278 Z" fill="#000000" transform="translate(12.398118, 9.870355) rotate(-450.000000) translate(-12.398118, -9.870355) " />
                                                <rect fill="#000000" opacity="0.3" transform="translate(12.500000, 17.500000) scale(-1, 1) rotate(-270.000000) translate(-12.500000, -17.500000) " x="11" y="11" width="3" height="13" rx="0.5" />
                                            </g>
                                        </svg> </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title">
                                            New company application has been approved.
                                        </div>
                                        <div class="kt-notification__item-time">
                                            3 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="13" rx="1.5" />
                                                <rect fill="#000000" opacity="0.3" x="7" y="9" width="3" height="8" rx="1.5" />
                                                <path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" fill="#000000" fill-rule="nonzero" />
                                                <rect fill="#000000" opacity="0.3" x="17" y="11" width="3" height="6" rx="1.5" />
                                            </g>
                                        </svg> </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title">
                                            New report has been received.
                                        </div>
                                        <div class="kt-notification__item-time">
                                            23 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--danger">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
                                                <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                                            </g>
                                        </svg> </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title">
                                            New file has been uploaded and pending for review.
                                        </div>
                                        <div class="kt-notification__item-time">
                                            5 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M12,10.9996338 C12.8356605,10.3719448 13.8743941,10 15,10 C17.7614237,10 20,12.2385763 20,15 C20,17.7614237 17.7614237,20 15,20 C13.8743941,20 12.8356605,19.6280552 12,19.0003662 C11.1643395,19.6280552 10.1256059,20 9,20 C6.23857625,20 4,17.7614237 4,15 C4,12.2385763 6.23857625,10 9,10 C10.1256059,10 11.1643395,10.3719448 12,10.9996338 Z M13.3336047,12.504354 C13.757474,13.2388026 14,14.0910788 14,15 C14,15.9088933 13.7574889,16.761145 13.3336438,17.4955783 C13.8188886,17.8206693 14.3938466,18 15,18 C16.6568542,18 18,16.6568542 18,15 C18,13.3431458 16.6568542,12 15,12 C14.3930587,12 13.8175971,12.18044 13.3336047,12.504354 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <circle fill="#000000" cx="12" cy="9" r="5" />
                                            </g>
                                        </svg> </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title">
                                            Membership application has been added.
                                        </div>
                                        <div class="kt-notification__item-time">
                                            3 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--info">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <path d="M12,4.25932872 C12.1488635,4.25921584 12.3000368,4.29247316 12.4425657,4.36281539 C12.6397783,4.46014562 12.7994058,4.61977315 12.8967361,4.81698575 L14.9389263,8.95491503 L19.5054023,9.61846284 C20.0519472,9.69788046 20.4306287,10.2053233 20.351211,10.7518682 C20.3195865,10.9695052 20.2170993,11.1706476 20.0596157,11.3241562 L16.7552826,14.545085 L17.5353298,19.0931094 C17.6286908,19.6374458 17.263103,20.1544017 16.7187666,20.2477627 C16.5020089,20.2849396 16.2790408,20.2496249 16.0843804,20.1472858 L12,18 L12,4.25932872 Z" fill="#000000" opacity="0.3" />
                                                <path d="M12,4.25932872 L12,18 L7.91561963,20.1472858 C7.42677504,20.4042866 6.82214789,20.2163401 6.56514708,19.7274955 C6.46280801,19.5328351 6.42749334,19.309867 6.46467018,19.0931094 L7.24471742,14.545085 L3.94038429,11.3241562 C3.54490071,10.938655 3.5368084,10.3055417 3.92230962,9.91005817 C4.07581822,9.75257453 4.27696063,9.65008735 4.49459766,9.61846284 L9.06107374,8.95491503 L11.1032639,4.81698575 C11.277344,4.464261 11.6315987,4.25960807 12,4.25932872 Z" fill="#000000" />
                                            </g>
                                        </svg> </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title">
                                            New customer is registered.
                                        </div>
                                        <div class="kt-notification__item-time">
                                            3 days ago
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane" id="kt_widget6_tab3_content" aria-expanded="false">
                            <div class="kt-notification">
                                <a href="#" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--warning">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3" />
                                                <path d="M14.5,11 C15.0522847,11 15.5,11.4477153 15.5,12 L15.5,15 C15.5,15.5522847 15.0522847,16 14.5,16 L9.5,16 C8.94771525,16 8.5,15.5522847 8.5,15 L8.5,12 C8.5,11.4477153 8.94771525,11 9.5,11 L9.5,10.5 C9.5,9.11928813 10.6192881,8 12,8 C13.3807119,8 14.5,9.11928813 14.5,10.5 L14.5,11 Z M12,9 C11.1715729,9 10.5,9.67157288 10.5,10.5 L10.5,11 L13.5,11 L13.5,10.5 C13.5,9.67157288 12.8284271,9 12,9 Z" fill="#000000" />
                                            </g>
                                        </svg> </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title">
                                            New order has been received.
                                        </div>
                                        <div class="kt-notification__item-time">
                                            2 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M12,21 C7.581722,21 4,17.418278 4,13 C4,8.581722 7.581722,5 12,5 C16.418278,5 20,8.581722 20,13 C20,17.418278 16.418278,21 12,21 Z" fill="#000000" opacity="0.3" />
                                                <path d="M13,5.06189375 C12.6724058,5.02104333 12.3386603,5 12,5 C11.6613397,5 11.3275942,5.02104333 11,5.06189375 L11,4 L10,4 C9.44771525,4 9,3.55228475 9,3 C9,2.44771525 9.44771525,2 10,2 L14,2 C14.5522847,2 15,2.44771525 15,3 C15,3.55228475 14.5522847,4 14,4 L13,4 L13,5.06189375 Z" fill="#000000" />
                                                <path d="M16.7099142,6.53272645 L17.5355339,5.70710678 C17.9260582,5.31658249 18.5592232,5.31658249 18.9497475,5.70710678 C19.3402718,6.09763107 19.3402718,6.73079605 18.9497475,7.12132034 L18.1671361,7.90393167 C17.7407802,7.38854954 17.251061,6.92750259 16.7099142,6.53272645 Z" fill="#000000" />
                                                <path d="M11.9630156,7.5 L12.0369844,7.5 C12.2982526,7.5 12.5154733,7.70115317 12.5355117,7.96165175 L12.9585886,13.4616518 C12.9797677,13.7369807 12.7737386,13.9773481 12.4984096,13.9985272 C12.4856504,13.9995087 12.4728582,14 12.4600614,14 L11.5399386,14 C11.2637963,14 11.0399386,13.7761424 11.0399386,13.5 C11.0399386,13.4872031 11.0404299,13.4744109 11.0414114,13.4616518 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z" fill="#000000" />
                                            </g>
                                        </svg> </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title">
                                            New customer is registered
                                        </div>
                                        <div class="kt-notification__item-time">
                                            3 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <rect fill="#000000" opacity="0.3" x="2" y="9" width="20" height="13" rx="2" />
                                                <rect fill="#000000" opacity="0.3" x="5" y="5" width="14" height="2" rx="0.5" />
                                                <rect fill="#000000" opacity="0.3" x="7" y="1" width="10" height="2" rx="0.5" />
                                                <path d="M10.8333333,20 C9.82081129,20 9,19.3159906 9,18.4722222 C9,17.6284539 9.82081129,16.9444444 10.8333333,16.9444444 C11.0476105,16.9444444 11.2533018,16.9750785 11.4444444,17.0313779 L11.4444444,12.7916011 C11.4444444,12.4782408 11.6398662,12.2012404 11.9268804,12.1077729 L15.4407693,11.0331119 C15.8834716,10.8889438 16.3333333,11.2336005 16.3333333,11.7169402 L16.3333333,12.7916011 C16.3333333,13.1498215 15.9979332,13.3786009 15.7222222,13.4444444 C15.3255297,13.53918 14.3070112,13.7428837 12.6666667,14.0555556 L12.6666667,18.5035214 C12.6666667,18.5583862 12.6622174,18.6091837 12.6535404,18.6559869 C12.5446237,19.4131089 11.771224,20 10.8333333,20 Z" fill="#000000" />
                                            </g>
                                        </svg> </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title">
                                            Application has been approved
                                        </div>
                                        <div class="kt-notification__item-time">
                                            3 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--warning">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect opacity="0.200000003" x="0" y="0" width="24" height="24" />
                                                <path d="M4.5,7 L9.5,7 C10.3284271,7 11,7.67157288 11,8.5 C11,9.32842712 10.3284271,10 9.5,10 L4.5,10 C3.67157288,10 3,9.32842712 3,8.5 C3,7.67157288 3.67157288,7 4.5,7 Z M13.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L13.5,18 C12.6715729,18 12,17.3284271 12,16.5 C12,15.6715729 12.6715729,15 13.5,15 Z" fill="#000000" opacity="0.3" />
                                                <path d="M17,11 C15.3431458,11 14,9.65685425 14,8 C14,6.34314575 15.3431458,5 17,5 C18.6568542,5 20,6.34314575 20,8 C20,9.65685425 18.6568542,11 17,11 Z M6,19 C4.34314575,19 3,17.6568542 3,16 C3,14.3431458 4.34314575,13 6,13 C7.65685425,13 9,14.3431458 9,16 C9,17.6568542 7.65685425,19 6,19 Z" fill="#000000" />
                                            </g>
                                        </svg> </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title">
                                            New customer comment recieved
                                        </div>
                                        <div class="kt-notification__item-time">
                                            2 days ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--danger">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
                                                <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                                            </g>
                                        </svg> </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title">
                                            New customer is registered
                                        </div>
                                        <div class="kt-notification__item-time">
                                            3 days ago
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/Notifications-->
        </div>
        <div class="col-xl-4 col-lg-6 order-lg-3 order-xl-1">

            <!--begin:: Widgets/Support Tickets -->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Support Tickets
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="dropdown dropdown-inline">
                            <button type="button" class="btn btn-clean btn-sm btn-icon-md btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flaticon-more-1"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">

                                <!--begin::Nav-->
                                <ul class="kt-nav">
                                    <li class="kt-nav__head">
                                        Export Options
                                        <span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
																			<rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
																			<rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
																		</g>
																	</svg> </span>
                                    </li>
                                    <li class="kt-nav__separator"></li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-drop"></i>
                                            <span class="kt-nav__link-text">Activity</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                            <span class="kt-nav__link-text">FAQ</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
                                            <span class="kt-nav__link-text">Settings</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                            <span class="kt-nav__link-text">Support</span>
                                            <span class="kt-nav__link-badge">
																		<span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
																	</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__separator"></li>
                                    <li class="kt-nav__foot">
                                        <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
                                        <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                                    </li>
                                </ul>

                                <!--end::Nav-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="kt-widget3">
                        <div class="kt-widget3__item">
                            <div class="kt-widget3__header">
                                <div class="kt-widget3__user-img">
                                    <img class="kt-widget3__img" src="assets/media/users/user1.jpg" alt="">
                                </div>
                                <div class="kt-widget3__info">
                                    <a href="#" class="kt-widget3__username">
                                        Melania Trump
                                    </a><br>
                                    <span class="kt-widget3__time">
																2 day ago
															</span>
                                </div>
                                <span class="kt-widget3__status kt-font-info">
															Pending
														</span>
                            </div>
                            <div class="kt-widget3__body">
                                <p class="kt-widget3__text">
                                    Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.
                                </p>
                            </div>
                        </div>
                        <div class="kt-widget3__item">
                            <div class="kt-widget3__header">
                                <div class="kt-widget3__user-img">
                                    <img class="kt-widget3__img" src="assets/media/users/user4.jpg" alt="">
                                </div>
                                <div class="kt-widget3__info">
                                    <a href="#" class="kt-widget3__username">
                                        Lebron King James
                                    </a><br>
                                    <span class="kt-widget3__time">
																1 day ago
															</span>
                                </div>
                                <span class="kt-widget3__status kt-font-brand">
															Open
														</span>
                            </div>
                            <div class="kt-widget3__body">
                                <p class="kt-widget3__text">
                                    Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper.
                                </p>
                            </div>
                        </div>
                        <div class="kt-widget3__item">
                            <div class="kt-widget3__header">
                                <div class="kt-widget3__user-img">
                                    <img class="kt-widget3__img" src="assets/media/users/user5.jpg" alt="">
                                </div>
                                <div class="kt-widget3__info">
                                    <a href="#" class="kt-widget3__username">
                                        Deb Gibson
                                    </a><br>
                                    <span class="kt-widget3__time">
																3 weeks ago
															</span>
                                </div>
                                <span class="kt-widget3__status kt-font-success">
															Closed
														</span>
                            </div>
                            <div class="kt-widget3__body">
                                <p class="kt-widget3__text">
                                    Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/Support Tickets -->
        </div>
    </div>

    <!--End::Row-->

    <!--End::Dashboard 1-->
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('#menu_item_dashboard').addClass('kt-menu__item--active');
        });
    </script>
    <script>
        var KTDashboard = function() {

            // Sparkline Chart helper function
            var _initSparklineChart = function(src, data, color, border) {
                if (src.length == 0) {
                    return;
                }

                var config = {
                    type: 'line',
                    data: {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October"],
                        datasets: [{
                            label: "",
                            borderColor: color,
                            borderWidth: border,

                            pointHoverRadius: 4,
                            pointHoverBorderWidth: 12,
                            pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointBorderColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointHoverBackgroundColor: KTApp.getStateColor('danger'),
                            pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.1).rgbString(),
                            fill: false,
                            data: data,
                        }]
                    },
                    options: {
                        title: {
                            display: false,
                        },
                        tooltips: {
                            enabled: false,
                            intersect: false,
                            mode: 'nearest',
                            xPadding: 10,
                            yPadding: 10,
                            caretPadding: 10
                        },
                        legend: {
                            display: false,
                            labels: {
                                usePointStyle: false
                            }
                        },
                        responsive: true,
                        maintainAspectRatio: true,
                        hover: {
                            mode: 'index'
                        },
                        scales: {
                            xAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Month'
                                }
                            }],
                            yAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Value'
                                },
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        },

                        elements: {
                            point: {
                                radius: 4,
                                borderWidth: 12
                            },
                        },

                        layout: {
                            padding: {
                                left: 0,
                                right: 10,
                                top: 5,
                                bottom: 0
                            }
                        }
                    }
                };

                return new Chart(src, config);
            }

            // Daily Sales chart.
            // Based on Chartjs plugin - http://www.chartjs.org/
            var dailySales = function() {
                var chartContainer = KTUtil.getByID('kt_chart_daily_sales');

                if (!chartContainer) {
                    return;
                }

                var chartData = {
                    labels: ["Label 1", "Label 2", "Label 3", "Label 4", "Label 5", "Label 6", "Label 7", "Label 8", "Label 9", "Label 10", "Label 11", "Label 12", "Label 13", "Label 14", "Label 15", "Label 16"],
                    datasets: [{
                        //label: 'Dataset 1',
                        backgroundColor: KTApp.getStateColor('success'),
                        data: [
                            15, 20, 25, 30, 25, 20, 15, 20, 25, 30, 25, 20, 15, 10, 15, 20
                        ]
                    }, {
                        //label: 'Dataset 2',
                        backgroundColor: '#f3f3fb',
                        data: [
                            15, 20, 25, 30, 25, 20, 15, 20, 25, 30, 25, 20, 15, 10, 15, 20
                        ]
                    }]
                };

                var chart = new Chart(chartContainer, {
                    type: 'bar',
                    data: chartData,
                    options: {
                        title: {
                            display: false,
                        },
                        tooltips: {
                            intersect: false,
                            mode: 'nearest',
                            xPadding: 10,
                            yPadding: 10,
                            caretPadding: 10
                        },
                        legend: {
                            display: false
                        },
                        responsive: true,
                        maintainAspectRatio: false,
                        barRadius: 4,
                        scales: {
                            xAxes: [{
                                display: false,
                                gridLines: false,
                                stacked: true
                            }],
                            yAxes: [{
                                display: false,
                                stacked: true,
                                gridLines: false
                            }]
                        },
                        layout: {
                            padding: {
                                left: 0,
                                right: 0,
                                top: 0,
                                bottom: 0
                            }
                        }
                    }
                });
            }

            // Profit Share Chart.
            // Based on Chartjs plugin - http://www.chartjs.org/
            var profitShare = function() {
                if (!KTUtil.getByID('kt_chart_profit_share')) {
                    return;
                }

                var randomScalingFactor = function() {
                    return Math.round(Math.random() * 100);
                };

                var config = {
                    type: 'doughnut',
                    data: {
                        datasets: [{
                            data: [
                                35, 30, 35
                            ],
                            backgroundColor: [
                                KTApp.getStateColor('success'),
                                KTApp.getStateColor('danger'),
                                KTApp.getStateColor('brand')
                            ]
                        }],
                        labels: [
                            'Angular',
                            'CSS',
                            'HTML'
                        ]
                    },
                    options: {
                        cutoutPercentage: 75,
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: {
                            display: false,
                            position: 'top',
                        },
                        title: {
                            display: false,
                            text: 'Technology'
                        },
                        animation: {
                            animateScale: true,
                            animateRotate: true
                        },
                        tooltips: {
                            enabled: true,
                            intersect: false,
                            mode: 'nearest',
                            bodySpacing: 5,
                            yPadding: 10,
                            xPadding: 10,
                            caretPadding: 0,
                            displayColors: false,
                            backgroundColor: KTApp.getStateColor('brand'),
                            titleFontColor: '#ffffff',
                            cornerRadius: 4,
                            footerSpacing: 0,
                            titleSpacing: 0
                        }
                    }
                };

                var ctx = KTUtil.getByID('kt_chart_profit_share').getContext('2d');
                var myDoughnut = new Chart(ctx, config);
            }

            // Sales Stats.
            // Based on Chartjs plugin - http://www.chartjs.org/
            var salesStats = function() {
                if (!KTUtil.getByID('kt_chart_sales_stats')) {
                    return;
                }

                var config = {
                    type: 'line',
                    data: {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December",
                            "January", "February", "March", "April"
                        ],
                        datasets: [{
                            label: "Sales Stats",
                            borderColor: KTApp.getStateColor('brand'),
                            borderWidth: 2,
                            //pointBackgroundColor: KTApp.getStateColor('brand'),
                            backgroundColor: KTApp.getStateColor('brand'),
                            pointBackgroundColor: Chart.helpers.color('#ffffff').alpha(0).rgbString(),
                            pointBorderColor: Chart.helpers.color('#ffffff').alpha(0).rgbString(),
                            pointHoverBackgroundColor: KTApp.getStateColor('danger'),
                            pointHoverBorderColor: Chart.helpers.color(KTApp.getStateColor('danger')).alpha(0.2).rgbString(),
                            data: [
                                10, 20, 16,
                                18, 12, 40,
                                35, 30, 33,
                                34, 45, 40,
                                60, 55, 70,
                                65, 75, 62
                            ]
                        }]
                    },
                    options: {
                        title: {
                            display: false,
                        },
                        tooltips: {
                            intersect: false,
                            mode: 'nearest',
                            xPadding: 10,
                            yPadding: 10,
                            caretPadding: 10
                        },
                        legend: {
                            display: false,
                            labels: {
                                usePointStyle: false
                            }
                        },
                        responsive: true,
                        maintainAspectRatio: false,
                        hover: {
                            mode: 'index'
                        },
                        scales: {
                            xAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Month'
                                }
                            }],
                            yAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Value'
                                }
                            }]
                        },

                        elements: {
                            point: {
                                radius: 3,
                                borderWidth: 0,

                                hoverRadius: 8,
                                hoverBorderWidth: 2
                            }
                        }
                    }
                };

                var chart = new Chart(KTUtil.getByID('kt_chart_sales_stats'), config);
            }

            // Sales By KTUtillication Stats.
            // Based on Chartjs plugin - http://www.chartjs.org/
            var salesByApps = function() {
                // Init chart instances
                _initSparklineChart($('#kt_chart_sales_by_apps_1_1'), [10, 20, -5, 8, -20, -2, -4, 15, 5, 8], KTApp.getStateColor('success'), 2);
                _initSparklineChart($('#kt_chart_sales_by_apps_1_2'), [2, 16, 0, 12, 22, 5, -10, 5, 15, 2], KTApp.getStateColor('danger'), 2);
                _initSparklineChart($('#kt_chart_sales_by_apps_1_3'), [15, 5, -10, 5, 16, 22, 6, -6, -12, 5], KTApp.getStateColor('success'), 2);
                _initSparklineChart($('#kt_chart_sales_by_apps_1_4'), [8, 18, -12, 12, 22, -2, -14, 16, 18, 2], KTApp.getStateColor('warning'), 2);

                _initSparklineChart($('#kt_chart_sales_by_apps_2_1'), [10, 20, -5, 8, -20, -2, -4, 15, 5, 8], KTApp.getStateColor('danger'), 2);
                _initSparklineChart($('#kt_chart_sales_by_apps_2_2'), [2, 16, 0, 12, 22, 5, -10, 5, 15, 2], KTApp.getStateColor('dark'), 2);
                _initSparklineChart($('#kt_chart_sales_by_apps_2_3'), [15, 5, -10, 5, 16, 22, 6, -6, -12, 5], KTApp.getStateColor('brand'), 2);
                _initSparklineChart($('#kt_chart_sales_by_apps_2_4'), [8, 18, -12, 12, 22, -2, -14, 16, 18, 2], KTApp.getStateColor('info'), 2);
            }

            // Latest Updates.
            // Based on Chartjs plugin - http://www.chartjs.org/
            var latestUpdates = function() {
                if ($('#kt_chart_latest_updates').length == 0) {
                    return;
                }

                var ctx = document.getElementById("kt_chart_latest_updates").getContext("2d");

                var config = {
                    type: 'line',
                    data: {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October"],
                        datasets: [{
                            label: "Sales Stats",
                            backgroundColor: KTApp.getStateColor('danger'), // Put the gradient here as a fill color
                            borderColor: KTApp.getStateColor('danger'),
                            pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointBorderColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointHoverBackgroundColor: KTApp.getStateColor('success'),
                            pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.1).rgbString(),

                            //fill: 'start',
                            data: [
                                10, 14, 12, 16, 9, 11, 13, 9, 13, 15
                            ]
                        }]
                    },
                    options: {
                        title: {
                            display: false,
                        },
                        tooltips: {
                            intersect: false,
                            mode: 'nearest',
                            xPadding: 10,
                            yPadding: 10,
                            caretPadding: 10
                        },
                        legend: {
                            display: false
                        },
                        responsive: true,
                        maintainAspectRatio: false,
                        hover: {
                            mode: 'index'
                        },
                        scales: {
                            xAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Month'
                                }
                            }],
                            yAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Value'
                                },
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        },
                        elements: {
                            line: {
                                tension: 0.0000001
                            },
                            point: {
                                radius: 4,
                                borderWidth: 12
                            }
                        }
                    }
                };

                var chart = new Chart(ctx, config);
            }

            // Trends Stats.
            // Based on Chartjs plugin - http://www.chartjs.org/
            var trendsStats = function() {
                if ($('#kt_chart_trends_stats').length == 0) {
                    return;
                }

                var ctx = document.getElementById("kt_chart_trends_stats").getContext("2d");

                var gradient = ctx.createLinearGradient(0, 0, 0, 240);
                gradient.addColorStop(0, Chart.helpers.color('#00c5dc').alpha(0.7).rgbString());
                gradient.addColorStop(1, Chart.helpers.color('#f2feff').alpha(0).rgbString());

                var config = {
                    type: 'line',
                    data: {
                        labels: [
                            "January", "February", "March", "April", "May", "June", "July", "August", "September", "October",
                            "January", "February", "March", "April", "May", "June", "July", "August", "September", "October",
                            "January", "February", "March", "April", "May", "June", "July", "August", "September", "October",
                            "January", "February", "March", "April"
                        ],
                        datasets: [{
                            label: "Sales Stats",
                            backgroundColor: gradient, // Put the gradient here as a fill color
                            borderColor: '#0dc8de',

                            pointBackgroundColor: Chart.helpers.color('#ffffff').alpha(0).rgbString(),
                            pointBorderColor: Chart.helpers.color('#ffffff').alpha(0).rgbString(),
                            pointHoverBackgroundColor: KTApp.getStateColor('danger'),
                            pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.2).rgbString(),

                            //fill: 'start',
                            data: [
                                20, 10, 18, 15, 26, 18, 15, 22, 16, 12,
                                12, 13, 10, 18, 14, 24, 16, 12, 19, 21,
                                16, 14, 21, 21, 13, 15, 22, 24, 21, 11,
                                14, 19, 21, 17
                            ]
                        }]
                    },
                    options: {
                        title: {
                            display: false,
                        },
                        tooltips: {
                            intersect: false,
                            mode: 'nearest',
                            xPadding: 10,
                            yPadding: 10,
                            caretPadding: 10
                        },
                        legend: {
                            display: false
                        },
                        responsive: true,
                        maintainAspectRatio: false,
                        hover: {
                            mode: 'index'
                        },
                        scales: {
                            xAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Month'
                                }
                            }],
                            yAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Value'
                                },
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        },
                        elements: {
                            line: {
                                tension: 0.19
                            },
                            point: {
                                radius: 4,
                                borderWidth: 12
                            }
                        },
                        layout: {
                            padding: {
                                left: 0,
                                right: 0,
                                top: 5,
                                bottom: 0
                            }
                        }
                    }
                };

                var chart = new Chart(ctx, config);
            }

            // Trends Stats 2.
            // Based on Chartjs plugin - http://www.chartjs.org/
            var trendsStats2 = function() {
                if ($('#kt_chart_trends_stats_2').length == 0) {
                    return;
                }

                var ctx = document.getElementById("kt_chart_trends_stats_2").getContext("2d");

                var config = {
                    type: 'line',
                    data: {
                        labels: [
                            "January", "February", "March", "April", "May", "June", "July", "August", "September", "October",
                            "January", "February", "March", "April", "May", "June", "July", "August", "September", "October",
                            "January", "February", "March", "April", "May", "June", "July", "August", "September", "October",
                            "January", "February", "March", "April"
                        ],
                        datasets: [{
                            label: "Sales Stats",
                            backgroundColor: '#d2f5f9', // Put the gradient here as a fill color
                            borderColor: KTApp.getStateColor('brand'),

                            pointBackgroundColor: Chart.helpers.color('#ffffff').alpha(0).rgbString(),
                            pointBorderColor: Chart.helpers.color('#ffffff').alpha(0).rgbString(),
                            pointHoverBackgroundColor: KTApp.getStateColor('danger'),
                            pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.2).rgbString(),

                            //fill: 'start',
                            data: [
                                20, 10, 18, 15, 32, 18, 15, 22, 8, 6,
                                12, 13, 10, 18, 14, 24, 16, 12, 19, 21,
                                16, 14, 24, 21, 13, 15, 27, 29, 21, 11,
                                14, 19, 21, 17
                            ]
                        }]
                    },
                    options: {
                        title: {
                            display: false,
                        },
                        tooltips: {
                            intersect: false,
                            mode: 'nearest',
                            xPadding: 10,
                            yPadding: 10,
                            caretPadding: 10
                        },
                        legend: {
                            display: false
                        },
                        responsive: true,
                        maintainAspectRatio: false,
                        hover: {
                            mode: 'index'
                        },
                        scales: {
                            xAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Month'
                                }
                            }],
                            yAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Value'
                                },
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        },
                        elements: {
                            line: {
                                tension: 0.19
                            },
                            point: {
                                radius: 4,
                                borderWidth: 12
                            }
                        },
                        layout: {
                            padding: {
                                left: 0,
                                right: 0,
                                top: 5,
                                bottom: 0
                            }
                        }
                    }
                };

                var chart = new Chart(ctx, config);
            }

            // Trends Stats.
            // Based on Chartjs plugin - http://www.chartjs.org/
            var latestTrendsMap = function() {
                if ($('#kt_chart_latest_trends_map').length == 0) {
                    return;
                }

                try {
                    var map = new GMaps({
                        div: '#kt_chart_latest_trends_map',
                        lat: -12.043333,
                        lng: -77.028333
                    });
                } catch (e) {
                    console.log(e);
                }
            }

            // Revenue Change.
            // Based on Morris plugin - http://morrisjs.github.io/morris.js/
            var revenueChange = function() {
                if ($('#kt_chart_revenue_change').length == 0) {
                    return;
                }

                Morris.Donut({
                    element: 'kt_chart_revenue_change',
                    data: [{
                        label: "New York",
                        value: 10
                    },
                        {
                            label: "London",
                            value: 7
                        },
                        {
                            label: "Paris",
                            value: 20
                        }
                    ],
                    colors: [
                        KTApp.getStateColor('success'),
                        KTApp.getStateColor('danger'),
                        KTApp.getStateColor('brand')
                    ],
                });
            }

            // Support Tickets Chart.
            // Based on Morris plugin - http://morrisjs.github.io/morris.js/
            var supportCases = function() {
                if ($('#kt_chart_support_tickets').length == 0) {
                    return;
                }

                Morris.Donut({
                    element: 'kt_chart_support_tickets',
                    data: [{
                        label: "Margins",
                        value: 20
                    },
                        {
                            label: "Profit",
                            value: 70
                        },
                        {
                            label: "Lost",
                            value: 10
                        }
                    ],
                    labelColor: '#a7a7c2',
                    colors: [
                        KTApp.getStateColor('success'),
                        KTApp.getStateColor('brand'),
                        KTApp.getStateColor('danger')
                    ]
                    //formatter: function (x) { return x + "%"}
                });
            }

            // Support Tickets Chart.
            // Based on Chartjs plugin - http://www.chartjs.org/
            var supportRequests = function() {
                var container = KTUtil.getByID('kt_chart_support_requests');

                if (!container) {
                    return;
                }

                var randomScalingFactor = function() {
                    return Math.round(Math.random() * 100);
                };

                var config = {
                    type: 'doughnut',
                    data: {
                        datasets: [{
                            data: [
                                35, 30, 35
                            ],
                            backgroundColor: [
                                KTApp.getStateColor('success'),
                                KTApp.getStateColor('danger'),
                                KTApp.getStateColor('brand')
                            ]
                        }],
                        labels: [
                            'Angular',
                            'CSS',
                            'HTML'
                        ]
                    },
                    options: {
                        cutoutPercentage: 75,
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: {
                            display: false,
                            position: 'top',
                        },
                        title: {
                            display: false,
                            text: 'Technology'
                        },
                        animation: {
                            animateScale: true,
                            animateRotate: true
                        },
                        tooltips: {
                            enabled: true,
                            intersect: false,
                            mode: 'nearest',
                            bodySpacing: 5,
                            yPadding: 10,
                            xPadding: 10,
                            caretPadding: 0,
                            displayColors: false,
                            backgroundColor: KTApp.getStateColor('brand'),
                            titleFontColor: '#ffffff',
                            cornerRadius: 4,
                            footerSpacing: 0,
                            titleSpacing: 0
                        }
                    }
                };

                var ctx = container.getContext('2d');
                var myDoughnut = new Chart(ctx, config);
            }

            // Activities Charts.
            // Based on Chartjs plugin - http://www.chartjs.org/
            var activitiesChart = function() {
                if ($('#kt_chart_activities').length == 0) {
                    return;
                }

                var ctx = document.getElementById("kt_chart_activities").getContext("2d");

                var gradient = ctx.createLinearGradient(0, 0, 0, 240);
                gradient.addColorStop(0, Chart.helpers.color('#e14c86').alpha(1).rgbString());
                gradient.addColorStop(1, Chart.helpers.color('#e14c86').alpha(0.3).rgbString());

                var config = {
                    type: 'line',
                    data: {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October"],
                        datasets: [{
                            label: "Sales Stats",
                            backgroundColor: Chart.helpers.color('#e14c86').alpha(1).rgbString(),  //gradient
                            borderColor: '#e13a58',

                            pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointBorderColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointHoverBackgroundColor: KTApp.getStateColor('light'),
                            pointHoverBorderColor: Chart.helpers.color('#ffffff').alpha(0.1).rgbString(),

                            //fill: 'start',
                            data: [
                                10, 14, 12, 16, 9, 11, 13, 9, 13, 15
                            ]
                        }]
                    },
                    options: {
                        title: {
                            display: false,
                        },
                        tooltips: {
                            mode: 'nearest',
                            intersect: false,
                            position: 'nearest',
                            xPadding: 10,
                            yPadding: 10,
                            caretPadding: 10
                        },
                        legend: {
                            display: false
                        },
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            xAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Month'
                                }
                            }],
                            yAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Value'
                                },
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        },
                        elements: {
                            line: {
                                tension: 0.0000001
                            },
                            point: {
                                radius: 4,
                                borderWidth: 12
                            }
                        },
                        layout: {
                            padding: {
                                left: 0,
                                right: 0,
                                top: 10,
                                bottom: 0
                            }
                        }
                    }
                };

                var chart = new Chart(ctx, config);
            }

            // Bandwidth Charts 1.
            // Based on Chartjs plugin - http://www.chartjs.org/
            var bandwidthChart1 = function() {
                if ($('#kt_chart_bandwidth1').length == 0) {
                    return;
                }

                var ctx = document.getElementById("kt_chart_bandwidth1").getContext("2d");

                var gradient = ctx.createLinearGradient(0, 0, 0, 240);
                gradient.addColorStop(0, Chart.helpers.color('#d1f1ec').alpha(1).rgbString());
                gradient.addColorStop(1, Chart.helpers.color('#d1f1ec').alpha(0.3).rgbString());

                var config = {
                    type: 'line',
                    data: {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October"],
                        datasets: [{
                            label: "Bandwidth Stats",
                            backgroundColor: gradient,
                            borderColor: KTApp.getStateColor('success'),

                            pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointBorderColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointHoverBackgroundColor: KTApp.getStateColor('danger'),
                            pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.1).rgbString(),

                            //fill: 'start',
                            data: [
                                10, 14, 12, 16, 9, 11, 13, 9, 13, 15
                            ]
                        }]
                    },
                    options: {
                        title: {
                            display: false,
                        },
                        tooltips: {
                            mode: 'nearest',
                            intersect: false,
                            position: 'nearest',
                            xPadding: 10,
                            yPadding: 10,
                            caretPadding: 10
                        },
                        legend: {
                            display: false
                        },
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            xAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Month'
                                }
                            }],
                            yAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Value'
                                },
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        },
                        elements: {
                            line: {
                                tension: 0.0000001
                            },
                            point: {
                                radius: 4,
                                borderWidth: 12
                            }
                        },
                        layout: {
                            padding: {
                                left: 0,
                                right: 0,
                                top: 10,
                                bottom: 0
                            }
                        }
                    }
                };

                var chart = new Chart(ctx, config);
            }

            // Bandwidth Charts 2.
            // Based on Chartjs plugin - http://www.chartjs.org/
            var bandwidthChart2 = function() {
                if ($('#kt_chart_bandwidth2').length == 0) {
                    return;
                }

                var ctx = document.getElementById("kt_chart_bandwidth2").getContext("2d");

                var gradient = ctx.createLinearGradient(0, 0, 0, 240);
                gradient.addColorStop(0, Chart.helpers.color('#ffefce').alpha(1).rgbString());
                gradient.addColorStop(1, Chart.helpers.color('#ffefce').alpha(0.3).rgbString());

                var config = {
                    type: 'line',
                    data: {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October"],
                        datasets: [{
                            label: "Bandwidth Stats",
                            backgroundColor: gradient,
                            borderColor: KTApp.getStateColor('warning'),
                            pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointBorderColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointHoverBackgroundColor: KTApp.getStateColor('danger'),
                            pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.1).rgbString(),

                            //fill: 'start',
                            data: [
                                10, 14, 12, 16, 9, 11, 13, 9, 13, 15
                            ]
                        }]
                    },
                    options: {
                        title: {
                            display: false,
                        },
                        tooltips: {
                            mode: 'nearest',
                            intersect: false,
                            position: 'nearest',
                            xPadding: 10,
                            yPadding: 10,
                            caretPadding: 10
                        },
                        legend: {
                            display: false
                        },
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            xAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Month'
                                }
                            }],
                            yAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Value'
                                },
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        },
                        elements: {
                            line: {
                                tension: 0.0000001
                            },
                            point: {
                                radius: 4,
                                borderWidth: 12
                            }
                        },
                        layout: {
                            padding: {
                                left: 0,
                                right: 0,
                                top: 10,
                                bottom: 0
                            }
                        }
                    }
                };

                var chart = new Chart(ctx, config);
            }

            // Bandwidth Charts 2.
            // Based on Chartjs plugin - http://www.chartjs.org/
            var adWordsStat = function() {
                if ($('#kt_chart_adwords_stats').length == 0) {
                    return;
                }

                var ctx = document.getElementById("kt_chart_adwords_stats").getContext("2d");

                var gradient = ctx.createLinearGradient(0, 0, 0, 240);
                gradient.addColorStop(0, Chart.helpers.color('#ffefce').alpha(1).rgbString());
                gradient.addColorStop(1, Chart.helpers.color('#ffefce').alpha(0.3).rgbString());

                var config = {
                    type: 'line',
                    data: {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October"],
                        datasets: [{
                            label: "AdWord Clicks",
                            backgroundColor: KTApp.getStateColor('brand'),
                            borderColor: KTApp.getStateColor('brand'),

                            pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointBorderColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointHoverBackgroundColor: KTApp.getStateColor('danger'),
                            pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.1).rgbString(),
                            data: [
                                12, 16, 9, 18, 13, 12, 18, 12, 15, 17
                            ]
                        }, {
                            label: "AdWords Views",

                            backgroundColor: KTApp.getStateColor('success'),
                            borderColor: KTApp.getStateColor('success'),

                            pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointBorderColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointHoverBackgroundColor: KTApp.getStateColor('danger'),
                            pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.1).rgbString(),
                            data: [
                                10, 14, 12, 16, 9, 11, 13, 9, 13, 15
                            ]
                        }]
                    },
                    options: {
                        title: {
                            display: false,
                        },
                        tooltips: {
                            mode: 'nearest',
                            intersect: false,
                            position: 'nearest',
                            xPadding: 10,
                            yPadding: 10,
                            caretPadding: 10
                        },
                        legend: {
                            display: false
                        },
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            xAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Month'
                                }
                            }],
                            yAxes: [{
                                stacked: true,
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Value'
                                },
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        },
                        elements: {
                            line: {
                                tension: 0.0000001
                            },
                            point: {
                                radius: 4,
                                borderWidth: 12
                            }
                        },
                        layout: {
                            padding: {
                                left: 0,
                                right: 0,
                                top: 10,
                                bottom: 0
                            }
                        }
                    }
                };

                var chart = new Chart(ctx, config);
            }

            // Bandwidth Charts 2.
            // Based on Chartjs plugin - http://www.chartjs.org/
            var financeSummary = function() {
                if ($('#kt_chart_finance_summary').length == 0) {
                    return;
                }

                var ctx = document.getElementById("kt_chart_finance_summary").getContext("2d");

                var config = {
                    type: 'line',
                    data: {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October"],
                        datasets: [{
                            label: "AdWords Views",

                            backgroundColor: KTApp.getStateColor('success'),
                            borderColor: KTApp.getStateColor('success'),

                            pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointBorderColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointHoverBackgroundColor: KTApp.getStateColor('danger'),
                            pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.1).rgbString(),
                            data: [
                                10, 14, 12, 16, 9, 11, 13, 9, 13, 15
                            ]
                        }]
                    },
                    options: {
                        title: {
                            display: false,
                        },
                        tooltips: {
                            mode: 'nearest',
                            intersect: false,
                            position: 'nearest',
                            xPadding: 10,
                            yPadding: 10,
                            caretPadding: 10
                        },
                        legend: {
                            display: false
                        },
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            xAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Month'
                                }
                            }],
                            yAxes: [{
                                display: false,
                                gridLines: false,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Value'
                                },
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        },
                        elements: {
                            line: {
                                tension: 0.0000001
                            },
                            point: {
                                radius: 4,
                                borderWidth: 12
                            }
                        },
                        layout: {
                            padding: {
                                left: 0,
                                right: 0,
                                top: 10,
                                bottom: 0
                            }
                        }
                    }
                };

                var chart = new Chart(ctx, config);
            }

            // Order Statistics.
            // Based on Chartjs plugin - http://www.chartjs.org/
            var orderStatistics = function() {
                var container = KTUtil.getByID('kt_chart_order_statistics');

                if (!container) {
                    return;
                }

                var MONTHS = ['1 Jan', '2 Jan', '3 Jan', '4 Jan', '5 Jan', '6 Jan', '7 Jan'];

                var color = Chart.helpers.color;
                var barChartData = {
                    labels: ['1 Jan', '2 Jan', '3 Jan', '4 Jan', '5 Jan', '6 Jan', '7 Jan'],
                    datasets : [
                        {
                            fill: true,
                            //borderWidth: 0,
                            backgroundColor: color(KTApp.getStateColor('brand')).alpha(0.6).rgbString(),
                            borderColor : color(KTApp.getStateColor('brand')).alpha(0).rgbString(),

                            pointHoverRadius: 4,
                            pointHoverBorderWidth: 12,
                            pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointBorderColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointHoverBackgroundColor: KTApp.getStateColor('brand'),
                            pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.1).rgbString(),

                            data: [20, 30, 20, 40, 30, 60, 30]
                        },
                        {
                            fill: true,
                            //borderWidth: 0,
                            backgroundColor : color(KTApp.getStateColor('brand')).alpha(0.2).rgbString(),
                            borderColor : color(KTApp.getStateColor('brand')).alpha(0).rgbString(),

                            pointHoverRadius: 4,
                            pointHoverBorderWidth: 12,
                            pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointBorderColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                            pointHoverBackgroundColor: KTApp.getStateColor('brand'),
                            pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.1).rgbString(),

                            data: [15, 40, 15, 30, 40, 30, 50]
                        }
                    ]
                };

                var ctx = container.getContext('2d');
                var chart = new Chart(ctx, {
                    type: 'line',
                    data: barChartData,
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: false,
                        scales: {
                            xAxes: [{
                                categoryPercentage: 0.35,
                                barPercentage: 0.70,
                                display: true,
                                scaleLabel: {
                                    display: false,
                                    labelString: 'Month'
                                },
                                gridLines: false,
                                ticks: {
                                    display: true,
                                    beginAtZero: true,
                                    fontColor: KTApp.getBaseColor('shape', 3),
                                    fontSize: 13,
                                    padding: 10
                                }
                            }],
                            yAxes: [{
                                categoryPercentage: 0.35,
                                barPercentage: 0.70,
                                display: true,
                                scaleLabel: {
                                    display: false,
                                    labelString: 'Value'
                                },
                                gridLines: {
                                    color: KTApp.getBaseColor('shape', 2),
                                    drawBorder: false,
                                    offsetGridLines: false,
                                    drawTicks: false,
                                    borderDash: [3, 4],
                                    zeroLineWidth: 1,
                                    zeroLineColor: KTApp.getBaseColor('shape', 2),
                                    zeroLineBorderDash: [3, 4]
                                },
                                ticks: {
                                    max: 70,
                                    stepSize: 10,
                                    display: true,
                                    beginAtZero: true,
                                    fontColor: KTApp.getBaseColor('shape', 3),
                                    fontSize: 13,
                                    padding: 10
                                }
                            }]
                        },
                        title: {
                            display: false
                        },
                        hover: {
                            mode: 'index'
                        },
                        tooltips: {
                            enabled: true,
                            intersect: false,
                            mode: 'nearest',
                            bodySpacing: 5,
                            yPadding: 10,
                            xPadding: 10,
                            caretPadding: 0,
                            displayColors: false,
                            backgroundColor: KTApp.getStateColor('brand'),
                            titleFontColor: '#ffffff',
                            cornerRadius: 4,
                            footerSpacing: 0,
                            titleSpacing: 0
                        },
                        layout: {
                            padding: {
                                left: 0,
                                right: 0,
                                top: 5,
                                bottom: 5
                            }
                        }
                    }
                });
            }

            // Quick Stat Charts
            var quickStats = function() {
                _initSparklineChart($('#kt_chart_quick_stats_1'), [10, 14, 18, 11, 9, 12, 14, 17, 18, 14], KTApp.getStateColor('brand'), 3);
                _initSparklineChart($('#kt_chart_quick_stats_2'), [11, 12, 18, 13, 11, 12, 15, 13, 19, 15], KTApp.getStateColor('danger'), 3);
                _initSparklineChart($('#kt_chart_quick_stats_3'), [12, 12, 18, 11, 15, 12, 13, 16, 11, 18], KTApp.getStateColor('success'), 3);
                _initSparklineChart($('#kt_chart_quick_stats_4'), [11, 9, 13, 18, 13, 15, 14, 13, 18, 15], KTApp.getStateColor('success'), 3);
            }

            // Daterangepicker Init
            var daterangepickerInit = function() {
                if ($('#kt_dashboard_daterangepicker').length == 0) {
                    return;
                }

                var picker = $('#kt_dashboard_daterangepicker');
                var start = moment();
                var end = moment();

                function cb(start, end, label) {
                    var title = '';
                    var range = '';

                    if ((end - start) < 100 || label == 'Today') {
                        title = 'Today:';
                        range = start.format('MMM D');
                    } else if (label == 'Yesterday') {
                        title = 'Yesterday:';
                        range = start.format('MMM D');
                    } else {
                        range = start.format('MMM D') + ' - ' + end.format('MMM D');
                    }

                    $('#kt_dashboard_daterangepicker_date').html(range);
                    $('#kt_dashboard_daterangepicker_title').html(title);
                }

                picker.daterangepicker({
                    direction: KTUtil.isRTL(),
                    startDate: start,
                    endDate: end,
                    opens: 'left',
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    }
                }, cb);

                cb(start, end, '');
            }

            // Latest Orders
            var datatableLatestOrders = function() {
                if ($('#kt_datatable_latest_orders').length === 0) {
                    return;
                }

                var dataJSONArray = [{"RecordID":1,"OrderID":"61715-075","Country":"China","ShipCountry":"CN","ShipCity":"Tieba","ShipName":"Collins, Dibbert and Hoeger","ShipAddress":"746 Pine View Junction","CompanyEmail":"nsailor0@livejournal.com","CompanyAgent":"Nixie Sailor","CompanyName":"Gleichner, Ziemann and Gutkowski","Currency":"CNY","Notes":"imperdiet nullam orci pede venenatis non sodales sed tincidunt eu felis fusce posuere felis sed lacus morbi","Department":"Outdoors","Website":"irs.gov","Latitude":35.0032213,"Longitude":102.913526,"ShipDate":"2/12/2018","PaymentDate":"2016-04-27 23:53:15","TimeZone":"Asia/Chongqing","TotalPayment":"$246154.65","Status":3,"Type":2,"Actions":null},
                    {"RecordID":2,"OrderID":"63629-4697","Country":"Indonesia","ShipCountry":"ID","ShipCity":"Cihaur","ShipName":"Prosacco-Breitenberg","ShipAddress":"01652 Fulton Trail","CompanyEmail":"egiraldez1@seattletimes.com","CompanyAgent":"Emelita Giraldez","CompanyName":"Rosenbaum-Reichel","Currency":"IDR","Notes":"adipiscing elit proin risus praesent lectus vestibulum quam sapien varius ut blandit non interdum","Department":"Toys","Website":"ameblo.jp","Latitude":-7.1221059,"Longitude":106.5701927,"ShipDate":"8/6/2017","PaymentDate":"2017-11-13 14:37:22","TimeZone":"Asia/Jakarta","TotalPayment":"$795849.41","Status":6,"Type":3,"Actions":null},
                    {"RecordID":3,"OrderID":"68084-123","Country":"Argentina","ShipCountry":"AR","ShipCity":"Puerto Iguazú","ShipName":"Lebsack-Emard","ShipAddress":"2 Pine View Park","CompanyEmail":"uluckin2@state.gov","CompanyAgent":"Ula Luckin","CompanyName":"Kulas, Cassin and Batz","Currency":"ARS","Notes":"blandit ultrices enim lorem ipsum dolor sit amet consectetuer adipiscing elit proin","Department":"Electronics","Website":"pbs.org","Latitude":-25.6112339,"Longitude":-54.5515662,"ShipDate":"5/26/2016","PaymentDate":"2018-01-22 12:01:51","TimeZone":"America/Argentina/Cordoba","TotalPayment":"$830764.07","Status":1,"Type":2,"Actions":null},
                    {"RecordID":4,"OrderID":"67457-428","Country":"Indonesia","ShipCountry":"ID","ShipCity":"Talok","ShipName":"O'Conner, Lebsack and Romaguera","ShipAddress":"3050 Buell Terrace","CompanyEmail":"ecure3@trellian.com","CompanyAgent":"Evangeline Cure","CompanyName":"Pfannerstill-Treutel","Currency":"IDR","Notes":"erat curabitur gravida nisi at nibh in hac habitasse platea","Department":"Automotive","Website":"fastcompany.com","Latitude":1.05,"Longitude":118.8,"ShipDate":"7/2/2016","PaymentDate":"2017-05-26 08:31:15","TimeZone":"Asia/Jakarta","TotalPayment":"$777892.92","Status":1,"Type":3,"Actions":null},
                    {"RecordID":5,"OrderID":"31722-529","Country":"Austria","ShipCountry":"AT","ShipCity":"Sankt Andrä-Höch","ShipName":"Stehr-Kunde","ShipAddress":"3038 Trailsway Junction","CompanyEmail":"tst4@msn.com","CompanyAgent":"Tierney St. Louis","CompanyName":"Dicki-Kling","Currency":"EUR","Notes":"felis fusce posuere felis sed lacus morbi sem mauris laoreet ut rhoncus aliquet pulvinar sed nisl nunc rhoncus dui","Department":"Health","Website":"jimdo.com","Latitude":46.791555,"Longitude":15.379192,"ShipDate":"5/20/2017","PaymentDate":"2016-02-17 10:53:48","TimeZone":"Europe/Vienna","TotalPayment":"$516467.41","Status":2,"Type":3,"Actions":null},
                    {"RecordID":6,"OrderID":"64117-168","Country":"China","ShipCountry":"CN","ShipCity":"Rongkou","ShipName":"O'Hara LLC","ShipAddress":"023 South Way","CompanyEmail":"greinhard5@instagram.com","CompanyAgent":"Gerhard Reinhard","CompanyName":"Gleason, Kub and Marquardt","Currency":"CNY","Notes":"tempus sit amet sem fusce consequat nulla nisl nunc nisl duis bibendum felis sed interdum venenatis turpis enim blandit mi","Department":"Electronics","Website":"cocolog-nifty.com","Latitude":37.646108,"Longitude":120.477813,"ShipDate":"11/26/2016","PaymentDate":"2018-02-08 07:09:18","TimeZone":"Asia/Shanghai","TotalPayment":"$410062.16","Status":5,"Type":3,"Actions":null},
                    {"RecordID":7,"OrderID":"43857-0331","Country":"China","ShipCountry":"CN","ShipCity":"Baiguo","ShipName":"Lebsack Group","ShipAddress":"56482 Fairfield Terrace","CompanyEmail":"eshelley6@pcworld.com","CompanyAgent":"Englebert Shelley","CompanyName":"Jenkins Inc","Currency":"CNY","Notes":"ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae duis faucibus accumsan odio curabitur convallis duis","Department":"Garden","Website":"cdc.gov","Latitude":26.006775,"Longitude":104.512603,"ShipDate":"6/28/2016","PaymentDate":"2017-10-01 05:29:08","TimeZone":"Asia/Chongqing","TotalPayment":"$210902.65","Status":2,"Type":3,"Actions":null},
                    {"RecordID":8,"OrderID":"64980-196","Country":"Croatia","ShipCountry":"HR","ShipCity":"Vinica","ShipName":"Gutkowski LLC","ShipAddress":"0 Elka Street","CompanyEmail":"hkite7@epa.gov","CompanyAgent":"Hazlett Kite","CompanyName":"Streich LLC","Currency":"HRK","Notes":"fusce lacus purus aliquet at feugiat non pretium quis lectus suspendisse potenti in eleifend","Department":"Automotive","Website":"accuweather.com","Latitude":46.3395131,"Longitude":16.1537893,"ShipDate":"8/5/2016","PaymentDate":"2017-04-29 22:07:06","TimeZone":"Europe/Zagreb","TotalPayment":"$1162836.25","Status":6,"Type":1,"Actions":null},
                    {"RecordID":9,"OrderID":"0404-0360","Country":"Colombia","ShipCountry":"CO","ShipCity":"San Carlos","ShipName":"Bartoletti, Howell and Jacobson","ShipAddress":"38099 Ilene Hill","CompanyEmail":"fmorby8@surveymonkey.com","CompanyAgent":"Freida Morby","CompanyName":"Haley, Schamberger and Durgan","Currency":"COP","Notes":"leo rhoncus sed vestibulum sit amet cursus id turpis integer aliquet","Department":"Garden","Website":"trellian.com","Latitude":8.797145,"Longitude":-75.698571,"ShipDate":"3/31/2017","PaymentDate":"2018-02-23 01:18:36","TimeZone":"America/Bogota","TotalPayment":"$124768.15","Status":2,"Type":1,"Actions":null},
                    {"RecordID":10,"OrderID":"52125-267","Country":"Thailand","ShipCountry":"TH","ShipCity":"Maha Sarakham","ShipName":"Schroeder-Champlin","ShipAddress":"8696 Barby Pass","CompanyEmail":"ohelian9@usatoday.com","CompanyAgent":"Obed Helian","CompanyName":"Labadie, Predovic and Hammes","Currency":"THB","Notes":"elit proin interdum mauris non ligula pellentesque ultrices phasellus id sapien in","Department":"Kids","Website":"gizmodo.com","Latitude":16.1991156,"Longitude":103.2839975,"ShipDate":"1/26/2017","PaymentDate":"2016-01-17 18:58:57","TimeZone":"Asia/Bangkok","TotalPayment":"$531999.26","Status":1,"Type":3,"Actions":null},
                    {"RecordID":11,"OrderID":"54092-515","Country":"Brazil","ShipCountry":"BR","ShipCity":"Canguaretama","ShipName":"Tromp-Murray","ShipAddress":"32461 Ridgeway Alley","CompanyEmail":"samya@earthlink.net","CompanyAgent":"Sibyl Amy","CompanyName":"Treutel-Ratke","Currency":"BRL","Notes":"cubilia curae nulla dapibus dolor vel est donec odio justo","Department":"Health","Website":"tamu.edu","Latitude":-6.3810573,"Longitude":-35.1301043,"ShipDate":"3/8/2017","PaymentDate":"2017-05-24 02:48:57","TimeZone":"America/Fortaleza","TotalPayment":"$942781.29","Status":4,"Type":2,"Actions":null},
                    {"RecordID":12,"OrderID":"0185-0130","Country":"China","ShipCountry":"CN","ShipCity":"Jiamachi","ShipName":"Langosh Inc","ShipAddress":"23 Walton Pass","CompanyEmail":"nfoldesb@lycos.com","CompanyAgent":"Norri Foldes","CompanyName":"Strosin, Nitzsche and Wisozk","Currency":"CNY","Notes":"nunc proin at turpis a pede posuere nonummy integer non velit donec diam","Department":"Jewelery","Website":"springer.com","Latitude":29.503085,"Longitude":108.984759,"ShipDate":"4/2/2017","PaymentDate":"2016-08-05 06:19:54","TimeZone":"Asia/Chongqing","TotalPayment":"$1143125.96","Status":3,"Type":1,"Actions":null},
                    {"RecordID":13,"OrderID":"21130-678","Country":"China","ShipCountry":"CN","ShipCity":"Qiaole","ShipName":"Jenkins-Haag","ShipAddress":"328 Glendale Hill","CompanyEmail":"morhtmannc@weibo.com","CompanyAgent":"Myrna Orhtmann","CompanyName":"Miller-Schiller","Currency":"CNY","Notes":"massa id lobortis convallis tortor risus dapibus augue vel accumsan","Department":"Books","Website":"washingtonpost.com","Latitude":28.643587,"Longitude":115.568583,"ShipDate":"6/7/2016","PaymentDate":"2017-02-02 05:24:00","TimeZone":"Asia/Shanghai","TotalPayment":"$159355.37","Status":3,"Type":1,"Actions":null},
                    {"RecordID":14,"OrderID":"40076-953","Country":"Portugal","ShipCountry":"PT","ShipCity":"Burgau","ShipName":"Funk, Lindgren and Bradtke","ShipAddress":"52550 Crownhardt Court","CompanyEmail":"skneathd@bizjournals.com","CompanyAgent":"Sioux Kneath","CompanyName":"Rice, Cole and Spinka","Currency":"EUR","Notes":"felis donec semper sapien a libero nam dui proin leo odio porttitor id consequat in consequat ut","Department":"Books","Website":"sciencedirect.com","Latitude":37.0734616,"Longitude":-8.7751983,"ShipDate":"10/11/2017","PaymentDate":"2016-12-08 07:20:08","TimeZone":"Europe/Lisbon","TotalPayment":"$381148.49","Status":4,"Type":1,"Actions":null},
                    {"RecordID":15,"OrderID":"36987-3005","Country":"Portugal","ShipCountry":"PT","ShipCity":"Bacelo","ShipName":"Wolf, Kreiger and Walker","ShipAddress":"548 Morrow Terrace","CompanyEmail":"cjacmare@google.pl","CompanyAgent":"Christa Jacmar","CompanyName":"Brakus-Hansen","Currency":"EUR","Notes":"nibh ligula nec sem duis aliquam convallis nunc proin at turpis a pede posuere nonummy integer non velit donec diam","Department":"Electronics","Website":"ifeng.com","Latitude":41.3121037,"Longitude":-8.1656088,"ShipDate":"8/17/2017","PaymentDate":"2018-05-04 00:10:14","TimeZone":"Europe/Lisbon","TotalPayment":"$839071.50","Status":1,"Type":2,"Actions":null},
                    {"RecordID":16,"OrderID":"67510-0062","Country":"South Africa","ShipCountry":"ZA","ShipCity":"Pongola","ShipName":"Kutch and Sons","ShipAddress":"02534 Hauk Trail","CompanyEmail":"sgoraccif@thetimes.co.uk","CompanyAgent":"Shandee Goracci","CompanyName":"Bergnaum, Thiel and Schuppe","Currency":"ZAR","Notes":"quis justo maecenas rhoncus aliquam lacus morbi quis tortor id","Department":"Shoes","Website":"oaic.gov.au","Latitude":-33.7363181,"Longitude":25.3908518,"ShipDate":"7/24/2016","PaymentDate":"2016-12-12 08:20:58","TimeZone":"Africa/Johannesburg","TotalPayment":"$924771.59","Status":5,"Type":3,"Actions":null},
                    {"RecordID":17,"OrderID":"36987-2542","Country":"Russia","ShipCountry":"RU","ShipCity":"Novokizhinginsk","ShipName":"Beatty LLC","ShipAddress":"19427 Sloan Road","CompanyEmail":"jcolvieg@mit.edu","CompanyAgent":"Jerrome Colvie","CompanyName":"Kreiger, Glover and Connelly","Currency":"RUB","Notes":"nulla eget eros elementum pellentesque quisque porta volutpat erat quisque erat eros viverra eget congue eget semper rutrum","Department":"Toys","Website":"imdb.com","Latitude":51.598999,"Longitude":109.580475,"ShipDate":"3/4/2016","PaymentDate":"2016-02-06 06:55:10","TimeZone":"Asia/Yakutsk","TotalPayment":"$708846.15","Status":3,"Type":1,"Actions":null},
                    {"RecordID":18,"OrderID":"11673-479","Country":"Brazil","ShipCountry":"BR","ShipCity":"Conceição das Alagoas","ShipName":"Gleason Inc","ShipAddress":"191 Stone Corner Road","CompanyEmail":"mplenderleithh@globo.com","CompanyAgent":"Michaelina Plenderleith","CompanyName":"Legros-Gleichner","Currency":"BRL","Notes":"nulla suspendisse potenti cras in purus eu magna vulputate luctus cum sociis natoque penatibus et magnis dis parturient","Department":"Grocery","Website":"netlog.com","Latitude":-19.9241693,"Longitude":-48.3811173,"ShipDate":"2/21/2018","PaymentDate":"2016-08-06 05:33:25","TimeZone":"America/Sao_Paulo","TotalPayment":"$1096683.96","Status":1,"Type":2,"Actions":null},
                    {"RecordID":19,"OrderID":"47781-264","Country":"Ukraine","ShipCountry":"UA","ShipCity":"Yasinya","ShipName":"King, Thiel and Rolfson","ShipAddress":"1481 Sauthoff Place","CompanyEmail":"lluthwoodi@constantcontact.com","CompanyAgent":"Lombard Luthwood","CompanyName":"Haag LLC","Currency":"UAH","Notes":"amet nunc viverra dapibus nulla suscipit ligula in lacus curabitur at ipsum ac tellus semper","Department":"Books","Website":"cnn.com","Latitude":48.2595628,"Longitude":24.3450737,"ShipDate":"1/21/2016","PaymentDate":"2018-05-20 02:37:25","TimeZone":"Europe/Uzhgorod","TotalPayment":"$810285.52","Status":1,"Type":2,"Actions":null},
                    {"RecordID":20,"OrderID":"42291-712","Country":"Indonesia","ShipCountry":"ID","ShipCity":"Kembang","ShipName":"Leuschke-Kihn","ShipAddress":"9029 Blackbird Point","CompanyEmail":"lchevinj@mapy.cz","CompanyAgent":"Leonora Chevin","CompanyName":"Mann LLC","Currency":"IDR","Notes":"mauris vulputate elementum nullam varius nulla facilisi cras non velit nec","Department":"Movies","Website":"purevolume.com","Latitude":-6.4712737,"Longitude":110.8171082,"ShipDate":"9/6/2017","PaymentDate":"2016-04-09 20:48:12","TimeZone":"Asia/Jakarta","TotalPayment":"$868444.96","Status":2,"Type":3,"Actions":null},
                    {"RecordID":21,"OrderID":"64679-154","Country":"Mongolia","ShipCountry":"MN","ShipCity":"Sharga","ShipName":"Kiehn-Bernhard","ShipAddress":"102 Holmberg Park","CompanyEmail":"tseakesk@jigsy.com","CompanyAgent":"Tannie Seakes","CompanyName":"Blanda Group","Currency":"MNT","Notes":"molestie sed justo pellentesque viverra pede ac diam cras pellentesque volutpat dui maecenas tristique est","Department":"Kids","Website":"vimeo.com","Latitude":46.2686934,"Longitude":95.2732977,"ShipDate":"7/31/2016","PaymentDate":"2016-02-13 20:51:30","TimeZone":"Asia/Ulaanbaatar","TotalPayment":"$32940.02","Status":6,"Type":3,"Actions":null},
                    {"RecordID":22,"OrderID":"49348-055","Country":"China","ShipCountry":"CN","ShipCity":"Guxi","ShipName":"Fadel Inc","ShipAddress":"45 Butterfield Street","CompanyEmail":"ywetherelll@webnode.com","CompanyAgent":"Yardley Wetherell","CompanyName":"Gerlach-Schultz","Currency":"CNY","Notes":"turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem duis aliquam","Department":"Shoes","Website":"baidu.com","Latitude":39.909969,"Longitude":116.459299,"ShipDate":"4/3/2017","PaymentDate":"2016-10-22 17:15:35","TimeZone":"Asia/Shanghai","TotalPayment":"$19446.54","Status":2,"Type":2,"Actions":null},
                    {"RecordID":23,"OrderID":"47593-438","Country":"Portugal","ShipCountry":"PT","ShipCity":"Viso","ShipName":"Beier-Jones","ShipAddress":"97 Larry Center","CompanyEmail":"bpeascodm@devhub.com","CompanyAgent":"Bryn Peascod","CompanyName":"Larkin and Sons","Currency":"EUR","Notes":"orci nullam molestie nibh in lectus pellentesque at nulla suspendisse potenti cras in purus","Department":"Health","Website":"constantcontact.com","Latitude":-34.5006776,"Longitude":-58.8072561,"ShipDate":"5/22/2016","PaymentDate":"2016-09-23 21:49:11","TimeZone":"Europe/Lisbon","TotalPayment":"$324446.39","Status":6,"Type":1,"Actions":null},
                    {"RecordID":24,"OrderID":"54569-0175","Country":"Japan","ShipCountry":"JP","ShipCity":"Minato","ShipName":"Bradtke Group","ShipAddress":"077 Hoffman Center","CompanyEmail":"cjeromsonn@ning.com","CompanyAgent":"Chrissie Jeromson","CompanyName":"Brakus-McCullough","Currency":"JPY","Notes":"nisl duis bibendum felis sed interdum venenatis turpis enim blandit mi in porttitor pede justo","Department":"Clothing","Website":"com.com","Latitude":35.6726588,"Longitude":139.7796498,"ShipDate":"11/26/2017","PaymentDate":"2018-02-03 15:23:53","TimeZone":"Asia/Tokyo","TotalPayment":"$425962.52","Status":2,"Type":1,"Actions":null},
                    {"RecordID":25,"OrderID":"0093-1016","Country":"Indonesia","ShipCountry":"ID","ShipCity":"Merdeka","ShipName":"Pfannerstill-Jenkins","ShipAddress":"3150 Cherokee Center","CompanyEmail":"gclampo@vistaprint.com","CompanyAgent":"Gusti Clamp","CompanyName":"Stokes Group","Currency":"IDR","Notes":"a ipsum integer a nibh in quis justo maecenas rhoncus","Department":"Grocery","Website":"nhs.uk","Latitude":-6.9136675,"Longitude":107.6200524,"ShipDate":"4/12/2018","PaymentDate":"2017-10-06 00:23:49","TimeZone":"Asia/Makassar","TotalPayment":"$158287.28","Status":6,"Type":2,"Actions":null},
                    {"RecordID":26,"OrderID":"0093-5142","Country":"China","ShipCountry":"CN","ShipCity":"Jianggao","ShipName":"Romaguera-Greenholt","ShipAddress":"289 Badeau Alley","CompanyEmail":"ojobbinsp@w3.org","CompanyAgent":"Otis Jobbins","CompanyName":"Ruecker, Leffler and Abshire","Currency":"CNY","Notes":"aenean lectus pellentesque eget nunc donec quis orci eget orci vehicula condimentum curabitur in libero ut massa volutpat","Department":"Kids","Website":"mediafire.com","Latitude":23.2905,"Longitude":113.234549,"ShipDate":"3/6/2018","PaymentDate":"2016-01-01 18:08:34","TimeZone":"Asia/Chongqing","TotalPayment":"$429312.02","Status":4,"Type":2,"Actions":null},
                    {"RecordID":27,"OrderID":"51523-026","Country":"Germany","ShipCountry":"DE","ShipCity":"Erfurt","ShipName":"Stanton Group","ShipAddress":"132 Chive Way","CompanyEmail":"lhaycoxq@samsung.com","CompanyAgent":"Lonnie Haycox","CompanyName":"Feest Group","Currency":"EUR","Notes":"lorem vitae mattis nibh ligula nec sem duis aliquam convallis nunc proin at turpis","Department":"Home","Website":"illinois.edu","Latitude":50.9977219,"Longitude":11.0137723,"ShipDate":"4/24/2018","PaymentDate":"2018-04-11 17:08:29","TimeZone":"Europe/Berlin","TotalPayment":"$219889.84","Status":1,"Type":3,"Actions":null},
                    {"RecordID":28,"OrderID":"49035-522","Country":"Australia","ShipCountry":"AU","ShipCity":"Eastern Suburbs Mc","ShipName":"Gleichner-Lebsack","ShipAddress":"074 Algoma Drive","CompanyEmail":"hcastellir@nationalgeographic.com","CompanyAgent":"Heddi Castelli","CompanyName":"Kessler and Sons","Currency":"AUD","Notes":"arcu sed augue aliquam erat volutpat in congue etiam justo etiam pretium iaculis","Department":"Games","Website":"devhub.com","Latitude":-33.93274,"Longitude":151.188577,"ShipDate":"1/12/2017","PaymentDate":"2016-11-06 16:45:53","TimeZone":"Australia/Sydney","TotalPayment":"$149602.82","Status":5,"Type":1,"Actions":null},
                    {"RecordID":29,"OrderID":"58411-198","Country":"Ethiopia","ShipCountry":"ET","ShipCity":"Kombolcha","ShipName":"Auer Group","ShipAddress":"91066 Amoth Court","CompanyEmail":"todowgaines@princeton.edu","CompanyAgent":"Tuck O'Dowgaine","CompanyName":"Simonis, Rowe and Davis","Currency":"ETB","Notes":"nullam varius nulla facilisi cras non velit nec nisi vulputate nonummy maecenas tincidunt","Department":"Shoes","Website":"wix.com","Latitude":11.0849336,"Longitude":39.7291837,"ShipDate":"5/6/2017","PaymentDate":"2017-05-06 01:25:56","TimeZone":"Africa/Addis_Ababa","TotalPayment":"$1019002.66","Status":1,"Type":1,"Actions":null},
                    {"RecordID":30,"OrderID":"27495-006","Country":"Portugal","ShipCountry":"PT","ShipCity":"Arrifes","ShipName":"Von LLC","ShipAddress":"3 Fairfield Junction","CompanyEmail":"vcoshamt@simplemachines.org","CompanyAgent":"Vernon Cosham","CompanyName":"Kreiger-Nicolas","Currency":"EUR","Notes":"id ligula suspendisse ornare consequat lectus in est risus auctor sed tristique in tempus sit amet","Department":"Movies","Website":"jimdo.com","Latitude":37.760365,"Longitude":-25.7013016,"ShipDate":"2/8/2017","PaymentDate":"2017-07-22 18:32:31","TimeZone":"Africa/Accra","TotalPayment":"$179291.15","Status":4,"Type":2,"Actions":null},
                    {"RecordID":31,"OrderID":"55154-8284","Country":"Philippines","ShipCountry":"PH","ShipCity":"Talisay","ShipName":"McCullough, Okuneva and Heidenreich","ShipAddress":"09 Sachtjen Junction","CompanyEmail":"bmaccrackenu@hostgator.com","CompanyAgent":"Bryna MacCracken","CompanyName":"Hyatt-Witting","Currency":"PHP","Notes":"rutrum nulla nunc purus phasellus in felis donec semper sapien a libero","Department":"Games","Website":"so-net.ne.jp","Latitude":14.5618599,"Longitude":121.0130439,"ShipDate":"7/22/2017","PaymentDate":"2017-09-03 22:56:12","TimeZone":"Asia/Manila","TotalPayment":"$26257.28","Status":2,"Type":1,"Actions":null},
                    {"RecordID":32,"OrderID":"62678-207","Country":"Libya","ShipCountry":"LY","ShipCity":"Zuwārah","ShipName":"Boehm-Schaden","ShipAddress":"82 Thackeray Pass","CompanyEmail":"farnallv@vistaprint.com","CompanyAgent":"Freda Arnall","CompanyName":"Dicki, Morar and Stiedemann","Currency":"LYD","Notes":"cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus etiam vel","Department":"Kids","Website":"vinaora.com","Latitude":32.9234588,"Longitude":12.0775411,"ShipDate":"7/22/2016","PaymentDate":"2017-02-12 23:45:54","TimeZone":"Africa/Tripoli","TotalPayment":"$249720.68","Status":3,"Type":3,"Actions":null},
                    {"RecordID":33,"OrderID":"68428-725","Country":"China","ShipCountry":"CN","ShipCity":"Zhangcun","ShipName":"Ratke and Sons","ShipAddress":"3 Goodland Terrace","CompanyEmail":"pkringew@usatoday.com","CompanyAgent":"Pavel Kringe","CompanyName":"Goldner-Lehner","Currency":"CNY","Notes":"blandit lacinia erat vestibulum sed magna at nunc commodo placerat praesent blandit nam nulla integer pede justo lacinia","Department":"Jewelery","Website":"rediff.com","Latitude":43.817071,"Longitude":125.323544,"ShipDate":"4/2/2017","PaymentDate":"2016-09-13 14:29:40","TimeZone":"Asia/Shanghai","TotalPayment":"$593538.58","Status":4,"Type":1,"Actions":null},
                    {"RecordID":34,"OrderID":"0363-0724","Country":"Morocco","ShipCountry":"MA","ShipCity":"Temara","ShipName":"Hegmann, Gleason and Stehr","ShipAddress":"9550 Weeping Birch Crossing","CompanyEmail":"fnazaretx@si.edu","CompanyAgent":"Felix Nazaret","CompanyName":"Waters, Quigley and Keeling","Currency":"MAD","Notes":"amet erat nulla tempus vivamus in felis eu sapien cursus vestibulum proin eu mi nulla ac","Department":"Home","Website":"icio.us","Latitude":33.9278354,"Longitude":-6.9051819,"ShipDate":"6/4/2016","PaymentDate":"2016-06-13 16:43:18","TimeZone":"Africa/Casablanca","TotalPayment":"$285288.32","Status":5,"Type":3,"Actions":null},
                    {"RecordID":35,"OrderID":"37000-102","Country":"Paraguay","ShipCountry":"PY","ShipCity":"Los Cedrales","ShipName":"Gulgowski, Wyman and Larson","ShipAddress":"1 Ridge Oak Way","CompanyEmail":"pallanbyy@discovery.com","CompanyAgent":"Penrod Allanby","CompanyName":"Rodriguez Group","Currency":"PYG","Notes":"non quam nec dui luctus rutrum nulla tellus in sagittis dui vel nisl duis ac nibh fusce lacus purus","Department":"Shoes","Website":"amazon.de","Latitude":-25.6707073,"Longitude":-54.7412036,"ShipDate":"3/5/2018","PaymentDate":"2016-04-08 12:12:36","TimeZone":"America/Argentina/Cordoba","TotalPayment":"$827488.58","Status":2,"Type":3,"Actions":null},
                    {"RecordID":36,"OrderID":"55289-002","Country":"Philippines","ShipCountry":"PH","ShipCity":"Dologon","ShipName":"Prosacco-Bradtke","ShipAddress":"9 Vidon Terrace","CompanyEmail":"hpassbyz@wikimedia.org","CompanyAgent":"Hubey Passby","CompanyName":"Lemke-Hermiston","Currency":"PHP","Notes":"in hac habitasse platea dictumst maecenas ut massa quis augue luctus","Department":"Kids","Website":"ox.ac.uk","Latitude":7.7601925,"Longitude":125.0095225,"ShipDate":"6/29/2017","PaymentDate":"2017-10-04 13:26:41","TimeZone":"Asia/Manila","TotalPayment":"$293714.61","Status":2,"Type":3,"Actions":null},
                    {"RecordID":37,"OrderID":"15127-874","Country":"Tanzania","ShipCountry":"TZ","ShipCity":"Nanganga","ShipName":"Kozey-Okuneva","ShipAddress":"33 Anniversary Parkway","CompanyEmail":"mrotlauf10@naver.com","CompanyAgent":"Magdaia Rotlauf","CompanyName":"Hettinger, Medhurst and Heaney","Currency":"TZS","Notes":"fermentum justo nec condimentum neque sapien placerat ante nulla justo aliquam quis turpis eget","Department":"Beauty","Website":"wikipedia.org","Latitude":-10.3931514,"Longitude":39.1361568,"ShipDate":"2/18/2018","PaymentDate":"2016-08-06 20:08:36","TimeZone":"Africa/Dar_es_Salaam","TotalPayment":"$290437.32","Status":3,"Type":1,"Actions":null},
                    {"RecordID":38,"OrderID":"49349-123","Country":"Indonesia","ShipCountry":"ID","ShipCity":"Pule","ShipName":"Kuphal Group","ShipAddress":"77292 Bonner Plaza","CompanyEmail":"alawrance11@un.org","CompanyAgent":"Alfonse Lawrance","CompanyName":"Schuppe-Harber","Currency":"IDR","Notes":"eu est congue elementum in hac habitasse platea dictumst morbi vestibulum velit id pretium iaculis diam erat fermentum justo","Department":"Grocery","Website":"washingtonpost.com","Latitude":-8.135667,"Longitude":111.5349059,"ShipDate":"4/14/2017","PaymentDate":"2016-04-22 18:11:42","TimeZone":"Asia/Jakarta","TotalPayment":"$722591.83","Status":1,"Type":3,"Actions":null},
                    {"RecordID":39,"OrderID":"17089-415","Country":"Palestinian Territory","ShipCountry":"PS","ShipCity":"Za‘tarah","ShipName":"Ratke, Schoen and Mitchell","ShipAddress":"42806 Ridgeview Terrace","CompanyEmail":"kchettoe12@zdnet.com","CompanyAgent":"Kessiah Chettoe","CompanyName":"Mraz LLC","Currency":"ILS","Notes":"sit amet nulla quisque arcu libero rutrum ac lobortis vel dapibus at","Department":"Automotive","Website":"soundcloud.com","Latitude":"31.67361","Longitude":"35.25662","ShipDate":"3/4/2017","PaymentDate":"2016-06-10 04:20:27","TimeZone":"Asia/Hebron","TotalPayment":"$503984.70","Status":5,"Type":2,"Actions":null},
                    {"RecordID":40,"OrderID":"51327-510","Country":"Philippines","ShipCountry":"PH","ShipCity":"Esperanza","ShipName":"Schneider-Weimann","ShipAddress":"4 Linden Court","CompanyEmail":"nfairbanks13@geocities.com","CompanyAgent":"Natka Fairbanks","CompanyName":"Mueller-Greenholt","Currency":"PHP","Notes":"faucibus orci luctus et ultrices posuere cubilia curae donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin mi sit amet","Department":"Health","Website":"is.gd","Latitude":14.7342524,"Longitude":121.0702642,"ShipDate":"6/21/2017","PaymentDate":"2016-02-21 01:30:35","TimeZone":"Asia/Manila","TotalPayment":"$89700.35","Status":3,"Type":3,"Actions":null},
                    {"RecordID":41,"OrderID":"0187-2201","Country":"Brazil","ShipCountry":"BR","ShipCity":"Rio das Ostras","ShipName":"Leffler LLC","ShipAddress":"5722 Buhler Place","CompanyEmail":"spuvia14@alexa.com","CompanyAgent":"Shaw Puvia","CompanyName":"Veum LLC","Currency":"BRL","Notes":"donec diam neque vestibulum eget vulputate ut ultrices vel augue vestibulum ante ipsum primis in faucibus orci luctus et ultrices","Department":"Electronics","Website":"slate.com","Latitude":-22.4206096,"Longitude":-41.8625084,"ShipDate":"6/10/2017","PaymentDate":"2016-04-21 02:47:05","TimeZone":"America/Sao_Paulo","TotalPayment":"$340528.17","Status":3,"Type":2,"Actions":null},
                    {"RecordID":42,"OrderID":"16590-890","Country":"Indonesia","ShipCountry":"ID","ShipCity":"Krajan Gajahmati","ShipName":"Botsford-Bailey","ShipAddress":"54 Corry Street","CompanyEmail":"adingate15@furl.net","CompanyAgent":"Alden Dingate","CompanyName":"Heidenreich Inc","Currency":"IDR","Notes":"lorem quisque ut erat curabitur gravida nisi at nibh in hac habitasse platea dictumst aliquam augue quam sollicitudin vitae consectetuer","Department":"Sports","Website":"vinaora.com","Latitude":"-6.7618","Longitude":"111.046","ShipDate":"10/27/2016","PaymentDate":"2016-12-21 20:34:45","TimeZone":"Asia/Jakarta","TotalPayment":"$1018206.84","Status":5,"Type":1,"Actions":null},
                    {"RecordID":43,"OrderID":"75862-001","Country":"Indonesia","ShipCountry":"ID","ShipCity":"Pineleng","ShipName":"Yundt-Mohr","ShipAddress":"4 Messerschmidt Point","CompanyEmail":"cpeplay16@typepad.com","CompanyAgent":"Cherish Peplay","CompanyName":"McCullough-Gibson","Currency":"IDR","Notes":"molestie lorem quisque ut erat curabitur gravida nisi at nibh in hac habitasse","Department":"Baby","Website":"hp.com","Latitude":1.4162396,"Longitude":124.8072165,"ShipDate":"11/23/2017","PaymentDate":"2017-02-21 04:41:53","TimeZone":"Asia/Makassar","TotalPayment":"$808912.57","Status":2,"Type":2,"Actions":null},
                    {"RecordID":44,"OrderID":"24559-091","Country":"Philippines","ShipCountry":"PH","ShipCity":"Amuñgan","ShipName":"Graham, Aufderhar and Mosciski","ShipAddress":"5470 Forest Parkway","CompanyEmail":"nswetman17@washington.edu","CompanyAgent":"Nedi Swetman","CompanyName":"Gerhold Inc","Currency":"PHP","Notes":"curabitur gravida nisi at nibh in hac habitasse platea dictumst aliquam augue","Department":"Electronics","Website":"moonfruit.com","Latitude":15.4004052,"Longitude":119.9303933,"ShipDate":"3/23/2017","PaymentDate":"2018-04-20 14:50:29","TimeZone":"Asia/Manila","TotalPayment":"$1059885.70","Status":5,"Type":1,"Actions":null},
                    {"RecordID":45,"OrderID":"0007-3230","Country":"Russia","ShipCountry":"RU","ShipCity":"Bilyarsk","ShipName":"Kuhlman-Bosco","ShipAddress":"5899 Basil Place","CompanyEmail":"ablick18@pinterest.com","CompanyAgent":"Ashley Blick","CompanyName":"Cummings-Goodwin","Currency":"RUB","Notes":"porttitor id consequat in consequat ut nulla sed accumsan felis ut","Department":"Electronics","Website":"hubpages.com","Latitude":54.9794837,"Longitude":50.3850925,"ShipDate":"10/1/2016","PaymentDate":"2016-01-07 03:02:49","TimeZone":"Europe/Moscow","TotalPayment":"$902481.80","Status":4,"Type":2,"Actions":null},
                    {"RecordID":46,"OrderID":"50184-1029","Country":"Peru","ShipCountry":"PE","ShipCity":"Chocope","ShipName":"Boyle Inc","ShipAddress":"65560 Daystar Center","CompanyEmail":"sharmant19@springer.com","CompanyAgent":"Saunders Harmant","CompanyName":"O'Kon-Wiegand","Currency":"PEN","Notes":"lobortis ligula sit amet eleifend pede libero quis orci nullam molestie nibh in lectus pellentesque","Department":"Industrial","Website":"irs.gov","Latitude":-7.7911198,"Longitude":-79.2197376,"ShipDate":"11/7/2017","PaymentDate":"2016-06-30 20:59:52","TimeZone":"America/Lima","TotalPayment":"$43543.06","Status":3,"Type":2,"Actions":null},
                    {"RecordID":47,"OrderID":"10819-6003","Country":"France","ShipCountry":"FR","ShipCity":"Rivesaltes","ShipName":"Stiedemann-Weissnat","ShipAddress":"4981 Springs Center","CompanyEmail":"mlaurencot1a@google.com","CompanyAgent":"Mellisa Laurencot","CompanyName":"Jacobs Group","Currency":"EUR","Notes":"vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae nulla dapibus dolor vel est","Department":"Movies","Website":"people.com.cn","Latitude":42.8271637,"Longitude":2.9134412,"ShipDate":"10/30/2017","PaymentDate":"2017-09-21 03:09:00","TimeZone":"Europe/Paris","TotalPayment":"$955141.22","Status":1,"Type":1,"Actions":null},
                    {"RecordID":48,"OrderID":"62750-003","Country":"Mongolia","ShipCountry":"MN","ShipCity":"Jargalant","ShipName":"Corkery LLC","ShipAddress":"94 Rutledge Way","CompanyEmail":"omyderscough1b@printfriendly.com","CompanyAgent":"Orland Myderscough","CompanyName":"Gutkowski Inc","Currency":"MNT","Notes":"mus vivamus vestibulum sagittis sapien cum sociis natoque penatibus et","Department":"Tools","Website":"globo.com","Latitude":48.7277622,"Longitude":100.7724281,"ShipDate":"11/2/2016","PaymentDate":"2017-10-07 16:51:28","TimeZone":"Asia/Ulaanbaatar","TotalPayment":"$1153329.47","Status":5,"Type":3,"Actions":null},
                    {"RecordID":49,"OrderID":"68647-122","Country":"Philippines","ShipCountry":"PH","ShipCity":"Cardona","ShipName":"Von and Sons","ShipAddress":"4765 Service Hill","CompanyEmail":"diglesias1c@usa.gov","CompanyAgent":"Devi Iglesias","CompanyName":"Ullrich-Dibbert","Currency":"PHP","Notes":"ac enim in tempor turpis nec euismod scelerisque quam turpis adipiscing lorem","Department":"Books","Website":"youtu.be","Latitude":14.5716986,"Longitude":121.026941,"ShipDate":"7/21/2016","PaymentDate":"2016-01-27 19:47:42","TimeZone":"Asia/Manila","TotalPayment":"$709598.48","Status":1,"Type":1,"Actions":null},
                    {"RecordID":50,"OrderID":"36987-3093","Country":"China","ShipCountry":"CN","ShipCity":"Jiantou","ShipName":"Gusikowski-Kunze","ShipAddress":"373 Northwestern Plaza","CompanyEmail":"btummasutti1d@google.es","CompanyAgent":"Bliss Tummasutti","CompanyName":"Legros-Cummings","Currency":"CNY","Notes":"praesent lectus vestibulum quam sapien varius ut blandit non interdum in ante vestibulum ante ipsum primis in faucibus orci","Department":"Sports","Website":"dagondesign.com","Latitude":24.052487,"Longitude":114.701871,"ShipDate":"11/27/2017","PaymentDate":"2017-10-02 09:08:03","TimeZone":"Asia/Chongqing","TotalPayment":"$504721.84","Status":5,"Type":1,"Actions":null},
                    {"RecordID":51,"OrderID":"37808-467","Country":"United States","ShipCountry":"US","ShipCity":"Aurora","ShipName":"Pouros-Durgan","ShipAddress":"524 Northview Center","CompanyEmail":"mhostan1e@army.mil","CompanyAgent":"Modesty Hostan","CompanyName":"Kunde-Bernhard","Currency":"USD","Notes":"sit amet diam in magna bibendum imperdiet nullam orci pede venenatis non","Department":"Sports","Website":"economist.com","Latitude":39.6599999,"Longitude":-104.84,"ShipDate":"11/14/2017","PaymentDate":"2017-11-27 04:56:44","TimeZone":"America/Denver","TotalPayment":"$1050201.62","Status":1,"Type":3,"Actions":null},
                    {"RecordID":52,"OrderID":"64679-172","Country":"Indonesia","ShipCountry":"ID","ShipCity":"Kimaam","ShipName":"D'Amore, DuBuque and Koepp","ShipAddress":"2945 Crest Line Place","CompanyEmail":"cmickan1f@ihg.com","CompanyAgent":"Caroljean Mickan","CompanyName":"Steuber-Johnston","Currency":"IDR","Notes":"sollicitudin vitae consectetuer eget rutrum at lorem integer tincidunt ante vel ipsum praesent blandit","Department":"Shoes","Website":"google.es","Latitude":-7.9613539,"Longitude":138.7995122,"ShipDate":"9/8/2016","PaymentDate":"2017-06-01 16:35:54","TimeZone":"Pacific/Port_Moresby","TotalPayment":"$55079.08","Status":5,"Type":3,"Actions":null},
                    {"RecordID":53,"OrderID":"50633-210","Country":"China","ShipCountry":"CN","ShipCity":"Jishigang","ShipName":"Paucek, Predovic and Kuhlman","ShipAddress":"2931 Sherman Road","CompanyEmail":"tcunney1g@hibu.com","CompanyAgent":"Ted Cunney","CompanyName":"Kessler LLC","Currency":"CNY","Notes":"non mauris morbi non lectus aliquam sit amet diam in magna bibendum imperdiet nullam orci","Department":"Clothing","Website":"quantcast.com","Latitude":29.861346,"Longitude":121.448134,"ShipDate":"4/7/2016","PaymentDate":"2017-11-08 21:45:58","TimeZone":"Asia/Shanghai","TotalPayment":"$793647.86","Status":6,"Type":3,"Actions":null},
                    {"RecordID":54,"OrderID":"0409-2687","Country":"Colombia","ShipCountry":"CO","ShipCity":"Sabaneta","ShipName":"Bogisich, Kohler and Kessler","ShipAddress":"462 Pepper Wood Crossing","CompanyEmail":"nenriquez1h@baidu.com","CompanyAgent":"Nicolea Enriquez","CompanyName":"Tillman-Satterfield","Currency":"COP","Notes":"nisi volutpat eleifend donec ut dolor morbi vel lectus in quam fringilla rhoncus mauris enim","Department":"Toys","Website":"amazon.de","Latitude":6.1307505,"Longitude":-75.6033497,"ShipDate":"7/17/2017","PaymentDate":"2017-11-27 23:10:40","TimeZone":"America/Bogota","TotalPayment":"$209228.99","Status":2,"Type":2,"Actions":null},
                    {"RecordID":55,"OrderID":"59800-0107","Country":"South Africa","ShipCountry":"ZA","ShipCity":"Orkney","ShipName":"Jast Inc","ShipAddress":"9411 Hauk Junction","CompanyEmail":"plamie1i@sbwire.com","CompanyAgent":"Prisca L'Amie","CompanyName":"Gerlach-Schmitt","Currency":"ZAR","Notes":"enim in tempor turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh","Department":"Shoes","Website":"biblegateway.com","Latitude":-26.99776,"Longitude":26.67672,"ShipDate":"7/24/2017","PaymentDate":"2016-06-08 06:15:16","TimeZone":"Africa/Johannesburg","TotalPayment":"$190329.43","Status":4,"Type":2,"Actions":null},
                    {"RecordID":56,"OrderID":"41163-367","Country":"Brazil","ShipCountry":"BR","ShipCity":"Jardim do Seridó","ShipName":"Mann, Johns and Kirlin","ShipAddress":"942 Marquette Trail","CompanyEmail":"mchazelle1j@weather.com","CompanyAgent":"Mavis Chazelle","CompanyName":"Rodriguez, Berge and Rempel","Currency":"BRL","Notes":"luctus cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus vivamus vestibulum sagittis sapien","Department":"Computers","Website":"sitemeter.com","Latitude":-6.5843262,"Longitude":-36.7731681,"ShipDate":"2/6/2017","PaymentDate":"2017-01-26 11:16:40","TimeZone":"America/Fortaleza","TotalPayment":"$781154.52","Status":1,"Type":2,"Actions":null},
                    {"RecordID":57,"OrderID":"42291-236","Country":"Eritrea","ShipCountry":"ER","ShipCity":"Massawa","ShipName":"Kris-Wiegand","ShipAddress":"2 Artisan Place","CompanyEmail":"ncelier1k@bluehost.com","CompanyAgent":"Nikki Celier","CompanyName":"Kuphal Inc","Currency":"ERN","Notes":"curae nulla dapibus dolor vel est donec odio justo sollicitudin ut suscipit a feugiat et eros vestibulum","Department":"Garden","Website":"spotify.com","Latitude":15.607875,"Longitude":39.4553839,"ShipDate":"12/12/2016","PaymentDate":"2016-02-03 09:28:11","TimeZone":"Africa/Asmara","TotalPayment":"$1149458.13","Status":5,"Type":2,"Actions":null},
                    {"RecordID":58,"OrderID":"63029-455","Country":"Indonesia","ShipCountry":"ID","ShipCity":"Kotabaru","ShipName":"Zulauf-Jakubowski","ShipAddress":"91 Hanover Alley","CompanyEmail":"dtremoille1l@goo.ne.jp","CompanyAgent":"Dennison Tremoille","CompanyName":"Hermiston LLC","Currency":"IDR","Notes":"a suscipit nulla elit ac nulla sed vel enim sit amet nunc viverra","Department":"Kids","Website":"google.nl","Latitude":-3.0029841,"Longitude":115.9467997,"ShipDate":"11/28/2016","PaymentDate":"2016-08-10 15:18:56","TimeZone":"Asia/Makassar","TotalPayment":"$285980.44","Status":2,"Type":1,"Actions":null},
                    {"RecordID":59,"OrderID":"68084-505","Country":"Poland","ShipCountry":"PL","ShipCity":"Łukowa","ShipName":"Harber-Kilback","ShipAddress":"633 Shasta Point","CompanyEmail":"tbelli1m@a8.net","CompanyAgent":"Tamar Belli","CompanyName":"McGlynn, Schuster and Streich","Currency":"PLN","Notes":"sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae nulla dapibus","Department":"Electronics","Website":"state.tx.us","Latitude":50.4011293,"Longitude":22.904714,"ShipDate":"2/15/2017","PaymentDate":"2017-07-11 08:24:34","TimeZone":"Europe/Warsaw","TotalPayment":"$381565.45","Status":2,"Type":2,"Actions":null},
                    {"RecordID":60,"OrderID":"76394-3812","Country":"Indonesia","ShipCountry":"ID","ShipCity":"Karangpari","ShipName":"Greenfelder-Skiles","ShipAddress":"49 Monica Pass","CompanyEmail":"erosier1n@about.me","CompanyAgent":"Edy Rosier","CompanyName":"Spencer LLC","Currency":"IDR","Notes":"ultrices phasellus id sapien in sapien iaculis congue vivamus metus arcu adipiscing molestie hendrerit at vulputate vitae nisl aenean","Department":"Electronics","Website":"feedburner.com","Latitude":-7.2489098,"Longitude":108.48102,"ShipDate":"4/2/2016","PaymentDate":"2016-05-01 12:43:08","TimeZone":"Asia/Jakarta","TotalPayment":"$565829.97","Status":3,"Type":1,"Actions":null},
                    {"RecordID":61,"OrderID":"62011-0239","Country":"Indonesia","ShipCountry":"ID","ShipCity":"Aegela","ShipName":"Oberbrunner-Wisozk","ShipAddress":"3 Thackeray Street","CompanyEmail":"jde1o@intel.com","CompanyAgent":"Jonathon De Witt","CompanyName":"Kovacek-Breitenberg","Currency":"IDR","Notes":"vitae nisl aenean lectus pellentesque eget nunc donec quis orci eget orci vehicula condimentum curabitur","Department":"Health","Website":"skyrock.com","Latitude":-6.2568393,"Longitude":106.855853,"ShipDate":"3/28/2018","PaymentDate":"2016-12-28 06:44:39","TimeZone":"Asia/Makassar","TotalPayment":"$1047127.54","Status":5,"Type":2,"Actions":null},
                    {"RecordID":62,"OrderID":"52686-331","Country":"Portugal","ShipCountry":"PT","ShipCity":"Azurva","ShipName":"Halvorson Group","ShipAddress":"2006 Kedzie Trail","CompanyEmail":"bbahl1p@tamu.edu","CompanyAgent":"Brietta Bahl","CompanyName":"Hyatt, Johns and Murphy","Currency":"EUR","Notes":"phasellus sit amet erat nulla tempus vivamus in felis eu sapien","Department":"Clothing","Website":"yellowbook.com","Latitude":40.6390928,"Longitude":-8.5992965,"ShipDate":"6/29/2017","PaymentDate":"2017-01-19 10:55:35","TimeZone":"Europe/Lisbon","TotalPayment":"$931885.06","Status":5,"Type":3,"Actions":null},
                    {"RecordID":63,"OrderID":"67457-303","Country":"Sweden","ShipCountry":"SE","ShipCity":"Värnamo","ShipName":"Kemmer-Luettgen","ShipAddress":"3580 Utah Street","CompanyEmail":"jstather1q@shutterfly.com","CompanyAgent":"Joete Stather","CompanyName":"Hane Group","Currency":"SEK","Notes":"etiam faucibus cursus urna ut tellus nulla ut erat id","Department":"Games","Website":"google.fr","Latitude":57.1734042,"Longitude":14.0299287,"ShipDate":"7/18/2017","PaymentDate":"2016-06-21 14:46:57","TimeZone":"Europe/Stockholm","TotalPayment":"$571015.84","Status":3,"Type":3,"Actions":null},
                    {"RecordID":64,"OrderID":"76439-104","Country":"Poland","ShipCountry":"PL","ShipCity":"Ostaszewo","ShipName":"Turcotte, Runte and Smitham","ShipAddress":"2 2nd Crossing","CompanyEmail":"adartnall1r@homestead.com","CompanyAgent":"Alaster Dartnall","CompanyName":"Botsford Inc","Currency":"PLN","Notes":"nunc rhoncus dui vel sem sed sagittis nam congue risus semper porta volutpat","Department":"Beauty","Website":"sitemeter.com","Latitude":54.2207765,"Longitude":18.9709477,"ShipDate":"7/8/2016","PaymentDate":"2016-11-28 06:49:43","TimeZone":"Europe/Warsaw","TotalPayment":"$240722.57","Status":4,"Type":2,"Actions":null},
                    {"RecordID":65,"OrderID":"57520-0268","Country":"Indonesia","ShipCountry":"ID","ShipCity":"Wirodayan","ShipName":"Ondricka and Sons","ShipAddress":"522 Glacier Hill Drive","CompanyEmail":"lcubin1s@hp.com","CompanyAgent":"Luci Cubin","CompanyName":"Kshlerin Group","Currency":"IDR","Notes":"curabitur convallis duis consequat dui nec nisi volutpat eleifend donec ut dolor morbi","Department":"Automotive","Website":"csmonitor.com","Latitude":"-8.2133","Longitude":"114.3701","ShipDate":"5/20/2016","PaymentDate":"2017-11-05 18:47:26","TimeZone":"Asia/Makassar","TotalPayment":"$335708.77","Status":4,"Type":3,"Actions":null},
                    {"RecordID":66,"OrderID":"11673-873","Country":"Philippines","ShipCountry":"PH","ShipCity":"Guinsang-an","ShipName":"Bergnaum, Erdman and Kreiger","ShipAddress":"608 Anthes Court","CompanyEmail":"fhame1t@tinyurl.com","CompanyAgent":"Florian Hame","CompanyName":"Waelchi, Emmerich and Mann","Currency":"PHP","Notes":"sapien cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus etiam vel augue vestibulum rutrum rutrum","Department":"Electronics","Website":"dailymotion.com","Latitude":6.4791846,"Longitude":124.6644348,"ShipDate":"2/2/2017","PaymentDate":"2018-01-08 10:16:06","TimeZone":"Asia/Manila","TotalPayment":"$262431.14","Status":1,"Type":1,"Actions":null},
                    {"RecordID":67,"OrderID":"0378-2537","Country":"China","ShipCountry":"CN","ShipCity":"Xinpo","ShipName":"Stanton LLC","ShipAddress":"875 Coleman Street","CompanyEmail":"cjordin1u@1688.com","CompanyAgent":"Consalve Jordin","CompanyName":"Crona Group","Currency":"CNY","Notes":"suscipit nulla elit ac nulla sed vel enim sit amet nunc","Department":"Garden","Website":"icio.us","Latitude":29.536212,"Longitude":104.189955,"ShipDate":"4/25/2017","PaymentDate":"2017-07-09 07:22:31","TimeZone":"Asia/Chongqing","TotalPayment":"$811111.63","Status":6,"Type":2,"Actions":null},
                    {"RecordID":68,"OrderID":"68745-2016","Country":"China","ShipCountry":"CN","ShipCity":"Shahe","ShipName":"Lebsack Inc","ShipAddress":"3 Sutherland Drive","CompanyEmail":"ccheetham1v@fc2.com","CompanyAgent":"Carmencita Cheetham","CompanyName":"Kreiger, Donnelly and Doyle","Currency":"CNY","Notes":"nulla suscipit ligula in lacus curabitur at ipsum ac tellus semper interdum mauris ullamcorper purus sit","Department":"Tools","Website":"shutterfly.com","Latitude":36.854929,"Longitude":114.503339,"ShipDate":"11/11/2017","PaymentDate":"2018-05-30 10:59:21","TimeZone":"Asia/Chongqing","TotalPayment":"$341571.37","Status":1,"Type":1,"Actions":null},
                    {"RecordID":69,"OrderID":"30142-341","Country":"France","ShipCountry":"FR","ShipCity":"Moulins","ShipName":"Hauck-Yundt","ShipAddress":"54 Hoffman Trail","CompanyEmail":"hstatton1w@about.me","CompanyAgent":"Helaina Statton","CompanyName":"Schneider, Ullrich and Schmitt","Currency":"EUR","Notes":"in hac habitasse platea dictumst etiam faucibus cursus urna ut tellus nulla ut erat","Department":"Jewelery","Website":"psu.edu","Latitude":43.6164958,"Longitude":3.8308136,"ShipDate":"1/9/2018","PaymentDate":"2016-06-15 20:55:14","TimeZone":"Europe/Paris","TotalPayment":"$870418.71","Status":5,"Type":3,"Actions":null},
                    {"RecordID":70,"OrderID":"65121-001","Country":"Philippines","ShipCountry":"PH","ShipCity":"Tarragona","ShipName":"Abernathy, O'Conner and Toy","ShipAddress":"44 South Avenue","CompanyEmail":"olambal1x@hc360.com","CompanyAgent":"Olia Lambal","CompanyName":"Hills, Hyatt and Weber","Currency":"PHP","Notes":"blandit ultrices enim lorem ipsum dolor sit amet consectetuer adipiscing elit proin interdum mauris","Department":"Games","Website":"odnoklassniki.ru","Latitude":7.0389957,"Longitude":126.4497814,"ShipDate":"6/14/2017","PaymentDate":"2017-05-31 02:05:39","TimeZone":"Asia/Manila","TotalPayment":"$599553.31","Status":5,"Type":2,"Actions":null},
                    {"RecordID":71,"OrderID":"37000-613","Country":"Tanzania","ShipCountry":"TZ","ShipCity":"Kabanga","ShipName":"Reynolds, Rosenbaum and Donnelly","ShipAddress":"13 Lindbergh Alley","CompanyEmail":"kkeele1y@google.com.hk","CompanyAgent":"Kippy Keele","CompanyName":"Stark, Nader and Dare","Currency":"TZS","Notes":"ultrices enim lorem ipsum dolor sit amet consectetuer adipiscing elit proin interdum mauris","Department":"Electronics","Website":"netlog.com","Latitude":-2.6382189,"Longitude":30.4674459,"ShipDate":"9/11/2017","PaymentDate":"2017-08-17 19:31:33","TimeZone":"Africa/Dar_es_Salaam","TotalPayment":"$568939.41","Status":3,"Type":2,"Actions":null},
                    {"RecordID":72,"OrderID":"54868-2390","Country":"Colombia","ShipCountry":"CO","ShipCity":"Montenegro","ShipName":"Windler Group","ShipAddress":"33570 1st Place","CompanyEmail":"jpunchard1z@biglobe.ne.jp","CompanyAgent":"Justin Punchard","CompanyName":"Bartoletti LLC","Currency":"COP","Notes":"vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae duis faucibus accumsan odio curabitur convallis duis","Department":"Clothing","Website":"comsenz.com","Latitude":4.566637,"Longitude":-75.75012,"ShipDate":"4/30/2016","PaymentDate":"2017-05-30 09:39:06","TimeZone":"America/Bogota","TotalPayment":"$240016.26","Status":3,"Type":3,"Actions":null},
                    {"RecordID":73,"OrderID":"25225-014","Country":"Portugal","ShipCountry":"PT","ShipCity":"Recarei","ShipName":"Daniel-Gutkowski","ShipAddress":"46 Ludington Plaza","CompanyEmail":"mprendiville20@sciencedirect.com","CompanyAgent":"Madalena Prendiville","CompanyName":"Kunde, Ratke and Von","Currency":"EUR","Notes":"odio curabitur convallis duis consequat dui nec nisi volutpat eleifend donec ut dolor morbi vel lectus in quam fringilla","Department":"Tools","Website":"newyorker.com","Latitude":41.1572852,"Longitude":-8.434873,"ShipDate":"5/21/2017","PaymentDate":"2016-01-18 05:02:24","TimeZone":"Europe/Lisbon","TotalPayment":"$565335.30","Status":5,"Type":2,"Actions":null},
                    {"RecordID":74,"OrderID":"57344-123","Country":"Greece","ShipCountry":"GR","ShipCity":"Kérkyra","ShipName":"Daniel-Schaden","ShipAddress":"549 Acker Alley","CompanyEmail":"zwalework21@hud.gov","CompanyAgent":"Zita Walework","CompanyName":"Von, Stanton and Zieme","Currency":"EUR","Notes":"lobortis convallis tortor risus dapibus augue vel accumsan tellus nisi eu orci mauris lacinia sapien quis","Department":"Games","Website":"japanpost.jp","Latitude":39.6242621,"Longitude":19.9216777,"ShipDate":"2/18/2018","PaymentDate":"2017-05-27 06:45:19","TimeZone":"Europe/Athens","TotalPayment":"$568880.03","Status":3,"Type":3,"Actions":null},
                    {"RecordID":75,"OrderID":"57955-5851","Country":"France","ShipCountry":"FR","ShipCity":"Maisons-Alfort","ShipName":"McClure, Stoltenberg and Schuster","ShipAddress":"8 Bluejay Drive","CompanyEmail":"cwisedale22@skype.com","CompanyAgent":"Chick Wisedale","CompanyName":"Jacobson-Yundt","Currency":"EUR","Notes":"pede libero quis orci nullam molestie nibh in lectus pellentesque at nulla","Department":"Music","Website":"theatlantic.com","Latitude":48.8039832,"Longitude":2.4347009,"ShipDate":"8/12/2017","PaymentDate":"2016-09-11 12:10:25","TimeZone":"Europe/Paris","TotalPayment":"$995039.87","Status":2,"Type":1,"Actions":null},
                    {"RecordID":76,"OrderID":"0781-1345","Country":"East Timor","ShipCountry":"TL","ShipCity":"Maliana","ShipName":"Swaniawski, Carter and Hirthe","ShipAddress":"45504 Canary Plaza","CompanyEmail":"efeldman23@mapy.cz","CompanyAgent":"Eleni Feldman","CompanyName":"Osinski LLC","Currency":"USD","Notes":"mattis pulvinar nulla pede ullamcorper augue a suscipit nulla elit ac nulla sed vel enim sit","Department":"Tools","Website":"wikimedia.org","Latitude":-8.9837384,"Longitude":125.2203419,"ShipDate":"3/15/2016","PaymentDate":"2016-08-04 13:29:49","TimeZone":"Asia/Makassar","TotalPayment":"$604222.07","Status":2,"Type":2,"Actions":null},
                    {"RecordID":77,"OrderID":"67877-159","Country":"Indonesia","ShipCountry":"ID","ShipCity":"Tolomango","ShipName":"Prohaska, Mosciski and Berge","ShipAddress":"52 Onsgard Street","CompanyEmail":"salonso24@google.de","CompanyAgent":"Shalom Alonso","CompanyName":"Maggio Inc","Currency":"IDR","Notes":"a pede posuere nonummy integer non velit donec diam neque","Department":"Tools","Website":"macromedia.com","Latitude":"-8.5052","Longitude":"118.6133","ShipDate":"10/23/2017","PaymentDate":"2016-06-17 17:51:39","TimeZone":"Asia/Makassar","TotalPayment":"$539307.17","Status":5,"Type":2,"Actions":null},
                    {"RecordID":78,"OrderID":"64536-5471","Country":"Brazil","ShipCountry":"BR","ShipCity":"Jaboticabal","ShipName":"Schuppe, Botsford and Hahn","ShipAddress":"599 Hagan Road","CompanyEmail":"tbaskett25@surveymonkey.com","CompanyAgent":"Tammy Baskett","CompanyName":"Ward LLC","Currency":"BRL","Notes":"primis in faucibus orci luctus et ultrices posuere cubilia curae","Department":"Grocery","Website":"dot.gov","Latitude":-21.2525138,"Longitude":-48.3256762,"ShipDate":"6/19/2016","PaymentDate":"2016-09-24 07:36:56","TimeZone":"America/Sao_Paulo","TotalPayment":"$901657.14","Status":4,"Type":1,"Actions":null},
                    {"RecordID":79,"OrderID":"0093-7172","Country":"Philippines","ShipCountry":"PH","ShipCity":"Tapas","ShipName":"Kris LLC","ShipAddress":"89 Brickson Park Way","CompanyEmail":"ggeindre26@privacy.gov.au","CompanyAgent":"Gillie Geindre","CompanyName":"Schroeder LLC","Currency":"PHP","Notes":"aliquam non mauris morbi non lectus aliquam sit amet diam in magna bibendum","Department":"Automotive","Website":"phoca.cz","Latitude":10.305562,"Longitude":123.897862,"ShipDate":"1/31/2017","PaymentDate":"2017-05-11 00:44:08","TimeZone":"Asia/Manila","TotalPayment":"$1116807.51","Status":2,"Type":2,"Actions":null},
                    {"RecordID":80,"OrderID":"76159-001","Country":"Poland","ShipCountry":"PL","ShipCity":"Osiedle-Nowiny","ShipName":"O'Kon Inc","ShipAddress":"608 Shopko Parkway","CompanyEmail":"eaxell27@weather.com","CompanyAgent":"Enoch Axell","CompanyName":"Friesen-Beahan","Currency":"PLN","Notes":"posuere metus vitae ipsum aliquam non mauris morbi non lectus aliquam sit amet","Department":"Music","Website":"instagram.com","Latitude":50.6992259,"Longitude":21.896691,"ShipDate":"4/15/2017","PaymentDate":"2017-10-24 06:43:00","TimeZone":"Europe/Warsaw","TotalPayment":"$226029.57","Status":3,"Type":2,"Actions":null},
                    {"RecordID":81,"OrderID":"67596-001","Country":"Belarus","ShipCountry":"BY","ShipCity":"Horad Rechytsa","ShipName":"Strosin-Kozey","ShipAddress":"15 Towne Way","CompanyEmail":"bscorey28@shinystat.com","CompanyAgent":"Byrle Scorey","CompanyName":"Cassin, Renner and Jerde","Currency":"BYR","Notes":"quam a odio in hac habitasse platea dictumst maecenas ut massa quis augue luctus","Department":"Clothing","Website":"who.int","Latitude":"52.36389","Longitude":"30.39472","ShipDate":"12/30/2016","PaymentDate":"2016-02-13 13:10:13","TimeZone":"Europe/Minsk","TotalPayment":"$1091673.47","Status":1,"Type":3,"Actions":null},
                    {"RecordID":82,"OrderID":"51346-214","Country":"Russia","ShipCountry":"RU","ShipCity":"Temyasovo","ShipName":"Cummerata Group","ShipAddress":"19379 Dwight Alley","CompanyEmail":"cashlin29@loc.gov","CompanyAgent":"Cecilia Ashlin","CompanyName":"Hackett LLC","Currency":"RUB","Notes":"nulla mollis molestie lorem quisque ut erat curabitur gravida nisi at nibh in hac habitasse platea","Department":"Books","Website":"sogou.com","Latitude":52.9850842,"Longitude":58.1242712,"ShipDate":"5/15/2017","PaymentDate":"2016-08-30 04:15:29","TimeZone":"Asia/Yekaterinburg","TotalPayment":"$104888.90","Status":2,"Type":1,"Actions":null},
                    {"RecordID":83,"OrderID":"58232-0030","Country":"Armenia","ShipCountry":"AM","ShipCity":"Norashen","ShipName":"Wisoky, Willms and Romaguera","ShipAddress":"7 Northridge Pass","CompanyEmail":"hcouronne2a@yelp.com","CompanyAgent":"Hyacinthe Couronne","CompanyName":"Mertz-Kessler","Currency":"AMD","Notes":"elementum pellentesque quisque porta volutpat erat quisque erat eros viverra eget congue eget","Department":"Health","Website":"wordpress.org","Latitude":40.6573682,"Longitude":44.0769342,"ShipDate":"10/30/2016","PaymentDate":"2017-05-29 02:13:31","TimeZone":"Asia/Yerevan","TotalPayment":"$235345.18","Status":2,"Type":1,"Actions":null},
                    {"RecordID":84,"OrderID":"57525-016","Country":"Greece","ShipCountry":"GR","ShipCity":"Íos","ShipName":"Emmerich Group","ShipAddress":"1 Northport Drive","CompanyEmail":"adomerque2b@twitpic.com","CompanyAgent":"Aveline Domerque","CompanyName":"Wyman, Mayert and Weimann","Currency":"EUR","Notes":"erat nulla tempus vivamus in felis eu sapien cursus vestibulum proin eu","Department":"Home","Website":"businesswire.com","Latitude":36.7225782,"Longitude":25.2825598,"ShipDate":"4/30/2017","PaymentDate":"2016-10-09 08:13:07","TimeZone":"Europe/Athens","TotalPayment":"$347681.65","Status":5,"Type":3,"Actions":null},
                    {"RecordID":85,"OrderID":"55670-122","Country":"Panama","ShipCountry":"PA","ShipCity":"Aguadulce","ShipName":"Quitzon LLC","ShipAddress":"3335 Fieldstone Place","CompanyEmail":"ldinnington2c@nymag.com","CompanyAgent":"Lynnett Dinnington","CompanyName":"Mitchell Group","Currency":"PAB","Notes":"amet nunc viverra dapibus nulla suscipit ligula in lacus curabitur at ipsum ac tellus semper","Department":"Books","Website":"nyu.edu","Latitude":8.2301756,"Longitude":-80.5549561,"ShipDate":"2/13/2017","PaymentDate":"2016-05-30 20:02:05","TimeZone":"America/Panama","TotalPayment":"$731590.06","Status":6,"Type":1,"Actions":null},
                    {"RecordID":86,"OrderID":"64578-0062","Country":"Mexico","ShipCountry":"MX","ShipCity":"San Isidro","ShipName":"Buckridge, Ondricka and Kautzer","ShipAddress":"81 Judy Park","CompanyEmail":"jandrez2d@yandex.ru","CompanyAgent":"Josephine Andrez","CompanyName":"Hagenes, Ledner and Marks","Currency":"MXN","Notes":"nulla elit ac nulla sed vel enim sit amet nunc","Department":"Clothing","Website":"discovery.com","Latitude":19.482042,"Longitude":-99.1985584,"ShipDate":"9/8/2017","PaymentDate":"2018-01-16 02:58:59","TimeZone":"America/Mexico_City","TotalPayment":"$669313.23","Status":6,"Type":1,"Actions":null},
                    {"RecordID":87,"OrderID":"68382-178","Country":"Sweden","ShipCountry":"SE","ShipCity":"Lidingö","ShipName":"Toy, Goldner and Hodkiewicz","ShipAddress":"47844 Fulton Junction","CompanyEmail":"kstones2e@godaddy.com","CompanyAgent":"Kala Stones","CompanyName":"Hermiston-Abshire","Currency":"SEK","Notes":"ut nunc vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae mauris viverra diam vitae","Department":"Baby","Website":"google.co.uk","Latitude":59.3536649,"Longitude":18.1354296,"ShipDate":"1/30/2018","PaymentDate":"2016-11-11 09:52:23","TimeZone":"Europe/Stockholm","TotalPayment":"$846505.08","Status":2,"Type":1,"Actions":null},
                    {"RecordID":88,"OrderID":"0007-4142","Country":"Haiti","ShipCountry":"HT","ShipCity":"Chantal","ShipName":"Gutmann, Kessler and Jast","ShipAddress":"1142 Alpine Pass","CompanyEmail":"hsisley2f@twitpic.com","CompanyAgent":"Hubie Sisley","CompanyName":"Koch, Wiza and MacGyver","Currency":"HTG","Notes":"habitasse platea dictumst etiam faucibus cursus urna ut tellus nulla ut erat id mauris vulputate","Department":"Outdoors","Website":"mozilla.com","Latitude":18.2028605,"Longitude":-73.8874799,"ShipDate":"11/28/2017","PaymentDate":"2017-07-15 00:12:08","TimeZone":"America/Port-au-Prince","TotalPayment":"$664270.87","Status":5,"Type":2,"Actions":null},
                    {"RecordID":89,"OrderID":"68745-2021","Country":"China","ShipCountry":"CN","ShipCity":"Anhai","ShipName":"Keebler Group","ShipAddress":"640 Bowman Park","CompanyEmail":"jprobey2g@theglobeandmail.com","CompanyAgent":"Joice Probey","CompanyName":"Swaniawski-Tromp","Currency":"CNY","Notes":"metus sapien ut nunc vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere","Department":"Games","Website":"xinhuanet.com","Latitude":24.716803,"Longitude":118.476341,"ShipDate":"2/3/2016","PaymentDate":"2016-07-03 06:04:39","TimeZone":"Asia/Shanghai","TotalPayment":"$797898.31","Status":4,"Type":2,"Actions":null},
                    {"RecordID":90,"OrderID":"59779-330","Country":"Cuba","ShipCountry":"CU","ShipCity":"Centro Habana","ShipName":"Corwin LLC","ShipAddress":"152 Sycamore Circle","CompanyEmail":"imcaster2h@pagesperso-orange.fr","CompanyAgent":"Issi McAster","CompanyName":"Price, McGlynn and Reichert","Currency":"CUP","Notes":"proin eu mi nulla ac enim in tempor turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis","Department":"Health","Website":"sfgate.com","Latitude":23.1351485,"Longitude":-82.3695988,"ShipDate":"9/15/2017","PaymentDate":"2016-10-01 09:29:09","TimeZone":"America/Havana","TotalPayment":"$926354.07","Status":6,"Type":3,"Actions":null},
                    {"RecordID":91,"OrderID":"33261-070","Country":"China","ShipCountry":"CN","ShipCity":"Chongwen","ShipName":"Harvey LLC","ShipAddress":"16 Dwight Street","CompanyEmail":"chaig2i@google.com.hk","CompanyAgent":"Codee Haig","CompanyName":"Prosacco, Cruickshank and Stoltenberg","Currency":"CNY","Notes":"amet cursus id turpis integer aliquet massa id lobortis convallis tortor","Department":"Clothing","Website":"abc.net.au","Latitude":39.896949,"Longitude":116.414961,"ShipDate":"8/30/2016","PaymentDate":"2017-09-28 23:07:28","TimeZone":"Asia/Chongqing","TotalPayment":"$147373.41","Status":5,"Type":1,"Actions":null},
                    {"RecordID":92,"OrderID":"0409-1894","Country":"France","ShipCountry":"FR","ShipCity":"Saint-Priest-en-Jarez","ShipName":"Block-Schulist","ShipAddress":"7 Banding Plaza","CompanyEmail":"bdawid2j@devhub.com","CompanyAgent":"Bil Dawid","CompanyName":"Herman, Halvorson and Champlin","Currency":"EUR","Notes":"semper est quam pharetra magna ac consequat metus sapien ut","Department":"Industrial","Website":"qq.com","Latitude":45.4726625,"Longitude":4.3812793,"ShipDate":"6/23/2017","PaymentDate":"2016-02-16 11:43:11","TimeZone":"Europe/Paris","TotalPayment":"$728288.10","Status":3,"Type":3,"Actions":null},
                    {"RecordID":93,"OrderID":"37000-761","Country":"South Africa","ShipCountry":"ZA","ShipCity":"Botshabelo","ShipName":"Kris, Zulauf and Gleichner","ShipAddress":"97484 Bellgrove Lane","CompanyEmail":"aluxford2k@sakura.ne.jp","CompanyAgent":"Aigneis Luxford","CompanyName":"Labadie Inc","Currency":"ZAR","Notes":"eros suspendisse accumsan tortor quis turpis sed ante vivamus tortor duis mattis","Department":"Computers","Website":"apple.com","Latitude":-25.692754,"Longitude":29.4306557,"ShipDate":"6/24/2016","PaymentDate":"2017-09-04 14:13:56","TimeZone":"Africa/Johannesburg","TotalPayment":"$187742.69","Status":1,"Type":3,"Actions":null},
                    {"RecordID":94,"OrderID":"41250-498","Country":"Ukraine","ShipCountry":"UA","ShipCity":"Merefa","ShipName":"Brown-Gutkowski","ShipAddress":"04 Lukken Court","CompanyEmail":"chandrek2l@mayoclinic.com","CompanyAgent":"Courtney Handrek","CompanyName":"Runte-Bogan","Currency":"UAH","Notes":"justo pellentesque viverra pede ac diam cras pellentesque volutpat dui maecenas tristique","Department":"Health","Website":"boston.com","Latitude":49.8060262,"Longitude":36.0503448,"ShipDate":"5/11/2018","PaymentDate":"2017-05-25 04:29:20","TimeZone":"Europe/Zaporozhye","TotalPayment":"$761394.48","Status":5,"Type":2,"Actions":null},
                    {"RecordID":95,"OrderID":"54973-2909","Country":"Czech Republic","ShipCountry":"CZ","ShipCity":"Brloh","ShipName":"Oberbrunner, Anderson and Steuber","ShipAddress":"16 Becker Road","CompanyEmail":"gmartel2m@networksolutions.com","CompanyAgent":"Geraldine Martel","CompanyName":"Franecki and Sons","Currency":"CZK","Notes":"posuere metus vitae ipsum aliquam non mauris morbi non lectus aliquam sit amet diam in magna bibendum imperdiet","Department":"Toys","Website":"economist.com","Latitude":50.0005878,"Longitude":15.5572849,"ShipDate":"7/5/2016","PaymentDate":"2017-11-07 19:43:31","TimeZone":"Europe/Prague","TotalPayment":"$258546.43","Status":4,"Type":2,"Actions":null},
                    {"RecordID":96,"OrderID":"54868-5736","Country":"Argentina","ShipCountry":"AR","ShipCity":"Chamical","ShipName":"Schuster, Morissette and Wolf","ShipAddress":"1710 Kingsford Street","CompanyEmail":"bheiss2n@irs.gov","CompanyAgent":"Bamby Heiss","CompanyName":"Ruecker and Sons","Currency":"ARS","Notes":"amet consectetuer adipiscing elit proin interdum mauris non ligula pellentesque ultrices","Department":"Health","Website":"nbcnews.com","Latitude":-31.4411018,"Longitude":-64.1257463,"ShipDate":"10/17/2016","PaymentDate":"2017-09-20 12:33:54","TimeZone":"America/Argentina/La_Rioja","TotalPayment":"$914974.23","Status":6,"Type":1,"Actions":null},
                    {"RecordID":97,"OrderID":"51334-161","Country":"Indonesia","ShipCountry":"ID","ShipCity":"Busungbiu","ShipName":"Kuhic-Shanahan","ShipAddress":"9888 Cardinal Place","CompanyEmail":"nflarity2o@unicef.org","CompanyAgent":"Norina Flarity","CompanyName":"Jenkins-Rau","Currency":"IDR","Notes":"felis ut at dolor quis odio consequat varius integer ac leo pellentesque ultrices mattis odio donec vitae nisi nam ultrices","Department":"Jewelery","Website":"simplemachines.org","Latitude":-8.3262486,"Longitude":114.9279547,"ShipDate":"5/2/2016","PaymentDate":"2018-03-31 22:47:23","TimeZone":"Asia/Makassar","TotalPayment":"$975497.09","Status":1,"Type":2,"Actions":null},
                    {"RecordID":98,"OrderID":"69190-111","Country":"Japan","ShipCountry":"JP","ShipCity":"Hobaramachi","ShipName":"Gerhold and Sons","ShipAddress":"8838 Buell Avenue","CompanyEmail":"sriccardi2p@flavors.me","CompanyAgent":"Shep Riccardi","CompanyName":"Ankunding-Funk","Currency":"JPY","Notes":"sapien quis libero nullam sit amet turpis elementum ligula vehicula consequat morbi","Department":"Baby","Website":"ameblo.jp","Latitude":37.8199686,"Longitude":140.5540146,"ShipDate":"9/27/2016","PaymentDate":"2016-10-18 12:36:23","TimeZone":"Asia/Tokyo","TotalPayment":"$611589.58","Status":4,"Type":1,"Actions":null},
                    {"RecordID":99,"OrderID":"59779-012","Country":"Indonesia","ShipCountry":"ID","ShipCity":"Pamotan","ShipName":"Hilll-Schoen","ShipAddress":"16 Hanson Crossing","CompanyEmail":"dmenichi2q@lycos.com","CompanyAgent":"Devonna Menichi","CompanyName":"Wehner-Tillman","Currency":"IDR","Notes":"lectus aliquam sit amet diam in magna bibendum imperdiet nullam orci pede venenatis non sodales sed tincidunt eu","Department":"Games","Website":"gizmodo.com","Latitude":-6.761747,"Longitude":111.486801,"ShipDate":"3/22/2018","PaymentDate":"2017-06-26 20:44:03","TimeZone":"Asia/Jakarta","TotalPayment":"$666422.99","Status":3,"Type":3,"Actions":null},
                    {"RecordID":100,"OrderID":"16590-338","Country":"Portugal","ShipCountry":"PT","ShipCity":"Alvide","ShipName":"Altenwerth, Kub and Durgan","ShipAddress":"1 Coleman Park","CompanyEmail":"lemlyn2r@cyberchimps.com","CompanyAgent":"Lannie Emlyn","CompanyName":"Jacobson-Medhurst","Currency":"EUR","Notes":"adipiscing elit proin risus praesent lectus vestibulum quam sapien varius ut blandit non interdum in","Department":"Industrial","Website":"oakley.com","Latitude":38.7204364,"Longitude":-9.425542,"ShipDate":"5/1/2017","PaymentDate":"2018-04-05 21:11:45","TimeZone":"Europe/Lisbon","TotalPayment":"$195576.87","Status":3,"Type":2,"Actions":null},
                    {"RecordID":101,"OrderID":"0372-0004","Country":"Ecuador","ShipCountry":"EC","ShipCity":"Gualaceo","ShipName":"Deckow, Heaney and Olson","ShipAddress":"50 Fremont Point","CompanyEmail":"hdarrell2s@soundcloud.com","CompanyAgent":"Hunfredo Darrell","CompanyName":"Stroman-Howe","Currency":"USD","Notes":"in porttitor pede justo eu massa donec dapibus duis at velit","Department":"Computers","Website":"weather.com","Latitude":-2.886385,"Longitude":-78.7759559,"ShipDate":"8/18/2017","PaymentDate":"2016-07-14 14:26:43","TimeZone":"America/Guayaquil","TotalPayment":"$1059027.32","Status":4,"Type":2,"Actions":null},
                    {"RecordID":102,"OrderID":"49701-3000","Country":"China","ShipCountry":"CN","ShipCity":"Longwu","ShipName":"Bogan-Rowe","ShipAddress":"55 Lake View Point","CompanyEmail":"vbrosch2t@senate.gov","CompanyAgent":"Valentin Brosch","CompanyName":"Hahn-VonRueden","Currency":"CNY","Notes":"lacinia aenean sit amet justo morbi ut odio cras mi pede malesuada in imperdiet et commodo vulputate","Department":"Movies","Website":"ning.com","Latitude":22.63964,"Longitude":114.020922,"ShipDate":"5/10/2016","PaymentDate":"2016-11-21 07:10:36","TimeZone":"Asia/Chongqing","TotalPayment":"$517646.80","Status":2,"Type":3,"Actions":null},
                    {"RecordID":103,"OrderID":"52380-1721","Country":"Philippines","ShipCountry":"PH","ShipCity":"Damawato","ShipName":"Thiel LLC","ShipAddress":"3 Continental Lane","CompanyEmail":"claible2u@jimdo.com","CompanyAgent":"Curtis Laible","CompanyName":"Friesen, Schneider and McCullough","Currency":"PHP","Notes":"non lectus aliquam sit amet diam in magna bibendum imperdiet nullam orci","Department":"Clothing","Website":"amazon.co.uk","Latitude":6.7885037,"Longitude":124.8730516,"ShipDate":"4/11/2018","PaymentDate":"2017-02-17 18:47:35","TimeZone":"Asia/Manila","TotalPayment":"$831377.51","Status":5,"Type":1,"Actions":null},
                    {"RecordID":104,"OrderID":"0062-0165","Country":"Portugal","ShipCountry":"PT","ShipCity":"Sobreda","ShipName":"Nienow-Smith","ShipAddress":"20 Lake View Junction","CompanyEmail":"hantonucci2v@dot.gov","CompanyAgent":"Haley Antonucci","CompanyName":"Koelpin, Fritsch and Walker","Currency":"EUR","Notes":"dictumst maecenas ut massa quis augue luctus tincidunt nulla mollis molestie lorem quisque","Department":"Outdoors","Website":"sbwire.com","Latitude":38.652683,"Longitude":-9.1861498,"ShipDate":"6/20/2016","PaymentDate":"2017-02-04 06:36:03","TimeZone":"Europe/Lisbon","TotalPayment":"$394821.03","Status":3,"Type":1,"Actions":null},
                    {"RecordID":105,"OrderID":"54868-4972","Country":"Palestinian Territory","ShipCountry":"PS","ShipCity":"Arţās","ShipName":"Howe, Hills and Leffler","ShipAddress":"6 Dryden Way","CompanyEmail":"smcconville2w@cisco.com","CompanyAgent":"Shawna McConville","CompanyName":"Hills, Lindgren and Gleichner","Currency":"ILS","Notes":"sem duis aliquam convallis nunc proin at turpis a pede posuere nonummy integer non velit donec","Department":"Electronics","Website":"marketwatch.com","Latitude":31.689957,"Longitude":35.188236,"ShipDate":"6/4/2017","PaymentDate":"2016-10-16 16:04:37","TimeZone":"Asia/Hebron","TotalPayment":"$913024.13","Status":5,"Type":2,"Actions":null},
                    {"RecordID":106,"OrderID":"0185-0139","Country":"Philippines","ShipCountry":"PH","ShipCity":"San Pedro One","ShipName":"Pouros, McGlynn and Rempel","ShipAddress":"010 Burning Wood Parkway","CompanyEmail":"apersicke2x@wix.com","CompanyAgent":"Annice Persicke","CompanyName":"Osinski, Bauch and Emard","Currency":"PHP","Notes":"maecenas ut massa quis augue luctus tincidunt nulla mollis molestie lorem quisque ut erat curabitur gravida nisi","Department":"Industrial","Website":"sakura.ne.jp","Latitude":14.0875558,"Longitude":121.1774182,"ShipDate":"6/12/2016","PaymentDate":"2016-12-20 10:26:51","TimeZone":"Asia/Manila","TotalPayment":"$374654.19","Status":5,"Type":2,"Actions":null},
                    {"RecordID":107,"OrderID":"65044-1061","Country":"Morocco","ShipCountry":"MA","ShipCity":"Tabia","ShipName":"Mills, Hintz and Windler","ShipAddress":"0 Miller Way","CompanyEmail":"lcallaby2y@nhs.uk","CompanyAgent":"Levy Callaby","CompanyName":"Orn Inc","Currency":"MAD","Notes":"arcu adipiscing molestie hendrerit at vulputate vitae nisl aenean lectus pellentesque eget nunc donec quis orci","Department":"Sports","Website":"dion.ne.jp","Latitude":32.0302286,"Longitude":-6.7969224,"ShipDate":"2/15/2018","PaymentDate":"2017-02-21 08:25:46","TimeZone":"Africa/Casablanca","TotalPayment":"$1145379.03","Status":3,"Type":2,"Actions":null},
                    {"RecordID":108,"OrderID":"13537-493","Country":"China","ShipCountry":"CN","ShipCity":"Shiquanhe","ShipName":"Rutherford-Stoltenberg","ShipAddress":"92553 Anthes Alley","CompanyEmail":"hobrallaghan2z@ihg.com","CompanyAgent":"Helsa O'Brallaghan","CompanyName":"Kling-Spinka","Currency":"CNY","Notes":"ac neque duis bibendum morbi non quam nec dui luctus","Department":"Outdoors","Website":"reverbnation.com","Latitude":32.493989,"Longitude":80.101607,"ShipDate":"5/26/2016","PaymentDate":"2016-02-02 12:24:06","TimeZone":"Asia/Kolkata","TotalPayment":"$406126.54","Status":4,"Type":3,"Actions":null},
                    {"RecordID":109,"OrderID":"49288-0589","Country":"China","ShipCountry":"CN","ShipCity":"Shichuan","ShipName":"Feest, Mitchell and Anderson","ShipAddress":"7 Pawling Plaza","CompanyEmail":"smoggie30@youtu.be","CompanyAgent":"Sean Moggie","CompanyName":"Ledner LLC","Currency":"CNY","Notes":"mattis nibh ligula nec sem duis aliquam convallis nunc proin at turpis","Department":"Industrial","Website":"netlog.com","Latitude":30.2638032,"Longitude":102.8054753,"ShipDate":"12/12/2017","PaymentDate":"2016-11-23 16:21:09","TimeZone":"Asia/Chongqing","TotalPayment":"$810305.15","Status":4,"Type":2,"Actions":null},
                    {"RecordID":110,"OrderID":"59779-460","Country":"Sweden","ShipCountry":"SE","ShipCity":"Ånge","ShipName":"Haley, Lang and Blick","ShipAddress":"0754 Pond Trail","CompanyEmail":"dlingfoot31@1und1.de","CompanyAgent":"Dominique Lingfoot","CompanyName":"Stark-Sauer","Currency":"SEK","Notes":"varius ut blandit non interdum in ante vestibulum ante ipsum primis in faucibus orci luctus","Department":"Grocery","Website":"ovh.net","Latitude":62.1865035,"Longitude":15.6532841,"ShipDate":"11/6/2016","PaymentDate":"2017-08-18 23:38:27","TimeZone":"Europe/Stockholm","TotalPayment":"$505437.25","Status":1,"Type":1,"Actions":null},
                    {"RecordID":111,"OrderID":"36987-1495","Country":"Liechtenstein","ShipCountry":"LI","ShipCity":"Schellenberg","ShipName":"Dickens-Schimmel","ShipAddress":"578 Lakewood Hill","CompanyEmail":"btallach32@japanpost.jp","CompanyAgent":"Ber Tallach","CompanyName":"Kunze Group","Currency":"CHF","Notes":"ac diam cras pellentesque volutpat dui maecenas tristique est et tempus semper est quam pharetra magna ac consequat metus sapien","Department":"Movies","Website":"sphinn.com","Latitude":47.2391802,"Longitude":9.5572045,"ShipDate":"4/30/2016","PaymentDate":"2017-11-29 20:36:37","TimeZone":"Europe/Vienna","TotalPayment":"$149734.10","Status":4,"Type":1,"Actions":null},
                    {"RecordID":112,"OrderID":"43538-171","Country":"Argentina","ShipCountry":"AR","ShipCity":"Oberá","ShipName":"Mueller, Keeling and Mann","ShipAddress":"79213 Orin Street","CompanyEmail":"kgusticke33@wikia.com","CompanyAgent":"Kalli Gusticke","CompanyName":"Hegmann-Nitzsche","Currency":"ARS","Notes":"nonummy maecenas tincidunt lacus at velit vivamus vel nulla eget eros elementum pellentesque quisque porta volutpat erat quisque","Department":"Books","Website":"ebay.com","Latitude":-27.3869255,"Longitude":-55.9145502,"ShipDate":"10/26/2016","PaymentDate":"2018-05-18 20:34:34","TimeZone":"America/Argentina/Cordoba","TotalPayment":"$271425.67","Status":2,"Type":2,"Actions":null},
                    {"RecordID":113,"OrderID":"51801-009","Country":"Poland","ShipCountry":"PL","ShipCity":"Szczecinek","ShipName":"Kessler Inc","ShipAddress":"77 Sunnyside Plaza","CompanyEmail":"ggreeson34@blogger.com","CompanyAgent":"Giorgia Greeson","CompanyName":"Conn Inc","Currency":"PLN","Notes":"eget congue eget semper rutrum nulla nunc purus phasellus in felis donec semper sapien","Department":"Games","Website":"pagesperso-orange.fr","Latitude":53.6936156,"Longitude":16.7047258,"ShipDate":"6/9/2016","PaymentDate":"2018-01-10 21:56:42","TimeZone":"Europe/Warsaw","TotalPayment":"$535458.50","Status":2,"Type":2,"Actions":null},
                    {"RecordID":114,"OrderID":"54868-4243","Country":"United States","ShipCountry":"US","ShipCity":"Des Moines","ShipName":"Ward, Mertz and Haag","ShipAddress":"58 Holmberg Park","CompanyEmail":"kcaraher35@wisc.edu","CompanyAgent":"Kaitlyn Caraher","CompanyName":"Denesik-Goodwin","Currency":"USD","Notes":"ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae mauris viverra diam vitae quam","Department":"Industrial","Website":"blogs.com","Latitude":41.6,"Longitude":-93.61,"ShipDate":"6/12/2017","PaymentDate":"2018-01-13 21:44:01","TimeZone":"America/Chicago","TotalPayment":"$39630.89","Status":1,"Type":1,"Actions":null},
                    {"RecordID":115,"OrderID":"48951-1065","Country":"France","ShipCountry":"FR","ShipCity":"Saint-Quentin-en-Yvelines","ShipName":"Reilly, Haag and Gorczany","ShipAddress":"250 Shoshone Street","CompanyEmail":"rknibbs36@bravesites.com","CompanyAgent":"Rachael Knibbs","CompanyName":"Walsh, Padberg and Rempel","Currency":"EUR","Notes":"convallis morbi odio odio elementum eu interdum eu tincidunt in leo","Department":"Outdoors","Website":"wikimedia.org","Latitude":48.799627,"Longitude":2.1415644,"ShipDate":"2/5/2018","PaymentDate":"2017-10-22 11:07:41","TimeZone":"Europe/Paris","TotalPayment":"$1101923.42","Status":6,"Type":3,"Actions":null},
                    {"RecordID":116,"OrderID":"0143-1172","Country":"Portugal","ShipCountry":"PT","ShipCity":"Pomar","ShipName":"Bailey, Gislason and Abshire","ShipAddress":"56 Colorado Junction","CompanyEmail":"ipotier37@blinklist.com","CompanyAgent":"Ilario Potier","CompanyName":"Stokes-Greenholt","Currency":"EUR","Notes":"justo morbi ut odio cras mi pede malesuada in imperdiet et commodo vulputate justo in blandit","Department":"Music","Website":"webnode.com","Latitude":42.046011,"Longitude":-8.4825685,"ShipDate":"10/14/2016","PaymentDate":"2016-01-17 10:22:25","TimeZone":"Europe/Madrid","TotalPayment":"$927090.44","Status":3,"Type":2,"Actions":null},
                    {"RecordID":117,"OrderID":"36987-1467","Country":"Cape Verde","ShipCountry":"CV","ShipCity":"Tarrafal de São Nicolau","ShipName":"Cummings LLC","ShipAddress":"97 Hansons Court","CompanyEmail":"mtenney38@netvibes.com","CompanyAgent":"Margeaux Tenney","CompanyName":"Gislason-Ondricka","Currency":"CVE","Notes":"eget orci vehicula condimentum curabitur in libero ut massa volutpat convallis morbi odio odio elementum eu interdum","Department":"Toys","Website":"amazon.co.uk","Latitude":16.5636498,"Longitude":-24.354942,"ShipDate":"2/28/2017","PaymentDate":"2017-01-08 09:12:28","TimeZone":"Atlantic/Cape_Verde","TotalPayment":"$601901.23","Status":5,"Type":1,"Actions":null},
                    {"RecordID":118,"OrderID":"49288-0648","Country":"Venezuela","ShipCountry":"VE","ShipCity":"Farriar","ShipName":"Gerlach, Rau and Kris","ShipAddress":"10835 Swallow Way","CompanyEmail":"gfaich39@arstechnica.com","CompanyAgent":"Glennis Faich","CompanyName":"Wolff-Smitham","Currency":"VEF","Notes":"scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem duis aliquam convallis nunc proin at turpis a","Department":"Books","Website":"soup.io","Latitude":10.4675987,"Longitude":-68.5575062,"ShipDate":"11/16/2016","PaymentDate":"2017-06-03 09:12:35","TimeZone":"America/Caracas","TotalPayment":"$76931.74","Status":1,"Type":3,"Actions":null},
                    {"RecordID":119,"OrderID":"35356-515","Country":"Philippines","ShipCountry":"PH","ShipCity":"Mambulo","ShipName":"Hermann LLC","ShipAddress":"25 Waubesa Circle","CompanyEmail":"dedgerley3a@zdnet.com","CompanyAgent":"Donnie Edgerley","CompanyName":"Bradtke Inc","Currency":"PHP","Notes":"turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem duis aliquam","Department":"Automotive","Website":"nyu.edu","Latitude":13.6315513,"Longitude":123.0424788,"ShipDate":"11/17/2016","PaymentDate":"2016-11-09 21:14:33","TimeZone":"Asia/Manila","TotalPayment":"$636789.52","Status":3,"Type":1,"Actions":null},
                    {"RecordID":120,"OrderID":"0409-9558","Country":"Paraguay","ShipCountry":"PY","ShipCity":"Benjamín Aceval","ShipName":"Lemke-Koss","ShipAddress":"77 Blue Bill Park Place","CompanyEmail":"ngoadbie3b@marketplace.net","CompanyAgent":"Nertie Goadbie","CompanyName":"Altenwerth-Weimann","Currency":"PYG","Notes":"maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus in felis eu sapien cursus vestibulum proin","Department":"Books","Website":"businessweek.com","Latitude":-24.9670799,"Longitude":-57.5476145,"ShipDate":"9/3/2016","PaymentDate":"2017-03-28 21:57:12","TimeZone":"America/Asuncion","TotalPayment":"$96716.21","Status":1,"Type":2,"Actions":null},
                    {"RecordID":121,"OrderID":"0517-2064","Country":"Nauru","ShipCountry":"NR","ShipCity":"Anabar","ShipName":"Weissnat and Sons","ShipAddress":"309 Coleman Terrace","CompanyEmail":"ccullrford3c@reference.com","CompanyAgent":"Camilla Cullrford","CompanyName":"Witting-Eichmann","Currency":"AUD","Notes":"nunc donec quis orci eget orci vehicula condimentum curabitur in libero ut","Department":"Shoes","Website":"xinhuanet.com","Latitude":-0.5133517,"Longitude":166.9484624,"ShipDate":"3/5/2017","PaymentDate":"2017-10-17 03:47:05","TimeZone":"Pacific/Nauru","TotalPayment":"$416325.53","Status":2,"Type":1,"Actions":null},
                    {"RecordID":122,"OrderID":"76088-300","Country":"Somalia","ShipCountry":"SO","ShipCity":"Buur Gaabo","ShipName":"Reinger-Stracke","ShipAddress":"91 Schurz Lane","CompanyEmail":"babrams3d@kickstarter.com","CompanyAgent":"Brandea Abrams","CompanyName":"Stroman, Lang and Koch","Currency":"SOS","Notes":"imperdiet sapien urna pretium nisl ut volutpat sapien arcu sed","Department":"Automotive","Website":"tinyurl.com","Latitude":2.7991084,"Longitude":44.0793911,"ShipDate":"8/21/2016","PaymentDate":"2018-02-06 22:34:29","TimeZone":"Africa/Mogadishu","TotalPayment":"$268675.89","Status":2,"Type":3,"Actions":null},
                    {"RecordID":123,"OrderID":"36987-1631","Country":"Spain","ShipCountry":"ES","ShipCity":"Pamplona/Iruña","ShipName":"Hammes Inc","ShipAddress":"1934 Clove Crossing","CompanyEmail":"tbruinemann3e@sina.com.cn","CompanyAgent":"Teresa Bruinemann","CompanyName":"Terry and Sons","Currency":"EUR","Notes":"cubilia curae mauris viverra diam vitae quam suspendisse potenti nullam porttitor lacus at","Department":"Sports","Website":"topsy.com","Latitude":42.8045028,"Longitude":-1.6432837,"ShipDate":"2/26/2018","PaymentDate":"2017-03-08 05:22:06","TimeZone":"Europe/Madrid","TotalPayment":"$33389.86","Status":1,"Type":3,"Actions":null},
                    {"RecordID":124,"OrderID":"65923-978","Country":"Sweden","ShipCountry":"SE","ShipCity":"Stockholm","ShipName":"Jenkins, Ernser and Gutmann","ShipAddress":"86 2nd Street","CompanyEmail":"csiddele3f@youku.com","CompanyAgent":"Cinderella Siddele","CompanyName":"Grant, Jakubowski and Hegmann","Currency":"SEK","Notes":"pede libero quis orci nullam molestie nibh in lectus pellentesque at nulla suspendisse potenti cras","Department":"Kids","Website":"dagondesign.com","Latitude":59.3326658,"Longitude":18.056792,"ShipDate":"3/9/2016","PaymentDate":"2016-09-08 23:53:58","TimeZone":"Europe/Stockholm","TotalPayment":"$347004.88","Status":2,"Type":3,"Actions":null},
                    {"RecordID":125,"OrderID":"41520-440","Country":"Ghana","ShipCountry":"GH","ShipCity":"Kete Krachi","ShipName":"Yost and Sons","ShipAddress":"003 Aberg Drive","CompanyEmail":"lpesselt3g@home.pl","CompanyAgent":"Leon Pesselt","CompanyName":"Rippin, Wisozk and Goldner","Currency":"GHS","Notes":"pellentesque at nulla suspendisse potenti cras in purus eu magna vulputate luctus cum sociis natoque penatibus et magnis dis parturient","Department":"Music","Website":"columbia.edu","Latitude":7.8014452,"Longitude":-0.0513246,"ShipDate":"4/10/2016","PaymentDate":"2018-05-09 00:38:55","TimeZone":"Africa/Lome","TotalPayment":"$464572.44","Status":2,"Type":1,"Actions":null},
                    {"RecordID":126,"OrderID":"0093-5378","Country":"Indonesia","ShipCountry":"ID","ShipCity":"Sukaratu","ShipName":"Satterfield and Sons","ShipAddress":"916 Bobwhite Center","CompanyEmail":"sswanwick3h@wordpress.org","CompanyAgent":"Sidney Swanwick","CompanyName":"Jakubowski and Sons","Currency":"IDR","Notes":"in quis justo maecenas rhoncus aliquam lacus morbi quis tortor id nulla ultrices","Department":"Games","Website":"pbs.org","Latitude":-7.2739902,"Longitude":108.1250791,"ShipDate":"1/15/2017","PaymentDate":"2017-11-24 08:55:52","TimeZone":"Asia/Jakarta","TotalPayment":"$79222.88","Status":5,"Type":1,"Actions":null},
                    {"RecordID":127,"OrderID":"62750-051","Country":"Sweden","ShipCountry":"SE","ShipCity":"Nora","ShipName":"Durgan, Koch and Mayert","ShipAddress":"58 Summer Ridge Center","CompanyEmail":"vdevereux3i@nbcnews.com","CompanyAgent":"Violetta Devereux","CompanyName":"Yundt, Keebler and Heathcote","Currency":"SEK","Notes":"purus eu magna vulputate luctus cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus vivamus vestibulum sagittis","Department":"Automotive","Website":"php.net","Latitude":59.3453304,"Longitude":14.5678141,"ShipDate":"4/1/2017","PaymentDate":"2016-08-18 20:01:23","TimeZone":"Europe/Stockholm","TotalPayment":"$939118.48","Status":5,"Type":3,"Actions":null},
                    {"RecordID":128,"OrderID":"42751-1070","Country":"Poland","ShipCountry":"PL","ShipCity":"Gromnik","ShipName":"Hermann Group","ShipAddress":"46 Autumn Leaf Avenue","CompanyEmail":"lhaxell3j@aboutads.info","CompanyAgent":"Lyndsie Haxell","CompanyName":"Lakin-Kreiger","Currency":"PLN","Notes":"consequat nulla nisl nunc nisl duis bibendum felis sed interdum venenatis turpis enim blandit mi in porttitor pede justo","Department":"Kids","Website":"wufoo.com","Latitude":49.8381802,"Longitude":20.9789037,"ShipDate":"3/25/2018","PaymentDate":"2017-01-21 00:32:50","TimeZone":"Europe/Warsaw","TotalPayment":"$562272.78","Status":4,"Type":3,"Actions":null},
                    {"RecordID":129,"OrderID":"35356-723","Country":"Iran","ShipCountry":"IR","ShipCity":"Marāveh Tappeh","ShipName":"Goodwin and Sons","ShipAddress":"5 South Park","CompanyEmail":"cwoods3k@feedburner.com","CompanyAgent":"Cassandra Woods","CompanyName":"Hamill Inc","Currency":"IRR","Notes":"diam erat fermentum justo nec condimentum neque sapien placerat ante nulla justo aliquam quis turpis eget elit sodales scelerisque","Department":"Automotive","Website":"loc.gov","Latitude":37.9022064,"Longitude":55.95535,"ShipDate":"5/7/2016","PaymentDate":"2016-03-11 23:10:10","TimeZone":"Asia/Tehran","TotalPayment":"$799109.76","Status":3,"Type":3,"Actions":null},
                    {"RecordID":130,"OrderID":"36987-1185","Country":"Hungary","ShipCountry":"HU","ShipCity":"Kecskemét","ShipName":"Lehner-Harvey","ShipAddress":"7889 Red Cloud Court","CompanyEmail":"bfoale3l@1688.com","CompanyAgent":"Burr Foale","CompanyName":"Marquardt Group","Currency":"HUF","Notes":"justo sit amet sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae","Department":"Electronics","Website":"sakura.ne.jp","Latitude":46.9067373,"Longitude":19.691788,"ShipDate":"2/9/2018","PaymentDate":"2017-06-20 12:23:42","TimeZone":"Europe/Budapest","TotalPayment":"$167492.43","Status":3,"Type":1,"Actions":null},
                    {"RecordID":131,"OrderID":"44119-002","Country":"Nicaragua","ShipCountry":"NI","ShipCity":"Diriá","ShipName":"Dibbert-Langosh","ShipAddress":"84 Mccormick Avenue","CompanyEmail":"rtrodden3m@jugem.jp","CompanyAgent":"Reinhold Trodden","CompanyName":"Deckow-Konopelski","Currency":"NIO","Notes":"quam pharetra magna ac consequat metus sapien ut nunc vestibulum ante ipsum primis in faucibus","Department":"Outdoors","Website":"opensource.org","Latitude":11.8859782,"Longitude":-86.054235,"ShipDate":"5/30/2017","PaymentDate":"2016-07-16 04:17:11","TimeZone":"America/Managua","TotalPayment":"$714317.47","Status":3,"Type":1,"Actions":null},
                    {"RecordID":132,"OrderID":"36987-1050","Country":"Jamaica","ShipCountry":"JM","ShipCity":"Williamsfield","ShipName":"Skiles, Flatley and Langosh","ShipAddress":"181 Mifflin Junction","CompanyEmail":"gpeggrem3n@mlb.com","CompanyAgent":"Gabriell Peggrem","CompanyName":"Kihn-O'Hara","Currency":"JMD","Notes":"id ornare imperdiet sapien urna pretium nisl ut volutpat sapien arcu sed augue aliquam erat volutpat in","Department":"Computers","Website":"house.gov","Latitude":18.0651384,"Longitude":-77.4658948,"ShipDate":"1/2/2018","PaymentDate":"2017-09-13 09:48:19","TimeZone":"America/Jamaica","TotalPayment":"$691413.78","Status":4,"Type":1,"Actions":null},
                    {"RecordID":133,"OrderID":"52674-544","Country":"Sierra Leone","ShipCountry":"SL","ShipCity":"Kambia","ShipName":"Streich and Sons","ShipAddress":"22 Kedzie Circle","CompanyEmail":"tglasser3o@washington.edu","CompanyAgent":"Tremayne Glasser","CompanyName":"Crona-Moen","Currency":"SLL","Notes":"et ultrices posuere cubilia curae donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin mi sit","Department":"Sports","Website":"geocities.com","Latitude":9.1261664,"Longitude":-12.9176518,"ShipDate":"2/22/2016","PaymentDate":"2016-08-06 00:20:16","TimeZone":"Africa/Freetown","TotalPayment":"$912857.79","Status":5,"Type":2,"Actions":null},
                    {"RecordID":134,"OrderID":"42254-214","Country":"Afghanistan","ShipCountry":"AF","ShipCity":"Mazār-e Sharīf","ShipName":"Smith, Mertz and Hartmann","ShipAddress":"4 Huxley Avenue","CompanyEmail":"omaccari3p@psu.edu","CompanyAgent":"Omar Maccari","CompanyName":"Aufderhar Group","Currency":"AFN","Notes":"euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem duis aliquam convallis nunc","Department":"Sports","Website":"homestead.com","Latitude":36.6926167,"Longitude":67.1179511,"ShipDate":"7/24/2016","PaymentDate":"2017-03-01 22:22:41","TimeZone":"Asia/Kabul","TotalPayment":"$1164394.28","Status":6,"Type":3,"Actions":null},
                    {"RecordID":135,"OrderID":"68180-520","Country":"Turkey","ShipCountry":"TR","ShipCity":"Yeniköy","ShipName":"Torp Inc","ShipAddress":"64 Westport Place","CompanyEmail":"oclewley3q@diigo.com","CompanyAgent":"Ottilie Clewley","CompanyName":"Moen, Stiedemann and Stanton","Currency":"TRY","Notes":"sit amet sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus orci","Department":"Outdoors","Website":"princeton.edu","Latitude":38.408587,"Longitude":28.385948,"ShipDate":"9/23/2017","PaymentDate":"2017-10-08 19:04:34","TimeZone":"Europe/Istanbul","TotalPayment":"$99982.45","Status":2,"Type":2,"Actions":null},
                    {"RecordID":136,"OrderID":"64942-1272","Country":"France","ShipCountry":"FR","ShipCity":"Les Sables-d'Olonne","ShipName":"Sporer-Abbott","ShipAddress":"98 Fair Oaks Plaza","CompanyEmail":"jtwitchings3r@wikia.com","CompanyAgent":"Justine Twitchings","CompanyName":"Smith and Sons","Currency":"EUR","Notes":"maecenas tristique est et tempus semper est quam pharetra magna ac","Department":"Electronics","Website":"cbc.ca","Latitude":46.4846074,"Longitude":-1.7557702,"ShipDate":"5/20/2018","PaymentDate":"2016-06-03 20:12:35","TimeZone":"Europe/Paris","TotalPayment":"$419291.49","Status":2,"Type":3,"Actions":null},
                    {"RecordID":137,"OrderID":"10158-003","Country":"Pakistan","ShipCountry":"PK","ShipCity":"Mehmand Chak","ShipName":"Johns, Beier and Turcotte","ShipAddress":"43820 Vera Alley","CompanyEmail":"ktrenouth3s@amazon.com","CompanyAgent":"Kara Trenouth","CompanyName":"Bernier-Ratke","Currency":"PKR","Notes":"eget elit sodales scelerisque mauris sit amet eros suspendisse accumsan","Department":"Games","Website":"yellowpages.com","Latitude":32.7894701,"Longitude":73.8236143,"ShipDate":"2/24/2017","PaymentDate":"2017-09-21 17:44:09","TimeZone":"Asia/Karachi","TotalPayment":"$312997.04","Status":6,"Type":1,"Actions":null},
                    {"RecordID":138,"OrderID":"58232-9910","Country":"China","ShipCountry":"CN","ShipCity":"Gaoleshan","ShipName":"Maggio and Sons","ShipAddress":"81 Goodland Center","CompanyEmail":"shouseley3t@arstechnica.com","CompanyAgent":"Shirline Houseley","CompanyName":"Bode, Dach and Will","Currency":"CNY","Notes":"ac enim in tempor turpis nec euismod scelerisque quam turpis adipiscing lorem","Department":"Outdoors","Website":"networksolutions.com","Latitude":29.67832,"Longitude":109.144929,"ShipDate":"1/14/2016","PaymentDate":"2017-02-10 04:15:18","TimeZone":"Asia/Chongqing","TotalPayment":"$170391.79","Status":5,"Type":2,"Actions":null},
                    {"RecordID":139,"OrderID":"42291-802","Country":"China","ShipCountry":"CN","ShipCity":"Rixi","ShipName":"D'Amore and Sons","ShipAddress":"9 Dwight Point","CompanyEmail":"hcurrell3u@baidu.com","CompanyAgent":"Hanan Currell","CompanyName":"Rodriguez, McDermott and Koelpin","Currency":"CNY","Notes":"suscipit a feugiat et eros vestibulum ac est lacinia nisi venenatis tristique","Department":"Grocery","Website":"accuweather.com","Latitude":28.856082,"Longitude":93.388853,"ShipDate":"10/7/2017","PaymentDate":"2017-01-08 06:56:12","TimeZone":"Asia/Shanghai","TotalPayment":"$859090.81","Status":1,"Type":1,"Actions":null},
                    {"RecordID":140,"OrderID":"0268-0925","Country":"Philippines","ShipCountry":"PH","ShipCity":"Tigpalay","ShipName":"Heaney Inc","ShipAddress":"12 Southridge Trail","CompanyEmail":"astrognell3v@google.fr","CompanyAgent":"Alidia Strognell","CompanyName":"Willms, Hane and Lemke","Currency":"PHP","Notes":"nulla justo aliquam quis turpis eget elit sodales scelerisque mauris sit amet eros","Department":"Automotive","Website":"spiegel.de","Latitude":7.4854917,"Longitude":122.3399664,"ShipDate":"12/9/2016","PaymentDate":"2016-07-09 04:54:02","TimeZone":"Asia/Manila","TotalPayment":"$223441.39","Status":2,"Type":2,"Actions":null},
                    {"RecordID":141,"OrderID":"55050-0011","Country":"Ghana","ShipCountry":"GH","ShipCity":"Kasoa","ShipName":"Predovic Inc","ShipAddress":"0926 American Drive","CompanyEmail":"crambaut3w@salon.com","CompanyAgent":"Candice Rambaut","CompanyName":"Skiles-Dicki","Currency":"GHS","Notes":"ligula in lacus curabitur at ipsum ac tellus semper interdum mauris ullamcorper purus sit","Department":"Toys","Website":"privacy.gov.au","Latitude":5.5300711,"Longitude":-0.4408037,"ShipDate":"3/25/2018","PaymentDate":"2017-07-31 08:09:34","TimeZone":"Africa/Accra","TotalPayment":"$425816.50","Status":3,"Type":2,"Actions":null},
                    {"RecordID":142,"OrderID":"10702-007","Country":"Indonesia","ShipCountry":"ID","ShipCity":"Padas","ShipName":"Watsica Group","ShipAddress":"1 Annamark Center","CompanyEmail":"aevennett3x@slate.com","CompanyAgent":"Anthia Evennett","CompanyName":"Davis, Prosacco and Dooley","Currency":"IDR","Notes":"mauris lacinia sapien quis libero nullam sit amet turpis elementum ligula vehicula consequat morbi a","Department":"Home","Website":"ucoz.ru","Latitude":-2.576499,"Longitude":112.542,"ShipDate":"7/1/2016","PaymentDate":"2016-12-30 00:22:19","TimeZone":"Asia/Jakarta","TotalPayment":"$552930.34","Status":2,"Type":3,"Actions":null},
                    {"RecordID":143,"OrderID":"52815-125","Country":"Mexico","ShipCountry":"MX","ShipCity":"Guadalupe","ShipName":"Stanton-Koepp","ShipAddress":"23692 Everett Crossing","CompanyEmail":"froscow3y@stanford.edu","CompanyAgent":"Fedora Roscow","CompanyName":"Brakus Inc","Currency":"MXN","Notes":"donec ut mauris eget massa tempor convallis nulla neque libero convallis eget","Department":"Movies","Website":"webeden.co.uk","Latitude":25.6775595,"Longitude":-100.2596935,"ShipDate":"12/31/2016","PaymentDate":"2017-07-22 22:58:08","TimeZone":"America/Mexico_City","TotalPayment":"$1067809.38","Status":4,"Type":2,"Actions":null},
                    {"RecordID":144,"OrderID":"63981-915","Country":"Indonesia","ShipCountry":"ID","ShipCity":"Karangpeton","ShipName":"Koss and Sons","ShipAddress":"85 Huxley Avenue","CompanyEmail":"pshenfisch3z@webs.com","CompanyAgent":"Pryce Shenfisch","CompanyName":"Crona-Ebert","Currency":"IDR","Notes":"sapien quis libero nullam sit amet turpis elementum ligula vehicula consequat morbi a ipsum integer a nibh in quis","Department":"Music","Website":"cbc.ca","Latitude":-8.1001586,"Longitude":113.8436013,"ShipDate":"4/12/2018","PaymentDate":"2016-07-13 11:48:15","TimeZone":"Asia/Jakarta","TotalPayment":"$526846.16","Status":6,"Type":2,"Actions":null},
                    {"RecordID":145,"OrderID":"14550-517","Country":"Indonesia","ShipCountry":"ID","ShipCity":"Gisiliba","ShipName":"Williamson Group","ShipAddress":"23 Hanover Plaza","CompanyEmail":"kwearne40@posterous.com","CompanyAgent":"Kalinda Wearne","CompanyName":"Schaefer-Rath","Currency":"IDR","Notes":"metus aenean fermentum donec ut mauris eget massa tempor convallis nulla neque libero","Department":"Games","Website":"google.es","Latitude":"-8.83126","Longitude":"121.05243","ShipDate":"6/17/2016","PaymentDate":"2017-07-13 01:28:10","TimeZone":"Asia/Makassar","TotalPayment":"$423971.17","Status":6,"Type":2,"Actions":null},
                    {"RecordID":146,"OrderID":"51079-146","Country":"Ukraine","ShipCountry":"UA","ShipCity":"Toshkivka","ShipName":"Schneider-Lakin","ShipAddress":"06883 Marcy Road","CompanyEmail":"cpoxon41@plala.or.jp","CompanyAgent":"Camey Poxon","CompanyName":"Weimann, Champlin and Walsh","Currency":"UAH","Notes":"faucibus orci luctus et ultrices posuere cubilia curae mauris viverra diam vitae","Department":"Outdoors","Website":"newyorker.com","Latitude":48.7790663,"Longitude":38.564841,"ShipDate":"8/5/2016","PaymentDate":"2016-03-22 06:02:37","TimeZone":"Europe/Zaporozhye","TotalPayment":"$578250.52","Status":4,"Type":2,"Actions":null},
                    {"RecordID":147,"OrderID":"42352-2001","Country":"Vietnam","ShipCountry":"VN","ShipCity":"Thị Trấn Ngải Giao","ShipName":"Klocko, Gislason and Bernier","ShipAddress":"01 Eagan Crossing","CompanyEmail":"tkeitch42@hhs.gov","CompanyAgent":"Tailor Keitch","CompanyName":"Schroeder and Sons","Currency":"VND","Notes":"dapibus augue vel accumsan tellus nisi eu orci mauris lacinia sapien quis libero nullam sit amet turpis elementum ligula","Department":"Garden","Website":"oracle.com","Latitude":10.6559243,"Longitude":107.2370874,"ShipDate":"5/3/2018","PaymentDate":"2018-04-10 11:04:51","TimeZone":"Asia/Ho_Chi_Minh","TotalPayment":"$971043.69","Status":1,"Type":1,"Actions":null},
                    {"RecordID":148,"OrderID":"52125-636","Country":"Greece","ShipCountry":"GR","ShipCity":"Lakkíon","ShipName":"Krajcik Inc","ShipAddress":"9898 Little Fleur Street","CompanyEmail":"hboleyn43@weebly.com","CompanyAgent":"Hernando Boleyn","CompanyName":"Yundt, Bayer and Medhurst","Currency":"EUR","Notes":"augue quam sollicitudin vitae consectetuer eget rutrum at lorem integer tincidunt ante vel ipsum","Department":"Industrial","Website":"bandcamp.com","Latitude":37.1321706,"Longitude":26.8529432,"ShipDate":"2/15/2017","PaymentDate":"2016-11-26 23:41:10","TimeZone":"Europe/Istanbul","TotalPayment":"$672114.66","Status":1,"Type":3,"Actions":null},
                    {"RecordID":149,"OrderID":"68645-478","Country":"Kuwait","ShipCountry":"KW","ShipCity":"Al Jahrā’","ShipName":"Willms-Jenkins","ShipAddress":"349 Service Court","CompanyEmail":"ebenzie44@zimbio.com","CompanyAgent":"Euphemia Benzie","CompanyName":"Pacocha-Beatty","Currency":"KWD","Notes":"dapibus duis at velit eu est congue elementum in hac habitasse platea dictumst morbi vestibulum velit id pretium iaculis","Department":"Baby","Website":"salon.com","Latitude":29.3365728,"Longitude":47.6755291,"ShipDate":"3/4/2016","PaymentDate":"2016-04-04 08:52:48","TimeZone":"Asia/Kuwait","TotalPayment":"$397866.21","Status":6,"Type":1,"Actions":null},
                    {"RecordID":150,"OrderID":"68814-128","Country":"Colombia","ShipCountry":"CO","ShipCity":"Guayabetal","ShipName":"Pagac LLC","ShipAddress":"59 Steensland Point","CompanyEmail":"ametherell45@squidoo.com","CompanyAgent":"Arvy Metherell","CompanyName":"Wuckert, Kuhn and Kshlerin","Currency":"COP","Notes":"vestibulum sit amet cursus id turpis integer aliquet massa id lobortis convallis tortor risus dapibus augue vel accumsan tellus","Department":"Books","Website":"dedecms.com","Latitude":4.2157,"Longitude":-73.81476,"ShipDate":"8/24/2017","PaymentDate":"2017-02-23 12:47:37","TimeZone":"America/Bogota","TotalPayment":"$31448.59","Status":3,"Type":2,"Actions":null},
                    {"RecordID":151,"OrderID":"0268-1504","Country":"Philippines","ShipCountry":"PH","ShipCity":"Caibiran","ShipName":"Schaden, Bode and Miller","ShipAddress":"9709 Rockefeller Avenue","CompanyEmail":"djocelyn46@wix.com","CompanyAgent":"Dewain Jocelyn","CompanyName":"Metz, White and Spencer","Currency":"PHP","Notes":"sem praesent id massa id nisl venenatis lacinia aenean sit amet justo morbi ut odio cras","Department":"Automotive","Website":"infoseek.co.jp","Latitude":11.57256,"Longitude":124.574799,"ShipDate":"9/13/2016","PaymentDate":"2016-10-09 10:10:46","TimeZone":"Asia/Manila","TotalPayment":"$412911.92","Status":4,"Type":1,"Actions":null},
                    {"RecordID":152,"OrderID":"51452-010","Country":"Comoros","ShipCountry":"KM","ShipCity":"Hajoho","ShipName":"Fritsch-Tromp","ShipAddress":"325 Hoard Trail","CompanyEmail":"mundrill47@hexun.com","CompanyAgent":"Mozes Undrill","CompanyName":"Larson-Marquardt","Currency":"KMF","Notes":"donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin mi sit amet lobortis sapien sapien non mi integer ac","Department":"Computers","Website":"amazon.co.jp","Latitude":-12.1227634,"Longitude":44.4883576,"ShipDate":"6/19/2017","PaymentDate":"2016-09-17 01:38:34","TimeZone":"Indian/Comoro","TotalPayment":"$153092.98","Status":5,"Type":3,"Actions":null},
                    {"RecordID":153,"OrderID":"0409-7138","Country":"Thailand","ShipCountry":"TH","ShipCity":"Ra-ngae","ShipName":"Mayer, Emmerich and Schaden","ShipAddress":"01 Bluejay Way","CompanyEmail":"jstickney48@histats.com","CompanyAgent":"Joyan Stickney","CompanyName":"Steuber, Koch and Bins","Currency":"THB","Notes":"tempor turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem duis aliquam convallis nunc proin","Department":"Books","Website":"cam.ac.uk","Latitude":6.2958736,"Longitude":101.7296049,"ShipDate":"7/7/2016","PaymentDate":"2016-06-30 09:54:31","TimeZone":"Asia/Bangkok","TotalPayment":"$811131.55","Status":6,"Type":2,"Actions":null},
                    {"RecordID":154,"OrderID":"49349-545","Country":"Russia","ShipCountry":"RU","ShipCity":"Novyye Kuz’minki","ShipName":"Boyle, Gislason and Collier","ShipAddress":"17892 Sullivan Avenue","CompanyEmail":"kcraney49@artisteer.com","CompanyAgent":"Kirbie Craney","CompanyName":"Kunde, Kihn and Stoltenberg","Currency":"RUB","Notes":"duis at velit eu est congue elementum in hac habitasse platea dictumst morbi vestibulum velit id pretium","Department":"Outdoors","Website":"qq.com","Latitude":"55.7","Longitude":"37.75","ShipDate":"2/7/2017","PaymentDate":"2016-07-17 15:14:55","TimeZone":"Europe/Moscow","TotalPayment":"$97377.15","Status":3,"Type":1,"Actions":null},
                    {"RecordID":155,"OrderID":"65044-1208","Country":"Portugal","ShipCountry":"PT","ShipCity":"Memória","ShipName":"Erdman, Heaney and Champlin","ShipAddress":"8 Pond Road","CompanyEmail":"qadamo4a@irs.gov","CompanyAgent":"Querida Adamo","CompanyName":"Murazik-Dietrich","Currency":"EUR","Notes":"nulla elit ac nulla sed vel enim sit amet nunc viverra dapibus nulla suscipit ligula in lacus curabitur at","Department":"Books","Website":"icq.com","Latitude":39.7847567,"Longitude":-8.6496676,"ShipDate":"1/18/2018","PaymentDate":"2016-10-07 06:57:16","TimeZone":"Europe/Lisbon","TotalPayment":"$885940.41","Status":6,"Type":3,"Actions":null},
                    {"RecordID":156,"OrderID":"33261-495","Country":"China","ShipCountry":"CN","ShipCity":"Gande","ShipName":"Harris LLC","ShipAddress":"29 Crownhardt Circle","CompanyEmail":"sdauber4b@reddit.com","CompanyAgent":"Sally Dauber","CompanyName":"Ryan-Hilpert","Currency":"CNY","Notes":"turpis enim blandit mi in porttitor pede justo eu massa donec dapibus duis at","Department":"Home","Website":"hud.gov","Latitude":33.969218,"Longitude":99.900904,"ShipDate":"4/19/2017","PaymentDate":"2018-01-18 07:46:15","TimeZone":"Asia/Shanghai","TotalPayment":"$840018.61","Status":6,"Type":2,"Actions":null},
                    {"RecordID":157,"OrderID":"0781-5206","Country":"China","ShipCountry":"CN","ShipCity":"Damatou","ShipName":"Walsh Group","ShipAddress":"20 Fair Oaks Hill","CompanyEmail":"bbayliss4c@craigslist.org","CompanyAgent":"Bertine Bayliss","CompanyName":"Rau LLC","Currency":"CNY","Notes":"phasellus sit amet erat nulla tempus vivamus in felis eu sapien cursus","Department":"Toys","Website":"cbc.ca","Latitude":34.429066,"Longitude":117.609916,"ShipDate":"2/10/2017","PaymentDate":"2016-07-10 16:59:38","TimeZone":"Asia/Chongqing","TotalPayment":"$734613.11","Status":6,"Type":1,"Actions":null},
                    {"RecordID":158,"OrderID":"0363-0563","Country":"Indonesia","ShipCountry":"ID","ShipCity":"Kraton","ShipName":"Bogisich-Howell","ShipAddress":"4605 Ilene Way","CompanyEmail":"sportugal4d@instagram.com","CompanyAgent":"Sidoney Portugal","CompanyName":"West-Dietrich","Currency":"IDR","Notes":"ac est lacinia nisi venenatis tristique fusce congue diam id ornare imperdiet sapien urna","Department":"Automotive","Website":"harvard.edu","Latitude":-7.8090256,"Longitude":110.363649,"ShipDate":"1/28/2017","PaymentDate":"2017-10-27 08:40:53","TimeZone":"Asia/Jakarta","TotalPayment":"$141268.54","Status":2,"Type":2,"Actions":null},
                    {"RecordID":159,"OrderID":"54505-328","Country":"China","ShipCountry":"CN","ShipCity":"Raofeng","ShipName":"Runte, Corkery and Keeling","ShipAddress":"4 Continental Place","CompanyEmail":"bpaley4e@oakley.com","CompanyAgent":"Bordy Paley","CompanyName":"Quitzon, Morissette and Feil","Currency":"CNY","Notes":"sapien varius ut blandit non interdum in ante vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere","Department":"Games","Website":"state.tx.us","Latitude":28.953503,"Longitude":116.822083,"ShipDate":"11/5/2016","PaymentDate":"2017-08-14 16:51:50","TimeZone":"Asia/Shanghai","TotalPayment":"$722606.37","Status":2,"Type":1,"Actions":null},
                    {"RecordID":160,"OrderID":"49999-266","Country":"China","ShipCountry":"CN","ShipCity":"Luowan","ShipName":"Wisozk-Larson","ShipAddress":"9715 Arkansas Plaza","CompanyEmail":"ajorat4f@jigsy.com","CompanyAgent":"Auguste Jorat","CompanyName":"Bruen-Frami","Currency":"CNY","Notes":"justo sollicitudin ut suscipit a feugiat et eros vestibulum ac","Department":"Tools","Website":"zimbio.com","Latitude":28.1905018,"Longitude":112.999502,"ShipDate":"1/15/2018","PaymentDate":"2016-08-09 19:26:51","TimeZone":"Asia/Shanghai","TotalPayment":"$228489.36","Status":1,"Type":1,"Actions":null},
                    {"RecordID":161,"OrderID":"62670-4759","Country":"Philippines","ShipCountry":"PH","ShipCity":"Salvacion","ShipName":"Hackett, Watsica and Kuphal","ShipAddress":"76 Utah Lane","CompanyEmail":"smicheau4g@amazon.co.uk","CompanyAgent":"Sher Micheau","CompanyName":"Champlin-Wintheiser","Currency":"PHP","Notes":"dui proin leo odio porttitor id consequat in consequat ut nulla sed accumsan felis","Department":"Clothing","Website":"pagesperso-orange.fr","Latitude":"12.6151","Longitude":"125.039","ShipDate":"10/23/2016","PaymentDate":"2017-05-03 12:42:58","TimeZone":"Asia/Manila","TotalPayment":"$81431.40","Status":6,"Type":2,"Actions":null},
                    {"RecordID":162,"OrderID":"0024-5851","Country":"Brazil","ShipCountry":"BR","ShipCity":"Parobé","ShipName":"Abbott, Muller and Kunze","ShipAddress":"2914 Nevada Drive","CompanyEmail":"mlethbury4h@marketwatch.com","CompanyAgent":"Myriam Lethbury","CompanyName":"Weimann, Barrows and Mohr","Currency":"BRL","Notes":"amet diam in magna bibendum imperdiet nullam orci pede venenatis non","Department":"Baby","Website":"prlog.org","Latitude":-29.6247579,"Longitude":-50.8316868,"ShipDate":"4/10/2018","PaymentDate":"2018-01-28 14:48:44","TimeZone":"America/Sao_Paulo","TotalPayment":"$1133374.87","Status":6,"Type":2,"Actions":null},
                    {"RecordID":163,"OrderID":"67938-2008","Country":"Mongolia","ShipCountry":"MN","ShipCity":"Suugaant","ShipName":"Ankunding and Sons","ShipAddress":"67843 Arkansas Drive","CompanyEmail":"equye4i@people.com.cn","CompanyAgent":"Elmore Quye","CompanyName":"Langworth Inc","Currency":"MNT","Notes":"nulla sed vel enim sit amet nunc viverra dapibus nulla suscipit ligula in lacus curabitur at ipsum ac","Department":"Garden","Website":"w3.org","Latitude":"45.53257","Longitude":"107.04546","ShipDate":"6/2/2017","PaymentDate":"2016-12-26 16:47:52","TimeZone":"Asia/Ulaanbaatar","TotalPayment":"$1026071.10","Status":6,"Type":1,"Actions":null},
                    {"RecordID":164,"OrderID":"57520-0620","Country":"Thailand","ShipCountry":"TH","ShipCity":"Tan Sum","ShipName":"Ankunding and Sons","ShipAddress":"0 Buell Crossing","CompanyEmail":"mrenehan4j@multiply.com","CompanyAgent":"Mikael Renehan","CompanyName":"Stracke-Connelly","Currency":"THB","Notes":"nulla sed vel enim sit amet nunc viverra dapibus nulla suscipit ligula","Department":"Electronics","Website":"harvard.edu","Latitude":15.3947065,"Longitude":105.1726816,"ShipDate":"7/9/2017","PaymentDate":"2018-04-20 15:49:45","TimeZone":"Asia/Bangkok","TotalPayment":"$1015071.09","Status":1,"Type":2,"Actions":null},
                    {"RecordID":165,"OrderID":"34666-060","Country":"Malaysia","ShipCountry":"MY","ShipCity":"Sandakan","ShipName":"Jenkins-Mohr","ShipAddress":"1 Petterle Point","CompanyEmail":"svanderson4k@digg.com","CompanyAgent":"Shae Vanderson","CompanyName":"Wilkinson, Watsica and Steuber","Currency":"MYR","Notes":"felis donec semper sapien a libero nam dui proin leo","Department":"Clothing","Website":"si.edu","Latitude":5.83864,"Longitude":118.116958,"ShipDate":"8/16/2017","PaymentDate":"2017-09-26 05:20:08","TimeZone":"Asia/Kuching","TotalPayment":"$1183508.45","Status":1,"Type":2,"Actions":null},
                    {"RecordID":166,"OrderID":"0603-3969","Country":"Kazakhstan","ShipCountry":"KZ","ShipCity":"Oral","ShipName":"Little-Hackett","ShipAddress":"2272 Eggendart Lane","CompanyEmail":"ysharratt4l@aboutads.info","CompanyAgent":"Yelena Sharratt","CompanyName":"Keeling and Sons","Currency":"KZT","Notes":"pellentesque eget nunc donec quis orci eget orci vehicula condimentum curabitur in libero","Department":"Jewelery","Website":"bbc.co.uk","Latitude":51.227821,"Longitude":51.3865431,"ShipDate":"2/5/2016","PaymentDate":"2016-11-08 21:56:42","TimeZone":"Asia/Oral","TotalPayment":"$1155219.64","Status":5,"Type":3,"Actions":null},
                    {"RecordID":167,"OrderID":"24236-624","Country":"China","ShipCountry":"CN","ShipCity":"Qingshui","ShipName":"Orn-Friesen","ShipAddress":"57 Green Drive","CompanyEmail":"elambrook4m@rediff.com","CompanyAgent":"Ealasaid Lambrook","CompanyName":"Rau-Smith","Currency":"CNY","Notes":"suscipit ligula in lacus curabitur at ipsum ac tellus semper interdum mauris ullamcorper purus sit","Department":"Kids","Website":"prlog.org","Latitude":34.749864,"Longitude":106.137293,"ShipDate":"6/18/2017","PaymentDate":"2016-02-13 18:34:41","TimeZone":"Asia/Shanghai","TotalPayment":"$152549.61","Status":1,"Type":3,"Actions":null},
                    {"RecordID":168,"OrderID":"76485-1010","Country":"Rwanda","ShipCountry":"RW","ShipCity":"Nzega","ShipName":"Cremin-Mueller","ShipAddress":"3147 Atwood Avenue","CompanyEmail":"asakins4n@creativecommons.org","CompanyAgent":"Allene Sakins","CompanyName":"Emard-Gaylord","Currency":"RWF","Notes":"in quam fringilla rhoncus mauris enim leo rhoncus sed vestibulum sit amet cursus id","Department":"Shoes","Website":"umich.edu","Latitude":"-2.479","Longitude":"29.5564","ShipDate":"10/11/2016","PaymentDate":"2018-01-19 14:55:38","TimeZone":"Africa/Kigali","TotalPayment":"$916265.57","Status":1,"Type":1,"Actions":null},
                    {"RecordID":169,"OrderID":"29300-117","Country":"Indonesia","ShipCountry":"ID","ShipCity":"Singgugu","ShipName":"Altenwerth, Dietrich and Effertz","ShipAddress":"84 Twin Pines Drive","CompanyEmail":"smartill4o@si.edu","CompanyAgent":"Sheela Martill","CompanyName":"Leffler, Wuckert and Schiller","Currency":"IDR","Notes":"diam vitae quam suspendisse potenti nullam porttitor lacus at turpis donec posuere metus vitae ipsum","Department":"Outdoors","Website":"acquirethisname.com","Latitude":"-7.1398","Longitude":"108.3549","ShipDate":"3/29/2017","PaymentDate":"2016-02-17 09:44:33","TimeZone":"Asia/Jakarta","TotalPayment":"$868367.93","Status":5,"Type":3,"Actions":null},
                    {"RecordID":170,"OrderID":"43857-0115","Country":"Argentina","ShipCountry":"AR","ShipCity":"Capitán Sarmiento","ShipName":"Lowe, Becker and Larkin","ShipAddress":"50 Kingsford Way","CompanyEmail":"jclibbery4p@mit.edu","CompanyAgent":"Jeana Clibbery","CompanyName":"Daugherty-Denesik","Currency":"ARS","Notes":"venenatis turpis enim blandit mi in porttitor pede justo eu massa donec dapibus duis at","Department":"Outdoors","Website":"amazon.co.jp","Latitude":-34.6066162,"Longitude":-58.4052178,"ShipDate":"5/30/2018","PaymentDate":"2016-03-02 03:39:31","TimeZone":"America/Argentina/Buenos_Aires","TotalPayment":"$193211.16","Status":1,"Type":1,"Actions":null},
                    {"RecordID":171,"OrderID":"0220-9343","Country":"Indonesia","ShipCountry":"ID","ShipCity":"Citeluk","ShipName":"Hagenes, Murphy and Kunde","ShipAddress":"130 Blackbird Circle","CompanyEmail":"igaylard4q@toplist.cz","CompanyAgent":"Isadora Gaylard","CompanyName":"Dach Group","Currency":"IDR","Notes":"in congue etiam justo etiam pretium iaculis justo in hac habitasse platea dictumst","Department":"Industrial","Website":"youtu.be","Latitude":-6.8083456,"Longitude":105.6735131,"ShipDate":"4/6/2017","PaymentDate":"2016-08-05 06:29:00","TimeZone":"Asia/Jakarta","TotalPayment":"$561124.99","Status":1,"Type":2,"Actions":null},
                    {"RecordID":172,"OrderID":"67046-139","Country":"Indonesia","ShipCountry":"ID","ShipCity":"Wonosari","ShipName":"McLaughlin, Bahringer and Kshlerin","ShipAddress":"898 New Castle Pass","CompanyEmail":"wlorinez4r@indiegogo.com","CompanyAgent":"Wilhelmina Lorinez","CompanyName":"Cole-Willms","Currency":"IDR","Notes":"et ultrices posuere cubilia curae donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin mi sit amet lobortis sapien sapien","Department":"Kids","Website":"cnbc.com","Latitude":-7.9655412,"Longitude":110.6008827,"ShipDate":"9/10/2016","PaymentDate":"2018-03-30 19:05:53","TimeZone":"Asia/Jakarta","TotalPayment":"$1092130.27","Status":5,"Type":3,"Actions":null},
                    {"RecordID":173,"OrderID":"0722-7121","Country":"Indonesia","ShipCountry":"ID","ShipCity":"Ciketak","ShipName":"Ritchie Group","ShipAddress":"845 Declaration Parkway","CompanyEmail":"wlaidlow4s@amazonaws.com","CompanyAgent":"Wallie Laidlow","CompanyName":"Dare, Tremblay and Kris","Currency":"IDR","Notes":"sagittis dui vel nisl duis ac nibh fusce lacus purus aliquet at feugiat non pretium","Department":"Computers","Website":"tripadvisor.com","Latitude":-7.0112331,"Longitude":108.4595045,"ShipDate":"2/23/2017","PaymentDate":"2017-07-09 01:28:29","TimeZone":"Asia/Jakarta","TotalPayment":"$951223.88","Status":1,"Type":2,"Actions":null},
                    {"RecordID":174,"OrderID":"12488-0600","Country":"China","ShipCountry":"CN","ShipCity":"Lecheng","ShipName":"Trantow-Brakus","ShipAddress":"53177 Linden Alley","CompanyEmail":"ejudson4t@google.cn","CompanyAgent":"Evie Judson","CompanyName":"Jast-Gutmann","Currency":"CNY","Notes":"justo nec condimentum neque sapien placerat ante nulla justo aliquam quis","Department":"Kids","Website":"jugem.jp","Latitude":23.35329,"Longitude":112.339444,"ShipDate":"2/1/2018","PaymentDate":"2018-04-24 13:30:44","TimeZone":"Asia/Chongqing","TotalPayment":"$982022.76","Status":2,"Type":2,"Actions":null},
                    {"RecordID":175,"OrderID":"55154-2416","Country":"Philippines","ShipCountry":"PH","ShipCity":"Lemery","ShipName":"Stark, Beier and Purdy","ShipAddress":"421 Schlimgen Junction","CompanyEmail":"theggison4u@theguardian.com","CompanyAgent":"Towny Heggison","CompanyName":"Gislason, Huel and Weber","Currency":"PHP","Notes":"in sapien iaculis congue vivamus metus arcu adipiscing molestie hendrerit at vulputate vitae nisl","Department":"Toys","Website":"cbc.ca","Latitude":14.5665991,"Longitude":121.0022623,"ShipDate":"1/15/2018","PaymentDate":"2016-01-24 09:46:57","TimeZone":"Asia/Manila","TotalPayment":"$1117682.39","Status":1,"Type":3,"Actions":null},
                    {"RecordID":176,"OrderID":"41163-272","Country":"Kenya","ShipCountry":"KE","ShipCity":"Thika","ShipName":"Carroll Group","ShipAddress":"36159 8th Hill","CompanyEmail":"smc4v@wisc.edu","CompanyAgent":"Sybil Mc Gee","CompanyName":"Romaguera-Parker","Currency":"KES","Notes":"turpis donec posuere metus vitae ipsum aliquam non mauris morbi non lectus aliquam sit amet diam in magna","Department":"Home","Website":"answers.com","Latitude":-1.0387569,"Longitude":37.0833753,"ShipDate":"2/4/2016","PaymentDate":"2017-08-22 10:40:22","TimeZone":"Africa/Nairobi","TotalPayment":"$576429.88","Status":2,"Type":3,"Actions":null},
                    {"RecordID":177,"OrderID":"60512-0050","Country":"Czech Republic","ShipCountry":"CZ","ShipCity":"Batelov","ShipName":"Hackett-Pacocha","ShipAddress":"8141 Sunfield Plaza","CompanyEmail":"ctortis4w@vk.com","CompanyAgent":"Cathe Tortis","CompanyName":"Fisher and Sons","Currency":"CZK","Notes":"lacus morbi sem mauris laoreet ut rhoncus aliquet pulvinar sed nisl nunc rhoncus dui vel sem","Department":"Sports","Website":"feedburner.com","Latitude":49.3142554,"Longitude":15.3946577,"ShipDate":"5/27/2018","PaymentDate":"2016-02-25 15:48:56","TimeZone":"Europe/Prague","TotalPayment":"$80913.95","Status":1,"Type":2,"Actions":null},
                    {"RecordID":178,"OrderID":"36800-866","Country":"Philippines","ShipCountry":"PH","ShipCity":"Mamburao","ShipName":"Batz-Keebler","ShipAddress":"022 Loeprich Place","CompanyEmail":"psandeson4x@amazon.com","CompanyAgent":"Patrizio Sandeson","CompanyName":"Hamill-Barton","Currency":"PHP","Notes":"quam sapien varius ut blandit non interdum in ante vestibulum ante ipsum primis in faucibus orci luctus","Department":"Books","Website":"webmd.com","Latitude":13.274365,"Longitude":120.618416,"ShipDate":"2/20/2018","PaymentDate":"2016-04-28 09:52:00","TimeZone":"Asia/Manila","TotalPayment":"$635402.74","Status":3,"Type":3,"Actions":null},
                    {"RecordID":179,"OrderID":"43269-904","Country":"Brazil","ShipCountry":"BR","ShipCity":"Itambé","ShipName":"Cartwright, Reynolds and Cremin","ShipAddress":"559 Algoma Avenue","CompanyEmail":"jwrighton4y@addthis.com","CompanyAgent":"Jasper Wrighton","CompanyName":"Roob-Balistreri","Currency":"BRL","Notes":"etiam faucibus cursus urna ut tellus nulla ut erat id mauris vulputate elementum nullam varius nulla facilisi cras non velit","Department":"Home","Website":"geocities.jp","Latitude":-7.4443035,"Longitude":-35.148879,"ShipDate":"4/3/2016","PaymentDate":"2017-11-20 08:09:19","TimeZone":"America/Bahia","TotalPayment":"$259516.34","Status":4,"Type":3,"Actions":null},
                    {"RecordID":180,"OrderID":"41167-0640","Country":"Cuba","ShipCountry":"CU","ShipCity":"San Luis","ShipName":"Olson-Pagac","ShipAddress":"82443 Meadow Vale Place","CompanyEmail":"adominetti4z@mozilla.com","CompanyAgent":"Agustin Dominetti","CompanyName":"Jones LLC","Currency":"CUP","Notes":"mauris sit amet eros suspendisse accumsan tortor quis turpis sed ante vivamus tortor duis mattis egestas metus","Department":"Electronics","Website":"nba.com","Latitude":20.1871897,"Longitude":-75.8475853,"ShipDate":"3/26/2016","PaymentDate":"2017-11-03 12:37:44","TimeZone":"America/Havana","TotalPayment":"$562603.97","Status":2,"Type":3,"Actions":null},
                    {"RecordID":181,"OrderID":"0832-1212","Country":"Indonesia","ShipCountry":"ID","ShipCity":"Pagelaran","ShipName":"Hand Group","ShipAddress":"123 Heath Place","CompanyEmail":"lmoneypenny50@bluehost.com","CompanyAgent":"Layne Moneypenny","CompanyName":"Dickinson, Doyle and Bahringer","Currency":"IDR","Notes":"a libero nam dui proin leo odio porttitor id consequat in consequat ut","Department":"Beauty","Website":"t-online.de","Latitude":-8.197451,"Longitude":112.6079459,"ShipDate":"3/14/2016","PaymentDate":"2018-05-26 21:26:57","TimeZone":"Asia/Jakarta","TotalPayment":"$429235.57","Status":1,"Type":2,"Actions":null},
                    {"RecordID":182,"OrderID":"42255-587","Country":"Thailand","ShipCountry":"TH","ShipCity":"Bangkok","ShipName":"Gibson and Sons","ShipAddress":"3 Spaight Crossing","CompanyEmail":"mtrahmel51@hatena.ne.jp","CompanyAgent":"Mildred Trahmel","CompanyName":"Schmeler and Sons","Currency":"THB","Notes":"molestie lorem quisque ut erat curabitur gravida nisi at nibh in","Department":"Automotive","Website":"comsenz.com","Latitude":13.8135951,"Longitude":100.4227992,"ShipDate":"10/8/2016","PaymentDate":"2016-09-02 21:28:47","TimeZone":"Asia/Bangkok","TotalPayment":"$702919.41","Status":2,"Type":2,"Actions":null},
                    {"RecordID":183,"OrderID":"43853-0010","Country":"Belarus","ShipCountry":"BY","ShipCity":"Shchuchin","ShipName":"Romaguera, Cruickshank and Kuhn","ShipAddress":"378 Fairview Terrace","CompanyEmail":"ncary52@twitter.com","CompanyAgent":"Nadine Cary","CompanyName":"Ebert, Dickinson and Koelpin","Currency":"BYR","Notes":"sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus vivamus vestibulum sagittis sapien cum sociis natoque","Department":"Grocery","Website":"geocities.com","Latitude":53.6040518,"Longitude":24.741899,"ShipDate":"7/23/2017","PaymentDate":"2016-07-27 23:52:58","TimeZone":"Europe/Minsk","TotalPayment":"$498289.59","Status":4,"Type":2,"Actions":null},
                    {"RecordID":184,"OrderID":"61077-127","Country":"Portugal","ShipCountry":"PT","ShipCity":"Mourelos","ShipName":"Reilly-Mohr","ShipAddress":"94801 Cascade Place","CompanyEmail":"araund53@lycos.com","CompanyAgent":"Analiese Raund","CompanyName":"Howe, Mueller and Douglas","Currency":"EUR","Notes":"convallis nulla neque libero convallis eget eleifend luctus ultricies eu nibh quisque id justo sit amet sapien dignissim","Department":"Automotive","Website":"imageshack.us","Latitude":40.2766272,"Longitude":-8.4903311,"ShipDate":"5/22/2017","PaymentDate":"2016-12-23 14:20:24","TimeZone":"Europe/Lisbon","TotalPayment":"$69863.53","Status":3,"Type":1,"Actions":null},
                    {"RecordID":185,"OrderID":"10889-301","Country":"China","ShipCountry":"CN","ShipCity":"Daijiaba","ShipName":"Kuphal LLC","ShipAddress":"30061 Garrison Place","CompanyEmail":"qjagels54@shutterfly.com","CompanyAgent":"Quinlan Jagels","CompanyName":"Okuneva Group","Currency":"CNY","Notes":"sit amet cursus id turpis integer aliquet massa id lobortis convallis tortor","Department":"Toys","Website":"guardian.co.uk","Latitude":33.010035,"Longitude":106.179842,"ShipDate":"11/7/2016","PaymentDate":"2016-09-25 22:54:49","TimeZone":"Asia/Chongqing","TotalPayment":"$821082.61","Status":1,"Type":3,"Actions":null},
                    {"RecordID":186,"OrderID":"64893-903","Country":"Bangladesh","ShipCountry":"BD","ShipCity":"Pirojpur","ShipName":"Olson, Bayer and Kling","ShipAddress":"40 Magdeline Trail","CompanyEmail":"gmarrow55@delicious.com","CompanyAgent":"Gabbie Marrow","CompanyName":"Balistreri LLC","Currency":"BDT","Notes":"in tempus sit amet sem fusce consequat nulla nisl nunc nisl","Department":"Industrial","Website":"ocn.ne.jp","Latitude":22.4217587,"Longitude":89.0445636,"ShipDate":"9/29/2016","PaymentDate":"2017-06-04 21:48:45","TimeZone":"Asia/Dhaka","TotalPayment":"$907390.78","Status":5,"Type":2,"Actions":null},
                    {"RecordID":187,"OrderID":"0093-2046","Country":"Portugal","ShipCountry":"PT","ShipCity":"Luso","ShipName":"Russel, Harber and Hamill","ShipAddress":"00 Dawn Center","CompanyEmail":"bgarman56@cbsnews.com","CompanyAgent":"Barton Garman","CompanyName":"Lockman Inc","Currency":"EUR","Notes":"est risus auctor sed tristique in tempus sit amet sem fusce consequat nulla nisl","Department":"Shoes","Website":"alibaba.com","Latitude":40.3853464,"Longitude":-8.380125,"ShipDate":"4/8/2018","PaymentDate":"2016-11-14 09:26:29","TimeZone":"Europe/Lisbon","TotalPayment":"$792909.90","Status":6,"Type":3,"Actions":null},
                    {"RecordID":188,"OrderID":"35356-767","Country":"Mali","ShipCountry":"ML","ShipCity":"Bla","ShipName":"Goodwin, Rempel and Champlin","ShipAddress":"25483 Arrowood Crossing","CompanyEmail":"ygagie57@surveymonkey.com","CompanyAgent":"Yard Gagie","CompanyName":"Hagenes and Sons","Currency":"XOF","Notes":"at velit eu est congue elementum in hac habitasse platea dictumst","Department":"Beauty","Website":"rediff.com","Latitude":12.9549865,"Longitude":-5.7563151,"ShipDate":"1/12/2017","PaymentDate":"2016-11-07 11:17:42","TimeZone":"Africa/Bamako","TotalPayment":"$767036.01","Status":4,"Type":3,"Actions":null},
                    {"RecordID":189,"OrderID":"61957-1841","Country":"Pakistan","ShipCountry":"PK","ShipCity":"Kambar","ShipName":"Collins, Kulas and Cruickshank","ShipAddress":"7 Redwing Hill","CompanyEmail":"oszantho58@gov.uk","CompanyAgent":"Orsola Szantho","CompanyName":"Swaniawski, Goyette and Schamberger","Currency":"PKR","Notes":"imperdiet nullam orci pede venenatis non sodales sed tincidunt eu felis fusce posuere felis sed lacus morbi sem","Department":"Games","Website":"examiner.com","Latitude":27.8084474,"Longitude":67.9277909,"ShipDate":"9/23/2017","PaymentDate":"2017-02-10 04:52:00","TimeZone":"Asia/Karachi","TotalPayment":"$613550.94","Status":5,"Type":3,"Actions":null},
                    {"RecordID":190,"OrderID":"64942-1215","Country":"Indonesia","ShipCountry":"ID","ShipCity":"Walenrang","ShipName":"Howell, Larkin and Collins","ShipAddress":"6 Redwing Court","CompanyEmail":"lpittendreigh59@zdnet.com","CompanyAgent":"Lib Pittendreigh","CompanyName":"Kemmer, Thiel and Hauck","Currency":"IDR","Notes":"justo nec condimentum neque sapien placerat ante nulla justo aliquam quis turpis","Department":"Toys","Website":"wikispaces.com","Latitude":-2.8800399,"Longitude":120.1242853,"ShipDate":"3/8/2018","PaymentDate":"2017-06-26 19:55:31","TimeZone":"Asia/Makassar","TotalPayment":"$841066.25","Status":5,"Type":1,"Actions":null},
                    {"RecordID":191,"OrderID":"60429-617","Country":"Brazil","ShipCountry":"BR","ShipCity":"Simão Dias","ShipName":"Bayer, Blanda and Cummings","ShipAddress":"3090 Nobel Way","CompanyEmail":"atrevain5a@over-blog.com","CompanyAgent":"Aguste Trevain","CompanyName":"Farrell-Collins","Currency":"BRL","Notes":"nunc rhoncus dui vel sem sed sagittis nam congue risus semper porta volutpat quam pede","Department":"Garden","Website":"51.la","Latitude":-10.7397921,"Longitude":-37.809338,"ShipDate":"3/9/2016","PaymentDate":"2017-01-31 15:20:45","TimeZone":"America/Maceio","TotalPayment":"$779396.08","Status":3,"Type":2,"Actions":null},
                    {"RecordID":192,"OrderID":"65862-706","Country":"Portugal","ShipCountry":"PT","ShipCity":"Maia","ShipName":"Hoppe-Heaney","ShipAddress":"724 Vera Hill","CompanyEmail":"chardwell5b@sitemeter.com","CompanyAgent":"Cthrine Hardwell","CompanyName":"Robel and Sons","Currency":"EUR","Notes":"lacus morbi quis tortor id nulla ultrices aliquet maecenas leo","Department":"Music","Website":"phpbb.com","Latitude":41.2022247,"Longitude":-8.5597719,"ShipDate":"10/1/2017","PaymentDate":"2017-05-03 03:37:08","TimeZone":"Europe/Lisbon","TotalPayment":"$688114.12","Status":3,"Type":3,"Actions":null},
                    {"RecordID":193,"OrderID":"0074-2278","Country":"South Africa","ShipCountry":"ZA","ShipCity":"Ulundi","ShipName":"Swaniawski, Murray and Powlowski","ShipAddress":"683 Barnett Hill","CompanyEmail":"vackers5c@ibm.com","CompanyAgent":"Vallie Ackers","CompanyName":"Blick, Zemlak and Douglas","Currency":"ZAR","Notes":"cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus etiam","Department":"Games","Website":"1und1.de","Latitude":-28.3307679,"Longitude":31.4256183,"ShipDate":"11/30/2016","PaymentDate":"2017-02-11 20:21:06","TimeZone":"Africa/Johannesburg","TotalPayment":"$884722.01","Status":4,"Type":2,"Actions":null},
                    {"RecordID":194,"OrderID":"0268-1333","Country":"Mongolia","ShipCountry":"MN","ShipCity":"Saynshand","ShipName":"Schowalter Inc","ShipAddress":"24 Oneill Lane","CompanyEmail":"ijopp5d@washingtonpost.com","CompanyAgent":"Isabel Jopp","CompanyName":"Wiegand-Schoen","Currency":"MNT","Notes":"vestibulum velit id pretium iaculis diam erat fermentum justo nec condimentum neque","Department":"Games","Website":"123-reg.co.uk","Latitude":44.8990915,"Longitude":110.1065717,"ShipDate":"8/5/2016","PaymentDate":"2016-10-10 06:31:09","TimeZone":"Asia/Ulaanbaatar","TotalPayment":"$1022216.65","Status":5,"Type":2,"Actions":null},
                    {"RecordID":195,"OrderID":"36987-1902","Country":"Armenia","ShipCountry":"AM","ShipCity":"Aghavnadzor","ShipName":"Hilll and Sons","ShipAddress":"1722 Acker Pass","CompanyEmail":"nmanton5e@comsenz.com","CompanyAgent":"Niall Manton","CompanyName":"Kirlin and Sons","Currency":"AMD","Notes":"eu interdum eu tincidunt in leo maecenas pulvinar lobortis est phasellus sit amet erat","Department":"Computers","Website":"a8.net","Latitude":40.5784827,"Longitude":44.6998779,"ShipDate":"12/24/2017","PaymentDate":"2016-03-03 02:25:13","TimeZone":"Asia/Yerevan","TotalPayment":"$188699.58","Status":5,"Type":1,"Actions":null},
                    {"RecordID":196,"OrderID":"0143-9869","Country":"Malaysia","ShipCountry":"MY","ShipCity":"Nusajaya","ShipName":"Feil and Sons","ShipAddress":"8 Judy Park","CompanyEmail":"jcahey5f@geocities.jp","CompanyAgent":"Jayme Cahey","CompanyName":"Shanahan, Donnelly and Bernhard","Currency":"MYR","Notes":"orci luctus et ultrices posuere cubilia curae duis faucibus accumsan","Department":"Home","Website":"exblog.jp","Latitude":1.424768,"Longitude":103.6487041,"ShipDate":"3/16/2017","PaymentDate":"2016-07-30 12:02:51","TimeZone":"Asia/Kuala_Lumpur","TotalPayment":"$609555.76","Status":3,"Type":3,"Actions":null},
                    {"RecordID":197,"OrderID":"49288-0913","Country":"South Africa","ShipCountry":"ZA","ShipCity":"Burgersfort","ShipName":"Farrell, Kunze and Schuppe","ShipAddress":"72 Spaight Lane","CompanyEmail":"dhirjak5g@google.de","CompanyAgent":"Debra Hirjak","CompanyName":"Thiel, Crooks and Hintz","Currency":"ZAR","Notes":"lorem ipsum dolor sit amet consectetuer adipiscing elit proin risus praesent lectus","Department":"Computers","Website":"archive.org","Latitude":-25.7394696,"Longitude":28.3508883,"ShipDate":"9/29/2016","PaymentDate":"2016-04-26 11:17:08","TimeZone":"Africa/Johannesburg","TotalPayment":"$540131.46","Status":3,"Type":3,"Actions":null},
                    {"RecordID":198,"OrderID":"58930-038","Country":"Brazil","ShipCountry":"BR","ShipCity":"Bariri","ShipName":"Flatley-Prosacco","ShipAddress":"199 Quincy Alley","CompanyEmail":"bcolliss5h@bluehost.com","CompanyAgent":"Blake Colliss","CompanyName":"Williamson-Hills","Currency":"BRL","Notes":"pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus in felis eu sapien cursus","Department":"Garden","Website":"woothemes.com","Latitude":-22.075317,"Longitude":-48.7417603,"ShipDate":"11/23/2016","PaymentDate":"2018-01-09 23:19:10","TimeZone":"America/Sao_Paulo","TotalPayment":"$243536.01","Status":5,"Type":2,"Actions":null},
                    {"RecordID":199,"OrderID":"65121-883","Country":"Russia","ShipCountry":"RU","ShipCity":"Antipino","ShipName":"Mitchell Inc","ShipAddress":"69291 Leroy Hill","CompanyEmail":"phaimes5i@usa.gov","CompanyAgent":"Paddy Haimes","CompanyName":"Larkin and Sons","Currency":"RUB","Notes":"neque vestibulum eget vulputate ut ultrices vel augue vestibulum ante","Department":"Clothing","Website":"twitter.com","Latitude":58.9918209,"Longitude":55.1890813,"ShipDate":"3/13/2018","PaymentDate":"2016-04-16 08:18:58","TimeZone":"Asia/Yekaterinburg","TotalPayment":"$481960.81","Status":2,"Type":2,"Actions":null},
                    {"RecordID":200,"OrderID":"51672-4144","Country":"Russia","ShipCountry":"RU","ShipCity":"Navashino","ShipName":"Monahan and Sons","ShipAddress":"44114 Autumn Leaf Street","CompanyEmail":"blambourn5j@google.com","CompanyAgent":"Byram Lambourn","CompanyName":"Huel and Sons","Currency":"RUB","Notes":"eu magna vulputate luctus cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus","Department":"Electronics","Website":"china.com.cn","Latitude":55.5292,"Longitude":42.2003001,"ShipDate":"1/13/2016","PaymentDate":"2017-09-29 11:36:18","TimeZone":"Europe/Moscow","TotalPayment":"$240701.63","Status":4,"Type":3,"Actions":null}];

                var datatable = $('.kt-datatable').KTDatatable({
                    data: {
                        type: 'local',
                        source: dataJSONArray,
                        pageSize: 10,
                        saveState: {
                            cookie: false,
                            webstorage: true
                        },
                        serverPaging: false,
                        serverFiltering: false,
                        serverSorting: false
                    },

                    layout: {
                        scroll: true,
                        height: 500,
                        footer: false
                    },

                    sortable: true,

                    filterable: false,

                    pagination: true,

                    columns: [{
                        field: "RecordID",
                        title: "#",
                        sortable: false,
                        width: 40,
                        selector: {
                            class: 'kt-checkbox--solid'
                        },
                        textAlign: 'center'
                    }, {
                        field: "ShipName",
                        title: "Company",
                        width: 'auto',
                        autoHide: false,
                        // callback function support for column rendering
                        template: function(data, i) {
                            var number = i + 1;
                            while (number > 5) {
                                number = number - 3;
                            }
                            var img = number + '.png';

                            var skills = [
                                'Angular, React',
                                'Vue, Kendo',
                                '.NET, Oracle, MySQL',
                                'Node, SASS, Webpack',
                                'MangoDB, Java',
                                'HTML5, jQuery, CSS3'
                            ];

                            var output = '\
                        <div class="kt-user-card-v2">\
                            <div class="kt-user-card-v2__pic">\
                                <img src="assets/media/client-logos/logo' + img + '" alt="photo">\
                            </div>\
                            <div class="kt-user-card-v2__details">\
                                <a href="#" class="kt-user-card-v2__name">' + data.CompanyName + '</a>\
                                <span class="kt-user-card-v2__email">' +
                                skills[number - 1] + '</span>\
                            </div>\
                        </div>';

                            return output;
                        }
                    }, {
                        field: "ShipDate",
                        title: "Date",
                        width: 100,
                        type: "date",
                        format: 'MM/DD/YYYY',
                        template: function(data) {
                            return '<span class="kt-font-bold">' + data.ShipDate + '</span>';
                        }
                    }, {
                        field: "Status",
                        title: "Status",
                        width: 100,
                        // callback function support for column rendering
                        template: function(row) {
                            var status = {
                                1: {
                                    'title': 'Pending',
                                    'class': ' btn-label-brand'
                                },
                                2: {
                                    'title': 'Processing',
                                    'class': ' btn-label-danger'
                                },
                                3: {
                                    'title': 'Success',
                                    'class': ' btn-label-success'
                                },
                                4: {
                                    'title': 'Delivered',
                                    'class': ' btn-label-success'
                                },
                                5: {
                                    'title': 'Canceled',
                                    'class': ' btn-label-warning'
                                },
                                6: {
                                    'title': 'Done',
                                    'class': ' btn-label-danger'
                                },
                                7: {
                                    'title': 'On Hold',
                                    'class': ' btn-label-warning'
                                }
                            };
                            return '<span class="btn btn-bold btn-sm btn-font-sm ' + status[row.Status].class + '">' + status[row.Status].title + '</span>';
                        }
                    }, {
                        field: "Type",
                        title: "Managed By",
                        width: 200,
                        // callback function support for column rendering
                        template: function(data, i) {
                            var number = 4 + i;
                            while (number > 12) {
                                number = number - 3;
                            }
                            var user_img = '100_' + number + '.jpg';

                            var pos = KTUtil.getRandomInt(0, 5);
                            var position = [
                                'Developer',
                                'Designer',
                                'CEO',
                                'Manager',
                                'Architect',
                                'Sales'
                            ];

                            var output = '';
                            if (number > 5) {
                                output = '<div class="kt-user-card-v2">\
							<div class="kt-user-card-v2__pic">\
								<img src="assets/media/users/' + user_img + '" alt="photo">\
							</div>\
							<div class="kt-user-card-v2__details">\
								<a href="#" class="kt-user-card-v2__name">' + data.CompanyAgent + '</a>\
								<span class="kt-user-card-v2__desc">' + position[pos] + '</span>\
							</div>\
						</div>';
                            }
                            else {
                                var stateNo = KTUtil.getRandomInt(0, 6);
                                var states = [
                                    'success',
                                    'brand',
                                    'danger',
                                    'success',
                                    'warning',
                                    'primary',
                                    'info'];
                                var state = states[stateNo];

                                output = '<div class="kt-user-card-v2">\
							<div class="kt-user-card-v2__pic">\
								<div class="kt-badge kt-badge--xl kt-badge--' + state + '">' + data.CompanyAgent.substring(0, 1) + '</div>\
							</div>\
							<div class="kt-user-card-v2__details">\
								<a href="#" class="kt-user-card-v2__name">' + data.CompanyAgent + '</a>\
								<span class="kt-user-card-v2__desc">' + position[pos] + '</span>\
							</div>\
						</div>';
                            }

                            return output;
                        }
                    }, {
                        field: "Actions",
                        width: 80,
                        title: "Actions",
                        sortable: false,
                        autoHide: false,
                        overflow: 'visible',
                        template: function() {
                            return '\
                        <div class="dropdown">\
                            <a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">\
                                <i class="flaticon-more-1"></i>\
                            </a>\
                            <div class="dropdown-menu dropdown-menu-right">\
                                <ul class="kt-nav">\
                                    <li class="kt-nav__item">\
                                        <a href="#" class="kt-nav__link">\
                                            <i class="kt-nav__link-icon flaticon2-expand"></i>\
                                            <span class="kt-nav__link-text">View</span>\
                                        </a>\
                                    </li>\
                                    <li class="kt-nav__item">\
                                        <a href="#" class="kt-nav__link">\
                                            <i class="kt-nav__link-icon flaticon2-contract"></i>\
                                            <span class="kt-nav__link-text">Edit</span>\
                                        </a>\
                                    </li>\
                                    <li class="kt-nav__item">\
                                        <a href="#" class="kt-nav__link">\
                                            <i class="kt-nav__link-icon flaticon2-trash"></i>\
                                            <span class="kt-nav__link-text">Delete</span>\
                                        </a>\
                                    </li>\
                                    <li class="kt-nav__item">\
                                        <a href="#" class="kt-nav__link">\
                                            <i class="kt-nav__link-icon flaticon2-mail-1"></i>\
                                            <span class="kt-nav__link-text">Export</span>\
                                        </a>\
                                    </li>\
                                </ul>\
                            </div>\
                        </div>\
                    ';
                        }
                    }]
                });
            }

            // Calendar Init
            var calendarInit = function() {
                if ($('#kt_calendar').length === 0) {
                    return;
                }

                var todayDate = moment().startOf('day');
                var YM = todayDate.format('YYYY-MM');
                var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
                var TODAY = todayDate.format('YYYY-MM-DD');
                var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');

                $('#kt_calendar').fullCalendar({
                    isRTL: KTUtil.isRTL(),
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay,listWeek'
                    },
                    editable: true,
                    eventLimit: true, // allow "more" link when too many events
                    navLinks: true,
                    defaultDate: moment('2017-09-15'),
                    events: [
                        {
                            title: 'Meeting',
                            start: moment('2017-08-28'),
                            description: 'Lorem ipsum dolor sit incid idunt ut',
                            className: "fc-event-light fc-event-solid-warning"
                        },
                        {
                            title: 'Conference',
                            description: 'Lorem ipsum dolor incid idunt ut labore',
                            start: moment('2017-08-29T13:30:00'),
                            end: moment('2017-08-29T17:30:00'),
                            className: "fc-event-success"
                        },
                        {
                            title: 'Dinner',
                            start: moment('2017-08-30'),
                            description: 'Lorem ipsum dolor sit tempor incid',
                            className: "fc-event-light  fc-event-solid-danger"
                        },
                        {
                            title: 'All Day Event',
                            start: moment('2017-09-01'),
                            description: 'Lorem ipsum dolor sit incid idunt ut',
                            className: "fc-event-danger fc-event-solid-focus"
                        },
                        {
                            title: 'Reporting',
                            description: 'Lorem ipsum dolor incid idunt ut labore',
                            start: moment('2017-09-03T13:30:00'),
                            end: moment('2017-09-04T17:30:00'),
                            className: "fc-event-success"
                        },
                        {
                            title: 'Company Trip',
                            start: moment('2017-09-05'),
                            end: moment('2017-09-07'),
                            description: 'Lorem ipsum dolor sit tempor incid',
                            className: "fc-event-primary"
                        },
                        {
                            title: 'ICT Expo 2017 - Product Release',
                            start: moment('2017-09-09'),
                            description: 'Lorem ipsum dolor sit tempor inci',
                            className: "fc-event-light fc-event-solid-primary"
                        },
                        {
                            title: 'Dinner',
                            start: moment('2017-09-12'),
                            description: 'Lorem ipsum dolor sit amet, conse ctetur'
                        },
                        {
                            id: 999,
                            title: 'Repeating Event',
                            start: moment('2017-09-15T16:00:00'),
                            description: 'Lorem ipsum dolor sit ncididunt ut labore',
                            className: "fc-event-danger"
                        },
                        {
                            id: 1000,
                            title: 'Repeating Event',
                            description: 'Lorem ipsum dolor sit amet, labore',
                            start: moment('2017-09-18T19:00:00'),
                        },
                        {
                            title: 'Conference',
                            start: moment('2017-09-20T13:00:00'),
                            end: moment('2017-09-21T19:00:00'),
                            description: 'Lorem ipsum dolor eius mod tempor labore',
                            className: "fc-event-success"
                        },
                        {
                            title: 'Meeting',
                            start: moment('2017-09-11'),
                            description: 'Lorem ipsum dolor eiu idunt ut labore'
                        },
                        {
                            title: 'Lunch',
                            start: moment('2017-09-18'),
                            className: "fc-event-info fc-event-solid-success",
                            description: 'Lorem ipsum dolor sit amet, ut labore'
                        },
                        {
                            title: 'Meeting',
                            start: moment('2017-09-24'),
                            className: "fc-event-warning",
                            description: 'Lorem ipsum conse ctetur adipi scing'
                        },
                        {
                            title: 'Happy Hour',
                            start: moment('2017-09-24'),
                            className: "fc-event-light fc-event-solid-focus",
                            description: 'Lorem ipsum dolor sit amet, conse ctetur'
                        },
                        {
                            title: 'Dinner',
                            start: moment('2017-09-24'),
                            className: "fc-event-solid-focus fc-event-light",
                            description: 'Lorem ipsum dolor sit ctetur adipi scing'
                        },
                        {
                            title: 'Birthday Party',
                            start: moment('2017-09-24'),
                            className: "fc-event-primary",
                            description: 'Lorem ipsum dolor sit amet, scing'
                        },
                        {
                            title: 'Company Event',
                            start: moment('2017-09-24'),
                            className: "fc-event-danger",
                            description: 'Lorem ipsum dolor sit amet, scing'
                        },
                        {
                            title: 'Click for Google',
                            url: 'http://google.com/',
                            start: moment('2017-09-26'),
                            className: "fc-event-solid-info fc-event-light",
                            description: 'Lorem ipsum dolor sit amet, labore'
                        }
                    ],

                    eventRender: function(event, element) {
                        if (element.hasClass('fc-day-grid-event')) {
                            element.data('content', event.description);
                            element.data('placement', 'top');
                            KTApp.initPopover(element);
                        } else if (element.hasClass('fc-time-grid-event')) {
                            element.find('.fc-title').append('<div class="fc-description">' + event.description + '</div>');
                        } else if (element.find('.fc-list-item-title').lenght !== 0) {
                            element.find('.fc-list-item-title').append('<div class="fc-description">' + event.description + '</div>');
                        }
                    }
                });
            }

            // Earnings Sliders
            var earningsSlide = function() {
                var carousel1 = $('#kt_earnings_widget .kt-widget30__head .owl-carousel');
                var carousel2 = $('#kt_earnings_widget .kt-widget30__body .owl-carousel');

                carousel1.find('.carousel').each( function( index ) {
                    $(this).attr( 'data-position', index );
                });

                carousel1.owlCarousel({
                    rtl: KTUtil.isRTL(),
                    center: true,
                    loop: true,
                    items: 2
                });

                carousel2.owlCarousel({
                    rtl: KTUtil.isRTL(),
                    items: 1,
                    animateIn: 'fadeIn(100)',
                    loop: true
                });

                $(document).on('click', '.carousel', function() {
                    var index = $(this).attr( 'data-position' );
                    if (index) {
                        carousel1.trigger('to.owl.carousel', index );
                        carousel2.trigger('to.owl.carousel', index );
                    }
                });

                carousel1.on('changed.owl.carousel', function () {
                    var index = $(this).find('.owl-item.active.center').find('.carousel').attr('data-position');
                    if (index) {
                        carousel2.trigger('to.owl.carousel', index);
                    }
                });

                carousel2.on('changed.owl.carousel', function () {
                    var index = $(this).find('.owl-item.active.center').find('.carousel').attr('data-position');
                    if (index){
                        carousel1.trigger('to.owl.carousel', index);
                    }
                });
            }

            return {
                // Init demos
                init: function() {
                    // init charts
                    dailySales();
                    profitShare();
                    salesStats();
                    salesByApps();
                    latestUpdates();
                    trendsStats();
                    trendsStats2();
                    latestTrendsMap();
                    revenueChange();
                    supportCases();
                    supportRequests();
                    activitiesChart();
                    bandwidthChart1();
                    bandwidthChart2();
                    adWordsStat();
                    financeSummary();
                    quickStats();
                    orderStatistics();

                    // init daterangepicker
                    daterangepickerInit();

                    // datatables
                    datatableLatestOrders();

                    // calendar
                    calendarInit();

                    // earnings slide
                    earningsSlide();


                    // demo loading
                    var loading = new KTDialog({'type': 'loader', 'placement': 'top center', 'message': 'Loading ...'});
                    loading.show();

                    setTimeout(function() {
                        loading.hide();
                    }, 3000);
                }
            };
        }();

        // Class initialization on page load
        jQuery(document).ready(function() {
            KTDashboard.init();
        });
    </script>
@endsection
