@extends('layout.common')

@section('title', 'インデックスページ')

@include('layout.header')

@section('content')

<section class="fdb-block team-1" data-block-type="teams" data-id="5">
    <div class="container">
        <div class="row-50"></div>

        <div class="row">
            @foreach($articles as $article)
            <div class="col-sm-4 text-left mb-5">
                <a href="http://localhost/blog/test/{{ $list[$loop->index] }}">
                    <div class="fdb-box p-0">
                        <img alt="image" class="img-fluid rounded-0" src="https://cdn.jsdelivr.net/gh/froala/design-blocks@master/dist/imgs//people/1.jpg">

                        <div class="content p-4 pt-5">
                            <h3><strong>{{ $article->post_title }}</strong></h3>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

    </div>
</section>


@include('layout.footer')
@endsection