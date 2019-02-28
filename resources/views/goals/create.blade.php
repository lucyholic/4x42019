{{-- view/goals/create.blade.php --}}

@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Add a New Goal') }}</div>

        <div class="card-body">
          <form method="POST" action="{{ route('goals.store') }}">
            @csrf

          @include('goals.partial.form')   

          <!-- Buttons -->
          <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
              <button type="submit" class="btn btn-primary">
                {{ __('Add') }}
              </button>

              <button type="reset" class="btn btn-danger">
                {{ __('Reset') }}
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection