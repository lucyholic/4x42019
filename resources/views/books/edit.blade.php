{{-- view/books/edit.blade.php --}}

@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Edit Book') }}</div>
  
          <div class="card-body">
            <form method="POST" action="{{ route('books.update', $book->id) }}">
              @csrf
  
            @include('books.partial.form')   
  
            <!-- Buttons -->
            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  {{ __('Edit') }}
                </button>

                <a href={{ route('books.show', $book->id) }} class="btn btn-warning">
                  {{ __('Cancel') }}
                </a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection