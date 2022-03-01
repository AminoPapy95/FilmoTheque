<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Place to be for a spectacle</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03"
            aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('artist_index') }}">Artist
                        <span class="visually-hidden">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
            <a class="nav-link" href="{{ route('representation_index')}}">Representations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('show_index')}}">Show</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('show_index')}}">Show</a>
          </li>
          @if (Route::has('login'))
          {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}
          @auth
              <li class="nav-item">
                  <a href="{{ url('/dashboard') }}"
                      class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
              </li>
              <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <div class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    this.closest('form').submit(); " role="button">
                            <i class="fas fa-sign-out-alt"></i>

                            {{ __('Log Out') }}
                        </a>
                    </div>
                </form>
            </li>
          @else
              <li class="nav-item">
                  <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log
                      in</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a href="{{ route('register') }}"
                          class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                  </li>
              @endif
          @endauth
{{-- </div> --}}
@endif

        </ul>
        <form class="d-flex">
            <input class="form-control me-sm-2" type="text" placeholder="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </div>
</nav>
