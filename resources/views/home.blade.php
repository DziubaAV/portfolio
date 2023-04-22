@extends("layouts.app")
@section('title-block')

Главная

@endsection
@section('content')

<!-- Раздел Главная -->
<section class="home" id="home">
    <div class="home-content">
        <h3>Hello, It's Me</h3>
        <h1>Artsiomi Dziuba</h1>
        <h3>And I a <span class="multiple-text"></span></h3>
        
        <div class="inf">
            <ul class="profile-list">

                <li class="clearfix">
                    <span class="title"><i class='bx bx-envelope'></i></span>
                    <a class="content" href="mailto:dz.artsiomi@gmail.com" target="_blank">dz.artsiomi@gmail.com</a>
                </li>

                <li class="clearfix">
                    <span class="title"><i class='bx bx-phone' ></i></span>
                    <a class="content" href="tel:+375291875526">+375 29 187-55-26</a>
                </li>

                <li class="clearfix">
                    <span class="title"><i class='bx bx-location-plus' ></i></span>
                    <a class="content" href="https://goo.gl/maps/Hbp1MZxkGn5JSpReA" target="_blank">Минск, Республика Беларусь</a>
                 </li>

            </ul>
        </div>

        <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur ab perferendis accusamus voluptatem voluptate consectetur, porro, vitae fuga suscipit natus qui? Expedita vitae libero impedit mollitia beatae quod facilis dolores.</p> -->
            <div class="socialmedia">
                <a href="https://www.facebook.com/dzartsiomi"   title="Facebook"    target="_blank" style="--i:6"><i class='bx bxl-facebook'></i></a>
                <a href="https://www.linkedin.com/in/dziubaav/" title="Linkedin"    target="_blank" style="--i:7"><i class='bx bxl-linkedin'></i></a>
                <a href="https://www.instagram.com/dzartsiomi/" title="Instagram"   target="_blank" style="--i:8"><i class='bx bxl-instagram'></i></a>
                <a href="http://mykp.ru/dzartsiomi"             title="Kinopoisk"   target="_blank" style="--i:8"><i class='bx bxs-film'></i></a>
            </div>
                <!-- <a href="#" class="btn">Скачать CV</a> -->
    </div>

                    <div class="home-img">
                        <img src="\img\portfolio.png" alt="portfolio.png">
                    </div>

                </section>
@endsection