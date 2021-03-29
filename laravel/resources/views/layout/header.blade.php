@section('header')
<section class="fdb-block  py-3" data-block-type="features" data-id="3">
    <div class="row text-center">
      <div class="col-12 bg-dark">
        <!-- <h1>テストサイトだよおいしいよ</h1>
        <h5 class="read">〜サブタイトルだぜ〜</h5> -->
        <h1>お金の知識 × ITエンジニア</h1>
        <h5 class="read">〜ITと金融を組み合わせ、上手なお金との付き合い方を教えます〜</h5>
      </div>
    </div>

    <div class="container">
    <div class="row text-center justify-content-center pt-5">
      <div class="col-12 col-sm-2 m-auto  pt-4 pt-sm-0">
        <a class="text-decoration-none" href="{{ action('ArticleController@index') }}">
          <i class="fas fa-home fa-4x"></i>
          <!-- <img alt="image" class="fdb-icon" src="https://cdn.jsdelivr.net/gh/froala/design-blocks@master/dist/imgs//icons/monitor.svg"> -->
          <h3><strong>HOME</strong></h3>
        </a>
      </div>

      @foreach($category_lists as $category_list)
      <div class="col-12 col-sm-2 m-auto pt-4 pt-sm-0">
        <a class="text-decoration-none" href="{{ url('blog/' . $category_list->slug ) }}">
          <!-- <img alt="image" class="fdb-icon" src="https://cdn.jsdelivr.net/gh/froala/design-blocks@master/dist/imgs//icons/map.svg"> -->
          <i class="{{  $icon[$loop->index] }} fa-4x"></i>
          <h3><strong>{{ $category_list->name }}</strong></h3>
        </a>
      </div>
      @endforeach

    </div>
  </div>
</section>
@endsection