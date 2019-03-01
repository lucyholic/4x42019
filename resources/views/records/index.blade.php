{{-- views/records/show.blade.php --}}

@extends('layouts.app')

@section('content')

<div class="container">
    <div class="kid-details col-md-12">
      <div class="card">
        <div class="card-header">
          Book history detail page
        </div>
        <div class="card-body">
          This page will display a list of all books parents borrowed or lent out.<br />
          <a href="{{ route('records.show') }}" class="btn btn-primary">Go to show page</a>
        </div>
      </div>
    </div>
  </div>

@endsection