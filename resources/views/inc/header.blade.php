<!-- Навигация -->

<header class="header">

    <a href="#" class="logo">Portfolio.</a>
    <i class='bx bx-menu' id="menu-icon"></i>
    
        <nav class="navbar">
            <a href="/" style="--i:1" class="active">Главная</a>
            <a href="{{ asset('about') }}" style="--i:2">Обо мне</a>
            <a href="#skills" style="--i:3">Навыки</a>
            <a href="#potfolio" style="--i:4">Портфолио</a>
            <a href="{{ asset('contact') }}" style="--i:5">Контакты</a>
        </nav>

                <!-- <div class="navbar"> 
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
                </div> -->
</header>