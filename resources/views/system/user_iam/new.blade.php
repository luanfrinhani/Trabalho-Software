@extends('layouts.app')

@section('title')
    @lang('user.label.add_user')
@endsection

@section('stylesheet')
@endsection

@section('subheader')
    <h3 class="kt-subheader__title">
        @lang('user.label.add_user')
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
            @lang('user.label.add_user')
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
                    @lang('user.label.add_user')
                    <small class="kt-hidden-mobile">@lang('user.messages.search_user_check_info_salve')</small>
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <a href="{{ route('system.user.index') }}" class="btn btn-clean kt-margin-r-10">
                    <i class="la la-arrow-left"></i>
                    <span class="kt-hidden-mobile">@lang('system.button.back')</span>
                </a>
                <button id="bt_save" form="formCadastrarUsuario" type="submit" class="btn btn-success" disabled="disabled">
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
                            <label class="col-3 col-form-label">@lang('user.messages.search_for_user')</label>
                            <div class="col-9">
                                <select id="select_search" class="form-control selectpicker with-ajax" data-live-search="true">
                                </select>
                            </div>
                        </div>

                        <input type="hidden" id="user_id" name="id">
                        <input type="hidden" id="email_id" name="email">

                        <div class="form-group row">
                            <label class="col-3 col-form-label">@lang('user.attribute.avatar')</label>
                            <div class="col-9">
                                <div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_user_edit_avatar">
                                    <div class="kt-avatar__holder" style="background-image: url({{ asset('assets/media/users/default.jpg') }});"></div>
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
                                        <input id="active" type="checkbox" name="active" value="1"
                                               @if(old('active')) checked="checked" @endif disabled="disabled"
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
                                <input type="text" id="name" name="name" value="{{old('name')}}"
                                       placeholder="@lang('user.placeholder.name')"
                                       class="form-control @error('name') is-invalid @enderror" disabled="disabled"
                                >
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
                                <input type="email" id="email" name="email" value="{{old('email')}}"
                                       placeholder="@lang('user.placeholder.email')"
                                       class="form-control @error('email') is-invalid @enderror" disabled="disabled"
                                >
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

            {{-- Lib usadar para fazer o ajax junto com o bootstrap selectpicker --}}
            {{-- https://github.com/truckingsim/Ajax-Bootstrap-Select --}}
            var options = {
                ajax: {
                    url: "{{route('system.user.search')}}",
                    type: "get",
                    dataType: "json",
                    data: {
                        search: "\{\{\{q\}\}\}"
                    }
                },
                minLength: 3,
                locale: {
                    searchPlaceholder: "{{trans('system.label.search')}}...",
                    statusSearching: "{{trans('system.label.searching')}}...",
                    emptyTitle: "{{trans('user.messages.search_for_user')}}...",
                    currentlySelected: "{{trans('system.messages.currently_selected')}}",
                    statusInitialized: "{{trans('system.messages.start_typing_search_query')}}",
                    statusTooShort: "{{trans('system.messages.please_enter_more_characters')}}",
                },
                log: 1,
                preprocessData: function(data) {
                    data = data.data
                    var i,
                        l = data.length,
                        array = [];
                    if (l) {
                        for (i = 0; i < l; i++) {
                            let avatar = '';
                            if(data[i].avatar.length > 0) {
                                avatar = data[i].avatar[0].url;
                            }
                            array.push(
                                $.extend(true, data[i], {
                                    text: data[i].name,
                                    value: data[i].id,
                                    data: {
                                        subtext: data[i].email,
                                        id: data[i].id,
                                        active: data[i].active,
                                        avatar: avatar
                                    }
                                })
                            );
                        }
                    }
                    return array;
                }
            };

            $("#select_search")
                .selectpicker()
                .filter(".with-ajax")
                .ajaxSelectPicker(options);

            $("#select_search").trigger("change");

            function chooseSelectpicker(index, selectpicker) {
                $(selectpicker).val(index);
                $(selectpicker).selectpicker('refresh');
            }
        });

        $("#select_search").on('change', function (){
            var selectedUser = $(this).children("option:selected");
            if (selectedUser.val()) {
                clearForm();

                $('#user_id').val(selectedUser.val());
                $('#name').val(selectedUser.attr('title'));
                $('#email').val(selectedUser.attr('data-subtext'));
                $('#email_id').val(selectedUser.attr('data-subtext'));

                if(selectedUser.attr('data-active')) {
                    $('#active').prop('checked', true);
                }

                if (selectedUser.attr('data-avatar').length > 0) {
                    $('.kt-avatar__holder').css({'background-image' : 'url('+ selectedUser.attr('data-avatar') + ')'});
                }

                $('#bt_save').prop('disabled', false);
            }else{
                if($('#user_id').val() == '') {
                    clearForm();
                }
            }
        });

        function clearForm(){
            $('#bt_save').prop('disabled', true);
            $('.kt-avatar__holder').css({'background-image' : 'url({{ asset('assets/media/users/default.jpg') }})'});
            $('#active').prop('checked', false);
            $('#user_id').val('');
            $('#email_id').val('');
            $('#name').val('');
            $('#email').val('');
        }

        $('#bt_save').on('click', function (event){
            event.preventDefault();

            swal.fire({
                title: '{{trans('user.label.add_user')}}',
                text: "{{trans('user.messages.will_receive_email_notifying_added_system')}}",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: '{{trans('system.button.yes_add')}}',
                cancelButtonText: '{{trans('system.button.cancel')}}'
            }).then((result) => {
                if (result.value) {
                    $('.kt-form').submit();
                }
            });
            return false;
        });
    </script>
@endsection
