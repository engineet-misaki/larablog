@extends('layout.common')
 
@section('title', 'log')
<!-- @section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', 'インデックスページの説明文です') -->
<!-- @section('pageCss') -->
<!-- <link href="/css/star/index.css" rel="stylesheet"> -->
<!-- @endsection -->
 
@include('layout.header')
@include('layout.slider', ['data' => $articles->post_title])
 
@section('content')

    <div>
        <?php
            echo $articles->post_content;
        ?>
    </div>
@endsection
 
@include('layout.submenu')
 
@include('layout.footer')

