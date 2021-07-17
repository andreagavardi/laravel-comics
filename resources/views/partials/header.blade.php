<header id="site_header">

    <div class="top">
        <div class="container">
            <span>DC POWER VISA</span>
            <span> ADDITIONAL DC SITES</span>
        </div>

    </div>
    <div class="container">
        <nav id="navbar">
            <div class="logo">
                <a href="{{route('home')}}"><img src="{{asset('img/dc-logo.png')}}" alt="logo dc"></a>
            </div>
            <div class="nav_links">
                <a href="#">characters</a>
                <a href="{{route('comics.index')}}" class="{{Str::contains(Route::currentRouteName(),'comic')? 'active': ''}}">comics</a> <!-- route(comics.index) -->
                <a href="#">movies</a>
                <a href="#">tv</a>
                <a href="#">games</a>
                <a href="#">collectibles</a>
                <a href="#">videos</a>
                <a href="#">news</a>
                <a href="#">shop</a>
                <a href="{{route('admin.index')}}" class="admin">admin</a>
            </div>
            <div class="nav_search">
                <input type="text" name="search" id="search" placeholder="Search">
                <i class="fas fa-search fa-sm fa-fw"></i>
            </div>
        </nav>
    </div>


</header>
