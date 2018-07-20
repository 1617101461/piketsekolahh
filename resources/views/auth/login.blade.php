@extends('layouts.login')
@section('content')
<div class="limiter">
        <div class="container-login100" style="background-image: url('assets/admin/login/images/bg-01.jpg');">
            <div class="wrap-login100">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                    <span class="login100-form-logo">
                        <i class="zmdi zmdi-landscape"></i>
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        Log in
                    </span>

                   <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="wrap-input100 validate-input" data-validate = "Enter Email">
                                <input id="email" type="email" class="input100" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                                <span class="focus-input100" data-placeholder="&#xf207;"></span>    
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                   <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="wrap-input100 validate-input" data-validate="Enter password">
                                <input id="password" type="password" class="input100" name="password" placeholder="Password" required>
                                <span class="focus-input100" data-placeholder="&#xf191;"></span>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>

                    <center>
                     <div class="form-group">
                            <div class="contact100-form-checkbox">
                                <button type="submit" class="login100-form-btn">
                                    Login
                                </button>
                    </center>

                    <div class="text-center p-t-90">
                        <a class="txt1" href="{{ route('password.request') }}">
                            Forgot Password?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection