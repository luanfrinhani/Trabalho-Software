@extends('layouts.app')

@section('title')
    @lang('user.label.confirm_password')
@endsection

@section('stylesheet')
@endsection

@section('subheader')
    <h3 class="kt-subheader__title">
        @lang('user.label.confirm_password')
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
            @lang('user.attribute.password')
        </a>
        <span class="kt-subheader__breadcrumbs-separator"></span>
        <a href="{{ route('system.user.create') }}" class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">
            {{ __('Confirm Password') }}
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
                    <i class="fa fa-user-shield kt-font-brand"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    @lang('user.label.confirm_password')
{{--                    <small>{{ __('Please confirm your password before continuing.') }}</small>--}}
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <a href="{{ url()->previous() }}" class="btn btn-clean kt-margin-r-10">
                    <i class="la la-arrow-left"></i>
                    <span class="kt-hidden-mobile">@lang('system.button.back')</span>
                </a>
                <button form="formConfirmPassword" type="submit" class="btn btn-success">
                    <i class="la la-check"></i>
                    <span class="kt-hidden-mobile">@lang('user.label.confirm_password')</span>
                </button>
            </div>
        </div>
        <div class="kt-portlet__body">

            @if(session('response'))
                <x-alert type="{{session('response.type')}}" message="{{session('response.message')}}"></x-alert>
            @endif

            <form id="formConfirmPassword" method="POST" action="{{ route('password.confirm') }}" class="kt-form kt-form--label-right">
                @csrf

                <div class="form-group row">
                    <label class="col-md-3 col-form-label">@lang('user.attribute.password')</label>
                    <div class="col-md-6">
                        <input id="password" type="password" name="password" required autocomplete="current-password"
                               class="form-control @error('password') is-invalid @enderror" >
                        <span class="form-text text-muted">@lang('user.help.please_confirm_password_before_continuing')</span>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>
            </form>
        </div>

        <div class="kt-portlet__foot">
            <div class="row align-items-center">
                <div class="col-lg-6 m--valign-middle">

                </div>
                <div class="col-lg-6 kt-align-right">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" target="_blank" class="btn btn-clean" >
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
