@extends('layouts/master')

@section('title', 'Register')

@section('body')
  <div class="head-bread">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">Login</li>
        </ol>
    </div>
  </div>
  <!--signup-->
  <!-- login-page -->
  <div class="login">
    <div class="container">
        <div class="login-grids">
            <div class="col-md-6 log">
                <h3>Login</h3>
                <div class="strip"></div>
                <p>Welcome, please enter the following to continue.</p>
                <p>If you have previously Login with us, <a href="/">Click Here</a></p>
                <form method="POST" action="/login">
                  @csrf
                  <h5>Email:</h5>
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                  @if ($errors->has('email'))
                      <span class="invalid-feedback">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                  <h5>Password:</h5>
                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                  @if ($errors->has('password'))
                      <span class="invalid-feedback">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                  <button type="submit" class="btn btn-primary">Login</button>
                  <a class="btn btn-link" href="#">Forgot your password?</a>
                </form>
            </div>
            <div class="col-md-6 login-right">
              <h3>New Registration</h3>
              <div class="strip"></div>
              <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
              <a href="/register" class="button">Create An Account</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
  </div>
  <!-- //login-page -->
  <!--signup-->
@stop
