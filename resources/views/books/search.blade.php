{{-- view/books/search.blade.php --}}

@extends('layouts.app')

@push('styles')
  <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          {{ __('Search Book') }}
        </div>

        <div class="card-body">
          <div class="col-md-6">
            <label for="title">{{ __('Title') }}</label>
            <input type="text" name="title" id="title" class="form-control">
          </div>

          <div class="col-md-6">
            <label for="age">{{ __('Recommended Age') }}</label>
            <input type="text" name="age" id="age" class="form-control">
          </div>
          <br />

          <!-- Buttons -->
          <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
              <a href="{{ route('books.result') }}" class="btn btn-primary">
                {{ __('Search') }}
              </a>
            </div>
          </div>
        </div>
      </div>
      <br />

      <div class="card">
        <div class="card-header">
          {{ __('All books') }}
        </div>

        <div class="card-body">
          @foreach ($books as $book)
          <div class="card text-center" style="width: 13rem;">
            <img class="card-img-top img-fluid" src="{{asset('storage/'.$book->cover)}}" width="100"
              height="350" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">{{$book->title}}</h5>
                <p class="card-text">{{$book->author}}</p>
                <a href="{{ url('records/create/'. $book->id) }}" class="btn">View Details</a>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection