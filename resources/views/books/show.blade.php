{{-- view/books/show.blade.php --}}

@extends('layouts.app')

@push('styles')
  <link href="{{ asset('css/home.css') }}" rel="stylesheet">
  <link href="{{ asset('css/borrowbook.css') }}" rel="stylesheet">
@endpush


@section('content')
  <div class="container">
    <div class="borrow-section">
      <div class="book-details">
        <div class="book-info">
          <img src="{{ asset('storage/'.$book->cover) }}" width="400px" height="400px" class="img-fluid float-left mr-3" alt="">
          <h3>{{ $book->title }}</h3>
          <h3>by {{ $book->author }}</h3>
          <h5>Publisher: {{$book->publisher}}</h5>
          <h5>for age {{ $book->recommended_age }}</h5>
        </div>
        <a href={{route('books.edit', $book->id)}} class="btn btn-primary">Edit</a>
      </div>
    </div>
  </div>
@endsection
