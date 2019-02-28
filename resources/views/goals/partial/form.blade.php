{{-- view/goals/partial/form.blade.php --}}

<!-- Kid -->
<div class="form-group row">
  <label for="kid_id" class="col-md-4 col-form-label text-md-right">{{ __('Kid') }}</label>
  <div class="col-md-6">
    <select id="kid_id" type="text" class="form-control{{ $errors->has('kid_id') ? ' is-invalid' : '' }}" name="kid_id" value="{{ old('kid_id', $goal->kid_id) }}" autofocus>
      @foreach ($kids as $kid)
      <option value="{{$kid->id}}">{{$kid->firstName}}</option>
      @endforeach
    </select>

      @if ($errors->has('kid_id'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('kid_id') }}</strong>
        </span>
      @endif
    
  </div>
</div>

<!-- Title -->
<div class="form-group row">
  <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

  <div class="col-md-6">
    <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title', $goal->title) }}">

      @if ($errors->has('title'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('title') }}</strong>
        </span>
      @endif
  </div>
</div>

<!-- Description -->
<div class="form-group row">
  <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

  <div class="col-md-6">
    <textarea id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description">{{ old('description', $goal->description) }}</textarea>

      @if ($errors->has('description'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('description') }}</strong>
        </span>
      @endif
  </div>
</div>

<!-- Start Date -->
<div class="form-group row">
  <label for="start_date" class="col-md-4 col-form-label text-md-right">{{ __('Start Date') }}</label>

  <div class="col-md-6">
    <input id="start_date" type="date" class="form-control{{ $errors->has('start_date') ? ' is-invalid' : '' }}" name="start_date" value="{{ old('start_date', $goal->start_date) }}">

    @if ($errors->has('start_date'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('start_date') }}</strong>
      </span>
    @endif
  </div>
</div>

<!-- End Date -->
<div class="form-group row">
  <label for="end_date" class="col-md-4 col-form-label text-md-right">{{ __('End Date') }}</label>

  <div class="col-md-6">
    <input id="end_date" type="date" class="form-control{{ $errors->has('end_date') ? ' is-invalid' : '' }}" name="end_date" value="{{ old('end_date', $goal->end_date) }}">

    @if ($errors->has('end_date'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('end_date') }}</strong>
      </span>
    @endif
  </div>
</div>


