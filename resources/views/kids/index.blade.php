{{-- view/kids/index.blade.php --}}

@extends('layouts.app')
@section('content')
  <div class="container">
    <h2>Your Family</h2>
    <h5>Click on kid's name for detail</h5>
    <a href={{ route('kids.create') }} class="btn btn-primary">Add Kid</a>
    <div>
      @foreach($kids as $kid)
        <a href={{ route('kids.show', $kid->id) }}>{{ $kid->firstName }}</a> * Age: {{ $kid->age($kid->DOB) }}<br />
      @endforeach
    </div>
  </div>
@endsection