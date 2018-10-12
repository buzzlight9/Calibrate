@extends('layouts.app')
@section("head")
  <title>Calibration | Login</title>
@endsection
@section('loginContent')
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>CALIBRATE</b> LOGIN</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Login</p>

    <form method="POST" action="{{ route('login') }}">
        @csrf
      <div class="form-group has-feedback">
        <input type="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" name="email" value="{{ old('email') }}" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
      </div>
      <div class="form-group has-feedback">
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
      </div>
      <div class="row">
        <div class="col-xs-8">
            <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
          
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Login') }}</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <div class="checkbox icheck">
        <label>
          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
        </label>
      </div>
    <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a><br>
    

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


@endsection