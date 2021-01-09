<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">

<!-- Mirrored from www.puriwp.com/cocotemplates/html/acropos/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jan 2021 13:02:25 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Wainaina Nicholas">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name') }}</title>

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="{{ asset('/web/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('/web/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/web/css/main.css') }}">
	<!-- Slider Pro Css -->
	<link rel="stylesheet" href="{{ asset('/web/css/sliderPro.css') }}">
	<!-- Owl Carousel Css -->
	<link rel="stylesheet" href="{{ asset('/web/css/owl-carousel.css') }}">
	<!-- Flat Icons Css -->
	<link rel="stylesheet" href="{{ asset('/web/css/flaticon.css') }}">
	<!-- Animated Css -->
	<link rel="stylesheet" href="{{ asset('/web/css/animated.css') }}">


	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	
	<div class="preloader">
        <div class="preloader-bounce">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
	
	<div id="search">
	    <button type="button" class="close">×</button>
	    <form>
	        <input type="search" value="" placeholder="type keyword(s) here" />
	        <button type="submit" class="primary-button">Search <i class="fa fa-search"></i></button>
	    </form>
	</div>
	
	<header class="site-header wow fadeIn" data-wow-duration="1s">
		<div id="main-header" class="main-header">
			<div class="container clearfix">
				<div class="ldogo">
					<a href="{{ route('webin') }}"></a>
				</div>
				<div id='cssmenu'>
					<ul>
					   	<li><a href="{{ route('webin') }}">Homepage</a></li>
					   	<li class='active'><a href='#'>Car Listing</a>
					      	<ul>
					         	<li><a href='#'>Sidebar</a>
					            	<ul>
					               		<li><a href="{{ route('carListingSideBar') }}">Car Listing</a></li>
					               		<li><a href="{{ route('carGridSideBar') }}">Car Grid</a></li>
					            	</ul>
					        	</li>
					         	<li><a href='#'>No Sidebar</a>
					            	<ul>
					               		<li><a href="{{ route('carListingNoSideBar') }}">Car Listing</a></li>
					               		<li><a href="{{ route('carGridNoSideBar') }}">Car Grid</a></li>
					            	</ul>
					         	</li>
					         	<li><a href="{{ route('singleCar') }}">Single Car</a></li>
					      	</ul>
					   	</li>
					   	<li class='active'><a href='#'>Blog</a>
					      	<ul>
					         	<li><a href='#'>Sidebar</a>
					            	<ul>
					               		<li><a href="{{ route('blogListingSideBar') }}">Blog Classic</a></li>
					               		<li><a href="{{ route('blogGridSideBar') }}">Blog Grid</a></li>
					            	</ul>
					         	</li>
					         	<li><a href='#'>No Sidebar</a>
					            	<ul>
					               		<li><a href="{{ route('blogListingNoSideBar') }}">Blog Classic</a></li>
					               		<li><a href="{{ route('blogGridNoSideBar') }}">Blog Grid</a></li>
					            	</ul>
					         	</li>
					         	<li><a href="{{ route('singlePost') }}">Single Post</a></li>
					      	</ul>		
					   </li>
					   <li><a href="{{ route('aboutUs') }}">About Us</a></li>
					   <li><a href="{{ route('contactUS') }}">Contact Us</a></li>
					   <li>
					   		<a href="#search"><i class="fa fa-search"></i></a>
					   </li>
					</ul>
				</div>
			</div>
		</div>
	</header>




    @yield('contents')





	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="footer-item">
						<div class="about-us">
							<h2>About Us</h2>
							<p>Irony actually meditation, occupy mumblecore wayfarers organic pickled 90's. Intelligentsia as actually +1 meh photo booth.</p>
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="footer-item">
						<div class="what-offer">
							<h2>What We Offer ?</h2>
							<ul>
								<li><a href="#">Rent a car now</a></li>
								<li><a href="#">Search for sale</a></li>
								<li><a href="#">Try search form</a></li>
								<li><a href="#">Best daily dealers</a></li>
								<li><a href="#">Weekly lucky person</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="footer-item">
						<div class="need-help">
							<h2>Need Help ?</h2>
							<ul>
								<li><a href="#">Modern wheels</a></li>
								<li><a href="#">Awesome spoilers</a></li>
								<li><a href="#">Dynamic Enetrior</a></li>
								<li><a href="#">Save accidents </a></li>
								<li><a href="#">Recorded Racing</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-item">
						<div class="our-gallery">
							<h2>Our Gallery</h2>
							<ul>
								<li><a href="#"><img src="{{ asset('/web/images/gallery_01.jpg') }}" alt=""></a></li>
								<li><a href="#"><img src="{{ asset('/web/images/gallery_02.jpg') }}" alt=""></a></li>
								<li><a href="#"><img src="{{ asset('/web/images/gallery_03.jpg') }}" alt=""></a></li>
								<li><a href="#"><img src="{{ asset('/web/images/gallery_04.jpg') }}" alt=""></a></li>
								<li><a href="#"><img src="{{ asset('/web/images/gallery_05.jpg') }}" alt=""></a></li>
								<li><a href="#"><img src="{{ asset('/web/images/gallery_06.jpg') }}" alt=""></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="footer-item">
						<div class="quick-search">
							<h2>Quick Search</h2>
							<input type="text" class="footer-search" name="s" placeholder="Search..." value="">
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="sub-footer">
						<p>Copyright 2021. All rights reserved by: <a href="www.mkenyadaima.co.ke">MkenyaDaima</a></p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	

	<script src="{{ asset('/web/js/jquery-1.11.0.min.js') }}"></script>

	<!-- Slider Pro Js -->
	<script src="{{ asset('/web/js/sliderpro.min.js') }}"></script>

	<!-- Slick Slider Js -->
	<script src="{{ asset('/web/js/slick.js') }}"></script>

	<!-- Owl Carousel Js -->
    <script src="{{ asset('/web/js/owl.carousel.min.js') }}"></script>

	<!-- Boostrap Js -->
    <script src="{{ asset('/web/js/bootstrap.min.js') }}"></script>

    <!-- Boostrap Js -->
    <script src="{{ asset('/web/js/wow.animation.js') }}"></script>

	<!-- Custom Js -->
    <script src="{{ asset('/web/js/custom.js') }}"></script>

    @stack('scripts')
</body>

</html>

