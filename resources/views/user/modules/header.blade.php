<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">
    <!-- begin: Header Menu -->
    <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
    <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper" style="opacity: 1;">
        <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-tab ">
            <h2 style="line-height: 80px">Exam Register</h2>
        </div>
    </div>
    <!-- end: Header Menu -->       
    <!-- begin:: Header Topbar -->
    <div class="kt-header__topbar">
        <!--begin: Search -->
        <div class="kt-header__topbar-item kt-header__topbar-item--search dropdown" id="kt_quick_search_toggle">
            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px" aria-expanded="false">
                <span class="kt-header__topbar-icon"><i class="flaticon2-search-1"></i></span>
            </div>
            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-top-unround dropdown-menu-anim dropdown-menu-lg" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(44px, 79px, 0px);">
                <div class="kt-quick-search kt-quick-search--inline" id="kt_quick_search_inline">
                    <form method="get" class="kt-quick-search__form">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="flaticon2-search-1"></i></span>
                            </div>
                            <input type="text" class="form-control kt-quick-search__input" placeholder="Search...">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="la la-close kt-quick-search__close" style="display: none;"></i></span>
                            </div>
                        </div>
                    </form>
                    <div class="kt-quick-search__wrapper kt-scroll ps" data-scroll="true" data-height="300" data-mobile-height="200" style="height: 300px; overflow: hidden;">
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                        </div>
                        <div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                </div>
            </div>          
        </div>
    </div>
    <!--end: Search -->

    <!--begin: Notifications -->

    <div class="kt-header__topbar-item dropdown">
        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px" aria-expanded="false">
            <span class="kt-header__topbar-icon"><i class="flaticon2-bell-alarm-symbol"></i></span>
            <span class="kt-hidden kt-badge kt-badge--dot kt-badge--notify kt-badge--sm"></span>
        </div>
        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-lg" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(44px, 79px, 0px);">
            <form>
                <!--begin: Head -->
                <div class="kt-head kt-head--skin-light kt-head--fit-x kt-head--fit-b">
                    <h3 class="kt-head__title">
                        User Notifications 
                        &nbsp;
                        <span class="btn btn-label-primary btn-sm btn-bold btn-font-md">23 new</span>
                    </h3>

                </div>
                <!--end: Head -->

                <div class="tab-content">
                    <div class="tab-pane show active" id="topbar_notifications_notifications" role="tabpanel">
                        <div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll ps" data-scroll="true" data-height="300" data-mobile-height="200" style="height: 300px; overflow: hidden;">
                        </a>
                        <a href="#" class="kt-notification__item">
                            <div class="kt-notification__item-icon">
                                <i class="flaticon2-pie-chart-2 kt-font-success"></i>
                            </div>
                            <div class="kt-notification__item-details">
                                <div class="kt-notification__item-title">
                                    System reboot has been successfully completed
                                </div>
                                <div class="kt-notification__item-time">
                                    12 hrs ago
                                </div>
                            </div>
                        </a>
                        <a href="#" class="kt-notification__item kt-notification__item--read">
                            <div class="kt-notification__item-icon">
                                <i class="flaticon2-safe kt-font-primary"></i>
                            </div>
                            <div class="kt-notification__item-details">
                                <div class="kt-notification__item-title">
                                    Company meeting canceled
                                </div>
                                <div class="kt-notification__item-time">
                                    19 hrs ago
                                </div>
                            </div>
                        </a>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                </div>
            </div>
        </div>


    </div>              
</form>
</div>
</div>
<!--end: Notifications -->

<!--begin: User Bar -->
<div class="kt-header__topbar-item kt-header__topbar-item--user show">
    <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px" aria-expanded="true">
        <div class="kt-header__topbar-user">
            <span class="kt-hidden kt-header__topbar-welcome kt-hidden-mobile">Hi,</span>
            <span class="kt-hidden kt-header__topbar-username kt-hidden-mobile">Sean</span>
            <img class="kt-hidden" alt="Pic" src="media/users/300_25.jpg">
            <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
            <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bolder">S</span>
        </div>
    </div>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(764px, 79px, 0px);">
        <!--begin: Head -->
        <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url(media/misc/bg-1.jpg)">
            <div class="kt-user-card__avatar">
                <img class="kt-hidden" alt="Pic" src="media/users/300_25.jpg">
                <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                <span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">S</span>
            </div>
            <div class="kt-user-card__name">
                Sean Stone
            </div>
            <div class="kt-user-card__badge">
                <span class="btn btn-success btn-sm btn-bold btn-font-md">23 messages</span>
            </div>
        </div>
        <!--end: Head -->

        <!--begin: Navigation -->
        <div class="kt-notification">
            <a href="#" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-calendar-3 kt-font-success"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title kt-font-bold">
                        My Profile
                    </div>
                    <div class="kt-notification__item-time">
                        Account settings and more
                    </div>
                </div>
            </a>
            <a href="#" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-mail kt-font-warning"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title kt-font-bold">
                        My Messages
                    </div>
                    <div class="kt-notification__item-time">
                        Inbox and tasks
                    </div>
                </div>
            </a>
            <div class="kt-notification__custom kt-space-between">
                <a href="custom/user/login-v2.html" target="_blank" class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>

                <a href="custom/user/login-v2.html" target="_blank" class="btn btn-clean btn-sm btn-bold">Upgrade Plan</a>
            </div>
        </div>
        <!--end: Navigation -->     
    </div>
</div>
<!--end: User Bar -->    
</div>
<!-- end:: Header Topbar -->
</div>