@extends("layouts.app")
@section('title-block') 

Видео

@endsection
@section('content')

<!-- Раздел Видео -->
<section class="video" id="video">
    <h2 class="heading">Мое<span> видео</span></h2>

    <div class="video-wrapper">
    @foreach($videos as $video)
        <div class="video-container">
            <div onclick="loadVideo(this, '{!! $video->video_url !!}');">
                <img class='video-img' src="\img\play-regular-24.png" alt="{$video->video_name}}">
            </div>
            <div class="video-box">
                <p>{{$video->video_name}}</p>
            </div>
        </div>
    @endforeach
</div>

<div class="pagination">
  @if ($videos->lastPage() > 1)
    <a href="{{ $videos->previousPageUrl() }}">«</a>
    @for ($i = 1; $i <= $videos->lastPage(); $i++)
      <a class="{{ ($videos->currentPage() == $i) ? 'active' : '' }}" href="{{ $videos->url($i) }}">{{ $i }}</a>   
    @endfor
    <a href="{{ $videos->nextPageUrl() }}">»</a>
  @endif
</div>   
</section>
    

@endsection