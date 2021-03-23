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

    <div class="row text-center justify-content-center mt-5 pt-2">
      <div class="col-12 col-sm-2 m-auto  pt-4 pt-sm-0">
        <a class="text-decoration-none" href="{{ action('ArticleController@index') }}">
          <img alt="image" class="fdb-icon" src="https://cdn.jsdelivr.net/gh/froala/design-blocks@master/dist/imgs//icons/monitor.svg">
          <h3><strong>HOME</strong></h3>
        </a>
      </div>

      @foreach($category_lists as $category_list)
      <div class="col-12 col-sm-2 m-auto pt-4 pt-sm-0">
        <a class="text-decoration-none" href="{{ url('blog/' . $category_list->name ) }}">
          <img alt="image" class="fdb-icon" src="https://cdn.jsdelivr.net/gh/froala/design-blocks@master/dist/imgs//icons/map.svg">
          <h3><strong>{{ $category_list->name }}</strong></h3>
        </a>
      </div>
      @endforeach

    </div>
  </div>
</section>
@endsection