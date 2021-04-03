@extends('layout.common')

@section('title', 'インデックスページ')

@include('layout.subheader')

@section('content')

<div class="container-fluid m-0 px-3 py-0 p-md-5">
    <div class="row">
        <div class="border rounded-lg bg-light col-12 col-md-8">
            <p class="">{{ explode(" ", $articles->post_date)[0] }} 更新</p>
            <h1 class="m-0">{{ $articles->post_title }}</h1>
            <div class="m-md-5 my-3 mx-2">
                <?php
                echo $articles->post_content;
                ?>
            </div>
        </div>
        <div class="col-0 col-md-4 d-none d-md-block">
            <div class="mx-4 justify-content-center">
                <img class="rounded-circle prof-img d-block mx-auto" width="170" height="170" src="https://picsum.photos/400/400" alt="">
                <div class="m-4 p-2 bg-dark rounded-lg prof-text">
                    <a class="text-reset text-decoration-none" href="https://my-vue-portfolio-c2d4e.web.app/">
                        <p class="text-center m-2 border-bottom"><strong>about Me</strong></p>
                    </a>
                    <p class="text-center">言語：js, php, python<br>
                        特技：逆上がり<br>
                        LIKE：オムライス</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@include('layout.footer')