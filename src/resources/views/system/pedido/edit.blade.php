@extends('layouts.app')

@section('title')
    Editar Pedido
@endsection

@section('stylesheet')

@endsection

@section('subheader')
    <div class="subheader">
        <h3 class="kt-subheader__title">
            Editar Pedido
        </h3>
        <span class="kt-subheader__separator kt-hidden"></span>
        <div class="kt-subheader__breadcrumbs">
            <a href="{{ route('home') }}" class="kt-subheader__breadcrumbs-home"><i class="flaticon-home-2"></i></a>
            <span class="kt-subheader__breadcrumbs-separator"></span>
            <a href="{{ route('pedido.index') }}" class="kt-subheader__breadcrumbs-link">
                Pedido
            </a>
            <span class="kt-subheader__breadcrumbs-separator"></span>
            <a href="{{ route('pedido.edit', ['pedido' => $pedido->id])}}" class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">
                Editar Pedido
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
                    Editar Pedido
                    {{--                    <small>try to scroll the page</small>--}}
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <a href="{{ route('pedido.index') }}" class="btn btn-outline-dark kt-margin-r-10">
                    <span class="kt-hidden-mobile">@lang('system.button.back')</span>
                </a>
                <button class="btn btn-success" data-toggle="modal" data-target="#confirmarPedido" onclick="clickModal()">
                    <i class="la la-check"></i>
                    <span class="kt-hidden-mobile">@lang('system.button.save')</span>
                </button>
            </div>
        </div>
        <div class="kt-portlet__body">

            @if(session('response'))
                <x-alert type="{{session('response.type')}}" message="{{session('response.message')}}"></x-alert>
            @endif
            <form id="formEditarPedido" action="{{route('pedido.update', ['pedido' => $pedido->id])}}" method="POST" class="kt-form kt-form--label-right">
                @csrf
                @method('PUT')
                <div class="kt-portlet__body">
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Descrição*</label>
                        <div class="col-4">
                            <input type="text" name="description" id="description" value="{{$pedido->description}}"
                                   class="form-control @error('description') is-invalid @enderror" required>
                            @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Material*</label>
                        <div class="col-4">
                            <select class="form-control selectpicker" name="material_id"
                                    title="Selecione uma opção" id="select_material">
                                <option selected value="{{$pedido->materialUtilizado->material->id}}">{{$pedido->materialUtilizado->material->name}}</option>
                                @foreach($materiais as $material)
                                    @if($material->id != $pedido->materialUtilizado->material->id)
                                        <option id="selected_material" value="{{$material->id}}">{{$material->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Quantidade*</label>
                        <div class="col-4">
                            <input type="number" name="material_amount" id="material_amount" value="{{ $pedido->materialUtilizado->material_amount }}"
                                   class="form-control @error('material_amount') is-invalid @enderror" required>
                            @error('material_amount')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-3 col-form-label">Data de Entrega*</label>
                        <div class="col-4 input-group date">
                            <input type="text" id="delivery_date" name="delivery_date" value="{{$pedido->data}}"
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
                    <input type="hidden" id="price" name="price" value="{{$pedido->price}}"
                           class="form-control">
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

    {{--    Modal confirmar pedido--}}

    <div class="modal fade" id="confirmarPedido" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirmar pedido</h5>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <div class="row">
                            <span class="col-lg-6"><strong>Descrição do pedido</strong></span>
                            <span class="col-lg-6" id="descrição_pedido"></span>
                        </div>
                        <div class="row mt-3">
                            <span class="col-lg-6"><strong>Valor do Pedido</strong></span>
                            <span class="col-lg-6" id="preço_pedido">R$</span>
                        </div>
                        <div class="row mt-3">
                            <span class="col-lg-6"><strong>Quantidade</strong></span>
                            <span class="col-lg-6" id="amount_pedido"></span>
                        </div>
                        <div class="row mt-3">
                            <span class="col-lg-6"><strong>Data de entrega</strong></span>
                            <span class="col-lg-6" id="data_entrega"></span>
                        </div>

                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal" onclick="limpaForm()">@lang('system.button.back')</button>
                    <button class="btn btn-success" type="submit" form="formEditarPedido">@lang('system.button.save')</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('#menu_item_pedido').addClass('kt-menu__item--active');
            $('.preço_pedido').inputmask({mask: ['9,99','99,99','999,99','9.999,99','99.999,99',], keepStatic: true, removeMaskOnSubmit: true});
            KTBootstrapDatepicker.init();
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

        let materialPrice = null;

        function getPrice() {
            let selected_material = $('#select_material').children("option:selected").val();
            let amount = $('#material_amount').val();
            let getPrice = "{{route('material.getPrice.ajax', ['material_id' => 'material_id', 'amount' => 'amount'])}}";
            getPrice = getPrice.replace('material_id', selected_material);
            getPrice = getPrice.replace('amount', amount);
            $.ajax({
                type:"GET",
                dataType:"json",
                url: getPrice,
                success:function(price){
                    materialPrice = price;
                    $('#preço_pedido').append(materialPrice);
                    $('#price').val(price);
                },
                error: function (getPrice) {
                    console.log(getPrice);
                }
            })
        }

        function criaForm() {
            let amount = $('#material_amount').val();
            let delivery_date = $('#delivery_date').val();
            let description = $('#description').val();

            $('#descrição_pedido').append(description);
            $('#amount_pedido').append(amount);
            $('#data_entrega').append(delivery_date);
        }

        function clickModal() {
            getPrice();
            criaForm();
        }

        function limpaForm() {
            $('#descrição_pedido').html('');
            $('#preço_pedido').html('');
            $('#amount_pedido').html('');
            $('#data_entrega').html('');
        }
    </script>
@endsection
