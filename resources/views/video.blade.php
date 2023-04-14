@extends("layouts.app")
@section('title-block') 

Видео

@endsection
@section('content')

<!-- Раздел Видео -->
<section class="video" id="video">
    <h2 class="heading">Мое<span> видео</span></h2>
   
    @foreach($videos as $video)
    <div class="video-container">
        {!! $video->video_url !!}
        <div class="video-box">
        <p>{{$video->video_name}}</p>
        </div>
    </div>

    @endforeach
</section>
    
               
@endsection