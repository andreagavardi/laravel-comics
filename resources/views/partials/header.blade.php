<header id="site_header">

    <div class="top">
        <div class="container">
            <span>DC POWER VISA</span>
            <span> ADDITIONAL DC SITES</span>
        </div>

    </div>
    <div class="container">
        <nav id="navbar" class="navbar">
            <div class=" navbar navbar-left flex-row">
                <div class="logo">
                    <a href="{{route('home')}}"><img src="{{asset('img/dc-logo.png')}}" alt="logo dc"></a>
                </div>
                <ul class="navbar mr-auto list-unstyled">
                    <li class="nav-item">
                        <a class="nav-link {{Str::contains(Route::currentRouteName(),'comic')? 'active': ''}}" href="{{route('comics.index')}}" class="">comics</a> <!-- route(comics.index) -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">news</a>
                    </li>
                    <div class="nav_search">
                        <input type="text" name="search" id="search" placeholder="Search">
                        <i class="fas fa-search fa-sm fa-fw"></i>
                    </div>
                </ul>
            </div>

            <ul class="navbar-nav ml-auto flex-row">

                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link mr-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                            {{ __('Dashboard') }}
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>


        </nav>
    </div>


</header>
