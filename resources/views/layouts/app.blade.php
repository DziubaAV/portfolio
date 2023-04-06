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
        
        <header class="header">
            <a href="#" class="logo">Portfolio.</a>
           <i class="bx bx-menu" id="menu-icon"></i>
                <nav class="navbar">
                    <a href="/" style="--i:1" class="active">Главная</a>
                    <a href="{{ asset('about') }}" style="--i:2">Обо мне</a>
                    <a href="#skills" style="--i:3">Навыки</a>
                    <a href="#potfolio" style="--i:4">Портфолио</a>
                    <a href="{{ asset('contact') }}" style="--i:5">Контакты</a>
                </nav>

                <div class="navbar"> 
                    @if (Route::has('login'))
                        <div>
                        @auth
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                        @else
                        <a href="{{ route('login') }}">Авторизация</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Регистрация</a>
                        @endif
                    @endauth
                        </div>
                    @endif
                </div>         
        </header>

        
        
        
        @yield('content')




                <script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>
                <script src="\js\script.js"></script>  
    </body>
</html>
