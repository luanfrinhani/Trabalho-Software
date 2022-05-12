@extends('errors::error-illustrated')

@section('title', trans('error.503.title'))
@section('subtitle', trans('error.503.subtitle'))
@section('description')
    @lang('error.503.description')
@endsection
@section('code', '503')
@section('message', __($exception->getMessage() ?: 'Service Unavailable'))
