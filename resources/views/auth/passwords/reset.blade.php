@extends('layouts.app')

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
          <p class="login-box-msg">Reset Password</p>
      
          <form method="POST" action="{{ route('password.update') }}">
              @csrf
              <input type="hidden" name="token" value="{{ $token }}">
            <div class="form-group has-feedback">
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
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
              <div class="form-group has-feedback">
                    <input id="password-confirm" type="password" class="form-control" placeholder="Retype password" name="password_confirmation" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
            <div class="row">
                    <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Reset Password') }}
                            </button>
                        </div>
              <!-- /.col -->
            </div>
          </form>
      
        </div>
        <!-- /.login-box-body -->
      </div>
@endsection
