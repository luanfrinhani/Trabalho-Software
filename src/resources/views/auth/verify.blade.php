@extends('layouts.app')

@section('title')
    @lang('auth.label.verify_email_address')
@endsection

@section('stylesheet')
@endsection

@section('subheader')
    <h3 class="kt-subheader__title">
        @lang('auth.label.verify_email_address')
    </h3>
    <span class="kt-subheader__separator kt-hidden"></span>
    <div class="kt-subheader__breadcrumbs">
        <a href="{{ route('home') }}" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
        <span class="kt-subheader__breadcrumbs-separator"></span>
        <a class="kt-subheader__breadcrumbs-link">
            @lang('system.label.security')
        </a>
        <span class="kt-subheader__breadcrumbs-separator"></span>
        <a class="kt-subheader__breadcrumbs-link">
            @lang('user.attribute.email')
        </a>
        <span class="kt-subheader__breadcrumbs-separator"></span>
        <a href="{{ route('system.user.create') }}" class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">
            @lang('auth.label.verify_email_address')
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
                    <i class="fa fa-user-check kt-font-brand"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    @lang('auth.label.verify_email_address')
                    {{--                    <small>{{ __('Please confirm your password before continuing.') }}</small>--}}
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
            </div>
        </div>
        <div class="kt-portlet__body">
            @if (session('resent'))
                <div class="alert alert-success alert-bold" role="alert">
                    @lang('auth.message.fresh_verification_link_sent')
                </div>
            @endif

            @lang('auth.message.before_proceeding_check_email_verification')
            @lang('auth.message.if_not_receive_email')
            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <button type="submit" class="btn btn-clean p-0 m-0 align-baseline">
                    @lang('auth.message.click_here_request_another')
                </button>.
            </form>
        </div>

        <div class="kt-portlet__foot">
            <div class="row align-items-center">
            </div>
        </div>
    </div>
@endsection
