@extends('layout.common')

@section('title', 'インデックスページ')

@include('layout.subheader')

@section('content')

<div class="container-fluid m-0 px-3 py-0 p-md-5">
    <div class="row mx-xl-5">
        <div class="border rounded-lg bg-light col-12 col-md-8 col-xl-9 p-lg-5">
            <div class="px-xl-5">
                <p class="">{{ explode(" ", $articles->post_date)[0] }} 更新</p>
                <h1 class="m-0">{{ $articles->post_title }}</h1>
                <div class="m-md-5 my-3 mx-2">
                    <?php
                    echo $articles->post_content;
                    ?>
                </div>
            </div>
        </div>
        <div class="col-0 col-md-4 col-xl-3 d-none d-md-block">
            <div class="justify-content-center">
                <img class="rounded-circle prof-img d-block mx-auto" width="200" height="200" src="https://picsum.photos/400/400" alt="">
                <div class="prof-text">
                    <div class="m-3 p-2 bg-dark rounded-lg">
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
</div>
@endsection

@include('layout.footer')