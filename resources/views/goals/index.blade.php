{{-- views/goals/index.blade.php --}}

@extends('layouts.app')

@push('styles')
  <link href="{{ asset('css/create.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="container">
    <div class="card">
      <div class="card-header">
        Goals
      </div>

      <div class="card-body">
        In this page, parents can browse their children's progress at a glance.
      </div>
    </div>
    <br />
    
    <table class="table table-hover">
      <thead>
        <tr class="table-success">
          <th scope="col">Kid</th>
          <th scope="col">Title</th>
          <th scope="col">Start Date</th>
          <th scope="col">Completed?</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($goals as $goal)
          <tr>
            <td>{{ $goal->kid()->first()->firstName}}</td>
            <td><a href="{{ route('goals.show', $goal->id) }}">{{ $goal->title }}</a></td>
            <td>{{ $goal->start_date}}</td>
            @if ($goal->isCompleted)
              <td><input type="checkbox" id="complete" disabled checked="checked"></td>
            @else
              <td><input type="checkbox" id="complete" disabled></td>
            @endif
          </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endsection