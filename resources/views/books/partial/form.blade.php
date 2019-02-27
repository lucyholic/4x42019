{{-- view/books/partial/form.blade.php --}}

<!-- Title -->
<div class="form-group row">
    <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

    <div class="col-md-6">
      <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title', $book->title) }}" autofocus>

        @if ($errors->has('title'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('title') }}</strong>
          </span>
        @endif
    </div>
  </div>

  <!-- Author -->
  <div class="form-group row">
    <label for="author" class="col-md-4 col-form-label text-md-right">{{ __('Author') }}</label>

    <div class="col-md-6">
      <input id="author" type="text" class="form-control{{ $errors->has('author') ? ' is-invalid' : '' }}" name="author" value="{{ old('author', $book->author) }}">

        @if ($errors->has('author'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('author') }}</strong>
          </span>
        @endif
    </div>
  </div>

  <!-- ISBN -->
  <div class="form-group row">
    <label for="ISBN" class="col-md-4 col-form-label text-md-right">{{ __('ISBN') }}</label>

    <div class="col-md-6">
      <input id="ISBN" type="text" class="form-control{{ $errors->has('ISBN') ? ' is-invalid' : '' }}" name="ISBN" value="{{ old('ISBN', $book->ISBN) }}">

      @if ($errors->has('ISBN'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('ISBN') }}</strong>
        </span>
      @endif
    </div>
  </div>

  <!-- Recommended Age -->
  <div class="form-group row">
    <label for="recommended_age" class="col-md-4 col-form-label text-md-right">{{ __('Recommended Age') }}</label>

    <div class="col-md-6">
      <input id="recommended_age" type="number" class="form-control{{ $errors->has('recommended_age') ? ' is-invalid' : '' }}" name="recommended_age" value="{{ old('recommended_age', $book->recommended_age) }}">

      @if ($errors->has('recommended_age'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('recommended_age') }}</strong>
        </span>
      @endif
    </div>
  </div>