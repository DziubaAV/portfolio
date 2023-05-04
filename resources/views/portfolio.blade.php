@extends("layouts.app")
@section('title-block')

Портфолио

@endsection
@section('content')

<!-- Раздел Portfolio -->

<section class="portfolio" id="portfolio">
    <h2 class="heading">Мое <span>портфолио</span></h2>
    <div class="portfolio-container">
    @foreach($portfolio as $project)
        <div class="portfolio-box">
            @if (!empty($project->image_path))
                <img src="{{ $project->image_path }}" alt="">
            @endif
            <div class="portfolio-layer">
                <h4>{{ $project->name }}</h4>
                <p>{{ $project->description }}</p>
                <a href="{{ $project->link_url }}" target="_blank"><i class='bx bx-link-external'></i></a>
            </div>
        </div> 
    @endforeach   
</div>
</section>
@endsection