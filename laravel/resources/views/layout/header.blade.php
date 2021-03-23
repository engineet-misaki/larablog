@section('header')
<section class="fdb-block  pb-0" data-block-type="features" data-id="3">
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <h1>テストサイトだよおいしいよ</h1>
        <h5 class="read">〜サブタイトルだぜ〜</h5>
        <!-- <h1>金融カケルITエンジニア</h1>
        <h5 class="read">〜お金を稼ぐ技術〜</h5> -->
      </div>
    </div>

    <div class="row text-center justify-content-center mt-5 pt-5">
      <div class="col-12 col-sm-4 col-lg-3 m-md-auto">
        <a href="{{ action('ArticleController@index') }}">
          <img alt="image" class="fdb-icon" src="https://cdn.jsdelivr.net/gh/froala/design-blocks@master/dist/imgs//icons/monitor.svg">
          <h3><strong>blog</strong></h3>
        </a>
      </div>

      <div class="col-12 col-sm-4 col-lg-3 m-auto pt-4 pt-sm-0">
        <a href="{{ action('ArticleController@list', 'test2') }}">
          <img alt="image" class="fdb-icon" src="https://cdn.jsdelivr.net/gh/froala/design-blocks@master/dist/imgs//icons/map.svg">
          <h3><strong>test2</strong></h3>
        </a>
      </div>

      <div class="col-12 col-sm-4 col-lg-3 m-auto pt-4 pt-sm-0">
        <a href="{{ action('ArticleController@list', 'category') }}">
          <img alt="image" class="fdb-icon" src="https://cdn.jsdelivr.net/gh/froala/design-blocks@master/dist/imgs//icons/package.svg">
          <h3><strong>category</strong></h3>
        </a>
      </div>

      <div class="col-12 col-sm-4 col-lg-3 m-auto pt-4 pt-sm-0">
        <a href="{{ action('ArticleController@list', 'hellow') }}">
          <img alt="image" class="fdb-icon" src="https://cdn.jsdelivr.net/gh/froala/design-blocks@master/dist/imgs//icons/package.svg">
          <h3><strong>hellow</strong></h3>
        </a>
      </div>
    </div>
  </div>
</section>
@endsection