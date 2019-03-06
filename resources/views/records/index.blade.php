{{-- views/records/show.blade.php --}}

@extends('layouts.app')

@push('styles')
  <link href="{{ asset('css/home.css') }}" rel="stylesheet">
  <link href="{{ asset('css/global.css') }}" rel="stylesheet">
@endpush

@section('content')

<div class="container">
  <div class="kid-details col-md-12">
    <div class="card">
      <div class="card-header">
        My Book History
      </div>
        
      <div class="card-body">
      
      <div id="accordion">

      <div class="card">
        <div class="card-header" id="lent-books-heading">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#borrowed-books"
              aria-expanded="true" aria-controls="borrowed-books">
              My Borrowing History
            </button>
          </h5>
        </div>

        <div id="borrowed-books" class="collapse show" aria-labelledby="borrowed-books-heading" data-parent="#accordion">
          <div class="card-body">
            <table class="table table-hover">
              <thead>
                <tr class="table-primary">
                  <th scope="col">Check-out Date</th>
                  <th scope="col">Return Date</th>
                  <th scope="col">Book Title</th>
                  <th scope="col">Borrowed from</th>
                </tr>
              </thead>
              <tbody>
                @foreach($borrowingHistory as $record)
                <tr>
                  <td>{{$record->checkout_date}}</td>
                  <td>{{$record->return_date}}</td>
                  <td>{{$record->book()->first()->title}}</td>
                  {{-- <tr>{{$record->book()->user()->first()->firstName}} {{$record->book()->user()->first()->lastName}}</tr> --}}
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      
      <!-- Lent out books-->
      <div class="card">
        <div class="card-header" id="lent-books-heading">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#lent-out-books"
              aria-expanded="true" aria-controls="lent-out-books">
              My lent out History
            </button>
          </h5>
        </div>
        <div id="lent-out-books" class="collapse" aria-labelledby="lent-out-books-heading" data-parent="#accordion">
          <div class="card-body">
            <table class="table table-hover">
              <thead>
                <tr class="table-primary">
                  <th scope="col">Check-out Date</th>
                  <th scope="col">Return Date</th>
                  <th scope="col">Book Title</th>
                  <th scope="col">Lent out to</th>
                </tr>
              </thead>
              <tbody>

              @foreach($lentOutHistory as $record)
              <tr>
                <td>{{$record->checkout_date}}</td>
                <td>{{$record->return_date}}</td>
                <td>{{$record->book()->first()->title}}</td>
                {{-- <td>{{$record->user()->first()->firstName}} {{$record->user()->first()->lastName}}</td> --}}
              </tr>
              @endforeach

              </tbody>
            </table>

          </div>
        </div>
      </div>
      </div>
    </div>
    </div>
  </div>
</div>

@endsection