@extends('layout.common')
 
@section('title', 'インデックスページ')

@include('layout.header')
@include('layout.slider', ['data' => '一覧画面！！']))
 
@section('content')


@foreach($articles as $article)
    <div class="card d-inline-block m-3" style="width: 18rem;">
        <img class = "bd-placeholder-img card-img-top" width="100%" height="180" src="https://picsum.photos/1201/400" alt="">
        <div class="card-body">
            <h5 class="card-title">{{ $article->post_title }}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="http://localhost/blog/test/{{ $list[$loop->index] }}">{{ $article->post_title }}</a>
        </div>
    </div>
@endforeach

@endsection
 
@include('layout.submenu')
 
@include('layout.footer')

