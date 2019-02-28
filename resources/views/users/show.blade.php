@extends('layouts.app')
@section('content')
  <div class="container">
    <h2>{{ $user->firstName }}'s Profile</h2>

    {{ $user->firstName }} {{ $user->lastName }}<br />
    {{ $user->street}}<br />
    {{ $user->city}}, {{ $user->province}}, {{ $user->postalCode }}
  </div>
@endsection