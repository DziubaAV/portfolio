@extends("layouts.app")
@section('title-block') 

Главная

@endsection
@section('content')

<!-- Раздел "Главная страница" -->
<section class="home" id="home">
    <div class="home-img">
        <img src="img\portfolio_about.png" alt="">
    </div>

    <div class="home-content">
    <h3>Hello, It's Me</h3>
        <h1>Artsiomi Dziuba</h1>
        <h3>And I a <span class="multiple-text"></span></h3>
        <div class="home_text">
        <p>Добро пожаловать на мой веб-сайт!</p>
        <p>Здесь вы найдете развлекательный контент, который ни в коем случае не стремится оскорбить или навредить кому-либо.</p>
        <p>Желаю вам прекрасного дня и приятного пребывания в виртуальном пространстве!</p>
        <p>Если у вас возникнут какие-либо проблемы с функциональностью сайта или у вас появятся предложения по его улучшению, 
        пожалуйста, поделитесь своим мнением со мной, отправив письмо на адрес <a href="mailto:dz.artsiomi@gmail.com"><span>dz.artsiomi@gmail.com</span></a>.</p>
    </div>
    </div>
</section>
<!-- Конец "Главная страница" -->
@endsection