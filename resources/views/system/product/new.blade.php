@extends('layouts.app')

@section('title')
    @lang('price_survey.label.add')
@endsection

@section('subheader')
    <div class="subheader">
        <h3 class="kt-subheader__title">
            @lang('price_survey.label.add')
        </h3>
        <span class="kt-subheader__separator kt-hidden"></span>
        <div class="kt-subheader__breadcrumbs">
            <a href="{{ route('home') }}" class="kt-subheader__breadcrumbs-home"><i class="flaticon-home-2"></i></a>
            <span class="kt-subheader__breadcrumbs-separator"></span>
            <a href="{{ route('product.index') }}" class="kt-subheader__breadcrumbs-link">
                @lang('price_survey.label.price_surveys')
            </a>
            <span class="kt-subheader__breadcrumbs-separator"></span>
            <a href="{{ route('product.create') }}" class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">
                @lang('price_survey.label.add')
            </a>
            <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
        </div>
    </div>

    <div class="kt-portlet__head-toolbar">
        <a href="{{ route('product.index') }}" class="btn btn-outline-dark kt-margin-r-10">
            <span class="kt-hidden-mobile">@lang('system.button.cancel')</span>
        </a>
        <button id="storeSurvey" class="btn btn-brand">
            <span class="kt-hidden-mobile">@lang('price_survey.label.save')</span>
        </button>
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
                    <i class="fas fa-search kt-font-brand"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    @lang('price_survey.label.add')
                    {{--                    <small>try to scroll the page</small>--}}
                </h3>
            </div>
        </div>
        <div class="kt-portlet__body">

            @if(session('response'))
                <x-alert type="{{session('response.type')}}" message="{{session('response.message')}}"></x-alert>
            @endif
            <form id="formCadastrarProduto" method="POST" class="kt-form kt-form--label-right" enctype="multipart/form-data">
                @csrf

                <div class="kt-portlet__body">
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label>Nome:*</label>
                            <input type="text" name="name" id="name" value="{{old('name')}}"
                                   class="form-control @error('name') is-invalid @enderror" required>
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
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
            $('#menu_item_price_survey').addClass('kt-menu__item--active');
        });
    </script>
@endsection
