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
								<h2>Cars <em>Grids</em></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="on-grids wow fadeIn" data-wow-delay="0.5s" data-wow-duration="1s">
		<div class="container">
			<div class="recent-car-content">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-4">
								<div class="car-item">
									<div class="thumb-content">
										<div class="car-banner">
											<a href="{{ route('singlePost') }}">For Rent</a>
										</div>
										<div class="thumb-inner">
											<a href="{{ route('singlePost') }}"><img src="{{ asset('/web/images/car_item_1.jpg') }}" alt=""></a>
										</div>
									</div>
									<div class="down-content">
										<a href="{{ route('singlePost') }}"><h4>Perfect Sport Car</h4></a>
										<span>$36.000</span>
										<div class="line-dec"></div>
										<p>Drinking vinegar hoodie street art, selvage you probably haven't heard of them put a bird on it semiotics heirloom four loko roof party mumblecore cliche butcher meditation.</p>
										<ul class="car-info">
											<li><div class="item"><i class="flaticon flaticon-calendar"></i><p>2013</p></div></li>
											<li><div class="item"><i class="flaticon flaticon-speed"></i><p>160p/h</p></div></li>
											<li><div class="item"><i class="flaticon flaticon-road"></i><p>26.00km</p></div></li>
											<li><div class="item"><i class="flaticon flaticon-fuel"></i><p>Petrol</p></div></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="car-item">
									<div class="thumb-content">
										<div class="car-banner">
											<a href="{{ route('singlePost') }}">For Sale</a>
										</div>
										<div class="thumb-inner">
											<a href="{{ route('singlePost') }}"><img src="{{ asset('/web/images/car_item_2.jpg') }}" alt=""></a>
										</div>
									</div>
									<div class="down-content">
										<a href="{{ route('singlePost') }}"><h4>Perfect Sport Car</h4></a>
										<span>$49.000</span>
										<div class="line-dec"></div>
										<p>Drinking vinegar hoodie street art, selvage you probably haven't heard of them put a bird on it semiotics heirloom four loko roof party mumblecore cliche butcher meditation.</p>
										<ul class="car-info">
											<li><div class="item"><i class="flaticon flaticon-calendar"></i><p>2013</p></div></li>
											<li><div class="item"><i class="flaticon flaticon-speed"></i><p>160p/h</p></div></li>
											<li><div class="item"><i class="flaticon flaticon-road"></i><p>26.00km</p></div></li>
											<li><div class="item"><i class="flaticon flaticon-fuel"></i><p>Petrol</p></div></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="car-item">
									<div class="thumb-content">
										<div class="car-banner">
											<a href="{{ route('singlePost') }}">For Rent</a>
										</div>
										<div class="thumb-inner">
											<a href="{{ route('singlePost') }}"><img src="{{ asset('/web/images/car_item_3.jpg') }}" alt=""></a>
										</div>
									</div>
									<div class="down-content">
										<a href="{{ route('singlePost') }}"><h4>Perfect Sport Car</h4></a>
										<span>$42.000</span>
										<div class="line-dec"></div>
										<p>Drinking vinegar hoodie street art, selvage you probably haven't heard of them put a bird on it semiotics heirloom four loko roof party mumblecore cliche butcher meditation.</p>
										<ul class="car-info">
											<li><div class="item"><i class="flaticon flaticon-calendar"></i><p>2013</p></div></li>
											<li><div class="item"><i class="flaticon flaticon-speed"></i><p>160p/h</p></div></li>
											<li><div class="item"><i class="flaticon flaticon-road"></i><p>26.00km</p></div></li>
											<li><div class="item"><i class="flaticon flaticon-fuel"></i><p>Petrol</p></div></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="car-item">
									<div class="thumb-content">
										<div class="car-banner">
											<a href="{{ route('singlePost') }}">For Rent</a>
										</div>
										<div class="thumb-inner">
											<a href="{{ route('singlePost') }}"><img src="{{ asset('/web/images/car_item_4.jpg') }}" alt=""></a>
										</div>
									</div>
									<div class="down-content">
										<a href="{{ route('singlePost') }}"><h4>Perfect Sport Car</h4></a>
										<span>$54.000</span>
										<div class="line-dec"></div>
										<p>Drinking vinegar hoodie street art, selvage you probably haven't heard of them put a bird on it semiotics heirloom four loko roof party mumblecore cliche butcher meditation.</p>
										<ul class="car-info">
											<li><div class="item"><i class="flaticon flaticon-calendar"></i><p>2013</p></div></li>
											<li><div class="item"><i class="flaticon flaticon-speed"></i><p>160p/h</p></div></li>
											<li><div class="item"><i class="flaticon flaticon-road"></i><p>26.00km</p></div></li>
											<li><div class="item"><i class="flaticon flaticon-fuel"></i><p>Petrol</p></div></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="car-item">
									<div class="thumb-content">
										<div class="car-banner">
											<a href="{{ route('singlePost') }}">For Sale</a>
										</div>
										<div class="thumb-inner">
											<a href="{{ route('singlePost') }}"><img src="{{ asset('/web/images/car_item_5.jpg') }}" alt=""></a>
										</div>
									</div>
									<div class="down-content">
										<a href="{{ route('singlePost') }}"><h4>Perfect Sport Car</h4></a>
										<span>$23.000</span>
										<div class="line-dec"></div>
										<p>Drinking vinegar hoodie street art, selvage you probably haven't heard of them put a bird on it semiotics heirloom four loko roof party mumblecore cliche butcher meditation.</p>
										<ul class="car-info">
											<li><div class="item"><i class="flaticon flaticon-calendar"></i><p>2013</p></div></li>
											<li><div class="item"><i class="flaticon flaticon-speed"></i><p>160p/h</p></div></li>
											<li><div class="item"><i class="flaticon flaticon-road"></i><p>26.00km</p></div></li>
											<li><div class="item"><i class="flaticon flaticon-fuel"></i><p>Petrol</p></div></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="car-item">
									<div class="thumb-content">
										<div class="car-banner">
											<a href="{{ route('singlePost') }}">For Rent</a>
										</div>
										<div class="thumb-inner">
											<a href="{{ route('singlePost') }}"><img src="{{ asset('/web/images/car_item_6.jpg') }}" alt=""></a>
										</div>
									</div>
									<div class="down-content">
										<a href="{{ route('singlePost') }}"><h4>Perfect Sport Car</h4></a>
										<span>$68.000</span>
										<div class="line-dec"></div>
										<p>Drinking vinegar hoodie street art, selvage you probably haven't heard of them put a bird on it semiotics heirloom four loko roof party mumblecore cliche butcher meditation.</p>
										<ul class="car-info">
											<li><div class="item"><i class="flaticon flaticon-calendar"></i><p>2013</p></div></li>
											<li><div class="item"><i class="flaticon flaticon-speed"></i><p>160p/h</p></div></li>
											<li><div class="item"><i class="flaticon flaticon-road"></i><p>26.00km</p></div></li>
											<li><div class="item"><i class="flaticon flaticon-fuel"></i><p>Petrol</p></div></li>
										</ul>
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