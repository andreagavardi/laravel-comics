<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel-Comics-Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>

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
                    <a href="#" class="active">comics</a>
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

    <main id="main_content">
        @yield('main_content')
    </main>

    <footer id="site_footer"></footer>

</body>

</html>
