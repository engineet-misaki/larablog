@section('subheader')
<section class="fdb-block  py-0" data-block-type="features" data-id="3">
    <div class="bg-dark">
    <h3 class="text-center py-2 m-0">〜サイトカテゴリ〜</h3>
    <div class="container">
    <div class="row text-center justify-content-center">
      <div class="col-12 col-sm-2 m-auto  pt-4 pt-sm-0">
        <a class="text-decoration-none text-reset" href="{{ action('ArticleController@index') }}">
          <i class="fas fa-home fa-4x text-light"></i>
          <h3><strong>HOME</strong></h3>
        </a>
      </div>

      @foreach($category_lists as $category_list)
      <div class="col-12 col-sm-2 m-auto pt-4 pt-sm-0">
        <a class="text-decoration-none  text-reset" href="{{ url('blog/' . $category_list->slug ) }}">
          <i class="{{  $icon[$loop->index] }} fa-4x text-light"></i>
          <h3><strong>{{ $category_list->name }}</strong></h3>
        </a>
      </div>
      @endforeach

  </div>
  </div>
</section>
@endsection

