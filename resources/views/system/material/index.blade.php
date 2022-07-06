@extends('layouts.app')

@section('title')
    Materiais
@endsection

@section('stylesheet')
@endsection

@section('subheader')
    <h3 class="kt-subheader__title">
        Materiais
    </h3>
    <span class="kt-subheader__separator kt-hidden"></span>
    <div class="kt-subheader__breadcrumbs">
        <a href="{{ route('home') }}" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
        <span class="kt-subheader__breadcrumbs-separator"></span>
        <a class="kt-subheader__breadcrumbs-link">
            @lang('system.label.system')
        </a>
        <span class="kt-subheader__breadcrumbs-separator"></span>
        <a href="{{ route('material.index') }}" class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">
            Materiais
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
                    <i class="fa fa-users kt-font-brand"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    Clientes
                    {{--                    <small>try to scroll the page</small>--}}
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <a href="{{ route('material.create') }}" class="btn btn-brand">
                    <i class="la la-plus"></i>
                    <span class="kt-hidden-mobile">
                        Adicionar Material
                    </span>
                </a>
            </div>
        </div>
        <div class="kt-portlet__body">

            @if(session('response'))
                <x-alert type="{{session('response.type')}}" message="{{session('response.message')}}"></x-alert>
            @endif

            <table class="table table-striped table-hover table-checkable dataTable" id="kt_table_1">
                <thead>
                <tr>
                    {{--                    <th>Id</th>--}}
                    <th>Nome</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($materiais as $material)
                    <tr>
                        <td>{{$material->name}}</td>
                        <td>{{$material->amount}}</td>
                        <td class="preço_material">{{$material->price}}</td>
                        <td nowrap>
                            <a href="{{route('material.edit', ['material' => $material->id])}}" class="btn btn-sm btn-brand">
                                <i class="fa fa-pencil-alt"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
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
            $('.preço_material').inputmask({mask: ['R$9,99','R$99,99','R$999,99','R$9.999,99','R$99.999,99',], keepStatic: true, removeMaskOnSubmit: true});
        });
    </script>
@endsection
