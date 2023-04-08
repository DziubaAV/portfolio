<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title-block')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Google Fonts - Krona One -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">
   
    <!-- Styles -->
    <link rel="stylesheet" href="css\style.css">

</head>
<body>
        
        @include('inc.header') 
        @yield('content')
        @include('inc.footer')
    
    <!-- Script -->
    <script src="{{ asset ('https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js') }}"></script>
    <script src="{{ asset ('/js/typed.js') }}"></script>

    <script src="{{ asset ('/js/navbar.js') }}"></script>
    
</body>
</html>
