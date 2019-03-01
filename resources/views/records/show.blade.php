{{-- views/goals/show.blade.php --}}

@extends('layouts.app')

@section('content')

<div class="container">
  <div class="kid-details col-md-12">
    <div class="card">
      <div class="card-header">
        Book history detail page
      </div>
      <div class="card-body">
        This page will display book information and lent out/borrowing history.<br />
        If borrowing book, shows expected return date and return button.<br />
        If lent out book, shows expected return date and confirm return button
      </div>
    </div>
  </div>
</div>

@endsection