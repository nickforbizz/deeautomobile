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

	

	<section>
		<div class="contact-content wow fadeIn" data-wow-delay="0.5s" data-wow-duration="1s">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="send-message">
							<div class="sep-section-heading">
								<h2>Send Us <em>Message</em></h2>
							</div>
							<form id="form-inquiry" enctype="multipart/form-data">
								<div class="row">
									@csrf
									<div class=" col-md-4 col-sm-4 col-xs-6">
										<input type="text" class="blog-search-field" name="name" id="name" placeholder="Your name..." value="" required>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-6">
										<input type="text" class="blog-search-field" name="email" id="email" placeholder="Your email..." value="" required>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-12">
										<input type="text" class="subject" name="subject" id="subject" placeholder="Subject..." value="" required>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 col-sm-12">
										<textarea id="message" class="input" name="message" id="message" placeholder="Message..."></textarea>
									</div>
								</div>
								<div class="row">
									<div class="submit-coment col-md-12">
										<div class="primary-button">
											<button class="btn btn-primary" type="submit">Send now <i class="fa fa-paper-plane"></i></button>
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
									<li><button class="btn btn-primary btn-rounded pt-2 pb-2 pl-5 pr-5" id="bookride">Book A Ride</button></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<!-- map -->
	<section>
		<div class="contact-us wow fadeIn" data-wow-delay="0.5s" data-wow-duration="1s">
			<div class="sep-section-heading"></div>
			<div id="map"></div>
		</div>
	</section>

	<!-- modal -->
    <section>
        <div class="modal fade" id="bookRideModal" tabindex="-1" role="dialog" aria-labelledby="bookRideModalLabel" aria-hidden="true" >
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-body">
                        <form id="bookride-form" class="form">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your name" aria-describedby="name" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Your email" aria-describedby="email" required>
                            </div>

                            <div class="form-group">
                                <label for="mobile">Phone Number</label>
                                <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Your mobile" aria-describedby="mobile" required>
                            </div>

                            <div class="form-group">
                                <label for="ridedate">Date of the ride?</label>
                                <input type="date" class="form-control" id="ridedate" name="date" aria-describedby="ridedate" required>
                            </div>

                            <div class="form-group">
                                <hr>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- .modal -->


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

	<script>
        $(document).ready(function() {


            // book ride
            $("#bookride").click(() => {
                $("#bookRideModal").modal();
                
                // send bookride-form
                $("#bookride-form").submit(function(e) {

                    e.preventDefault();
                    let url = "{{ route('bookride') }}";
                    let payload = new FormData(this);

                    $.ajax({
                        url: url,
                        data: payload,
                        method: 'post',
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(res) {
                            console.log(res);
                            if (res.code == 1) {
                                Swal.fire({
                                    icon: 'info',
                                    title: 'Vehicle Feature Response',
                                    text: res.msg,
                                    footer: '<a href> <i> Need help </i>?</a>'
                                }).then(()=>{
                                    location.reload();
                                });
                            } else if (res.code == -2) {
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Vehicle Feature Response',
                                    text: 'Ensure all field have data ',
                                    footer: '<a href> <i> Need help </i>?</a>'
                                }).then(()=>{
                                    location.reload();
                                });
                            }else {
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Vehicle Feature Response',
                                    text: res.msg,
                                    footer: '<a href> <i> Need help </i>?</a>'
                                }).then(()=>{
                                    location.reload();
                                });
                            }

                            
                        },
                        error: function(err) {
                            console.error(err);
                            Swal.fire({
                                icon: 'warning',
                                title: 'Vehicle Feature Response',
                                text: res.msg,
                                footer: '<a href> <i> Need help </i>?</a>'
                            }).then(()=>{
                                    location.reload();
                                });
                            
                        }
                    });
                });
                // .bookride-form
            });




            // send inquiry form
            $("#form-inquiry").submit(function(e) {

                e.preventDefault();
                let url = "{{ route('sendfeedback') }}";
                let payload = new FormData(this);

                $.ajax({
                    url: url,
                    data: payload,
                    method: 'post',
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(res) {
                        console.log(res);
                        if (res.code == 1) {
                            Swal.fire({
                                icon: 'info',
                                title: 'Vehicle Feature Response',
                                text: res.msg,
                                footer: '<a href> <i> Need help </i>?</a>'
                            }).then(()=>{
                                location.reload();
                            });
                        } else if (res.code == -2) {
                            Swal.fire({
                                icon: 'warning',
                                title: 'Vehicle Feature Response',
                                text: 'Ensure all field have data ',
                                footer: '<a href> <i> Need help </i>?</a>'
                            }).then(()=>{
                                location.reload();
                            });
                        }else {
                            Swal.fire({
                                icon: 'warning',
                                title: 'Vehicle Feature Response',
                                text: res.msg,
                                footer: '<a href> <i> Need help </i>?</a>'
                            }).then(()=>{
                                location.reload();
                            });
                        }

                        
                    },
                    error: function(err) {
                        console.error(err);
                        Swal.fire({
                            icon: 'warning',
                            title: 'Vehicle Feature Response',
                            text: res.msg,
                            footer: '<a href> <i> Need help </i>?</a>'
                        }).then(()=>{
                                location.reload();
                            });
                        
                    }
                });
            });
            // .form-inquiry
        });
        // $(document).ready(
    </script>

@endpush

