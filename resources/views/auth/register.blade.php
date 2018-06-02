@extends('layouts/master')

@section('title', 'Register')

@section('body')
  <div class="head-bread">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">Register</li>
      </ol>
    </div>
  </div>
  <!-- reg-form -->
  <div class="reg-form">
      <div class="container">
          <div class="reg">
              <h3>Register Now</h3>
              <p>Welcome, please enter the following details to continue.</p>
              <p>If you have previously registered with us, <a href="/login">click here</a></p>
                  <form method="POST" action="{{ route('register') }}">
                  @csrf
                  <ul>
                      <li class="text-info">Pseudo: </li>
                      <li>
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                      </li>
                  </ul>
                  <ul>
                      <li class="text-info">Email: </li>
                      <li>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                      </li>
                  </ul>
                  <ul>
                      <li class="text-info">Password: </li>
                      <li>
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                          @if ($errors->has('password'))
                              <span class="invalid-feedback">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                      </li>
                  </ul>
                  <ul>
                      <li class="text-info">Re-enter Password:</li>
                      <li>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                      </li>
                  </ul>
                  <input type="submit" value="Register Now">
                  <p class="click">By clicking this button, you are agree to my  <a href="#">Policy Terms and Conditions.</a></p>
              </form>
          </div>
      </div>
  </div>
@stop
