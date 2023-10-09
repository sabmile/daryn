<div class="playlist">
    <div class="main-video">
        <div class="video">
            <video src="{{ URL('/assets/video/' . $videos[0]['filename'] . '.mp4') }}" controls muted></video>	
            <h3 class="title">video name</h3>
        </div>
    </div>
    <div class="video-list">
        @foreach($videos as $video)
        <div class="video-list-item">
            <img src="{{ URL('/assets/video/' . $video['filename'] . '.png') }}">
            <h3 class="title">{{ $video['title'] }}</h3>
        </div>
        @endforeach
    </div>
</div>	
