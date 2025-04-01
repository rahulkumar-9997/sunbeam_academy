<!DOCTYPE html>
<html lang="en">
	<head>
		@include('frontend.layouts.headcss')	
	</head>
    <body>
		@include('frontend.layouts.header-menu-top')
		<main class="main">
			@yield('main-content')
		</main>
		@include('frontend.layouts.footer')
		@include('frontend.layouts.back-to-top')
		@include('frontend.layouts.footerjs')
	</body>
</html>