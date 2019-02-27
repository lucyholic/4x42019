@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Register') }}</div>

        <div class="card-body">
          <form method="POST" action="{{ route('register') }}">
              @csrf

              <!-- Registration Code -->
              <div class="form-group row">
                <label for="code" class="col-md-4 col-form-label text-md-right">{{ __('Registration Code') }}</label>

                <div class="col-md-6">
                  <input id="code" type="text" class="form-control{{ $errors->has('code') ? ' is-invalid' : '' }}" name="code" value="{{ old('code') }}" autofocus>

                    @if ($errors->has('code'))
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('code') }}</strong>
                      </span>
                    @endif
                </div>
              </div>

              <!-- First Name -->
              <div class="form-group row">
                <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                <div class="col-md-6">
                  <input id="firstName" type="text" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" name="firstName" value="{{ old('firstName') }}" autofocus>

                    @if ($errors->has('firstName'))
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('firstName') }}</strong>
                      </span>
                    @endif
                </div>
              </div>

              <!-- Last Name -->
              <div class="form-group row">
                <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                <div class="col-md-6">
                  <input id="lastName" type="text" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" name="lastName" value="{{ old('lastName') }}">

                    @if ($errors->has('lastName'))
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('lastName') }}</strong>
                      </span>
                    @endif
                </div>
              </div>

              <!-- Email -->
              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}">

                    @if ($errors->has('email'))
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                      </span>
                    @endif
                </div>
              </div>

              <!-- Password -->
              <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">

                    @if ($errors->has('password'))
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                      </span>
                    @endif
                </div>
              </div>

              <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                </div>
              </div>

              <!-- Street -->
              <div class="form-group row">
                <label for="street" class="col-md-4 col-form-label text-md-right">{{ __('Street Address') }}</label>

                <div class="col-md-6">
                  <input id="street" type="text" class="form-control{{ $errors->has('street') ? ' is-invalid' : '' }}" name="street" value="{{ old('street') }}">

                    @if ($errors->has('street'))
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('street') }}</strong>
                      </span>
                    @endif
                </div>
              </div>

              <!-- City -->
              <div class="form-group row">
                <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                <div class="col-md-6">
                  <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}">

                  @if ($errors->has('city'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('city') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <!-- Province -->
              <div class="form-group row">
                <label for="province" class="col-md-4 col-form-label text-md-right">{{ __('Province Code') }}</label>

                <div class="col-md-6">
                  <input id="province" type="text" class="form-control{{ $errors->has('province') ? ' is-invalid' : '' }}" name="province" value="{{ old('province') }}">

                  @if ($errors->has('province'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('province') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <!-- Postal Code -->
              <div class="form-group row">
                <label for="postalCode" class="col-md-4 col-form-label text-md-right">{{ __('Postal Code') }}</label>

                <div class="col-md-6">
                      <input id="postalCode" type="text" class="form-control{{ $errors->has('postalCode') ? ' is-invalid' : '' }}" name="postalCode" value="{{ old('postalCode') }}">

                  @if ($errors->has('postalCode'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('postalCode') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <!-- Buttons -->
              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                  </button>

                  <button type="reset" class="btn btn-danger">
                    {{ __('Reset') }}
                  </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
