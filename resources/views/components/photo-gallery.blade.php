<div class="container-fluid">
  <div class="col">
    <div id="carouselPhotos" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ URL('/assets/img/photo/09102023/' . $photos[0] . '.jpg') }}" class="d-block w-100" alt="...">
        </div>
        @foreach($photos as $photo)
        <div class="carousel-item">
          <img src="{{ URL('/assets/img/photo/09102023/' . $photo . '.jpg') }}" class="d-block w-100" alt="...">
        </div>
        @endforeach
      </div>
      <p>Ата-аналар жиналысы</p>
      <a href="{{ URL('/assets/img/photo/09102023/ата аналар жиналысы.pptx') }}" target="_blank">Презентация</a>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselPhotos" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselPhotos" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</div>