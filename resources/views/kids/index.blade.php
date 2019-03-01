{{-- view/kids/index.blade.php --}}

@extends('layouts.app')

@push('styles')
  {{-- <link href="{{ asset('css/home.css') }}" rel="stylesheet"> --}}
  <link href="{{ asset('css/create.css') }}" rel="stylesheet">
@endpush

@section('content')
  <div class="container text-center">
    <h1 class="familyHeading">My Family</h1>
    <p style="font-family:'Montserrat', sans-serif";>Click on a kid's name for more detail</p>
    <img src="{{ asset('images/familyCartoon.jpeg') }}" alt="Cartoon Family">
    <br /><a href={{ route('kids.create') }} class="btn btn-primary pull-right">Add Kid</a>
    
    <table class="table table-hover">
      <thead>
        <tr class="table-primary">
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Age</th>
          <th scope="col">Most recent goal</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($kids as $kid)

        <tr>
          <td><a href={{ route('kids.show', $kid->id) }}>{{ $kid->firstName }}</a></td>
          <td>{{ $kid->lastName }}</td>
          <td>{{ $kid->age($kid->DOB) }}</td>
          <td>(Goal name)</td>
        </tr>

        @endforeach
      </tbody>
    </table> 
  </div>
@endsection