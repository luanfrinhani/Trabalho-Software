@extends('layouts.auth')

@section('content')
<div class="kt-login__signin">
    <div class="kt-login__head">
        <h3 class="kt-login__title">@lang('auth.label.forgotten_password')</h3>
        <div class="kt-login__desc">@lang('auth.message.enter_email_reset_password')</div>
    </div>
    @if (session('status'))
        <div class="alert alert-success alert-bold fade show" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}" class="kt-form">
        @csrf
        <div class="input-group">
            <input id="email" type="email"name="email" value="{{ old('email') }}" placeholder="@lang('user.attribute.email')"
                   class="form-control @error('email') is-invalid @enderror"  required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="kt-login__actions">
            <button type="submit" class="btn btn-brand btn-elevate kt-login__btn-primary">
                @lang('auth.label.send_password_reset_link')
            </button>
        </div>
    </form>
</div>
@endsection
