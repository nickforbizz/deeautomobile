@extends('Web.layout.app')

@section('contents')
	<div class="Modern-Slider">
	  <!-- Slide 1 -->
	  <div class="item">
	    <div class="img-fill">
	      <img src="{{ asset('/web/images/main_slide_01.jpg') }}" alt="">
	      <div class="info">
	        <div >
	        	<h5>DeeAutomobile HAS THE BEST CHOICE</h5>
	          	<h3>Looking For Perffect <em>Car</em>?</h3>
          		<h6 class="secondary-button">
	          		<a href="{{ route('carListingNoSideBar') }}">Find Your Car <i class="fa fa-car"></i></a>
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
	        	<h5>DeeAutomobile HAS THE BEST CHOICE</h5>
	          	<h3>Looking For Perffect <em>Car</em>?</h3>
	          	<h6 class="secondary-button">
	          		<a href="{{ route('carGridSideBar') }}">Find Your Car <i class="fa fa-car"></i></a>
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
	        	<h5>DeeAutomobile HAS THE BEST CHOICE</h5>
	          	<h3>Looking For Perffect <em>Car</em>?</h3>
	          	<h6 class="secondary-button">
	          		<a href="{{ route('carListingSideBar') }}">Find Your Car <i class="fa fa-car"></i></a>
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

							@foreach($cars as $key => $car)
								<div class="item car-item">
									<div class="thumb-content">
										<a href="single_car.html"><img src="{{ asset(str_replace('public', 'storage',$car->modelsImgs[0]->media_link)) }}" alt="{{ $car->name }}"></a>
									</div>
									<div class="down-content">
										<a href="single_car.html"><h4>{{ $car->name }}</h4></a>
										<span>KSH {{ $car->price }}</span>
									</div>
								</div>
							@endforeach
				
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
								<form id="car_search_form">

									<div class="row">
										<div class="col-md-12">       
											<div class="input-select">
												<select name="make" id="make" required>
													<option disabled selected>Select Make</option>
													@foreach($makes as $make)
														<option value="{{ $make->id }}">{{ $make->name }}</option>
													@endforeach
												</select>
											</div>
										</div>
										<div class="col-md-12">       
											<div class="input-select">
												<select name="brand" id="brand">
													<option disabled selected>Select Mark</option>
													  
												</select>
											</div>
										</div>
										
										<div class="col-md-12">
											<div class="secondary-button">
												<!-- <button type="submit" class="btn btn-info">Search <i class="btn fa fa-search"></i></button> -->
												<a href="javascript:void(0)" id="search_car">Search <i class="btn fa fa-search"></i></a>
											</div>
										</div>
									</div>

								</form>
		                    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>


	<!-- <section>
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
	</section> -->


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

						@foreach($cars as $key => $car)
							<div class="col-md-4 col-sm-6">
								<div class="car-item wow fadeIn" data-wow-duration="0.75s">
									<div class="thumb-content">
										<div class="car-banner">
											<a href="{{ route('singleCar', ['checkProduct' =>$car->id]) }}"> {{ $car->label }} </a>
										</div>
										<div class="thumb-inner">
											<a href="{{ route('singleCar', ['checkProduct' =>$car->id]) }}"><img src="{{ asset(str_replace('public', 'storage',$car->modelsImgs[0]->media_link)) }}" alt="{{ $car->name }}"></a>
										</div>
									</div>
									<div class="down-content">
										<a href="{{ route('singleCar', ['checkProduct' =>$car->id]) }}"><h4> {{ $car->name }} </h4></a>
										<span> {{ $car->price }} /= </span>
										<p> {{ substr($car->description, 0, 50) }} ... </p> 
										<ul class="car-info">
											<li><div class="item"><i class="flaticon flaticon-calendar"></i><p> {{ $car->manYr }} </p></div></li>
											<li><div class="item"><i class="flaticon flaticon-speed"></i><p> {{ $car->speed }} p/h</p></div></li>
											<li><div class="item"><i class="flaticon flaticon-road"></i><p> {{ $car->mileage }} km</p></div></li>
											<li><div class="item"><i class="flaticon flaticon-fuel"></i><p> {{ $car->fuel }} </p></div></li>
										</ul>
									</div>
								</div>
							</div>
						@endforeach

						
					</div>
				</div>
			</div>
		</div>
	</section>


	<section>
		<div class="testimonials">
			<div class="container">						 
				<div id="owl-testimonials" class="owl-carousel owl-theme">

					@foreach($testimonials as $key => $testimonial)
						<div class="item wow fadeIn" data-wow-duration="0.75s">
							<ul class="star-rating">
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
							</ul>
							<div class="line-dec"></div>
							<p><em>"</em> {{ substr($testimonial->description, 0, 200 ) }} <em>"</em></p>
							<div class="author-rate">
								<img src="{{ asset('/web/images/user_female.jpg') }}" alt="">
								<!-- <img src="{{ asset('/web/images/user_male.jpg') }}" alt=""> -->
								<h4> {{ $testimonial->name }} </h4>
								<div class="line-dec2"></div>
								<span> {{ $testimonial->occupation }} </span>
							</div>
						</div>
					@endforeach



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
								<a href="single-post.html"><h4>Pabst Gastropub Synth Edge</h4></a>
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
								<a href="single-post.html"><h4>Hammock Echo Park Braid</h4></a>
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
								<a href="single-post.html"><h4>Waistcoat Wayfarers Selfies</h4></a>
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



@push('scripts')
	<script>
		 // search models of a selected make
		 $("#make").change(() => {
			let id = $("#make").val();
			let _token = "{{ csrf_token() }}";
			let payload = {id, _token};
			let url2 = "{{ route('searchmakemodels') }}";
			$("#brand").html('');
			$("#brand").append(`<option selected disabled> Loading ... </option>`);
			$.ajax({
				url: url2,
				data: payload,
				method: 'post',
				success: function(res) {
					console.log(res);
					if (res.code == 1) {
						if (res.msg.length > 0) {
							$("#brand").html('');
							res.msg.map((item, i) => {
								$("#brand").append(`
									<option value="${item.id}"> ${item.name} </option>
								`); 

							})
						}
					} else {
						Swal.fire({
							icon: 'warning',
							title: 'Vehicle Feature Response',
							text: res.msg,
							footer: '<a href> <i> Need help </i>?</a>'
						}).then(()=>{
							// location.reload();
						});
					}                            
				},
				error: function(err) {
					console.error(err);                            
				}
			});
		});


		// search car
		$("#search_car").click(() => {
			// $("#car_search_form").submit();
			let make = $("#make").val();
			let brand = $("#brand").val();

			if (make== null || brand == null) {
				toastr.warning('Empty Search', 'Please Select Make and Brand!', {timeOut: 5000})
			}else{
				carSearch(make, brand)

			}

		})
	</script>
@endpush