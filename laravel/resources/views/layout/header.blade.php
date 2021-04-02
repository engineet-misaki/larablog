@section('header')
<section class="fdb-block p-0" data-block-type="features" data-id="3">
    <div class="row text-center">
      <div class="col-12 bg-dark text-white  py-md-2 py-0">
        <h2>お金の知識 × ITエンジニア</h2>
        <h5 class="read">〜ITと金融を組み合わせ<span class="d-none d-md-inline">、上手なお金との付き合い方を教えます</span>〜</h5>
      </div>
    </div>

    <div class="container">
    <div class="row text-center justify-content-center py-4 pt-md-5">
      <div class="col-4 col-sm-2 m-auto pt-0">
        <a class="text-decoration-none text-reset" href="{{ action('ArticleController@index') }}">
          <i class="fas fa-home text-muted vw-5"></i>
          <h6 class="text-muted m-md-1 vw-1">HOME</h6>
        </a>
      </div>

      @foreach($category_lists as $category_list)
      <div class="col-4 col-sm-2 m-auto pt-0">
        <a class="text-decoration-none text-reset" href="{{ url('blog/' . $category_list->slug ) }}">
          <i class="{{  $icon[$loop->index] }}  text-muted vw-5"></i>
          <h6 class="text-muted m-md-1 vw-1">{{ $category_list->name }}</h6>
        </a>
      </div>
      @endforeach

    </div>
  </div>
</section>
@endsection