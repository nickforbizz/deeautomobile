@extends('Web.layout.app')

@section('contents') 


	<div class="page-heading wow fadeIn" data-wow-duration="0.5s">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="heading-content-bg wow fadeIn" data-wow-delay="0.75s" data-wow-duration="1s">
						<div class="row">
							<div class="heading-content col-md-12">
								<p><a href="index-2.html">Homepage</a> / <em> About Us</em></p>
								<h2>About <em>Us</em></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="services-first about-services wow fadeIn" data-wow-delay="0.5s" data-wow-duration="1s">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="service-item">
						<i class="fa fa-car"></i>
							<div class="text-content">
							<h6>Sell &amp; Buy Cars</h6>
							<p>Irony actually meditation, occupy mumblecore wayfarers organic pickled 90's.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service-item">
						<i class="fa fa-gear"></i>
							<div class="text-content">
							<h6>Buy Defect Cars</h6>
							<p>Irony actually meditation, occupy mumblecore wayfarers organic pickled 90's.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service-item">
						<i class="fa fa-truck"></i>
							<div class="text-content">
							<h6>Road Assistance</h6>
							<p>Irony actually meditation, occupy mumblecore wayfarers organic pickled 90's.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service-item">
						<i class="fa fa-search"></i>
							<div class="text-content">
							<h6>Car Dealer Research</h6>
							<p>Irony actually meditation, occupy mumblecore wayfarers organic pickled 90's.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service-item">
						<i class="fa fa-globe"></i>
							<div class="text-content">
							<h6>World Wide Known</h6>
							<p>Irony actually meditation, occupy mumblecore wayfarers organic pickled 90's.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service-item">
						<i class="fa fa-users"></i>
							<div class="text-content">
							<h6>Best Dealers</h6>
							<p>Irony actually meditation, occupy mumblecore wayfarers organic pickled 90's.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section>
		<div class="more-about-us">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<img src="{{ asset('/web/images/about_us.jpg') }}" alt="">
					</div>
					<div class="col-md-6">
						<div class="right-content">
							<span>Lorem ipsum consectetur.</span>
							<h4>Who we are, what we do?</h4>
							<p>Thundercats gentrify flannel, raw denim before they sold out PBRB meggings. Godard stumptown forage, tote bag narwhal viral Austin actually.<br><br>Pop-up flannel direct trade, High Life sriracha chia Pinterest photo booth. Narwhal PBR dreamcatcher, taxidermy stumptown.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="our-clients">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-heading">
							<div class="icon">
								<i class="fa fa-users"></i>
							</div>
							<div class="text-content">
								<h2>Our Happy Clients</h2>
								<span>Here are our happy clients</span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div id="owl-clients" class="owl-carousel owl-theme">
							<div class="item">
								<img src="{{ asset('/web/images/client_01.jpg') }}" alt="">
							</div>
							<div class="item">
								<img src="{{ asset('/web/images/client_02.jpg') }}" alt="">
							</div>
							<div class="item">
								<img src="{{ asset('/web/images/client_03.jpg') }}" alt="">
							</div>
							<div class="item">
								<img src="{{ asset('/web/images/client_01.jpg') }}" alt="">
							</div>
							<div class="item">
								<img src="{{ asset('/web/images/client_02.jpg') }}" alt="">
							</div>
							<div class="item">
								<img src="{{ asset('/web/images/client_03.jpg') }}" alt="">
							</div>
							<div class="item">
								<img src="{{ asset('/web/images/client_01.jpg') }}" alt="">
							</div>
							<div class="item">
								<img src="{{ asset('/web/images/client_02.jpg') }}" alt="">
							</div>
							<div class="item">
								<img src="{{ asset('/web/images/client_03.jpg') }}" alt="">
							</div>
							<div class="item">
								<img src="{{ asset('/web/images/client_01.jpg') }}" alt="">
							</div>
							<div class="item">
								<img src="{{ asset('/web/images/client_02.jpg') }}" alt="">
							</div>
							<div class="item">
								<img src="{{ asset('/web/images/client_03.jpg') }}" alt="">
							</div>
							<div class="item">
								<img src="{{ asset('/web/images/client_01.jpg') }}" alt="">
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection