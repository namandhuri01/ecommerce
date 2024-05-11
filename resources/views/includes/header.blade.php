<!DOCTYPE html>
<html lang="zxx" class="shop">
	
<!-- Mirrored from preview.oklerthemes.com/ezy/1.1.0/shop-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 May 2019 08:06:52 GMT -->
<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="csrf-token" content="{{ csrf_token() }}">

		<meta name="keywords" content="grocery shop, grocery online, ecommerce bucket, online grocery patiala, online grocery near me, grocery holesale" />
		<meta name="description" content="Ecommerce Bucket in a grocery shop who selling household grocery online">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<title>e-commerce Bucket | @yield('title', '')</title>

        <link href="/img/favicon.ico" rel="SHORTCUT ICON" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,900%7COpen+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/fontawesome-all.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/animate/animate.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/linear-icons/css/linear-icons.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/nouislider/nouislider.min.css') }}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ asset('css/theme.css') }}">
		<link rel="stylesheet" href="{{ asset('css/theme-elements.css') }}">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="{{ asset('vendor/rs-plugin/css/settings.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/rs-plugin/css/layers.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/rs-plugin/css/navigation.css') }}">

		<!-- Skin CSS -->
		{{-- <link rel="stylesheet" href="{{ asset('css/skins/default.css') }}">		 --}}
		<script src="{{ asset('master/style-switcher/style.switcher.localstorage.js') }}"></script> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ asset('css/custom.css') }}">

		<!-- Head Libs -->
		<script src="{{ asset('vendor/modernizr/modernizr.min.js') }}"></script>

		@yield('extra-css')

	</head>

    <body class="hold-transition skin-blue sidebar-mini">
        <header>
            @include('includes.nav')
        </header>
        <section class="site-content">
            @yield('content')
        </section>
        <footer>
            @include('includes.footer')
		</footer>
		@yield('extra-js')
        
    </body>
</html>