@extends('layout.common')
 
@section('title', 'インデックスページ')

@include('layout.subheader')
 
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="border rounded-lg bg-light p-md-5 m-md-5 p-sm-3 col-md-8 col-sm-12">
                <p class="">{{ explode(" ", $articles->post_date)[0] }} 更新</p>
                <h1 class="m-0">{{ $articles->post_title }}</h1>
                <div class="m-md-5 my-sm-4">
                    <?php
                        echo $articles->post_content;
                    ?>
                </div>
            </div>
        </div>
    </div>
@endsection
 
@include('layout.footer')

