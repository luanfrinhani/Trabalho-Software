@extends('layouts.auth')

@section('content')
<div class="kt-login__signin">
    <div class="kt-login__head">
        <h3 class="kt-login__title">@lang('auth.label.new_password')</h3>
    </div>
    <form method="POST" action="{{ route('password.update') }}" class="kt-form">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="input-group">
            <input id="email" type="email" name="email" value="{{ $email ?? old('email') }}" placeholder="@lang('user.attribute.email')"
                   class="form-control @error('email') is-invalid @enderror"  required autocomplete="email" autofocus>

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
            <input id="password-confirm" type="password" name="password_confirmation" placeholder="@lang('user.attribute.password_confirmation')"
                   class="form-control" required autocomplete="new-password">
        </div>

        <div class="kt-login__actions">
            <button id="kt_login_forgot_submit" class="btn btn-brand btn-elevate kt-login__btn-primary">
                @lang('auth.label.reset_password')
            </button>
        </div>
    </form>
</div>
@endsection
