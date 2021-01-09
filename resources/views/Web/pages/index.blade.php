@extends('Web.layout.app')

@section('contents')
	<div class="Modern-Slider">
	  <!-- Slide 1 -->
	  <div class="item">
	    <div class="img-fill">
	      <img src="{{ asset('/web/images/main_slide_01.jpg') }}" alt="">
	      <div class="info">
	        <div >
	        	<h5>ACROPOS HAS THE BEST CHOICE</h5>
	          	<h3>Looking For Perffect <em>Car</em>?</h3>
          		<h6 class="secondary-button">
	          		<a href="#">Find Your Car <i class="fa fa-car"></i></a>
	          	</h6>
	        </div>
	      </div>
	    </div>
	  </div>
	  <!-- // Slide 1 -->
	  <!-- Slide 2 -->
	  <div class="item">
	    <div class="img-fill">
	      <img src="{{ asset('/web/images/main_slide_02.jpg') }}" alt="">
	      <div class="info">
	        <div>
	        	<h5>ACROPOS HAS THE BEST CHOICE</h5>
	          	<h3>Looking For Perffect <em>Car</em>?</h3>
	          	<h6 class="secondary-button">
	          		<a href="#">Find Your Car <i class="fa fa-car"></i></a>
	          	</h6>
	        </div>
	      </div>
	    </div>
	  </div>
	  <!-- // Slide 2 -->
	  <!-- Slide 3 -->
	  <div class="item">
	    <div class="img-fill">
	      <img src="{{ asset('/web/images/main_slide_03.jpg') }}" alt="">
	      <div class="info">
	        <div>
	        	<h5>ACROPOS HAS THE BEST CHOICE</h5>
	          	<h3>Looking For Perffect <em>Car</em>?</h3>
	          	<h6 class="secondary-button">
	          		<a href="#">Find Your Car <i class="fa fa-car"></i></a>
	          	</h6>
	        </div>
	      </div>
	    </div>
	  </div>
	  <!-- // Slide 3 -->
	</div>


	<section class="top-slider-features wow fadeIn" data-wow-duration="1.5s">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="slider-top-features">
						<div id="owl-top-features" class="owl-carousel owl-theme">
							<div class="item car-item">
								<div class="thumb-content">
									<a href="single_car.html"><img src="{{ asset('/web/images/car_item_1.jpg') }}" alt=""></a>
								</div>
								<div class="down-content">
									<a href="single_car.html"><h4>Perfect Sport Car</h4></a>
									<span>$36.000</span>
								</div>
							</div>
							<div class="item car-item">
								<div class="thumb-content">
									<a href="single_car.html"><img src="{{ asset('/web/images/car_item_2.jpg') }}" alt=""></a>
								</div>
								<div class="down-content">
									<a href="single_car.html"><h4>Perfect Sport Car</h4></a>
									<span>$36.000</span>
								</div>
							</div>
							<div class="item car-item">
								<div class="thumb-content">
									<a href="single_car.html"><img src="{{ asset('/web/images/car_item_3.jpg') }}" alt=""></a>
								</div>
								<div class="down-content">
									<a href="single_car.html"><h4>Perfect Sport Car</h4></a>
									<span>$36.000</span>
								</div>
							</div>
							<div class="item car-item">
								<div class="thumb-content">
									<a href="single_car.html"><img src="{{ asset('/web/images/car_item_4.jpg') }}" alt=""></a>
								</div>
								<div class="down-content">
									<a href="single_car.html"><h4>Perfect Sport Car</h4></a>
									<span>$36.000</span>
								</div>
							</div>
							<div class="item car-item">
								<div class="thumb-content">
									<a href="single_car.html"><img src="{{ asset('/web/images/car_item_5.jpg') }}" alt=""></a>
								</div>
								<div class="down-content">
									<a href="single_car.html"><h4>Perfect Sport Car</h4></a>
									<span>$36.000</span>
								</div>
							</div>
							<div class="item car-item">
								<div class="thumb-content">
									<a href="single_car.html"><img src="{{ asset('/web/images/car_item_6.jpg') }}" alt=""></a>
								</div>
								<div class="down-content">
									<a href="single_car.html"><h4>Perfect Sport Car</h4></a>
									<span>$36.000</span>
								</div>
							</div>
							<div class="item car-item">
								<div class="thumb-content">
									<a href="single_car.html"><img src="{{ asset('/web/images/car_item_1.jpg') }}" alt=""></a>
								</div>
								<div class="down-content">
									<a href="single_car.html"><h4>Perfect Sport Car</h4></a>
									<span>$36.000</span>
								</div>
							</div>
							<div class="item car-item">
								<div class="thumb-content">
									<a href="single_car.html"><img src="{{ asset('/web/images/car_item_2.jpg') }}" alt=""></a>
								</div>
								<div class="down-content">
									<a href="single_car.html"><h4>Perfect Sport Car</h4></a>
									<span>$36.000</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


    <section>
    	<div class="features-search-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6">
								<div class="service-item wow fadeIn" data-wow-duration="0.75s">
									<i class="fa fa-car"></i>
										<div class="text-content">
										<h6>Sell &amp; Buy Cars</h6>
										<p>Irony actually meditation, ocupy mumble core wayfarers organic pickled.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="service-item wow fadeIn" data-wow-duration="0.75s">
									<i class="fa fa-search"></i>
										<div class="text-content">
										<h6>Car Dealer Research</h6>
										<p>Irony actually meditation, ocupy mumble core wayfarers organic pickled.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="service-item wow fadeIn" data-wow-duration="0.75s">
									<i class="fa fa-users"></i>
										<div class="text-content">
										<h6>Best Dealers</h6>
										<p>Irony actually meditation, ocupy mumble core wayfarers organic pickled.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="service-item wow fadeIn" data-wow-duration="0.75s">
									<i class="fa fa-globe"></i>
										<div class="text-content">
										<h6>World Wide Known</h6>
										<p>Irony actually meditation, ocupy mumble core wayfarers organic pickled.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="search-content wow fadeIn" data-wow-duration="0.75s">
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
		                                <div class="input-select">
		                                    <select name="brand" id="brand">
		                                        <option value="-1">Select Band</option>
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
    </section>


	<section>
		<div class="call-to-action wow fadeIn" data-wow-duration="0.75s">
			<div class="container">
				<div class="call-to-action-content">
					<div class="row">
						<div class="col-md-12">
							<p>Ramps meditation wayfarers copper mug four loko locavore <em>portland</em> leggings irony umami tumblr</p>
							<div class="secondary-button">
								<a href="#">Take Now <i class="fa fa-shopping-cart"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section>
		<div class="recent-cars">
			<div class="container">
				<div class="recent-car-content">
					<div class="row">
						<div class="col-md-12">
							<div class="section-heading">
								<div class="icon">
									<i class="fa fa-car"></i>
								</div>
								<div class="text-content">
									<h2>Recent Cars</h2>
									<span>Check our recent posts</span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="car-item wow fadeIn" data-wow-duration="0.75s">
								<div class="thumb-content">
									<div class="car-banner">
										<a href="single_car.html">For Rent</a>
									</div>
									<div class="thumb-inner">
										<a href="single_car.html"><img src="{{ asset('/web/images/car_item_1.jpg') }}" alt=""></a>
									</div>
								</div>
								<div class="down-content">
									<a href="single_car.html"><h4>Perfect Sport Car</h4></a>
									<span>$1.200</span>
									<p>Leggings edison bulb hexagon, hashtag coloring book ethical echo park austin fam succulents.</p>
									<ul class="car-info">
										<li><div class="item"><i class="flaticon flaticon-calendar"></i><p>2018</p></div></li>
										<li><div class="item"><i class="flaticon flaticon-speed"></i><p>160p/h</p></div></li>
										<li><div class="item"><i class="flaticon flaticon-road"></i><p>26.00km</p></div></li>
										<li><div class="item"><i class="flaticon flaticon-fuel"></i><p>Petrol</p></div></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="car-item wow fadeIn" data-wow-duration="0.75s">
								<div class="thumb-content">
									<div class="car-banner">
										<a href="single_car.html">For Sale</a>
									</div>
									<div class="thumb-inner">
										<a href="single_car.html"><img src="{{ asset('/web/images/car_item_2.jpg') }}" alt=""></a>
									</div>
								</div>
								<div class="down-content">
									<a href="single_car.html"><h4>Perfect Sport Car</h4></a>
									<span>$49.950</span>
									<p>Leggings edison bulb hexagon, hashtag coloring book ethical echo park austin fam succulents.</p>
									<ul class="car-info">
										<li><div class="item"><i class="flaticon flaticon-calendar"></i><p>2018</p></div></li>
										<li><div class="item"><i class="flaticon flaticon-speed"></i><p>160p/h</p></div></li>
										<li><div class="item"><i class="flaticon flaticon-road"></i><p>26.00km</p></div></li>
										<li><div class="item"><i class="flaticon flaticon-fuel"></i><p>Petrol</p></div></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="car-item wow fadeIn" data-wow-duration="0.75s">
								<div class="thumb-content">
									<div class="car-banner">
										<a href="single_car.html">For Rent</a>
									</div>
									<div class="thumb-inner">
										<a href="single_car.html"><img src="{{ asset('/web/images/car_item_3.jpg') }}" alt=""></a>
									</div>
								</div>
								<div class="down-content">
									<a href="single_car.html"><h4>Perfect Sport Car</h4></a>
									<span>$1.500</span>
									<p>Leggings edison bulb hexagon, hashtag coloring book ethical echo park austin fam succulents.</p>
									<ul class="car-info">
										<li><div class="item"><i class="flaticon flaticon-calendar"></i><p>2018</p></div></li>
										<li><div class="item"><i class="flaticon flaticon-speed"></i><p>160p/h</p></div></li>
										<li><div class="item"><i class="flaticon flaticon-road"></i><p>26.00km</p></div></li>
										<li><div class="item"><i class="flaticon flaticon-fuel"></i><p>Petrol</p></div></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="car-item wow fadeIn" data-wow-duration="0.75s">
								<div class="thumb-content">
									<div class="car-banner">
										<a href="single_car.html">For Rent</a>
									</div>
									<div class="thumb-inner">
										<a href="single_car.html"><img src="{{ asset('/web/images/car_item_4.jpg') }}" alt=""></a>
									</div>
								</div>
								<div class="down-content">
									<a href="single_car.html"><h4>Perfect Sport Car</h4></a>
									<span>$1.550</span>
									<p>Leggings edison bulb hexagon, hashtag coloring book ethical echo park austin fam succulents.</p>
									<ul class="car-info">
										<li><div class="item"><i class="flaticon flaticon-calendar"></i><p>2018</p></div></li>
										<li><div class="item"><i class="flaticon flaticon-speed"></i><p>160p/h</p></div></li>
										<li><div class="item"><i class="flaticon flaticon-road"></i><p>26.00km</p></div></li>
										<li><div class="item"><i class="flaticon flaticon-fuel"></i><p>Petrol</p></div></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="car-item wow fadeIn" data-wow-duration="0.75s">
								<div class="thumb-content">
									<div class="car-banner">
										<a href="single_car.html">For Sale</a>
									</div>
									<div class="thumb-inner">
										<a href="single_car.html"><img src="{{ asset('/web/images/car_item_5.jpg') }}" alt=""></a>
									</div>
								</div>
								<div class="down-content">
									<a href="single_car.html"><h4>Perfect Sport Car</h4></a>
									<span>$30.000</span>
									<p>Leggings edison bulb hexagon, hashtag coloring book ethical echo park austin fam succulents.</p>
									<ul class="car-info">
										<li><div class="item"><i class="flaticon flaticon-calendar"></i><p>2018</p></div></li>
										<li><div class="item"><i class="flaticon flaticon-speed"></i><p>160p/h</p></div></li>
										<li><div class="item"><i class="flaticon flaticon-road"></i><p>26.00km</p></div></li>
										<li><div class="item"><i class="flaticon flaticon-fuel"></i><p>Petrol</p></div></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="car-item wow fadeIn" data-wow-duration="0.75s">
								<div class="thumb-content">
									<div class="car-banner">
										<a href="single_car.html">For Rent</a>
									</div>
									<div class="thumb-inner">
										<a href="single_car.html"><img src="{{ asset('/web/images/car_item_6.jpg') }}" alt=""></a>
									</div>
								</div>
								<div class="down-content">
									<a href="single_car.html"><h4>Perfect Sport Car</h4></a>
									<span>$1.500</span>
									<p>Leggings edison bulb hexagon, hashtag coloring book ethical echo park austin fam succulents.</p>
									<ul class="car-info">
										<li><div class="item"><i class="flaticon flaticon-calendar"></i><p>2018</p></div></li>
										<li><div class="item"><i class="flaticon flaticon-speed"></i><p>160p/h</p></div></li>
										<li><div class="item"><i class="flaticon flaticon-road"></i><p>26.00km</p></div></li>
										<li><div class="item"><i class="flaticon flaticon-fuel"></i><p>Petrol</p></div></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section>
		<div class="testimonials">
			<div class="container">						 
				<div id="owl-testimonials" class="owl-carousel owl-theme">
				 	<div class="item wow fadeIn" data-wow-duration="0.75s">
				 		<ul class="star-rating">
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 		</ul>
				 		<div class="line-dec"></div>
				  		<p><em>"</em> Integer sed ornare lacus, at convallis velit. Curabitur hendrerit congue convallis. Nunc vel tellus ut metus tincidunt facilisis sit amet et dolor <em>"</em></p>
				  		<div class="author-rate">
				  			<img src="{{ asset('/web/images/user_female.jpg') }}" alt="">
				  			<h4>Antonio Andreas</h4>
				  			<div class="line-dec2"></div>
				  			<span>Car Dealer</span>
				  		</div>
				  	</div>
				  	<div class="item wow fadeIn" data-wow-duration="0.75s">
				 		<ul class="star-rating">
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 		</ul>
				 		<div class="line-dec"></div>
				  		<p><em>"</em> Integer sed ornare lacus, at convallis velit. Curabitur hendrerit congue convallis. Nunc vel tellus ut metus tincidunt facilisis sit amet et dolor <em>"</em></p>
				  		<div class="author-rate">
				  			<img src="{{ asset('/web/images/user_male.jpg') }}" alt="">
				  			<h4>John Robertson</h4>
				  			<div class="line-dec2"></div>
				  			<span>Sale Agent</span>
				  		</div>
				  	</div>
				  	<div class="item wow fadeIn" data-wow-duration="0.75s">
				 		<ul class="star-rating">
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 		</ul>
				 		<div class="line-dec"></div>
				  		<p><em>"</em> Integer sed ornare lacus, at convallis velit. Curabitur hendrerit congue convallis. Nunc vel tellus ut metus tincidunt facilisis sit amet et dolor <em>"</em></p>
				  		<div class="author-rate">
				  			<img src="{{ asset('/web/images/user_female.jpg') }}" alt="">
				  			<h4>Matias Lucas</h4>
				  			<div class="line-dec2"></div>
				  			<span>Mechanic</span>
				  		</div>
				  	</div>
				  	<div class="item wow fadeIn" data-wow-duration="0.75s">
				 		<ul class="star-rating">
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 		</ul>
				 		<div class="line-dec"></div>
				  		<p><em>"</em> Integer sed ornare lacus, at convallis velit. Curabitur hendrerit congue convallis. Nunc vel tellus ut metus tincidunt facilisis sit amet et dolor <em>"</em></p>
				  		<div class="author-rate">
				  			<img src="{{ asset('/web/images/user_male.jpg') }}" alt="">
				  			<h4>Antonio Andreas</h4>
				  			<div class="line-dec2"></div>
				  			<span>Car Dealer</span>
				  		</div>
				  	</div>
				  	<div class="item wow fadeIn" data-wow-duration="0.75s">
				 		<ul class="star-rating">
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 		</ul>
				 		<div class="line-dec"></div>
				  		<p><em>"</em> Integer sed ornare lacus, at convallis velit. Curabitur hendrerit congue convallis. Nunc vel tellus ut metus tincidunt facilisis sit amet et dolor <em>"</em></p>
				  		<div class="author-rate">
				  			<img src="{{ asset('/web/images/user_female.jpg') }}" alt="">
				  			<h4>John Robertson</h4>
				  			<div class="line-dec2"></div>
				  			<span>Sale Agent</span>
				  		</div>
				  	</div>
				  	<div class="item wow fadeIn" data-wow-duration="0.75s">
				 		<ul class="star-rating">
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 		</ul>
				 		<div class="line-dec"></div>
				  		<p><em>"</em> Integer sed ornare lacus, at convallis velit. Curabitur hendrerit congue convallis. Nunc vel tellus ut metus tincidunt facilisis sit amet et dolor <em>"</em></p>
				  		<div class="author-rate">
				  			<img src="{{ asset('/web/images/user_male.jpg') }}" alt="">
				  			<h4>Matias Lucas</h4>
				  			<div class="line-dec2"></div>
				  			<span>Mechanic</span>
				  		</div>
				  	</div>
				  	<div class="item wow fadeIn" data-wow-duration="0.75s">
				 		<ul class="star-rating">
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 			<li><i class="fa fa-star"></i></li>
				 		</ul>
				 		<div class="line-dec"></div>
				  		<p><em>"</em> Integer sed ornare lacus, at convallis velit. Curabitur hendrerit congue convallis. Nunc vel tellus ut metus tincidunt facilisis sit amet et dolor <em>"</em></p>
				  		<div class="author-rate">
				  			<img src="{{ asset('/web/images/user_female.jpg') }}" alt="">
				  			<h4>Antonio Andreas</h4>
				  			<div class="line-dec2"></div>
				  			<span>Car Dealer</span>
				  		</div>
				  	</div>
				</div>
			</div>
		</div>
	</section>


	<section>
		<div class="latest-news">
			<div class="container">
				<div class="latest-news-content">
					<div class="row">
						<div class="col-md-12">
							<div class="section-heading">
								<div class="icon">
									<i class="fa fa-file"></i>
								</div>
								<div class="text-content">
									<h2>Latest News</h2>
									<span>Here are our latest posts</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="item wow fadeIn" data-wow-duration="0.75s">
					 		<div class="thumb-content">
								<div class="date-post">
									<a href="single-post.html">14 January</a>
								</div>
								<div class="thumb-inner">
									<a href="single-post.html"><img src="{{ asset('/web/images/blog_grid_01.jpg') }}" alt=""></a>
								</div>
							</div>
							<div class="down-content">
								<a href="single_car.html"><h4>Pabst Gastropub Synth Edge</h4></a>
								<span>Posted by: <em>Admin</em></span>
								<p>Next level Pinterest farm-to-table selvage gentrify street raw denim helvetica street art pork.</p>	
								<div class="text-button">
									<a href="single-post.html">Continue Reading <i class="fa fa-arrow-right"></i></a>
								</div>							
							</div>
					  	</div>
					</div>
					<div class="col-md-4">
						<div class="item wow fadeIn" data-wow-duration="0.75s">
					 		<div class="thumb-content">
								<div class="date-post">
									<a href="single-post.html">12 January</a>
								</div>
								<div class="thumb-inner">
									<a href="single-post.html"><img src="{{ asset('/web/images/blog_grid_02.jpg') }}" alt=""></a>
								</div>
							</div>
							<div class="down-content">
								<a href="single_car.html"><h4>Hammock Echo Park Braid</h4></a>
								<span>Posted by: <em>Admin</em></span>
								<p>Next level Pinterest farm-to-table selvage gentrify street raw denim helvetica street art pork.</p>
								<div class="text-button">
									<a href="single-post.html">Continue Reading <i class="fa fa-arrow-right"></i></a>
								</div>								
							</div>
					  	</div>
					</div>
					<div class="col-md-4">
						<div class="item wow fadeIn" data-wow-duration="0.75s">
					 		<div class="thumb-content">
								<div class="date-post">
									<a href="single-post.html">9 January</a>
								</div>
								<div class="thumb-inner">
									<a href="single-post.html"><img src="{{ asset('/web/images/blog_grid_03.jpg') }}" alt=""></a>
								</div>
							</div>
							<div class="down-content">
								<a href="single_car.html"><h4>Waistcoat Wayfarers Selfies</h4></a>
								<span>Posted by: <em>Admin</em></span>
								<p>Next level Pinterest farm-to-table selvage gentrify street raw denim helvetica street art pork.</p>
								<div class="text-button">
									<a href="single-post.html">Continue Reading <i class="fa fa-arrow-right"></i></a>
								</div>								
							</div>
					  	</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection