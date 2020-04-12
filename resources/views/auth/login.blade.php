@extends('layouts.app')
@section('title')
    صفحه تسجيل الدخول
@endsection
@section('content')
    <div class="container">
        <div class="contact_bottom">
             <h3>تسجيل الدخول </h3>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <label  for="email" class="col-md-4 col-form-label" style="direction: ltr ">{{ __('الايميل الخاص بك') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4"></div>

                                <div class="col-md-4">
                                    <input id="password" type="password" class="form-control text-md-left @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <label for="password" class="col-md-4 col-form-label "  style="direction: ltr ">{{ __('كلمه المرور') }}</label>

                            </div>

                            <div class="form-group row">
                                <div class="col-md-8 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('تذكرني ') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-warning">
                                        <i class="fa fa-btn fa-sign-in " style="color: #ffffff; margin-left: 5px;"></i>
                                        {{ __('تسجيل ') }}

                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="banner_btn" href="{{ route('password.request') }}">
                                            {{ __('هل نسيت كلمه المرور ') }}
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
@endsection
