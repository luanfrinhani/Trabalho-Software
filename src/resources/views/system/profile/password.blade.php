@extends('layouts.app')

@section('title')
    @lang('user.label.change_password')
@endsection

@section('subheader')
    <h3 class="kt-subheader__title">
        <button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle"><span></span></button>
        {{$user->name}}
    </h3>
    <span class="kt-subheader__separator kt-hidden"></span>
    <div class="kt-subheader__breadcrumbs">
        <a href="{{ route('home') }}" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
        <span class="kt-subheader__breadcrumbs-separator"></span>
        <a class="kt-subheader__breadcrumbs-link">
            @lang('user.label.my_profile')
        </a>
        <span class="kt-subheader__breadcrumbs-separator"></span>
        <a class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">
            @lang('user.label.change_password')
        </a>

        <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
    </div>
@endsection

@section('subheader-toolbar')
@endsection

@section('content')
    <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">

    @include('system.profile.menu')

    <!--Begin:: App Content-->
        <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">@lang('user.label.change_password') <small>@lang('user.messages.reset_account_password')</small></h3>
                            </div>
                        </div>
                        <form id="formProfileInformation" action="{{route('system.profile.password.update')}}" method="POST" class="kt-form kt-form--label-right">
                            @csrf
                            {{ method_field('PUT') }}

                            <div class="kt-portlet__body">
                                @if(session('response'))
                                    <x-alert type="{{session('response.type')}}" message="{{session('response.message')}}"></x-alert>
                                @endif


                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">

                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">@lang('user.attribute.current_password')</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input name="current_password" type="password" placeholder="@lang('user.placeholder.current_password')"
                                                       class="form-control @error('current_password') is-invalid @enderror">
                                                @error('current_password')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
{{--                                                <a href="{{ route('password.request') }}" target="_blank"--}}
{{--                                                   class="kt-link kt-font-sm kt-font-bold kt-margin-t-5">--}}
{{--                                                    @lang('auth.label.forgot_password')--}}
{{--                                                </a>--}}
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">@lang('user.attribute.password')</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input name="password" type="password" placeholder="@lang('user.placeholder.password')"
                                                       class="form-control @error('password') is-invalid @enderror">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group form-group-last row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">@lang('user.attribute.password_confirmation')</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input name="password_confirmation" type="password" value="" placeholder="@lang('user.placeholder.password_confirmation')"
                                                       class="form-control">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="kt-portlet__foot">
                                <div class="kt-form__actions">
                                    <div class="row">
                                        <div class="col-lg-3 col-xl-3">
                                        </div>
                                        <div class="col-lg-9 col-xl-9">
                                            <button form="formProfileInformation" type="submit" class="btn btn-success">
                                                <i class="la la-check"></i>
                                                @lang('system.button.save')
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--End:: App Content-->
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('#menu_profile_password').addClass('kt-widget__item--active');
        });


        // Class definition
        var KTUserProfile = function () {
            // Base elements
            var avatar;
            var offcanvas;

            // Private functions
            var initAside = function () {
                // Mobile offcanvas for mobile mode
                offcanvas = new KTOffcanvas('kt_user_profile_aside', {
                    overlay: true,
                    baseClass: 'kt-app__aside',
                    closeBy: 'kt_user_profile_aside_close',
                    toggleBy: 'kt_subheader_mobile_toggle'
                });
            }

            var initUserForm = function() {
                avatar = new KTAvatar('kt_user_avatar');
            }

            return {
                // public functions
                init: function() {
                    initAside();
                    initUserForm();
                }
            };
        }();

        KTUtil.ready(function() {
            KTUserProfile.init();
        });
    </script>
@endsection
