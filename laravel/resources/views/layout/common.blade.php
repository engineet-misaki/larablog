<DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>@yield('title')</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body>
 
@yield('header')
@yield('slider')
 
<div class="contents bg-light">
    <div class="container py-5">
        @yield('content')
    </div>
    <div class="sub">
        @yield('submenu')
    </div>
@yield('footer')
</div>
 
<script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>