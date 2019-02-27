{{-- view/kids/show.blade.php --}}

@extends('layouts.app')
@section('content')
  <div class="container">
    Name: {{ $kid->firstName }} {{ $kid->lastName }}<br />
    Age: {{ $kid->age() }}<br />
    School: {{ $kid->school }}
  </div>
@endsection