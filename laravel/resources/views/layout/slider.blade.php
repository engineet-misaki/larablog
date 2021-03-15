@section('slider')
<!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"  src="https://picsum.photos/1201/400" alt="">
      <div class="carousel-caption d-none d-md-block">
        <h5>...</h5>
        <p>...</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"  src="https://picsum.photos/1209/400" alt="">
    </div>
    <div class="carousel-item">
      <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"  src="https://picsum.photos/1200/400" alt="">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->
<div id="carouselExampleControls" class="slide">
  <div class="card">
    <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"  src="https://picsum.photos/1201/400" alt="">
    <div class="card-img-overlay">
      <h1 class="text-white shadow-lg rounded p-3 m-5 text-center bg-transparent">{{ $data }}</h1>
    </div>
  </div>
</div>
@endsection