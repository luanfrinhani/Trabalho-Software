@extends('layouts.app')

@section('title')
    @lang('user.label.add')
@endsection

@section('stylesheet')
@endsection

@section('subheader')
    <h3 class="kt-subheader__title">
        @lang('user.label.add')
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
        <a href="{{ route('system.user.create') }}" class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">
            @lang('user.label.add')
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
                    <i class="fa fa-user-plus kt-font-brand"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    @lang('user.label.add')
{{--                    <small>try to scroll the page</small>--}}
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <a href="{{ route('system.user.index') }}" class="btn btn-clean kt-margin-r-10">
                    <i class="la la-arrow-left"></i>
                    <span class="kt-hidden-mobile">@lang('system.button.back')</span>
                </a>
                <button form="formCadastrarUsuario" type="submit" class="btn btn-success">
                    <i class="la la-check"></i>
                    <span class="kt-hidden-mobile">@lang('system.button.save')</span>
                </button>
            </div>
        </div>
        <div class="kt-portlet__body">

            @if(session('response'))
                <x-alert type="{{session('response.type')}}" message="{{session('response.message')}}"></x-alert>
            @endif

            <form id="formCadastrarUsuario" action="{{route('system.user.store')}}" method="POST" class="kt-form">
                @csrf

                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">

                        <div class="form-group row">
                            <label class="col-3 col-form-label">@lang('user.attribute.active'):</label>
                            <div class="col-9">
                                <span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--success">
                                    <label>
                                        <input type="checkbox" name="active" value="1" @if(old('active')) checked="checked" @endif>
                                        <span></span>
                                    </label>
                                </span>
                                <span class="form-text text-muted">@lang('user.help.active')</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 col-sm-12">Grupo:*</label>
                            <div class="col-lg-6">
                                <select class="form-control kt-select2" id="kt_select2_1" name="group">
                                    <option selected></option>
                                    <option value="admin">Administrador</option>
                                    <option value="client">Cliente</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-3 col-form-label">@lang('user.attribute.name'):</label>
                            <div class="col-9">
                                <input type="text" name="name" value="{{old('name')}}" placeholder="@lang('user.placeholder.name')"
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
                                <input type="email" name="email" value="{{old('email')}}" placeholder="@lang('user.placeholder.email')"
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
            KTSelect2.init();
        });

        let KTSelect2 = function() {

            let demos = function() {
                // basic
                $('#kt_select2_1, #kt_select2_1_validate').select2({
                    placeholder: "Selecione um grupo",
                    allowClear: true
                });
            }
            return {
                init: function() {
                    demos();
                }
            };
        }()
    </script>
@endsection
