@extends('layout.common')

@section('title', 'インデックスページ')

@include('layout.header')

@section('content')

<section class="fdb-block team-1 py-3" data-block-type="teams" data-id="5">
    <div class="container">
        <div class="row-50"></div>

        <div class="row">
            @foreach($articles as $article)
            <div class="col-sm-4 text-left mb-5">
                <a class="text-reset text-decoration-none" href="{{ url('blog/test/' . $list[$loop->index] ) }}">
                    <div class="fdb-box p-0">
                        <img width="100%" height="250" src="{{ $picture[$loop->index] }}" alt="" class="wp-image-10">

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