<div class="kt-header__topbar-item kt-header__topbar-item--user">
    <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
        <div class="kt-header__topbar-user">
            <span class="kt-header__topbar-welcome kt-hidden-mobile">@lang('system.label.hi'),</span>
            <span class="kt-header__topbar-username kt-hidden-mobile">
                {{ auth()->user()->first_name }}
            </span>
                <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold">
                {{ substr(auth()->user()->name, 0, 1)  }}
            </span>

            <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->

        </div>
    </div>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">

        <!--begin: Head -->
        <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url({{asset('assets/media/misc/bg-1.jpg')}})">
            <div class="kt-user-card__avatar">
                    <span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">
                        {{ substr(auth()->user()->name, 0, 1)  }}
                    </span>

            </div>
            <div class="kt-user-card__name">
                {{ auth()->user()->name }}
            </div>
        </div>

        <!--end: Head -->

        <!--begin: Navigation -->
        <div class="kt-notification">
            <div class="kt-notification__custom kt-space-between">
                <a href="{{ route('logout') }}" target="_blank"
                   class="btn btn-label btn-label-brand btn-sm btn-bold"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    @lang('system.label.logout')
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

            </div>
        </div>

        <!--end: Navigation -->
    </div>
</div>
