<!doctype html>
<html lang="zxx">
	<head>
		@include('frontend.layouts.headcss')	
	</head>
    <body class="home-three">
		@include('frontend.layouts.back-to-top')
		<div class="body_wrap">
			@include('frontend.layouts.header-menu-top')
			<main>
				@include('frontend.layouts.banner-top')
				@yield('main-content')
			</main>
			@include('frontend.layouts.footer')
		</div>
		@include('frontend.layouts.footerjs')
	</body>
</html>