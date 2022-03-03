@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
@endphp
<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
          <h1 class="logo me-auto me-lg-0"><a href="index.html">KnightOne</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto {{ ($route == 'template') ? 'active' : '' }} " href="{{ route('template')}}">Accueil</a></li>
              <li><a class="nav-link scrollto {{ ($route == 'artist_index' || $route =='artist_show') ? 'active' : '' }}" href="{{ route('artist_index')}}">Nos artiste</a></li>
              <li><a class="nav-link scrollto {{ ($route == 'show_index' || $route =="show_show") ? 'active' : '' }}" href="{{ route('show_index')}}">Nos shows</a></li>
              <li><a class="nav-link scrollto {{ ($route == 'representation_index') ? 'active' : '' }} " href="{{ route('representation_index')}}">Nos representations</a></li>

              @if (Route::has('login'))
              {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}
              @auth
                  <li class=" nav-link scrollto  {{ ($route == 'dashboard') ? 'active' : '' }} " >
                      <a href="{{ url('/dashboard') }}"
                          class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                  </li>
                  <li class=" nav-link scrollto  {{ ($route == 'logout') ? 'active' : '' }} ">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <div class=" nav-link scrollto {{ ($route == 'logout') ? 'active' : '' }} ">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        this.closest('form').submit(); " role="button">
                                <i class="fas fa-sign-out-alt"></i>

                                {{ __('Log Out') }}
                            </a>
                        </div>
                    </form>
                </li>
              @else
                  <li class=" nav-link scrollto {{ ($route == 'login') ? 'active' : '' }} ">
                      <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log
                          in</a>
                  </li>
                  @if (Route::has('register'))
                      <li class=" nav-link scrollto {{ ($route == 'register') ? 'active' : '' }} ">
                          <a href="{{ route('register') }}"
                              class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                      </li>
                  @endif
              @endauth
    {{-- </div> --}}
    @endif



              {{-- <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
              <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a> --}}
                {{-- <ul>
                  <li><a href="#">Drop Down 1</a></li>
                  <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="#">Deep Drop Down 1</a></li>
                      <li><a href="#">Deep Drop Down 2</a></li>
                      <li><a href="#">Deep Drop Down 3</a></li>
                      <li><a href="#">Deep Drop Down 4</a></li>
                      <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Drop Down 2</a></li>
                  <li><a href="#">Drop Down 3</a></li>
                  <li><a href="#">Drop Down 4</a></li>
                </ul>
              </li> --}}
              <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

          <a href="#about" class="get-started-btn scrollto">Get Started</a>
        </div>
      </div>

    </div>
  </header><!-- End Header -->
