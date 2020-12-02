@extends('auth.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">


                    <div class="card-body">

                        <div class="form-column">
                            <div class="sec-title">
                                <h3>{{__('Register')}}</h3>
                            </div>
                            <div class="inner-column">

                                <!--Default Form-->
                                <div class="default-form style-four">
                                    <div class="row clearfix">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!--Form Group-->
                                                <div class="form-group">
                                                    <input type="text" class="@error('name') is-invalid @enderror"
                                                           name="name" value="{{old('name')}}"
                                                           placeholder="{{__('Your Name')}}"
                                                           required="" autocomplete="name" autofocus>

                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <!--Form Group-->
                                                <div class="form-group">
                                                    <input type="password" name="password" value="{{old('password')}}"
                                                           class="custom-input @error('password') is-invalid @enderror"
                                                           placeholder="{{__('Password')}}" required="">

                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <!--Form Group-->
                                                <div class="form-group">
                                                    <input type="password_confirmation" name="password_confirmation" value="" class="custom-input"
                                                           placeholder="{{ __('Confirm Password') }}" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!--Form Group-->
                                                <div class="form-group">
                                                    <input type="email" name="email" value="{{ old('email') }}"
                                                           class="@error('email') is-invalid @enderror"
                                                           placeholder="{{ __('E-Mail Address') }}" required="">

                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <!--Form Group-->
                                                <div class="form-group">
                                                    <select name="user_role" id="user_role"
                                                            class="custom-input @error('user_role') is-invalid @enderror">
                                                        @foreach($roles as $key => $value)
                                                            <option
                                                                value="{{$key}}" {{ old('user_role') == $key ? 'selected' : '' }}> {{$value}} </option>
                                                        @endforeach
                                                    </select>

                                                    @error('user_role')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!--Form Group-->
                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <button type="submit" class="w-100 theme-btn btn-style-one with-100">
                                                    {{ __('Register') }}
                                                </button>
                                            </div>

                                            <!--Form Group-->
                                            <div class="form-group col-md-9 col-md-offset-3 col-sm-12 col-xs-12">
                                                {{__("Already have login and password?")}}
                                                <a class="btn btn-link" href="{{ route('login') }}">
                                                    {{ __('Login') }}
                                                </a>


                                            </div>

                                            <!--Default Form-->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
