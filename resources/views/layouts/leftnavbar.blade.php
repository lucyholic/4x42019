<ul class="navbar-nav mr-auto">
  <li class="nav-item">
    <a class="nav-link" href="{{ route('kids.index') }}">Manage Family</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('kids.index')}}">Childrens Goals</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
      aria-haspopup="true" aria-expanded="false">
      Books
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="{{route('books.index')}}">Manage Books</a>
      <a class="dropdown-item" href="{{route('books.create')}}">Add book</a>
      <a class="dropdown-item" href="{{route('books.search')}}">Find a book</a>
    </div>
  </li>
</ul>