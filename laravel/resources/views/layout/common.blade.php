<DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>@yield('title')</title>
<meta name="csrf-token" content="{{ csrf_token() }}">

<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('/css/froala.css') }}">
<script defer src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"></script>


</head>
<body>
 
@yield('header')
@yield('subheader')
 
@yield('content')

@yield('footer')
 
<script src="{{ asset('/js/app.js') }}"></script>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/froala-editor/js/froala_editor.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/1.6.7/fabric.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tui-code-snippet@1.4.0/dist/tui-code-snippet.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tui-image-editor@3.2.2/dist/tui-image-editor.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/froala-editor@3.1.1/js/third_party/image_tui.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/3.2.2/js/third_party/font_awesome.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/fontawesome.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/brands.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/solid.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/v4-shims.min.js"></script> -->
</body>
</html>