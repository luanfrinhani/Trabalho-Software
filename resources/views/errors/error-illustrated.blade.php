<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- begin::Head -->
<head>
    <base href="../../../">
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'Laravel') }} | @yield('title', 'Admin')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

    <!--end::Fonts -->

{{--    <!--begin::Page Custom Styles(used by this page) -->--}}
{{--    <link href="assets/css/pages/error/error-5.css" rel="stylesheet" type="text/css" />--}}

    <!--end::Page Custom Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

<!-- begin:: Page -->
<div class="kt-grid kt-grid--ver kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid  kt-error-v5" style="background-image: url({{ asset('assets/media/error/bg5.jpg') }});">
        <div class="kt-error_container">
					<span class="kt-error_title">
						<h1>@yield('title', 'Admin')</h1>
					</span>
            <p class="kt-error_subtitle">
                @yield('subtitle')
            </p>
            <p class="kt-error_description">
                @yield('description')
            </p>
        </div>
    </div>
</div>

<!-- end:: Page -->

<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#5d78ff",
                "dark": "#282a3c",
                "light": "#ffffff",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": [
                    "#c5cbe3",
                    "#a1a8c3",
                    "#3d4465",
                    "#3e4466"
                ],
                "shape": [
                    "#f0f3ff",
                    "#d9dffa",
                    "#afb4d4",
                    "#646c9a"
                ]
            }
        }
    };
</script>

<!-- end::Global Config -->

<!--begin::Global Theme Bundle(used by all pages) -->
<script src="{{ asset('js/app.js') }}"></script>

<!--end::Global Theme Bundle -->
</body>

<!-- end::Body -->
</html>
