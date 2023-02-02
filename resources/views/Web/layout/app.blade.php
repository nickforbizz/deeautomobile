<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">

<!-- Mirrored from www.puriwp.com/cocotemplates/html/acropos/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jan 2021 13:02:25 GMT -->

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="Cars, Car hire, toyota">
	<meta name="author" content="Wainaina Nicholas">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>{{ config('app.name') }}</title>

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>

	<!-- <link rel="stylesheet" href="{{ asset('/web/css/bootstrap.css') }}"> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

	<!-- <link rel="stylesheet" href="{{ asset('/web/css/font-awesome.min.css') }}"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css">
	<!-- Slider Pro Css -->
	<link rel="stylesheet" href="{{ asset('/web/css/sliderPro.css') }}">
	<!-- Owl Carousel Css -->
	<!-- <link rel="stylesheet" href="{{ asset('/web/css/owl-carousel.css') }}"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<!-- Flat Icons Css -->
	<link rel="stylesheet" href="{{ asset('/web/css/flaticon.css') }}">
	<!-- Animated Css -->
	<!-- <link rel="stylesheet" href="{{ asset('/web/css/animated.css') }}"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.1/animate.min.css">
	
	<link rel="stylesheet" href="{{ asset('/web/css/main.css') }}">

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

	

	<header class="site-header wow fadeIn" data-wow-duration="1s">
		<div id="main-header" class="main-header">
			<div class="container clearfix">
				<div class="ldogo">
					<a href="{{ route('webin') }}"></a>
				</div>
				<div id='cssmenu'>
					<ul>
						<li><a href="{{ route('webin') }}">Homepage</a></li>

						@if($params)


							@if($params->car_listing == 'SL')
								<li><a href="{{ route('carListingSideBar') }}">Car Listing</a></li>
							@elseif($params->car_listing == 'SG')
								<li><a href="{{ route('carGridSideBar') }}">Car Grid</a></li>
							@elseif($params->car_listing == 'NSL')
								<li><a href="{{ route('carListingNoSideBar') }}">Car Listing</a></li>
							@else
								<li><a href="{{ route('carGridNoSideBar') }}">Car Grid</a></li>
							@endif

							

							@if($params->blog_listing == 'SL')
							<li><a href="{{ route('blogListingSideBar') }}">Blogs</a></li>
							@elseif($params->car_listing == 'SG')
							<li><a href="{{ route('blogGridSideBar') }}">Blogs</a></li>
							@elseif($params->car_listing == 'NSL')
							<li><a href="{{ route('blogListingNoSideBar') }}">Blogs</a></li>
							@else
							<li><a href="{{ route('blogGridNoSideBar') }}">Blogs</a></li>
							@endif

						

						@else

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
									<!-- <li><a href="{{ route('singleCar') }}">Single Car</a></li> -->
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

						@endif

						<li><a href="{{ route('aboutUs') }}">About Us</a></li>
						<li><a href="{{ route('contactUS') }}">Contact Us</a></li>
						
					</ul>
				</div>
			</div>
		</div>
	</header>




	@yield('contents')






	<!-- Modal -->
	<div class="modal fade" id="globalModal" tabindex="-1" role="dialog" aria-labelledby="globalModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="globalModalLabel">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="globalModalContent">

					<div class="row">
						<div class="col-sm-12">
							<div class="list-group">
								<a href="#" class="list-group-item list-group-item-action d-flex align-items-start">
									<div class="w-40 xjustify-content-between mr-5">
										<img src="" alt="image" width="150" />
									</div>
									<div class="w-100 justify-content-center">
										<h5 class="mb-1"> Make - Brand </h5>
										<div>
											<small> condition </small>
											<p class="mb-1"> Description </p>
											<small> BodyType </small>

										</div>
									</div>

									<div class="w-100 justify-content-end ml-4 mt-3">
										<button class="float-right btn btn-info">View</button>
									</div>
								</a>
							</div>
						</div>

						<!-- .col-md-12 -->
					</div>
					<!-- .row -->

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->


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


	<!-- <script src="{{ asset('/web/js/jquery-1.11.0.min.js') }}"></script> -->

	<!-- Boostrap Js -->
	<!-- <script src="{{ asset('/web/js/bootstrap.min.js') }}"></script> -->

	<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
	<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<!-- sweetAlert -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

	<!-- Toastr -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

	<!-- Slider Pro Js -->
	<script src="{{ asset('/web/js/sliderpro.min.js') }}"></script>

	<!-- Slick Slider Js -->
	<!-- <script src="{{ asset('/web/js/slick.js') }}"></script> -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.0/slick.js"></script>

	<!-- Owl Carousel Js -->
	<!-- <script src="{{ asset('/web/js/owl.carousel.min.js') }}"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


	<!-- Boostrap Js -->
	<script src="{{ asset('/web/js/wow.animation.js') }}"></script>

	<!-- Custom Js -->
	<script src="{{ asset('/web/js/custom.js') }}"></script>

	<script>
		// Car Search
		function carSearch(make, brand) {
			$("#globalModalLabel").html(`Car Search Results`)
			// :Todo
			// search cars
			let _token = "{{ csrf_token() }}";
			let payload = {
				_token,
				make,
				brand
			};
			let url2 = "{{ route('searchvehicles') }}";
			$.ajax({
				url: url2,
				data: payload,
				method: 'post',
				success: function(res) {
					console.log(res);
					if (res.code == 1) {
						if (res.msg.length > 0) {
							$("#globalModalContent").html('');
							$("#globalModalContent").append(`
								<div class="row">
								<div class="col-sm-12">
							`);

							res.msg.map((item, i) => {
								let image = item?.models_imgs[0]?.media_link;
								let img_url = image ? image.replace('public', 'storage') : null;
								$("#globalModalContent").append(`
									<div class="list-group">
										<a href="/single_car?checkProduct=${item.id}" class="list-group-item list-group-item-action d-flex align-items-start">
											<div class="w-40 xjustify-content-between mr-5">
												<img src="${img_url}" alt="image" width="150" />
											</div>
											<div class="w-100 justify-content-center">
												<h5 class="mb-1"> ${item.name} </h5>
												<div>
													<small> ${item.condition} </small>
													<p class="mb-1"> ${item.description} </p>
													<small> ${item.bodyType} </small>

												</div>
											</div>
											<div class="w-100 justify-content-end ml-4 mt-3">
												<button class="float-right btn btn-info">View</button>
											</div>
										</a>
									</div>
								`);

							});

							$("#globalModalContent").append(`
								</div>
								</div>
							`);
						}
					} else {
						Swal.fire({
							icon: 'warning',
							title: 'Vehicle Feature Response',
							text: res.msg,
							footer: '<a href> <i> Need help </i>?</a>'
						}).then(() => {
							// location.reload();
						});
					}
				},
				error: function(err) {
					console.error(err);
				}
			});
			$("#globalModal").modal()
		}
	</script>

	@stack('scripts')
</body>

</html>