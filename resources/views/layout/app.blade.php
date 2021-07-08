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

    <footer id="site_footer">

        <div class="container">
            <div class="column">
                <div class="footer_menu">
                    <h3> dc comics</h3>
                    <ul>
                        <li><a href="#">Chracters</a></li>
                        <li><a href="#">Comics</a></li>
                        <li><a href="#">Movies</a></li>
                        <li><a href="#">TV</a></li>
                        <li><a href="#">Games</a></li>
                        <li><a href="#">Videos</a></li>
                        <li><a href="#">News</a></li>
                    </ul>
                </div>
                <div class="footer_menu">
                    <h3>shop</h3>
                    <ul>
                        <li><a href="#">Shop DC</a></li>
                        <li><a href="#">Shop DC Collectibles</a></li>

                    </ul>
                </div>
            </div>
            <div class="column">
                <div class="footer_menu">
                    <h3>dc</h3>
                    <ul>
                        <li><a href="#">Term Of Use</a></li>
                        <li><a href="#">Privacy policy(NEW)</a></li>
                        <li><a href="#">Ad Choice</a></li>
                        <li><a href="#">Advertising</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Subscription</a></li>
                        <li><a href="#">Talent Workshops</a></li>
                        <li><a href="#">CPSC Certificates</a></li>
                        <li><a href="#">Ratings</a></li>
                        <li><a href="#">Shop Help</a></li>
                        <li><a href="#">Contact Us</a></li>

                    </ul>

                </div>
            </div>
            <div class="column">
                <div class="footer_menu">
                    <h3>sites</h3>
                    <ul>
                        <li><a href="#">DC</a></li>
                        <li><a href="#">MAD Magazine</a></li>
                        <li><a href="#">DC Kids</a></li>
                        <li><a href="#">DC Univers</a></li>
                        <li><a href="#">DC Power Visa</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
