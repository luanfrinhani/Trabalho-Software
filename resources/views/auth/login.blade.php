@extends('layouts.auth')

@section('content')
    <div class="kt-login__signin">
        <div class="kt-login__head">
            <h3 class="kt-login__title">@lang('auth.label.login')</h3>
        </div>
        <form class="kt-form" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="input-group">

                <input id="email" type="email" value="{{ old('email') }}" placeholder="@lang('user.attribute.email')"
                       class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="input-group">

                <input id="password" type="password" name="password" placeholder="@lang('user.attribute.password')"
                       class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="row kt-login__extra">
                <div class="col">
                    <label class="kt-checkbox">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        @lang('auth.label.remember_me')
                        <span></span>
                    </label>
                </div>
                <div class="col kt-align-right">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="kt-login__link">
                            @lang('auth.label.forgot_password')
                        </a>
                    @endif
                </div>
            </div>
            <div class="kt-login__actions">
                <button type="submit" class="btn btn-brand btn-elevate kt-login__btn-primary">
                    @lang('auth.label.sign_in')
                </button>
            </div>
        </form>
    </div>
@endsection
