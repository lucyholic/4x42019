{{-- view/books/show.blade.php --}}

@extends('layouts.app')
@section('content')
  <div class="container">
      <div>
          Title: {{ $book->title }}<br />
          Author: {{ $book->author }}<br />
          ISBN: {{ $book->ISBN }}<br />
          Recommended Age: {{ $book->recommended_age }}<br />
          Owned by: {{ $user->firstName }} {{ $user->lastName}}
        </div>
        <a href="{{ route('books.edit', $book->id)}}" class="btn btn-primary">Edit</a>
  </div>
@endsection