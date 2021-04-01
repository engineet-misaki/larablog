@section('header')
<section class="fdb-block  py-md-3 py-0" data-block-type="features" data-id="3">
    <div class="row text-center">
      <div class="col-12 bg-dark text-white">
        <h2>お金の知識 × ITエンジニア</h2>
        <h5 class="read">〜ITと金融を組み合わせ、上手なお金との付き合い方を教えます〜</h5>
      </div>
    </div>

    <div class="container">
    <div class="row text-center justify-content-center py-4 pt-md-5">
      <div class="col-xs-2 m-auto pt-0">
        <a class="text-decoration-none text-reset" href="{{ action('ArticleController@index') }}">
          <i class="fas fa-home fa-4x text-muted"></i>
          <h6><strong class="text-muted">HOME</strong></h6>
        </a>
      </div>

      @foreach($category_lists as $category_list)
      <div class="col-xs-2 m-auto pt-0">
        <a class="text-decoration-none text-reset" href="{{ url('blog/' . $category_list->slug ) }}">
          <i class="{{  $icon[$loop->index] }} fa-4x  text-muted"></i>
          <h6><strong class="text-muted">{{ $category_list->name }}</strong></h6>
        </a>
      </div>
      @endforeach

    </div>
  </div>
</section>
@endsection