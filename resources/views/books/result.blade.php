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
          <img src="../images/charlottesweb.jpg" alt="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Book Title</h5>
            <p class="card-text">Author</p>
            <a href="{{ url('records/create/1') }}" class="btn btn-card-full">View details</a>
          </div>
          <div class="card-footer">
            <!-- Change class="not-available" for lent out books -->
            <small class="text-muted">Status: <span class="book-available">Available</span></small>
          </div>
        </div>
      </div>
    </div>
    <a href="{{ route('books.search') }}" class="btn btn-primary">Back to Search</a>
</div>
@endsection