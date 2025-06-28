{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}



@extends('layouts.frontend')

@section('content')
<div class="loginarea  sp_bottom_80 sp_top_80">
    <div class="container">
        <div class="row">
            <div class="tab-content tab__content__wrapper" id="myTabContent">
                <div class="tab-pane fade active show" id="projects__one" role="tabpanel" aria-labelledby="projects__one">
                    <div class="col-xl-8 offset-md-2 loginarea__col">
                        <div class="loginarea__wraper">
                            <div class="loginarea__heading">
                                <h5 class="login__title">Login</h5>
                                <p class="login__description">Don't have an account yet? <a href="{{ route('register') }}">Sign up for free</a></p>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="loginarea__form">
                                    <label class="form__label">Username or email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="loginarea__form">
                                    <label class="form__label">Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="loginarea__form d-flex justify-content-between flex-wrap gap-2">
                                    <div class="form__check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                    <div class="text-end login__form__link">
                                         @if (Route::has('password.request'))
                                         <a class="btn btn-link" href="{{ route('password.request') }}">
                                             {{ __('Forgot Your Password?') }}
                                         </a>
                                         @endif
                                    </div>
                                </div>
                                <div class="loginarea__button text-center">
                                    <button type="submit" class="default__button">Log In</button>
                                </div>
                            </form>

                            <div class="loginarea__social__option">

                                <ul class="loginarea__social__btn">
                                    <li><a class="default__button" href="#"><i class="fab fa-facebook-f"></i>
                                            facebook</a></li>
                                    <li><a class="default__button" href="#"><i class="fab fa-google"></i> Google</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
