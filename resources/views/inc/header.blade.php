<!-- Навигация -->

<header class="header">

  <a href="#" class="logo">Portfolio</a>
   
        <i class='bx bx-menu' id="menu-icon"></i>
    
        <nav class="navbar">
            <a href="/"                         class="{{ request()->is('/') ? 'active' : null }}" style="--i:1">Главная</a>
            <a href="{{ asset('resume') }}"     class="{{ request()->is('resume') ? 'active' : null }}"style="--i:2">Резюме</a>
            <a href="{{ asset('services') }}"   class="{{ request()->is('services') ? 'active' : null }}"style="--i:2">Услуги</a>
            <a href="{{ asset('projects') }}"   class="{{ request()->is('projects') ? 'active' : null }}" style="--i:3">Проекты</a>
            <a href="{{ asset('portfolio') }}"  class="{{ request()->is('portfolio') ? 'active' : null }}" style="--i:4">Портфолио</a>
            <a href="{{ asset('contact') }}"    class="{{ request()->is('contact') ? 'active' : null }}" style="--i:5">Контакты</a>
           
    <a href="#" class="themetoggle">
    <span class="material-symbols-outlined">dark_mode</span></a>
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