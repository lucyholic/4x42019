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
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="100px" height="100px" class="add-book-icon">
      <path style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal"
        d="M 25 2 C 12.309295 2 2 12.309295 2 25 C 2 37.690705 12.309295 48 25 48 C 37.690705 48 48 37.690705 48 25 C 48 12.309295 37.690705 2 25 2 z M 25 4 C 36.609824 4 46 13.390176 46 25 C 46 36.609824 36.609824 46 25 46 C 13.390176 46 4 36.609824 4 25 C 4 13.390176 13.390176 4 25 4 z M 24 13 L 24 24 L 13 24 L 13 26 L 24 26 L 24 37 L 26 37 L 26 26 L 37 26 L 37 24 L 26 24 L 26 13 L 24 13 z"
        font-weight="400" font-family="sans-serif" white-space="normal" overflow="visible" />
      </svg>
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
              @foreach($books as $book)
                {{-- Show not returned book only
                  @if($book->records()->latest()->first()->return_date == null) --}}
              <div class="card text-center" style="width: 13rem;">
                <img class="card-img-top img-fluid" src="../images/charlottesweb.jpg" width="50"
                  height="175" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Book Title</h5>
                    <p class="card-text">Author</p>
                    <a href="{{ route('records.show') }}" class="btn full-btn">View Details</a>
                    {{-- {{ route('records.show', $book->records()->latest()->first()->id) }} --}}
                  </div>
                  <div class="card-footer text-muted">
                    Checkout date
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
              @foreach($books as $book)

              <div class="lent-out-books">
                <div class="card text-center" style="width: 13rem;">
                  <img class="card-img-top img-fluid" src="../images/charlottesweb.jpg" width="100"
                    height="350" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Book Title</h5>
                      <p class="card-text">Author</p>
                      <a href="{{ route('records.show') }}" class="btn full-btn">View Details</a>
                    </div>
                    <div class="card-footer text-muted">
                      Lent out to: <span><a href="">Name</a></span>
                    </div>
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
                @foreach($books as $book)
                <div class="card text-center" style="width: 13rem;">
                  <img class="card-img-top img-fluid" src="../images/charlottesweb.jpg" width="100"
                    height="350" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Book Title</h5>
                    <p class="card-text">Author</p>
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
