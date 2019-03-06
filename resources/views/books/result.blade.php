{{-- view/books/result.blade.php --}}

@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{asset('css/searchresults.css')}}">
  <link rel="stylesheet" href="{{asset('css/global.css')}}">
@endpush

@section('content')
<div class="container-fluid mt-3">
  <div class="search-result text-center">
    <h4>Here are your search results: </h4>
    <hr />
  </div>
  
  <div class="row">
    <div class="col-sm-6 col-m-4 col-lg-3">
      <div class="card mb-2 text-center" style='width: 11rem'>
        @foreach ($books as $book)
          <img src="{{asset('storage/'.$book->cover)}}" alt="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">{{$book->title}}</h5>
            <p class="card-text">{{$book->author}}</p>
            <a href="{{ url('records/create/'. $book->id) }}" class="btn">View Details</a>
          </div>
          
          <div class="card-footer">
            @if($book->isAvailable())
              <small class="text-muted">Status: <span class="book-available">Available</span></small>
            @else
              <small class="text-muted">Status: <span class="not-available">Lent out</span></small>
            @endif
          </div>
        @endforeach
      </div>
    </div>
  </div>
  <a href="{{ route('books.search') }}" class="btn btn-primary">Back to Search</a>
</div>
@endsection