@extends('layouts.app')

@section('title')
    Editar Material
@endsection

@section('stylesheet')

@endsection

@section('subheader')
    <div class="subheader">
        <h3 class="kt-subheader__title">
            Editar Material
        </h3>
        <span class="kt-subheader__separator kt-hidden"></span>
        <div class="kt-subheader__breadcrumbs">
            <a href="{{ route('home') }}" class="kt-subheader__breadcrumbs-home"><i class="flaticon-home-2"></i></a>
            <span class="kt-subheader__breadcrumbs-separator"></span>
            <a href="{{ route('material.index') }}" class="kt-subheader__breadcrumbs-link">
                Materiais
            </a>
            <span class="kt-subheader__breadcrumbs-separator"></span>
            <a href="{{ route('material.edit', ['material' => $material->id])}}" class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">
                Editar Material
            </a>
            <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
        </div>
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
                    <i class="fa fa-video kt-font-brand"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    Editar Material
                    {{--                    <small>try to scroll the page</small>--}}
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <a href="{{ route('material.index') }}" class="btn btn-outline-dark kt-margin-r-10">
                    <span class="kt-hidden-mobile">@lang('system.button.back')</span>
                </a>
                <button form="formEditarMaterial" type="submit" class="btn btn-success">
                    <span class="kt-hidden-mobile">@lang('system.button.save')</span>
                </button>
            </div>
        </div>
        <div class="kt-portlet__body">

            @if(session('response'))
                <x-alert type="{{session('response.type')}}" message="{{session('response.message')}}"></x-alert>
            @endif
            <form id="formEditarMaterial" action="{{route('material.update', ['material' => $material->id])}}" method="POST" class="kt-form kt-form--label-right">
                @csrf
                @method('PUT')
                <div class="kt-portlet__body">
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Nome*</label>
                        <div class="col-4">
                            <input type="text" name="name" id="name" value="{{$material->name}}"
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
                            <input type="number" name="amount" id="amount" value="{{ $material->amount }}"
                                   class="form-control @error('amount') is-invalid @enderror" required>
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
                            <input type="text" name="price" id="price" value="{{ $material->price }}"
                                   class="form-control preço_material @error('price') is-invalid @enderror" required>
                            @error('price')
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
            $('#menu_item_hearings').addClass('kt-menu__item--active');
            $('.preço_material').inputmask({mask: ['9,99','99,99','999,99','9.999,99','99.999,99',], keepStatic: true, removeMaskOnSubmit: true});
        });

    </script>
@endsection
