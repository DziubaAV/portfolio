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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!-- Styles -->
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\adaptiv.css">

</head>
<body>

            @include('inc.header')
            @yield('content')
            @include('inc.footer')
    
    <!-- Script -->
    <script src="{{ asset ('https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js') }}"></script>
    <script src="{{ asset ('/js/typed.js') }}"></script>

    <script src="{{ asset ('/js/navbar.js') }}"></script>
    <script src="{{ asset ('/js/accordion.js') }}"></script>
    <script src="{{ asset ('/js/darkmode.js') }}"></script>
    <script src="{{ asset ('/js/video.js') }}"></script>
    <script src="{{ asset ('/js/pdf.js') }}"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.10.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset ('/js/html2pdf.bundle.min.js') }}"></script>
</body>
</html>
