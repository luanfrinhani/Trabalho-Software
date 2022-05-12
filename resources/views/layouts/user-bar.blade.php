<div class="kt-header__topbar-item kt-header__topbar-item--user">
    <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
        <div class="kt-header__topbar-user">
            <span class="kt-header__topbar-welcome kt-hidden-mobile">@lang('system.label.hi'),</span>
            <span class="kt-header__topbar-username kt-hidden-mobile">
                {{ auth()->user()->first_name }}
            </span>
            @if(auth()->user()->avatar->count() > 0)
                <img alt="Pic" src="{{ auth()->user()->avatar->first()->url }}" />
            @else
                <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold">
                {{ substr(auth()->user()->name, 0, 1)  }}
            </span>
            @endif

            <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->

        </div>
    </div>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">

        <!--begin: Head -->
        <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url({{asset('assets/media/misc/bg-1.jpg')}})">
            <div class="kt-user-card__avatar">
                @if(auth()->user()->avatar->count() > 0)
                    <img alt="Pic" src="{{ auth()->user()->avatar->first()->url }}" />
                @else
                    <span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">
                        {{ substr(auth()->user()->name, 0, 1)  }}
                    </span>
                @endif

            </div>
            <div class="kt-user-card__name">
                {{ auth()->user()->name }}
            </div>
            <div class="kt-user-card__badge">
                <span class="btn btn-success btn-sm btn-bold btn-font-md">23 messages</span>
            </div>
        </div>

        <!--end: Head -->

        <!--begin: Navigation -->
        <div class="kt-notification">
            <a href="{{route('system.profile.information.edit')}}" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-calendar-3 kt-font-success"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title kt-font-bold">
                        @lang('user.label.my_profile')
                    </div>
                    <div class="kt-notification__item-time">
                        @lang('user.messages.account_settins_morre')
                    </div>
                </div>
            </a>
            <a href="custom/apps/user/profile-3.html" class="kt-notification__item">
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
            <a href="custom/apps/user/profile-2.html" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-rocket-1 kt-font-danger"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title kt-font-bold">
                        My Activities
                    </div>
                    <div class="kt-notification__item-time">
                        Logs and notifications
                    </div>
                </div>
            </a>
            <a href="custom/apps/user/profile-3.html" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-hourglass kt-font-brand"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title kt-font-bold">
                        My Tasks
                    </div>
                    <div class="kt-notification__item-time">
                        latest tasks and projects
                    </div>
                </div>
            </a>
            <a href="custom/apps/user/profile-1/overview.html" class="kt-notification__item">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-cardiogram kt-font-warning"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title kt-font-bold">
                        Billing
                    </div>
                    <div class="kt-notification__item-time">
                        billing & statements <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded">2 pending</span>
                    </div>
                </div>
            </a>
            <div class="kt-notification__custom kt-space-between">
                <a href="{{ route('logout') }}" target="_blank"
                   class="btn btn-label btn-label-brand btn-sm btn-bold"
                   onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();"
                >
                    @lang('system.label.logout')
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

                <a href="custom/user/login-v2.html" target="_blank" class="btn btn-clean btn-sm btn-bold">Upgrade Plan</a>
            </div>
        </div>

        <!--end: Navigation -->
    </div>
</div>
