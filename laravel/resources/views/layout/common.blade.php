<DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title')</title>

<!-- 開発用 -->
<link href="{{ secure_asset('/css/app.css?' . date('Ymd-His')) }}" rel="stylesheet">
<script defer src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"></script>


</head>
<body>
 
@yield('header')
@yield('subheader')
 
@yield('content')

@yield('footer')
 
<script src="{{ secure_asset('/js/app.js') }}"></script>
</body>
</html>