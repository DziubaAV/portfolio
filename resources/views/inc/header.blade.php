<!-- Навигация -->
<header>
    <div class="navbar">
      <i class='bx bx-menu'></i>
      <div class="logo"><a>Portfolio</a></div>
      <div class="nav-links">
        <div class="sidebar-logo">
          <span class="logo-name">Portfolio</span>
          <i class='bx bx-x' ></i>
        </div>
        <ul class="links">
          <li><a href="/" class="{{ request()->is('/') ? 'active' : null }}">Главная</a></li>
          <!-- <li>
            <a href="#">Link</a>
            <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
            <ul class="htmlCss-sub-menu sub-menu">
              <li><a href="#">Link 1</a></li>
              <li><a href="#">Link 1</a></li>
              <li><a href="#">Link 1</a></li>
              <li class="more">
                <span><a href="#">Link 2</a>
                <i class='bx bxs-chevron-right arrow more-arrow'></i>
              </span>
                <ul class="more-sub-menu sub-menu">
                  <li><a href="#">Link 2</a></li>
                  <li><a href="#">Link 2</a></li>
                  <li><a href="#">Link 2</a></li>
                </ul>
              </li>
            </ul>
          </li> -->
          <li><a href="{{ asset('resume') }}" class="{{ request()->is('resume') ? 'active' : null }}">Резюме</a></li>
          <li>
            <a href="#">Услуги</a>
            <i class='bx bxs-chevron-down js-arrow arrow '></i>
            <ul class="js-sub-menu sub-menu">
              <li><a href="{{ asset('services') }}" class="{{ request()->is('services') ? 'active' : null }}">Ремонт компьютеров</a></li>
              <li><a href="#">Создание сайтов</a></li>
            </ul>
          </li>
          <li><a href="{{ asset('projects') }}"   class="{{ request()->is('projects') ? 'active' : null }}">Проекты</a></li>
          <li><a href="{{ asset('portfolio') }}"  class="{{ request()->is('portfolio') ? 'active' : null }}">Портфолио</a></li>
          <li><a href="{{ asset('contact') }}" class="{{ request()->is('contact') ? 'active' : null }}">Контакты</a></li>
        </ul>
       
      </div>      
    </div>
  </header >
  <script src="/js/script.js"></script>

<!-- Авторизация и Регистрация -->

                 

<!-- Конец навигации -->