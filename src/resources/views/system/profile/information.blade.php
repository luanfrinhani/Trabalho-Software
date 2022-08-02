@extends('layouts.app')

@section('title')
    @lang('user.label.personal_information')
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
            @lang('user.label.personal_information')
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
                                <h3 class="kt-portlet__head-title">@lang('user.label.personal_information') <small>@lang('user.messages.update_personal_informaiton')</small></h3>
                            </div>
                        </div>
                        <form id="formProfileInformation" action="{{route('system.profile.information.update')}}"
                              method="POST" class="kt-form kt-form--label-right" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PUT') }}

                            <div class="kt-portlet__body">
                                @if(session('response'))
                                    <x-alert type="{{session('response.type')}}" message="{{session('response.message')}}"></x-alert>
                                @endif

                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">@lang('user.attribute.avatar')</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="kt-avatar kt-avatar--outline" id="kt_user_avatar">
                                                    @if($user->avatar->count() > 0)
                                                        <div class="kt-avatar__holder" style="background-image: url({{ $user->avatar->first()->url }})"></div>
                                                        <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="@lang('user.help.avatar')">
                                                            <i class="fa fa-pen"></i>
                                                            <input type="file" name="file" accept=".png, .jpg, .jpeg">
                                                        </label>
                                                    @else
                                                        <div class="kt-avatar__holder" style="background-image: url({{ asset('assets/media/users/default.jpg') }})"></div>
                                                        <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="@lang('user.help.avatar')">
                                                            <i class="fa fa-pen"></i>
                                                            <input type="file" name="file" accept=".png, .jpg, .jpeg">
                                                        </label>
                                                    @endif
                                                    <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
                                                        <i class="fa fa-times"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">@lang('user.attribute.name')</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input type="text" name="name" value="{{old('name') ?? $user->name}}"
                                                       placeholder="@lang('user.placeholder.name')"
                                                       class="form-control @error('name') is-invalid @enderror">
                                                @error('name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">@lang('user.attribute.email')</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                    <input type="email" name="email" value="{{old('email') ?? $user->email}}" placeholder="@lang('user.placeholder.email')"
                                                           class="form-control @error('email') is-invalid @enderror" disabled>
                                                    @error('email')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
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
            $('#menu_profile_information').addClass('kt-widget__item--active');
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
