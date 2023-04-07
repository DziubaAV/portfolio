@extends("layouts.app")
@section('title-block')Главная@endsection
@section('content')
npm install typed.js

<!-- Раздел Главная -->
<section class="home" id="home">
    <div class="home-content">
        <h3>Hello, It's Me</h3>
        <h1>Artsiomi Dziuba</h1>
        <h3>And I a <span class="multiple-text"></span></h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur ab perferendis accusamus voluptatem voluptate consectetur, porro, vitae fuga suscipit natus qui? Expedita vitae libero impedit mollitia beatae quod facilis dolores.</p>
            <div class="socialmedia">
                <a href="https://www.facebook.com/dzartsiomi"   target="_blank" style="--i:6"><i class='bx bxl-facebook'></i></a>
                <a href="https://www.linkedin.com/in/dziubaav/" target="_blank" style="--i:7"><i class='bx bxl-linkedin'></i></a>
                <a href="https://www.instagram.com/dzartsiomi/" target="_blank" style="--i:8"><i class='bx bxl-instagram'></i></a>
            </div>
                <a href="#" class="btn">Скачать CV</a>
    </div>

                    <div class="home-img">
                        <img src="\img\portfolio.png" alt="portfolio.png">
                    </div>

                </section>
@endsection