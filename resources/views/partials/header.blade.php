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
                 <img src="../img/dc-logo.png" alt="logo dc">
             </div>
             <div class="nav_links">
                 <a href="#">characters</a>
                 <a href="{{route('comics')}}" class="{{Route::currentRouteName()=== 'comics'? 'active': ''}}">comics</a>
                 <a href="#">movies</a>
                 <a href="#">tv</a>
                 <a href="#">games</a>
                 <a href="#">collectibles</a>
                 <a href="#">videos</a>
                 <a href="#">fans</a>
                 <a href="#">news</a>
                 <a href="#">shop</a>
             </div>
             <div class="nav_search">
                 <input type="text" name="search" id="search" placeholder="Search">
                 <i class="fas fa-search fa-sm fa-fw"></i>
             </div>
         </nav>
     </div>


 </header>
