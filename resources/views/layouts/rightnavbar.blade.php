<ul class="navbar-nav ml-auto">
      {{-- If guest, show login/register --}}
  @guest
      <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
      </li>
      @if (Route::has('register'))
          <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
      @endif

      {{-- else, show home/firstname --}}
  @else
      <li class="nav-item">
      <a class="nav-link" href="{{ route('books.index') }}">{{ __('Home') }}</a>
      </li>

      <li class="nav-item dropdown">
        {{-- Display user name --}}
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->firstName }} <span class="caret"></span>
        </a>

        {{-- Go to profile --}}
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <div>
          <a class="dropdown-item" href="{{ route('users.show', Auth::id()) }}">
              {{ __('Profile') }}
          </a>
          </div>

          <div>
          <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>
          
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
          </div>
      </div>
    </li>
  @endguest
</ul>