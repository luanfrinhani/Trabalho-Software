@extends('layouts.app')

@section('title')
    @lang('user.label.users')
@endsection

@section('stylesheet')
@endsection

@section('subheader')
    <h3 class="kt-subheader__title">
        @lang('user.label.users')
    </h3>
    <span class="kt-subheader__separator kt-hidden"></span>
    <div class="kt-subheader__breadcrumbs">
        <a href="{{ route('home') }}" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
        <span class="kt-subheader__breadcrumbs-separator"></span>
        <a class="kt-subheader__breadcrumbs-link">
            @lang('system.label.system')
        </a>
        <span class="kt-subheader__breadcrumbs-separator"></span>
        <a href="{{ route('system.user.index') }}" class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">
            @lang('user.label.users')
        </a>

        <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
    </div>
@endsection

@section('subheader-toolbar')
@endsection

@section('content')
    <!--begin::Portlet-->
    <div class="kt-portlet kt-portlet--last kt-portlet--head-lg kt-portlet--responsive-mobile" id="kt_page_portlet">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                    <i class="fa fa-users kt-font-brand"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    @lang('user.label.users')
{{--                    <small>try to scroll the page</small>--}}
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <a href="{{ route('system.user.create') }}" class="btn btn-brand">
                    <i class="la la-plus"></i>
                    <span class="kt-hidden-mobile">
                        @lang('user.label.add')
                    </span>
                </a>
            </div>
        </div>
        <div class="kt-portlet__body">

            @if(session('response'))
                <x-alert type="{{session('response.type')}}" message="{{session('response.message')}}"></x-alert>
            @endif

            <table class="table table-striped table-hover table-checkable dataTable" id="kt_table_1">
                <thead>
                <tr>
{{--                    <th>Id</th>--}}
                    <th>@lang('user.attribute.name')</th>
                    <th>@lang('user.attribute.email')</th>
                    <th>@lang('user.label.group')</th>
                    <th>@lang('system.label.actions')</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
{{--                        <td>{{$user->id}}</td>--}}
                        <td>
                            <div class="kt-user-card-v2">
                                <div class="kt-user-card-v2__pic">
                                    <img class="kt-hidden" src="{{ asset('assets/media/users/100_1.jpg') }}" alt="photo">
                                    <div class="kt-badge kt-badge--xl kt-badge--success">{{substr($user->name, 0, 1)}}</div>
                                </div>
                                <div class="kt-user-card-v2__details">
                                    <a href="#" class="kt-user-card-v2__name">{{$user->name}}</a>
                                    <span class="kt-user-card-v2__desc">{{$user->email}}</span>
                                </div>
                            </div>
                        </td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->label}}</td>
                        <td nowrap>
                            <a href="{{route('system.user.edit', ['user' => $user->id])}}" class="btn btn-sm btn-brand">
                                <i class="fa fa-pencil-alt"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="kt-portlet__foot">
            <div class="row align-items-center">
                <div class="col-lg-6 m--valign-middle">

                </div>
                <div class="col-lg-6 kt-align-right">

                </div>
            </div>
        </div>
    </div>
    <!--end::Portlet-->
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('#menu_item_usuario').addClass('kt-menu__item--active');
        });
    </script>
@endsection
