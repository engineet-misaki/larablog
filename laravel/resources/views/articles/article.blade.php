@extends('layout.common')
 
@section('title', 'インデックスページ')

@include('layout.header')
<!-- @include('layout.slider', ['data' => $articles->post_title]) -->
 
@section('content')

    <div class="container">
        <div class="border rounded-lg bg-light p-5 m-5">
            <p class="">2021/03/20  以降に更新</p>
            <h1 class="">{{ $articles->post_title }}</h1>
            <div class="m-5">
                <?php
                    echo $articles->post_content;
                ?>
            </div>
        </div>
    </div>
@endsection
 
@include('layout.submenu')
 
@include('layout.footer')

