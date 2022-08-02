@extends('layouts.app')

@section('subheader')

@endsection

@section('subheader-toolbar')

@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('#menu_item_dashboard').addClass('kt-menu__item--active');
        });
    </script>
    <script>
        var KTDashboard = function() {
        }
    </script>
@endsection
