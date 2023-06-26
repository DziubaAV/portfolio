@extends("layouts.app")
@section('title-block')

Услуги

@endsection
@section('content')

<!-- Services -->
<section class="projects" id="projects">
    <h2 class="heading">Мои <span>проекты</span></h2>

    <div class="projects-container">

        <div class="projects-box">
        <i class='bx bx-code-alt'></i>
        <h3>Git HUB</h3>
        <p></p>
        <a href="https://github.com/DziubaAV" target="_blank" class="btn">Перейти</a>
        </div>

        <div class="projects-box">
        <i class='bx bx-video' ></i>
        <h3>Видео</h3>
        <p></p>
        <a href="{{ route ('youtube-video') }}" class="btn">Смотреть</a>
        </div>

    </div>
</section>


@endsection