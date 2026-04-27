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
<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://www.googletagmanager.com">
<link rel="canonical" href="{{ url()->current() }}" />
<link rel="icon" type="image/x-icon" href="{{asset('fronted/assets/sunbeam-img/fav-icon.png')}}">
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: Arial, Helvetica, sans-serif;
        visibility: hidden;
    }
    body.loaded {
        visibility: visible;
    }    
</style>
<link href="https://fonts.googleapis.com/css2?family=Yantramanav:wght@300;400;500;700&family=Roboto:wght@300;400;500;700&display=swap" 
      rel="stylesheet" 
      media="print" 
      onload="this.media='all';this.onload=null;">
<noscript>
    <link href="https://fonts.googleapis.com/css2?family=Yantramanav:wght@300;400;500;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</noscript>
<link rel="preload" href="{{asset('fronted/assets/css/bootstrap.min.css')}}?v={{ env('ASSET_VERSION', '1.0') }}" as="style">
<link rel="preload" href="{{asset('fronted/assets/css/style-2.css')}}?v={{ env('ASSET_VERSION', '1.0') }}" as="style">
<link rel="preload" href="{{asset('fronted/assets/sunbeam-img/logo.png')}}" as="image" fetchpriority="high">
<script>
    (function() {
        function loadCSS(href) {
            var link = document.createElement('link');
            link.rel = 'stylesheet';
            link.href = href;
            document.head.appendChild(link);
        }
        if (window.requestIdleCallback) {
            requestIdleCallback(function() {
                loadCSS("{{asset('fronted/assets/css/bootstrap.min.css')}}?v={{ env('ASSET_VERSION', '1.0') }}");
                loadCSS("{{asset('fronted/assets/css/style-2.css')}}?v={{ env('ASSET_VERSION', '1.0') }}");
                loadCSS("{{asset('fronted/assets/css/all-fontawesome.min.css')}}");
                loadCSS("{{asset('fronted/assets/css/owl.carousel.min.css')}}");
                loadCSS("{{asset('fronted/assets/css/magnific-popup.min.css')}}");
            });
        } else {
            window.addEventListener('load', function() {
                loadCSS("{{asset('fronted/assets/css/bootstrap.min.css')}}?v={{ env('ASSET_VERSION', '1.0') }}");
                loadCSS("{{asset('fronted/assets/css/style-2.css')}}?v={{ env('ASSET_VERSION', '1.0') }}");
                loadCSS("{{asset('fronted/assets/css/all-fontawesome.min.css')}}");
                loadCSS("{{asset('fronted/assets/css/owl.carousel.min.css')}}");
                loadCSS("{{asset('fronted/assets/css/magnific-popup.min.css')}}");
            });
        }
        document.addEventListener('DOMContentLoaded', function() {
            document.body.classList.add('loaded');
        });
    })();
</script>
<script>
    window.addEventListener('load', function() {
        setTimeout(function() {
            var script = document.createElement('script');
            script.async = true;
            script.src = 'https://www.googletagmanager.com/gtag/js?id=G-9WCVNMMKQ4';
            document.head.appendChild(script);            
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-9WCVNMMKQ4', {
                'send_page_view': false
            });
            setTimeout(function() {
                gtag('event', 'page_view');
            }, 1000);
        }, 2000);
    });
</script>