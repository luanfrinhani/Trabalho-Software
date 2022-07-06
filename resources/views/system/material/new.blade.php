@extends('layouts.app')

@section('title')
    Material
@endsection

@section('stylesheet')
@endsection

@section('subheader')
    <h3 class="kt-subheader__title">
        Adicionar Material
    </h3>
    <span class="kt-subheader__separator kt-hidden"></span>
    <div class="kt-subheader__breadcrumbs">
        <a href="{{ route('home') }}" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
        <span class="kt-subheader__breadcrumbs-separator"></span>
        <a class="kt-subheader__breadcrumbs-link">
            @lang('system.label.system')
        </a>
        <span class="kt-subheader__breadcrumbs-separator"></span>
        <a href="{{ route('material.index') }}" class="kt-subheader__breadcrumbs-link">
            Materiais
        </a>
        <span class="kt-subheader__breadcrumbs-separator"></span>
        <a href="{{ route('material.create') }}" class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">
            Adicionar Material
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
                    Adicionar Material
                    {{--                    <small>try to scroll the page</small>--}}
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <a href="{{ route('material.index') }}" class="btn btn-clean kt-margin-r-10">
                    <i class="la la-arrow-left"></i>
                    <span class="kt-hidden-mobile">@lang('system.button.back')</span>
                </a>
                <button form="formCadastrarMaterial" type="submit" class="btn btn-success">
                    <i class="la la-check"></i>
                    <span class="kt-hidden-mobile">@lang('system.button.save')</span>
                </button>
            </div>
        </div>
        <div class="kt-portlet__body">

            @if(session('response'))
                <x-alert type="{{session('response.type')}}" message="{{session('response.message')}}"></x-alert>
            @endif

            <form id="formCadastrarMaterial" action="{{route('material.store')}}" method="POST" class="kt-form">
                @csrf

                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Nome*</label>
                            <div class="col-9">
                                <input type="text" name="name" value="{{old('name')}}"
                                       class="form-control @error('name') is-invalid @enderror" required>
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-3 col-form-label">Quantidade*</label>
                            <div class="col-4">
                                <input type="number" name="amount" value="{{old('amount')}}"
                                       class="form-control @error('amount') is-invalid @enderror">
                                @error('amount')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-3 col-form-label">Preço*</label>
                            <div class="col-4">
                                <input type="text" name="price" value="{{old('price')}}"
                                       class="form-control preço_material @error('price') is-invalid @enderror">
                                @error('amount')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
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
            $('#menu_item_material').addClass('kt-menu__item--active');
            $('.preço_material').inputmask({mask: ['9,99','99,99','999,99','9.999,99','99.999,99',], keepStatic: true, removeMaskOnSubmit: true});
        });
    </script>
@endsection
