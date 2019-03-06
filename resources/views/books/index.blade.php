{{-- view/books/index.blade.php --}}

@extends('layouts.app')

@push('styles')
  <link href="{{ asset('css/home.css') }}" rel="stylesheet">
  <link href="{{ asset('css/global.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="container">
  <!-- Add book section -->
  <div class="add-book">
    <h3><a href="{{ route('books.create') }}">Add a book to your library</a></h3>
  </div>
  <!-- END of Add book section -->

  <!-- Accordian for book management -->
  <div id="accordion">
    <!-- Borrowed books -->
    <div class="card">
      <div class="card-header" id="borrowed-books-heading">
        <h5 class="mb-0">
          <button class="btn btn-link" data-toggle="collapse" data-target="#borrowed-books"
            aria-expanded="true" aria-controls="borrowed-books">
            Books I am borrowing
          </button>
        </h5>
      </div>

      <div id="borrowed-books" class="collapse show" aria-labelledby="borrowed-books-heading" data-parent="#accordion">
        <div class="card-body">
          <div class="book-collection">
            <div class="borrowed-books-collection">
              @foreach($borrowingBooks as $book)
              <div class="card text-center" style="width: 13rem;">
                <img class="card-img-top img-fluid" src="{{ asset('storage/'.$book->cover) }}" width="50"
                  height="175" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">{{ $book->title }}</h5>
                    <p class="card-text">{{ $book->author }}</p>
                    <a href="{{ route('records.show', $book->id) }}" class="btn full-btn">View Details</a>
                  </div>
                  <div class="card-footer text-muted">
                    Checked out<br />{{ $book->checkout_date }}
                  </div>
                </div>
              @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Lent out books-->
      <div class="card">
        <div class="card-header" id="lent-books-heading">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#lent-out-books"
              aria-expanded="true" aria-controls="lent-out-books">
              My lent out books
            </button>
          </h5>
        </div>
        <div id="lent-out-books" class="collapse" aria-labelledby="lent-out-books-heading" data-parent="#accordion">
          <div class="card-body">
            <div class="lent-out-books book-collection">
              @foreach($lentOutBooks as $book)

              <div class="card text-center" style="width: 13rem;">
                  <img class="card-img-top img-fluid" src="{{ asset('storage/'.$book->cover) }}" width="50"
                    height="175" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">{{ $book->title }}</h5>
                      <p class="card-text">{{ $book->author }}</p>
                      <a href="{{ route('records.show') }}" class="btn full-btn">View Details</a>
                    </div>
                    <div class="card-footer text-muted">
                      Lent out to: {{$book->users.firstName}} {{ $book->users.lastName}}
                    </div>
                  </div>

              @endforeach

            </div>
          </div>
        </div>
      </div>

      <!-- Users Library -->
      <div class="card">
        <div class="card-header" id="user-library-heading">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#user-library"
              aria-expanded="true" aria-controls="user-library">
              My library
            </button>
          </h5>
        </div>
        <div id="user-library" class="collapse" aria-labelledby="lent-out-books-heading" data-parent="#accordion">
          <div class="card-body">
            <div class="user-library">
              <div class="user-library-collection">
                @foreach($mybooks as $book)
                <div class="card text-center" style="width: 13rem;">
                  <img class="card-img-top img-fluid" src="{{ asset('storage/'.$book->cover) }}" width="50"
                    height="175" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">{{ $book->title }}</h5>
                      <p class="card-text">{{ $book->author }}</p>
                      <a href="{{ route('books.edit', $book->id) }}" class="btn full-btn">Edit Book</a>
                    </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection
