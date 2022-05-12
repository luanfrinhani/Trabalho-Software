@extends('layouts.app')

@section('title')
    @lang('user.label.edit')
@endsection

@section('stylesheet')
@endsection

@section('subheader')
    <h3 class="kt-subheader__title">
        {{$user->name}}
    </h3>
    <span class="kt-subheader__separator kt-hidden"></span>
    <div class="kt-subheader__breadcrumbs">
        <a href="{{ route('home') }}" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
        <span class="kt-subheader__breadcrumbs-separator"></span>
        <a class="kt-subheader__breadcrumbs-link">
            @lang('system.label.system')
        </a>
        <span class="kt-subheader__breadcrumbs-separator"></span>
        <a href="{{ route('system.user.index') }}" class="kt-subheader__breadcrumbs-link">
            @lang('user.label.users')
        </a>
        <span class="kt-subheader__breadcrumbs-separator"></span>
        <a href="{{ route('system.user.edit', ['user' => $user]) }}" class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">
            @lang('user.label.edit')
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
                    <i class="fa fa-user-edit kt-font-brand"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    @lang('user.label.edit')
{{--                    <small>try to scroll the page</small>--}}
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <a href="{{ route('system.user.index') }}" class="btn btn-clean kt-margin-r-10">
                    <i class="la la-arrow-left"></i>
                    <span class="kt-hidden-mobile">@lang('system.button.back')</span>
                </a>
{{--            Adicionar a classe sequinte se for usar o botão de salvar     kt-margin-r-10 --}}
                <a href="{{ route('system.user.create') }}" class="btn btn-brand">
                    <i class="la la-plus"></i>
                    <span class="kt-hidden-mobile">@lang('user.label.add_user')</span>
                </a>
{{--                <button form="formEditarUsuario" type="submit" class="btn btn-success">--}}
{{--                    <i class="la la-check"></i>--}}
{{--                    <span class="kt-hidden-mobile">@lang('system.button.save')</span>--}}
{{--                </button>--}}
            </div>
        </div>
        <div class="kt-portlet__body">

            @if(session('response'))
                <x-alert type="{{session('response.type')}}" message="{{session('response.message')}}"></x-alert>
            @endif

            <form id="formEditarUsuario" action="{{route('system.user.update', ['user' => $user])}}" method="POST" class="kt-form">
                @csrf
                {{ method_field('PUT') }}

                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">

                        <input type="hidden" name="first_time" value="1">

                        <div class="form-group row">
                            <label class="col-3 col-form-label">Avatar</label>
                            <div class="col-9">
                                <div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_user_edit_avatar">
                                    @if($user->avatar->count() > 0)
                                        <div class="kt-avatar__holder" style="background-image: url({{ $user->avatar->first()->url }});"></div>
                                    @else
                                        <div class="kt-avatar__holder" style="background-image: url({{ asset('assets/media/users/default.jpg') }});"></div>
                                    @endif
{{--                                    <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">--}}
{{--                                        <i class="fa fa-pen"></i>--}}
{{--                                        <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">--}}
{{--                                    </label>--}}
{{--                                    <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">--}}
{{--                                        <i class="fa fa-times"></i>--}}
{{--                                    </span>--}}
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-3 col-form-label">@lang('user.attribute.active'):</label>
                            <div class="col-9">
                                <span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--success">
                                <label>
                                    <input type="checkbox" name="active" value="1"
                                           @if( ($user->active == 0 && old('active') && old('first_time')) || ($user->active && old('active') == null && old('first_time') == null) || ($user->active && old('active') && old('first_time') ) )
                                           checked="checked"
                                        @endif
                                       disabled="disabled"
                                    >
                                    <span></span>
                                </label>
                            </span>
                                <span class="form-text text-muted">@lang('user.help.active')</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-3 col-form-label">@lang('user.attribute.name'):</label>
                            <div class="col-9">
                                <input type="text" name="name" value="{{old('name') ?? $user->name}}"
                                       placeholder="@lang('user.placeholder.name')" disabled="disabled"
                                       class="form-control @error('name') is-invalid @enderror">
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <span class="form-text text-muted">@lang('user.help.name')</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-3 col-form-label">@lang('user.attribute.email'):</label>
                            <div class="col-9">
                                <input type="email" name="email" value="{{old('email') ?? $user->email}}"
                                       placeholder="@lang('user.placeholder.email')" disabled="disabled"
                                       class="form-control @error('email') is-invalid @enderror">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <span class="form-text text-muted">@lang('user.help.email')</span>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>

        <div class="kt-portlet__foot">
            <div class="row align-items-center">
                <div class="col-lg-6 m--valign-middle">

                </div>
                <div class="col-lg-6 kt-align-right">
                    <form id="formRemoverUsuario" action="{{route('system.user.destroy', ['user' => $user])}}" method="POST" class="kt-form  form-remover">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button type="submit" form="formRemoverUsuario" class="btn btn-danger btn-remover">
                            <i class="la la-trash"></i>
                            <span class="kt-hidden-mobile">@lang('system.button.delete')</span>
                        </button>
                    </form>
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
