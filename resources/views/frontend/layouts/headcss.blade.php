<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Sunbeam Academy">
<meta name="description" content="@yield('description')">
<meta name="keywords" content="@yield('keywords')">
<meta name="auto-open-modal" content="{{ route('auto-open-modal') }}">
@yield('meta')
<title>@yield('title')</title>
<link rel="canonical" href="{{ url()->current() }}" />
<link rel="icon" type="image/x-icon" href="{{asset('fronted/assets/sunbeam-img/fav-icon.png')}}">
<!-- <link rel="stylesheet" href="{{asset('fronted/assets/css/bootstrap.min.css')}}"> -->
<!-- <link rel="stylesheet" href="{{asset('fronted/assets/css/all-fontawesome.min.css')}}"> -->
<!-- <link rel="stylesheet" href="{{asset('fronted/assets/css/animate.min.css')}}"> -->
<!-- <link rel="stylesheet" href="{{asset('fronted/assets/css/magnific-popup.min.css')}}"> -->
<!-- <link rel="stylesheet" href="{{asset('fronted/assets/css/owl.carousel.min.css')}}"> -->
<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preload" href="{{ asset('fronted/assets/css/minify.css') }}" as="style">
<link rel="preload" href="{{ asset('fronted/assets/css/style.css') }}" as="style">
<link rel="stylesheet" href="{{asset('fronted/assets/css/minify.css')}}?v=1.1">
<link rel="stylesheet" href="{{asset('fronted/assets/css/style-2.css')}}?v=1.1">
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9WCVNMMKQ4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9WCVNMMKQ4');
</script>