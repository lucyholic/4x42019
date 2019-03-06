{{-- view/books/create.blade.php --}}

@extends('layouts.app')

@push('styles')
  {{-- <link href="{{ asset('css/home.css') }}" rel="stylesheet"> --}}
  <link href="{{ asset('css/create.css') }}" rel="stylesheet">
@endpush

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            {{ __('Add a Book') }}
          </div>

          <div class="card-body">
            <form method="POST" action="{{ route('books.store') }}" enctype="multipart/form-data" name="frmBookCreate">
                @csrf

                <div class="form-group row">
                  <label for="cover" class="col-md-4 col-form-label text-md-right">{{ __('Book Cover') }}</label>
              
                  <div class="col-md-6">
                    <input id="cover" type="file" class="form-control{{ $errors->has('cover') ? ' is-invalid' : '' }}" name="cover" value="{{ old('cover', $book->cover) }}">
              
                      @if ($errors->has('cover'))
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('cover') }}</strong>
                        </span>
                      @endif
                  </div>
                </div>

                @include('books.partial.form')
  
                <!-- Buttons -->
                <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                      {{ __('Add') }}
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