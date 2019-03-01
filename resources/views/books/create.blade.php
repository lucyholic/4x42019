{{-- view/books/create.blade.php --}}

@extends('layouts.app')

@push('styles')
  {{-- <link href="{{ asset('css/home.css') }}" rel="stylesheet"> --}}
  <link href="{{ asset('css/create.css') }}" rel="stylesheet">
@endpush

@section('content')
  <div class="container text-center">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <img src="{{ asset('images/uploadBook.png') }}" alt="Upload Cloud" width="20%" height="20%"><br />
            {{ __('Add a Book') }}
          </div>

          <div class="card-body">
            <label for="searchISBN">{{ __('Search by ISBN') }}</label>
            <div class="input-group mb-3" name="searchISBN">
              <div class="input-group-prepend">
                <button class="btn btn-outline-secondary" id="searchButton" type="button">Submit</button>
              </div>
              <input type="text" class="form-control" aria-label="" aria-describedby="basic-addon1">
            </div>

            <label for="manual">{{ __('Or') }}</label>

            <form method="POST" action="{{ route('books.store') }}" name="manual">
                @csrf
  
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