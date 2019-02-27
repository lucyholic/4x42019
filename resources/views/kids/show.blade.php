{{-- view/kids/show.blade.php --}}

@extends('layouts.app')
@section('content')
  <div class="container">
    <div>
      Name: {{ $kid->firstName }} {{ $kid->lastName }}<br />
      Age: {{ $kid->age($kid->DOB) }}<br />
      School: {{ $kid->school }}
    </div>
    <a href="{{ route('kids.edit', $kid->id)}}" class="btn btn-primary">Edit</a>
  </div>
@endsection