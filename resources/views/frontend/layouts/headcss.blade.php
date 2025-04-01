<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@yield('meta')
<title>@yield('title')</title>
<link rel="icon" type="image/x-icon" href="{{asset('fronted/assets/sunbeam-img/fav-icon.png')}}">
<link rel="stylesheet" href="{{asset('fronted/assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('fronted/assets/css/all-fontawesome.min.css')}}">
<link rel="stylesheet" href="{{asset('fronted/assets/css/animate.min.css')}}">
<link rel="stylesheet" href="{{asset('fronted/assets/css/magnific-popup.min.css')}}">
<link rel="stylesheet" href="{{asset('fronted/assets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('fronted/assets/css/style.css')}}">