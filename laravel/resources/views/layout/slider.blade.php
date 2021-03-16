@section('slider')
<div id="carouselExampleControls" class="slide">
  <div class="card">
    <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"  src="https://picsum.photos/1201/400" alt="">
    <div class="card-img-overlay">
      <h1 class="text-white shadow-lg rounded p-3 m-5 text-center bg-transparent">{{ $data }}</h1>
    </div>
  </div>
</div>
@endsection