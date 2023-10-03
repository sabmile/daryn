<div class="container">
    <div class="row">
        @foreach ($videos as $video) 
        <div class="ratio ratio-16x9">
            <video controls src="{{ URL('/assets/video/' . $video . '.mp4') }}"></video>
        </div>
        @endforeach
    </div>
</div>

