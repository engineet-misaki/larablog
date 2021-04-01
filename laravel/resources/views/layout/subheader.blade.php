@section('subheader')
<section class="fdb-block  py-0" data-block-type="features" data-id="3">
    <div class="bg-dark">
    <h5 class="text-center py-3 m-0"></h5>
    <div class="container">
    <div class="row text-center justify-content-center">
      <div class="col-12 col-sm-2 m-auto  pt-4 pt-sm-0">
        <a class="text-decoration-none text-reset" href="{{ action('ArticleController@index') }}">
          <i class="fas fa-home fa-3x text-light"></i>
          <h6><strong>HOME</strong></h6>
        </a>
      </div>

      @foreach($category_lists as $category_list)
      <div class="col-12 col-sm-2 m-auto pt-4 pt-sm-0">
        <a class="text-decoration-none  text-reset" href="{{ url('blog/' . $category_list->slug ) }}">
          <i class="{{  $icon[$loop->index] }} fa-3x text-light"></i>
          <h6><strong>{{ $category_list->name }}</strong></h6>
        </a>
      </div>
      @endforeach

  </div>
  </div>
</section>
@endsection

