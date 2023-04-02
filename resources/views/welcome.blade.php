<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portfolio</title>

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
            <a href="#" class="logo">Portfolio</a>
                <nav class="navbar">
                    <a href="#" class="active">Главная</a>
                    <a href="#">Обо мне</a>
                    <a href="#">Навыки</a>
                    <a href="#">Портфолио</a>
                    <a href="#">Контакты</a>
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

        <section class="home">
                    <div class="home-content">
                        <h3>Hello, It's Me</h3>
                        <h1>Artsiomi Dziuba</h1>
                        <h3>And I a <span>Frontend Developer</span></h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur ab perferendis accusamus voluptatem voluptate consectetur, porro, vitae fuga suscipit natus qui? Expedita vitae libero impedit mollitia beatae quod facilis dolores.</p>
                            <div class="social">
                                <a href="#"><i class='bx bxl-facebook'></i></a>
                                <a href="#"><i class='bx bxl-linkedin'></i></a>
                                <a href="#"><i class='bx bxl-google'></i></a>
                            </div>
                            <a href="#" class="btn">Скачать CV</a>
                    </div>

                    <div class="home-img">
                        <img src="\img\portfolio.png" alt="portfolio.png">
                    </div>

                </section>
    </body>
</html>
