@extends('layouts.auth')

@section('content')
    <div class="kt-login__signin">
        <div class="kt-login__head">
            <h3 class="kt-login__title">@lang('auth.label.sign_up')</h3>
            <div class="kt-login__desc">@lang('auth.message.enter_details_create_account')</div>
        </div>
        <form method="POST" action="{{ route('register') }}" class="kt-form">
            @csrf

            <div class="input-group">
                <input id="name" type="text" name="name" value="{{ old('name') }}" placeholder="@lang('user.attribute.name')"
                       class="form-control @error('name') is-invalid @enderror" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="input-group">
                <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="@lang('user.attribute.email')"
                       class="form-control @error('email') is-invalid @enderror" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="input-group">
                <input id="password" type="password" name="password" placeholder="@lang('user.attribute.password')"
                       class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="input-group">
                <input id="password-confirm" type="password"name="password_confirmation" placeholder="@lang('user.attribute.password_confirmation')"
                       class="form-control"  required autocomplete="new-password">
            </div>
{{--            <div class="row kt-login__extra">--}}
{{--                <div class="col kt-align-left">--}}
{{--                    <label class="kt-checkbox">--}}
{{--                        <input type="checkbox" name="agree">I Agree the <a href="#" class="kt-link kt-login__link kt-font-bold">terms and conditions</a>.--}}
{{--                        <span></span>--}}
{{--                    </label>--}}
{{--                    <span class="form-text text-muted"></span>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="kt-login__actions">
                <button type="submit" class="btn btn-brand btn-elevate kt-login__btn-primary">
                    @lang('auth.label.sign_up')
                </button>&nbsp;
            </div>
        </form>
    </div>
@endsection
