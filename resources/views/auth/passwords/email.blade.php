@extends('layouts.app')
@section("head")
  <title>Calibration | Reset Password</title>
@endsection
@section('loginContent')
<div class="login-box">
        <div class="login-logo">
          <a href=""><b>Calibration</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
          <p class="login-box-msg">Forgot Your Password?</p>
      
          <form method="POST" action="{{ route('password.email') }}">
              @csrf
            <div class="form-group has-feedback">
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>
            <div class="row">
                    <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
              <!-- /.col -->
            </div>
          </form>
        </div>
        <!-- /.login-box-body -->
      </div>
      <!-- /.login-box -->
@endsection
