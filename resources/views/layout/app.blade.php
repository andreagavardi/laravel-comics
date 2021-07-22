<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <title>DC @yield('title','Comics')</title>
    <!-- Link FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS Link -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>

<body>

    <!-- header e nav in partials/header.blade.php -->
    @include('partials.header')

    <!-- main content specifico in ogni view-->
    <main id="main_content">
        @yield('main_content')
    </main>

    <!-- footer in partials/footer.blade.php -->
    @include('partials.footer')


</body>

</html>
