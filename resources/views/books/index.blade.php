{{-- view/books/index.blade.php --}}

@extends('layouts.app')
@section('content')
  <div class="container">
    @foreach($books as $book)
    {{ $book->title }} {{ $book->author}}
    @endforeach
  </div>
@endsection