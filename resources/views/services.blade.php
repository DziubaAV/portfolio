@extends("layouts.app")
@section('title-block')

Услуги

@endsection
@section('content')

<!-- Services -->
<section class="services" id="services">
    <h2 class="heading">Мои<span> проекты</span></h2>

    <div class="services-container">

        <div class="services-box">
        <i class='bx bx-code-alt'></i>
        <h3>Git HUB</h3>
        <p>Lorem ipsum dolor sit amet.</p>
        <a href="#" class="btn">Read More</a>
        </div>

        <div class="services-box">
        <i class='bx bx-video' ></i>
        <h3>Видео</h3>
        <p>Lorem ipsum dolor sit amet.</p>
        <a href="#" class="btn">Read More</a>
        </div>

        <div class="services-box">
        <i class='bx bxs-paint'></i>
        <h3>Graphic Design</h3>
        <p>Lorem ipsum dolor sit amet.</p>
        <a href="#" class="btn">Read More</a>
        </div>

        <div class="services-box">
        <i class='bx bx-bar-chart-alt'></i>
        <h3>Разное</h3>
        <p>Lorem ipsum dolor sit amet.</p>
        <a href="#" class="btn">Read More</a>
        </div>

    </div>
</section>


@endsection