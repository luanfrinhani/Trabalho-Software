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
        <a href="{{ route('pedido.index') }}" class="kt-subheader__breadcrumbs-link">
            Materiais
        </a>
        <span class="kt-subheader__breadcrumbs-separator"></span>
        <a href="{{ route('pedido.create') }}" class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">
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
                    Adicionar Pedido
                    {{--                    <small>try to scroll the page</small>--}}
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <a href="{{ route('pedido.index') }}" class="btn btn-clean kt-margin-r-10">
                    <i class="la la-arrow-left"></i>
                    <span class="kt-hidden-mobile">@lang('system.button.back')</span>
                </a>
                <button form="formCadastrarPedido" type="submit" class="btn btn-success">
                    <i class="la la-check"></i>
                    <span class="kt-hidden-mobile">@lang('system.button.save')</span>
                </button>
            </div>
        </div>
        <div class="kt-portlet__body">

            @if(session('response'))
                <x-alert type="{{session('response.type')}}" message="{{session('response.message')}}"></x-alert>
            @endif

            <form id="formCadastrarPedido" action="{{route('pedido.store')}}" method="POST" class="kt-form">
                @csrf

                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Descrição*</label>
                            <div class="col-9">
                                <input type="text" name="description" value="{{old('description')}}"
                                       class="form-control @error('description') is-invalid @enderror" required>
                                @error('description')
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
                            <label class="col-form-label col-lg-3 col-sm-12">Material*</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <select class="form-control kt-select2" name="material">
                                    <option value="{{ null }}" selected></option>
                                    @foreach($materiais as $material)
                                        <option value="{{$material->id}}">{{$material->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

{{--                        <div class="form-group row">--}}
{{--                            <label class="col-3 col-form-label">Preço*</label>--}}
{{--                            <div class="col-4">--}}
{{--                                <input type="text" name="price" value="{{old('price')}}"--}}
{{--                                       class="form-control preço_material @error('price') is-invalid @enderror">--}}
{{--                                @error('price')--}}
{{--                                <div class="invalid-feedback">--}}
{{--                                    {{ $message }}--}}
{{--                                </div>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="form-group row">
                            <label class="col-3 col-form-label">Data de Entrega*</label>
                            <div class="col-4 input-group date">
                                <input type="text" name="delivery_date" value="{{old('delivery_date')}}"
                                       class="input-border form-control kt_datepicker_1 @error('delivery_date') is-invalid @enderror required"
                                       readonly
                                       require
                                >
                                <div class="input-group-append">
                                    <span class="date-icon input-group-text">
                                        <i class="la la-calendar"></i>
                                    </span>
                                </div>
                                @error('delivery_date')
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
            $('#menu_item_pedido').addClass('kt-menu__item--active');
            $('.preço_material').inputmask({mask: ['9,99','99,99','999,99','9.999,99','99.999,99',], keepStatic: true, removeMaskOnSubmit: true});
            KTBootstrapDatepicker.init();
            KTSelect2.init();
        });

        let KTBootstrapDatepicker = function () {
            let arrows;
            if (KTUtil.isRTL()) {
                arrows = {
                    leftArrow: '<i class="la la-angle-right"></i>',
                    rightArrow: '<i class="la la-angle-left"></i>'
                }
            } else {
                arrows = {
                    leftArrow: '<i class="la la-angle-left"></i>',
                    rightArrow: '<i class="la la-angle-right"></i>'
                }
            }

            // Private functions
            let demos = function () {
                // minimum setup
                $('.kt_datepicker_1').datepicker({
                    rtl: KTUtil.isRTL(),
                    todayHighlight: true,
                    orientation: "bottom left",
                    templates: arrows,
                    clearBtn: true,
                    language: 'pt-BR',
                    startDate: "+0d"
                });
            };

            return {
                // public functions
                init: function() {
                    demos();
                }
            };
        }();

        let KTSelect2 = function() {
            let demos = function () {
                $('.kt-select2').select2({
                    placeholder: "Selecione o Material",
                });
            }

            return {
                init: function () {
                    demos();
                }
            }
        }();
    </script>
@endsection
