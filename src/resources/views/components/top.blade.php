<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>{{$title}}</title>

  <!-- Google Fonts読み込み -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Plus+Jakarta+Sans:wght@400;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="{{asset('/assets/css/common.css')}}">
  <link rel="stylesheet" href="{{asset('/assets/css/font.css')}}">
  <script src="{{asset('/assets/js/common.js')}}" defer></script>
  <script src="{{asset('/assets/js/quiz.js')}}" defer></script>
</head>

<body>
  @include('components.header')

  {{ $slot }}

</body>

</html>

