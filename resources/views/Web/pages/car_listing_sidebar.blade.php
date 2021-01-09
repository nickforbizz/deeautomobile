@extends('Web.layout.app')

@section('contents')


	<div class="page-heading wow fadeIn" data-wow-duration="0.5s">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="heading-content-bg wow fadeIn" data-wow-delay="0.75s" data-wow-duration="1s">
						<div class="row">
							<div class="heading-content col-md-12">
								<p><a href="{{ route('webin') }}">Homepage</a> / <em> Cars</em> / <em> Listing</em></p>
								<h2>Cars <em>Listing</em></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="on-listing wow fadeIn" data-wow-delay="0.5s" data-wow-duration="1s">
		<div class="container">
			<div class="recent-car-content">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-12">
								<div class="car-item">
									<div class="row">
										<div class="col-md-5">
											<div class="thumb-content">
												<div class="car-banner">
													<a href="{{ route('singleCar') }}">For Rent</a>
												</div>
												<div class="thumb-inner">
													<a href="{{ route('singleCar') }}"><img src="{{ asset('/web/images/car_listing_1.jpg') }}" alt=""></a>
												</div>
											</div>
										</div>
										<div class="col-md-7">
											<div class="down-content">
												<a href="{{ route('singleCar') }}"><h4>Perfect Sport Car</h4></a>
												<span>$36.000</span>
												<div class="line-dec"></div>
												<p>Drinking vinegar hoodie street art, selvage you probably haven't heard of them put a bird on it semiotics heirloom.</p>
												<ul class="car-info">
													<li><div class="item"><i class="flaticon flaticon-calendar"></i><p>2013</p></div></li>
													<li><div class="item"><i class="flaticon flaticon-speed"></i><p>160p/h</p></div></li>
													<li><div class="item"><i class="flaticon flaticon-road"></i><p>26.00km</p></div></li>
													<li><div class="item"><i class="flaticon flaticon-fuel"></i><p>Petrol</p></div></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="car-item">
									<div class="row">
										<div class="col-md-5">
											<div class="thumb-content">
												<div class="car-banner">
													<a href="{{ route('singleCar') }}">For Rent</a>
												</div>
												<div class="thumb-inner">
													<a href="{{ route('singleCar') }}"><img src="{{ asset('/web/images/car_listing_2.jpg') }}" alt=""></a>
												</div>
											</div>
										</div>
										<div class="col-md-7">
											<div class="down-content">
												<a href="{{ route('singleCar') }}"><h4>Perfect Sport Car</h4></a>
												<span>$36.000</span>
												<div class="line-dec"></div>
												<p>Drinking vinegar hoodie street art, selvage you probably haven't heard of them put a bird on it semiotics heirloom.</p>
												<ul class="car-info">
													<li><div class="item"><i class="flaticon flaticon-calendar"></i><p>2013</p></div></li>
													<li><div class="item"><i class="flaticon flaticon-speed"></i><p>160p/h</p></div></li>
													<li><div class="item"><i class="flaticon flaticon-road"></i><p>26.00km</p></div></li>
													<li><div class="item"><i class="flaticon flaticon-fuel"></i><p>Petrol</p></div></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="car-item">
									<div class="row">
										<div class="col-md-5">
											<div class="thumb-content">
												<div class="car-banner">
													<a href="{{ route('singleCar') }}">For Rent</a>
												</div>
												<div class="thumb-inner">
													<a href="{{ route('singleCar') }}"><img src="{{ asset('/web/images/car_listing_3.jpg') }}" alt=""></a>
												</div>
											</div>
										</div>
										<div class="col-md-7">
											<div class="down-content">
												<a href="{{ route('singleCar') }}"><h4>Perfect Sport Car</h4></a>
												<span>$36.000</span>
												<div class="line-dec"></div>
												<p>Drinking vinegar hoodie street art, selvage you probably haven't heard of them put a bird on it semiotics heirloom.</p>
												<ul class="car-info">
													<li><div class="item"><i class="flaticon flaticon-calendar"></i><p>2013</p></div></li>
													<li><div class="item"><i class="flaticon flaticon-speed"></i><p>160p/h</p></div></li>
													<li><div class="item"><i class="flaticon flaticon-road"></i><p>26.00km</p></div></li>
													<li><div class="item"><i class="flaticon flaticon-fuel"></i><p>Petrol</p></div></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="car-item">
									<div class="row">
										<div class="col-md-5">
											<div class="thumb-content">
												<div class="car-banner">
													<a href="{{ route('singleCar') }}">For Rent</a>
												</div>
												<div class="thumb-inner">
													<a href="{{ route('singleCar') }}"><img src="{{ asset('/web/images/car_listing_4.jpg') }}" alt=""></a>
												</div>
											</div>
										</div>
										<div class="col-md-7">
											<div class="down-content">
												<a href="{{ route('singleCar') }}"><h4>Perfect Sport Car</h4></a>
												<span>$36.000</span>
												<div class="line-dec"></div>
												<p>Drinking vinegar hoodie street art, selvage you probably haven't heard of them put a bird on it semiotics heirloom.</p>
												<ul class="car-info">
													<li><div class="item"><i class="flaticon flaticon-calendar"></i><p>2013</p></div></li>
													<li><div class="item"><i class="flaticon flaticon-speed"></i><p>160p/h</p></div></li>
													<li><div class="item"><i class="flaticon flaticon-road"></i><p>26.00km</p></div></li>
													<li><div class="item"><i class="flaticon flaticon-fuel"></i><p>Petrol</p></div></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="car-item">
									<div class="row">
										<div class="col-md-5">
											<div class="thumb-content">
												<div class="car-banner">
													<a href="{{ route('singleCar') }}">For Rent</a>
												</div>
												<div class="thumb-inner">
													<a href="{{ route('singleCar') }}"><img src="{{ asset('/web/images/car_listing_5.jpg') }}" alt=""></a>
												</div>
											</div>
										</div>
										<div class="col-md-7">
											<div class="down-content">
												<a href="{{ route('singleCar') }}"><h4>Perfect Sport Car</h4></a>
												<span>$36.000</span>
												<div class="line-dec"></div>
												<p>Drinking vinegar hoodie street art, selvage you probably haven't heard of them put a bird on it semiotics heirloom.</p>
												<ul class="car-info">
													<li><div class="item"><i class="flaticon flaticon-calendar"></i><p>2013</p></div></li>
													<li><div class="item"><i class="flaticon flaticon-speed"></i><p>160p/h</p></div></li>
													<li><div class="item"><i class="flaticon flaticon-road"></i><p>26.00km</p></div></li>
													<li><div class="item"><i class="flaticon flaticon-fuel"></i><p>Petrol</p></div></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="car-item">
									<div class="row">
										<div class="col-md-5">
											<div class="thumb-content">
												<div class="car-banner">
													<a href="{{ route('singleCar') }}">For Rent</a>
												</div>
												<div class="thumb-inner">
													<a href="{{ route('singleCar') }}"><img src="{{ asset('/web/images/car_listing_6.jpg') }}" alt=""></a>
												</div>
											</div>
										</div>
										<div class="col-md-7">
											<div class="down-content">
												<a href="{{ route('singleCar') }}"><h4>Perfect Sport Car</h4></a>
												<span>$36.000</span>
												<div class="line-dec"></div>
												<p>Drinking vinegar hoodie street art, selvage you probably haven't heard of them put a bird on it semiotics heirloom.</p>
												<ul class="car-info">
													<li><div class="item"><i class="flaticon flaticon-calendar"></i><p>2013</p></div></li>
													<li><div class="item"><i class="flaticon flaticon-speed"></i><p>160p/h</p></div></li>
													<li><div class="item"><i class="flaticon flaticon-road"></i><p>26.00km</p></div></li>
													<li><div class="item"><i class="flaticon flaticon-fuel"></i><p>Petrol</p></div></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="page-numbers">
									<div class="pagination-content">
										<ul>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="sidebar-widgets">
							<div class="row">
								<div class="col-md-12">
									<div class="sidebar-widget">
										<div class="search-content">
											<div class="search-heading">
												<div class="icon">
													<i class="fa fa-search"></i>
												</div>
												<div class="text-content">
													<h2>Quick Search</h2>
													<span>We made a quick search just for you</span>
												</div>
											</div>
											<div class="search-form">
												<div class="row">
													<div class="col-md-12">
														<input type="text" onfocus="this.value=''" value="Type keywords...">
													</div>
						                            <div class="col-md-12">       
						                                <div class="input-select">
						                                    <select name="brand" id="brand">
						                                        <option value="-1">Select Brand</option>
						                                          <option>Wolkswagen</option>
						                                          <option>Audi</option>
						                                          <option>Bmw</option>
						                                          <option>Opel</option>
						                                          <option>Citroen</option>
						                                    </select>
						                                </div>
						                            </div>
						                            <div class="col-md-12">       
						                                <div class="input-select">
						                                    <select name="mark" id="mark">
						                                        <option value="-1">Select Mark</option>
						                                          <option>Audi A3</option>
						                                          <option>Audi A4</option>
						                                          <option>Audi A5</option>
						                                          <option>Audi A6</option>
						                                          <option>Audi A7</option>
						                                    </select>
						                                </div>
						                            </div>
						                            <div class="col-md-6">       
						                                <div class="input-select">
						                                    <select name="min-price" id="min-price">
						                                        <option value="-1">Min Price</option>
						                                          <option>$500</option>
						                                          <option>$1.000</option>
						                                          <option>$1.500</option>
						                                          <option>$2.000</option>
						                                          <option>$2.500</option>
						                                    </select>
						                                </div>
						                            </div>
						                            <div class="col-md-6">       
						                                <div class="input-select">
						                                    <select name="max-price" id="max-price">
						                                        <option value="-1">Max Price</option>
						                                          <option>$5.000</option>
						                                          <option>$7.500</option>
						                                          <option>$10.000</option>
						                                          <option>$15.500</option>
						                                          <option>$20.000</option>
						                                    </select>
						                                </div>
						                            </div>
						                            <div class="col-md-12">       
						                                <div class="input-select">
						                                    <select name="fuel" id="fuel">
						                                        <option value="-1">Fuel Type</option>
						                                          <option>Gasoline</option>
						                                          <option>Diesel</option>
						                                          <option>Energy</option>
						                                    </select>
						                                </div>
						                            </div>
						                            <div class="col-md-12">       
						                                <div class="input-select">
						                                    <select name="transmission" id="transmission">
						                                        <option value="-1">Transmission Type</option>
						                                          <option>Automatic</option>
						                                          <option>Manual</option>
						                                    </select>
						                                </div>
						                            </div>
						                            <div class="col-md-12">       
						                                <div class="input-select">
						                                    <select name="body" id="body">
						                                        <option value="-1">Body Type</option>
						                                          <option>Mini Car</option>
						                                          <option>Coupe</option>
						                                          <option>Convertible</option>
						                                          <option>Pick Up</option>
						                                    </select>
						                                </div>
						                            </div>
						                            <div class="col-md-12">
						                            	<div class="secondary-button">
						                            		<a href="#">Search <i class="fa fa-search"></i></a>
						                            	</div>
						                            </div>
						                        </div>
						                    </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


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
						<p>Copyright 2019. All rights reserved by: <a href="#">Cocotemplates</a></p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	

	<script src="{{ asset('/web/js/jquery-1.11.0.min.js"></script>

	<!-- Slider Pro Js -->
	<script src="{{ asset('/web/js/sliderpro.min.js"></script>

	<!-- Slick Slider Js -->
	<script src="{{ asset('/web/js/slick.js"></script>

	<!-- Owl Carousel Js -->
    <script src="{{ asset('/web/js/owl.carousel.min.js"></script>

	<!-- Boostrap Js -->
    <script src="{{ asset('/web/js/bootstrap.min.js"></script>

    <!-- Boostrap Js -->
    <script src="{{ asset('/web/js/wow.animation.js"></script>

	<!-- Custom Js -->
    <script src="{{ asset('/web/js/custom.js"></script>

</body>

<!-- Mirrored from www.puriwp.com/cocotemplates/html/acropos/car_listing_sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jan 2021 13:02:50 GMT -->
</html>