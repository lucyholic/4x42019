{{-- views/records/show.blade.php --}}

@extends('layouts.app')

@section('content')

<div class="container">
  <div class="kid-details col-md-12">
    <div class="card">
      <div class="card-header">
        Your Book History
      </div>

      <div class="card-body">
        <img src="{{ asset('storage/'.$book->cover) }}" width="400px" height="400px" class="img-fluid float-left mr-3" alt="">
        <h3>{{ $book->title }}</h3>
        <h3>by {{ $book->author }}</h3>
        <h5>Publisher: {{$book->publisher}}</h5>
        <h5>for age {{ $book->recommended_age }}</h5>
        <hr />
        <h5>Checkout Date: {{ $record->checkout_date }}</h5>
        <h5>Return Date: {{ $record->return_date }}</h5>

        @if($book->isAvailable())

        <form action="{{ route('records.update', $record->id) }}" method="post">
          @csrf
          {!! method_field('put') !!}
          
          <input type="date" class="form-control col-md-2 mt-4" name="return_date" id="return_date">
          <button type="submit" class="btn btn-primary mb-2">Return the Book</button>
        </form>

        @endif
        
      </div>
    </div>
  </div>
</div>

@endsection