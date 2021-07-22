<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC @yield('title','Comics')</title>
    <!-- Link FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Link Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- CSS Link -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">

</head>

<body>

    <!-- header e nav in partials/header.blade.php -->
    @include('partials.header')

    <!-- main content specifico in ogni view-->
    <main id="main_content">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <ul class="nav flex-column py-3">
                        <li class="nav-item nav-pills">

                            <a class="nav-link {{Route::currentRouteName() == 'admin.dashboard'? 'active': ''}}" href="{{route('admin.dashboard')}}"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a>
                        </li>
                        <li class="nav-item nav-pills">
                            <a class="nav-link {{Str::contains(Route::currentRouteName(),'comic')? 'active': ''}}" href="{{route('admin.comics.index')}}"><i class="fas fa-newspaper mr-2"></i> Comics</a>
                        </li>

                    </ul>
                </div>
                <div class="col-sm-10">
                    @yield('main_content')

                </div>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</body>

</html>
