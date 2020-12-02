@extends('auth.layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-column">
                                <div class="sec-title">
                                    <h3>{{__('Login')}}</h3>
                                </div>
                                <div class="inner-column">
                                    <!--Default Form-->
                                    <div class="default-form">
                                        <div class="row clearfix">
                                            <form method="post" action="contact.html">
                                                <div class="col-md-12 col-sm-12 col-xs-12">

                                                    <!--Form Group-->
                                                    <div class="form-group">
                                                        <input type="email" name="email" value="" class="custom-input"
                                                               placeholder="{{__('E-Mail Address')}}" required="">
                                                    </div>

                                                    <!--Form Group-->
                                                    <div class="form-group">
                                                        <input type="password" name="password" value=""
                                                               class="custom-input" placeholder="{{ __('Password') }}"
                                                               required="">
                                                    </div>

                                                </div>

                                                <!--Form Group-->
                                                <div class="form-group">
                                                    <div class="form-check text-center">
                                                        <input class="form-check-input" type="checkbox" name="remember"
                                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                        <label class="form-check-label ml-4" for="remember">
                                                            {{ __('Remember Me') }}
                                                        </label>
                                                    </div>
                                                </div>

                                                <!--Form Group-->
                                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                    <button type="submit"
                                                            class="w-100 theme-btn btn-style-one with-100">
                                                        {{__('Login')}}
                                                    </button>
                                                </div>

                                                <!--Form Group-->
                                                <div class="form-group col-md-10 col-md-offset-2 col-sm-12 col-xs-12">
                                                    {{__("Don't have an account yet?")}}
                                                        <a class="btn btn-link" href="{{ route('register') }}">
                                                            {{ __('Register') }}
                                                        </a>

                                                        @if (Route::has('password.request'))
                                                            <a class="btn btn-link"
                                                               href="{{ route('password.request') }}">
                                                                {{ __('Forgot Your Password?') }}
                                                            </a>
                                                        @endif

                                                </div>

                                                <!--Default Form-->
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{--                            <div class="form-group  row">--}}
                            {{--                                <label for="email"--}}
                            {{--                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                            {{--                                <div class="col-md-6">--}}
                            {{--                                    <input id="email" type="email"--}}
                            {{--                                           class="form-control @error('email') is-invalid @enderror" name="email"--}}
                            {{--                                           value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

                            {{--                                    @error('email')--}}
                            {{--                                    <span class="invalid-feedback" role="alert">--}}
                            {{--                                                                <strong>{{ $message }}</strong>--}}
                            {{--                                                            </span>--}}
                            {{--                                    @enderror--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}


                            {{--                            <div class="default-form">--}}
                            {{--                                <div class="form-group row">--}}
                            {{--                                    <label for="password"--}}
                            {{--                                           class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                            {{--                                    <div class="col-md-6">--}}
                            {{--                                        <input id="password" type="password"--}}
                            {{--                                               class="form-control @error('password') is-invalid @enderror"--}}
                            {{--                                               name="password"--}}
                            {{--                                               required autocomplete="current-password">--}}

                            {{--                                        @error('password')--}}
                            {{--                                        <span class="invalid-feedback" role="alert">--}}
                            {{--                                                                <strong>{{ $message }}</strong>--}}
                            {{--                                                            </span>--}}
                            {{--                                        @enderror--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}

                            {{--                                <div class="form-group row">--}}
                            {{--                                    <div class="col-md-6 offset-md-4">--}}
                            {{--                                        <div class="form-check">--}}
                            {{--                                            <input class="form-check-input" type="checkbox" name="remember"--}}
                            {{--                                                   id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

                            {{--                                            <label class="form-check-label" for="remember">--}}
                            {{--                                                {{ __('Remember Me') }}--}}
                            {{--                                            </label>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}


                            {{--                            </div>--}}

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
