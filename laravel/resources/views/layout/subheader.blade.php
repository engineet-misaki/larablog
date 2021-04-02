@section('subheader')
<section class="fdb-block  py-0" data-block-type="features" data-id="3">
    <div class="bg-dark">
    <h5 class="text-center py-3 m-0"></h5>
    <div class="container">
    <div class="row text-center justify-content-center">
      <div class="col-12 col-sm-2 m-auto  pt-4 pt-sm-0">
        <a class="text-decoration-none text-reset" href="{{ action('ArticleController@index') }}">
          <i class="fas fa-home vw-5 text-light"></i>
          <h6 class="m-d-1  vw-1">HOME</h6>
        </a>
      </div>

      @foreach($category_lists as $category_list)
      <div class="col-12 col-sm-2 m-auto pt-4 pt-sm-0">
        <a class="text-decoration-none  text-reset" href="{{ url('blog/' . $category_list->slug ) }}">
          <i class="{{  $icon[$loop->index] }} vw-5 text-light"></i>
          <h6 class="m-md-1 vw-1">{{ $category_list->name }}</h6>
        </a>
      </div>
      @endforeach

  </div>
  </div>
</section>
@endsection

