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
					<div class="col-md-10 offset-md-1">
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
												<p>Man braid helvetica bushwick, tilde cliche locavore beard master cleanse vaporware lyft biodiesel fixie. Waistcoat quinoa four dollar toast, you probably haven't heard of them vinyl art party tumeric lumbersexual raclette lyft coloring book poke man bun.</p>
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
												<p>Man braid helvetica bushwick, tilde cliche locavore beard master cleanse vaporware lyft biodiesel fixie. Waistcoat quinoa four dollar toast, you probably haven't heard of them vinyl art party tumeric lumbersexual raclette lyft coloring book poke man bun.</p>
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
												<p>Man braid helvetica bushwick, tilde cliche locavore beard master cleanse vaporware lyft biodiesel fixie. Waistcoat quinoa four dollar toast, you probably haven't heard of them vinyl art party tumeric lumbersexual raclette lyft coloring book poke man bun.</p>
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
												<p>Man braid helvetica bushwick, tilde cliche locavore beard master cleanse vaporware lyft biodiesel fixie. Waistcoat quinoa four dollar toast, you probably haven't heard of them vinyl art party tumeric lumbersexual raclette lyft coloring book poke man bun.</p>
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
												<p>Man braid helvetica bushwick, tilde cliche locavore beard master cleanse vaporware lyft biodiesel fixie. Waistcoat quinoa four dollar toast, you probably haven't heard of them vinyl art party tumeric lumbersexual raclette lyft coloring book poke man bun.</p>
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
												<p>Man braid helvetica bushwick, tilde cliche locavore beard master cleanse vaporware lyft biodiesel fixie. Waistcoat quinoa four dollar toast, you probably haven't heard of them vinyl art party tumeric lumbersexual raclette lyft coloring book poke man bun.</p>
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
				</div>
			</div>
		</div>
	</div>


@endsection