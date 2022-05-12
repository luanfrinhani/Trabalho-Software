@extends('errors::error-illustrated')

@section('title', trans('error.500.title'))
@section('subtitle', trans('error.500.subtitle'))
@section('description')
    @lang('error.500.description')
@endsection
@section('code', '500')
@section('message', __('Server Error'))
