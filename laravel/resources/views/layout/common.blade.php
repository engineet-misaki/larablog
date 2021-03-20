<DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>@yield('title')</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/froala/design-blocks@master/dist/css/froala_blocks.min.css">
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"> -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/froala-editor/css/froala_editor.pkgd.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/froala-editor/css/froala_style.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tui-image-editor@3.2.2/dist/tui-image-editor.css">
  <link rel="stylesheet" href="https://uicdn.toast.com/tui-color-picker/latest/tui-color-picker.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/froala-editor@3.1.1/css/third_party/image_tui.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/fontawesome.min.css"> -->
</head>
<body>
 
@yield('header')
@yield('slider')
 
<!-- <div class="contents bg-light">
    <div class="container py-5"> -->
        @yield('content')
    <!-- </div> -->

@yield('footer')
<!-- </div> -->
 
<script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>