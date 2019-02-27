<!-- First Name -->
<div class="form-group row">
  <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

  <div class="col-md-6">
    <input id="firstName" type="text" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" name="firstName" value="{{ old('firstName', $kid->firstName) }}" autofocus>

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
    <input id="lastName" type="text" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" name="lastName" value="{{ old('lastName', $kid->lastName) }}">

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
    <input id="school" type="text" class="form-control{{ $errors->has('school') ? ' is-invalid' : '' }}" name="school" value="{{ old('school', $kid->school) }}">

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
    <input id="DOB" type="date" class="form-control{{ $errors->has('DOB') ? ' is-invalid' : '' }}" name="DOB" value="{{ old('DOB', $kid->DOB) }}">

    @if ($errors->has('DOB'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('DOB') }}</strong>
      </span>
    @endif
  </div>
</div>