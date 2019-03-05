{{-- view/records/borrow.blade.php --}}

@extends('layouts.app')

@push('styles')
  <link href="{{ asset('css/borrowbook.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
   crossorigin=""/>
@endpush

@push('scripts')
  <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
    integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
    crossorigin=""></script>
@endpush

@section('content')
  <div class="container">
    <div class="borrow-section">
        <div class="book-details">
          <img src="{{asset('images/charlottesweb.jpg')}}" width="400px" height="400px" class="img-fluid float-left mr-3" alt="">
          <div class="book-info">
            <h3>{{ $book->title }}</h3>
            <h3>by {{ $book->author }}</h3>
            <h5>Publisher: {{ $book->publisher }}</h5>
            <h5>for age {{ $book->recommended_age }}</h5>
          </div>
          <div class="owner-info">
            <h4>Owned by: {{ $owner->firstName }} {{ $owner->lastName }}</h4>
          </div>
          <div class="book-status">
            <div class="book-status-text">
              Book Status:
              @if ($book->isAvailable())
                <span class="book-status-available">Available</span>
                <form method="POST" action="{{ route('records.store') }}">
                  @csrf
                  <input type="hidden" name="book_id" id="book_id" value={{$book->id}}>
                  <input type="date" class="form-control col-md-2 mt-4" name="checkout_date" id="checkout_date">
                  <button type="submit" class="btn-borrow-book btn-available">Borrow</button>
                </form>
              @else
                <span class="book-status-unavailable">Not Available</span>
                <button class="btn" disabled>Borrow</button>
              @endif

            </div>
          </div>
        </div>

      <!-- Creates the div for the leaflet map -->
      <div id="mapid" class="mb-3"></div>
    </div>
  </div>
@endsection

@push('scripts_footer')
  <script>
    window.onload = () => {
      var map = L.map('mapid').setView([43.452969, -80.495064], 13);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var marker = L.marker([43.452969, -80.495064]).addTo(map);
    marker.bindPopup("<b>Nearest Community Centre</b><br /><h6>Kitchener Community Centre <br />123 King St</h6>").openPopup();
  }

    
  </script>
@endpush