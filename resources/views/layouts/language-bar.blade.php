<div class="kt-header__topbar-item kt-header__topbar-item--langs">
    <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
        <span class="kt-header__topbar-icon">
            <img class="" src="{{asset('assets/media/flags/'.app()->getLocale().'.svg')}}" alt="" />
        </span>
    </div>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround">
        <ul class="kt-nav kt-margin-t-10 kt-margin-b-10">
            @foreach (Arr::sort(config('app.available_locales')) as $locale)
                <li class="kt-nav__item @if(app()->getLocale() == $locale) kt-nav__item--active @endif">
                    <a href="{{ route(Route::currentRouteName(), array_merge(['locale' => $locale],Route::current()->parameters()) ) }}" class="kt-nav__link">
                        <span class="kt-nav__link-icon">
                            <img src="{{asset('assets/media/flags/'.$locale.'.svg')}}" alt="" />
                        </span>
                        <span class="kt-nav__link-text">{{ strtoupper($locale) }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
