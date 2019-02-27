{{-- view/kids/create.blade.php --}}

@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Register Kid') }}</div>
  
          <div class="card-body">
            <form method="POST" action="{{ route('kids.store') }}">
                @csrf
  
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
  
                <!-- School -->
                <div class="form-group row">
                  <label for="school" class="col-md-4 col-form-label text-md-right">{{ __('School') }}</label>
  
                  <div class="col-md-6">
                    <input id="school" type="text" class="form-control{{ $errors->has('school') ? ' is-invalid' : '' }}" name="school" value="{{ old('school') }}">
  
                    @if ($errors->has('school'))
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('school') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>

                <!-- Date of Birth -->
                <div class="form-group row">
                  <label for="DOB" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>
  
                  <div class="col-md-6">
                    <input id="DOB" type="date" class="form-control{{ $errors->has('DOB') ? ' is-invalid' : '' }}" name="DOB" value="{{ old('DOB') }}">
  
                    @if ($errors->has('DOB'))
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('DOB') }}</strong>
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
@endsection