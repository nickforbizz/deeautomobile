@extends('Web.layout.app')

@section('contents')


	<div class="page-heading wow fadeIn" data-wow-duration="0.5s">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="heading-content-bg wow fadeIn" data-wow-delay="0.75s" data-wow-duration="1s">
						<div class="row">
							<div class="heading-content col-md-12">
								<p><a href="{{ route('webin') }}">Homepage</a> / <em> Contact Us</em></p>
								<h2>Contact <em>Us</em></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="contact-us wow fadeIn" data-wow-delay="0.5s" data-wow-duration="1s">
		<div id="map"></div>
	</div>

	<section>
		<div class="contact-content wow fadeIn" data-wow-delay="0.5s" data-wow-duration="1s">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="send-message">
							<div class="sep-section-heading">
								<h2>Send Us <em>Message</em></h2>
							</div>
							<form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
								<div class="row">
									<div class=" col-md-4 col-sm-4 col-xs-6">
										<input type="text" class="blog-search-field" name="s" placeholder="Your name..." value="">
									</div>
									<div class="col-md-4 col-sm-4 col-xs-6">
										<input type="text" class="blog-search-field" name="s" placeholder="Your email..." value="">
									</div>
									<div class="col-md-4 col-sm-4 col-xs-12">
										<input type="text" class="subject" name="s" placeholder="Subject..." value="">
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 col-sm-12">
										<textarea id="message" class="input" name="message" placeholder="Message..."></textarea>
									</div>
								</div>
								<div class="row">
									<div class="submit-coment col-md-12">
										<div class="primary-button">
											<a href="#">Send now <i class="fa fa-paper-plane"></i></a>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-md-4">
						<div class="contact-info">
							<div class="sep-section-heading">
								<h2>Contact <em>Informations</em></h2>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati accusamus a iure nulla, sed non ex nobis eius esse distinctio imps sunt quia sint quis quisquam odio repellat.</p>
							<div class="info-list">
								<ul>
									<li><i class="fa fa-phone"></i><span>+1 123 489-5748</span></li>
									<li><i class="fa fa-envelope"></i><span>youremail@gmail.com</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


@endsection

@push('scripts')

	<!-- Google Map Init-->
   <script>
		// Initialize and add the map
		function initMap() {
		  // The location of kimbo
		  var kimbo = {lat: -1.1339239, lng: 36.9734305};
		  // The map, centered at kimbo
		  var map = new google.maps.Map(
		      document.getElementById('map'), {zoom: 8, center: kimbo});
		  // The marker, positioned at kimbo
		  var marker = new google.maps.Marker({position: kimbo, map: map});
		}
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=&amp;callback=initMap">
    </script>

@endpush
