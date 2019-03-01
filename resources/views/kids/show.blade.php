{{-- view/kids/show.blade.php --}}

@extends('layouts.app')

@push('styles')
  {{-- <link href="{{ asset('css/home.css') }}" rel="stylesheet"> --}}
  <link href="{{ asset('css/create.css') }}" rel="stylesheet">
@endpush

@section('content')
  <div class="container text-center">
      <h1 class="familyHeading">{{ $kid->firstName }}'s Page</h1>
      <a href="{{ route('kids.edit', $kid->id)}}" class="btn btn-primary">Edit</a>
      <table class="table table-hover">
        <thead>
          <tr class="table-primary">
            <th scope="col"></th>
            <th scope="col">Child</th>
          </tr>
       </thead>
       <tbody>
          <tr>
            <td>First Name:</td>
            <td>{{ $kid->firstName }}</td>
          </tr>
          <tr>
            <td>Last Name:</td>
            <td>{{ $kid->lastName }}</td>
          </tr>
          <tr>
            <td>Age:</td>
            <td>{{ $kid->age($kid->DOB) }}</td>
          </tr>
          <tr>
            <td>School:</td>
            <td>{{ $kid->school }}</td>
          </tr>
        </tbody>
      </table>

    <h2 class="familyHeading" style="color:#B29600;">
      <span><i class="fa fa-star mr-3"></i></span>GOALS</h2>
      <a href="{{ route('goals.create') }}" class="btn btn-light">Add a goal</a>
      <table class="table table-hover">
        <thead>
          <tr class="table-success">
            <th scope="col">Title</th>
            <th scope="col">Start Date</th>
            <th scope="col">Completed?</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($goals as $goal)
            <tr>
              <td>{{ $goal->title }}</td>
              <td>{{ $goal->start_date}}</td>
              @if ($goal->completed)
                <td><input type="checkbox" id="complete" checked disabled></td>
              @else
              <td><input type="checkbox" id="complete" disabled></td>
              @endif
            </tr>
          @endforeach
        </tbody>
      </table>
    




  </div>
@endsection