{{-- views/goals/show.blade.php --}}

@extends('layouts.app')

@push('styles')
  <link href="{{ asset('css/global.css') }}" rel="stylesheet">
  <link href="{{ asset('css/goaldetails.css') }}" rel="stylesheet">    
@endpush

@section('content')

<div class="container">
    <div class="row mt-2 text-center">
      <div class="kid-details col-md-12">
          <h3 class="kids-name">{{ $kid->firstName }}'s Goal</h3>
          <hr />
      </div>
          
      <div class="goal-details text-center">
        <h3 class="goal-title">{{ $goal->title }}</h4>
        <div class="goal-status">
          <p>Goal Status:
            @if($goal->isCompleted)
              <span class="lead goal-completed">Completed!</span></p>
            @else
              <span class="lead goal-completed">Still Working on it!</span></p>
            @endif
        </div>
        <hr />
        <p class="goal-description">{{ $goal->description }}</p>
          <div class="goal-date-section text-inline">
            <p class="start-date">Start Date: {{ $goal->start_date}}</p>
            <p class="end-date">End Date: {{ $goal->end_date }}</p>
          </div>
          <div class="goal-btns">
            @if(!$goal->isCompleted)

              <form action="{{ route('goals.update', $goal->id) }}" method="post">
                @csrf
                {!! method_field('put') !!}
                <input type="hidden" name="isCompleted" id="isCompleted" value="true" />
                <button type="submit" class="btn full-btn mb-2" style="background-color: rgb(0, 223, 0);">Mark goal as completed</button>
              </form>
              
            @endif
              <a href="{{ route('kids.show', $kid->id) }}" class="btn full-btn mb-2">Return to Kid details</a>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection