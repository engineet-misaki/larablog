@extends('layout.common')
 
@section('title', 'インデックスページ')

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

