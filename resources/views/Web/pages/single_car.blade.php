@extends('Web.layout.app')

@section('contents')


	<div class="page-heading wow fadeIn" data-wow-duration="0.5s">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="heading-content-bg wow fadeIn" data-wow-delay="0.75s" data-wow-duration="1s">
						<div class="row">
							<div class="heading-content col-md-12">
								<p><a href="{{ route('webin') }}">Homepage</a> / <em> Cars</em> / <em> Car Details</em></p>
								<h2>Car <em>Details</em></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="recent-car single-car wow fadeIn" data-wow-delay="0.5s" data-wow-duration="1s">
		<div class="container">
			<div class="recent-car-content">
				<div class="row">
					
					<!-- images -->
					<div class="col-md-6">
						<div id="single-car" class="slider-pro">
							<div class="sp-slides">
								@foreach($modelsImgs as $carImg)
									<div class="sp-slide">
										<img class="sp-image" src="{{ asset(str_replace('public', 'storage',$carImg->media_link)) }}" alt="{{ $carImg->name }}" />
									</div>								
								@endforeach
							</div>

							<div class="sp-thumbnails">
							@foreach($modelsImgs as $carImg)
								<img class="sp-thumbnail" src="{{ asset(str_replace('public', 'storage',$carImg->media_link)) }}" alt="{{ $carImg->name }}" />
							@endforeach
							</div>
					    </div>
					</div>

					<!-- details -->
					<div class="col-md-6">
						<div class="car-details">
							<h4>{{ $car->name }}</h4>
							<span>{{ $car->price }} /=</span>
							<p> {{ $car->description }} </p>
							<div class="container">
								<div class="row">
									<ul class="car-info col-md-6">
										<li><i class="flaticon flaticon-calendar"></i><p>{{ $car->manYr }}</p></li>
										<li><i class="flaticon flaticon-speed"></i><p>{{ $car->speed }} km/h</p></li>
										<li><i class="flaticon flaticon-road"></i><p>{{ $car->mileage }} km</p></li>
										<li><i class="flaticon flaticon-fuel"></i><p>{{ $car->fuel }}</p></li>
									</ul>
									<ul class="car-info col-md-6">
										<li><i class="flaticon flaticon-art"></i><p>{{ $car->colour }} </p></li>
										<li><i class="flaticon flaticon-shift"></i><p> {{ $car->transmission }} </p></li>
										<li><i class="flaticon flaticon-car"></i><p>N/A</p></li>
										<li><i class="flaticon flaticon-motor"></i><p>{{ $car->cc }}cm3</p></li>
									</ul>
								</div>
							</div>
							<div class="similar-info">
								<div class="primary-button">
									<a href="#" id="requestoffer-cta"> Make an Offer <i class="fa fa-dollar"></i></a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<section>
		<div class="more-details">
			<div class="container">
				<div class="row">
					<!-- more descr -->
					<div class="col-md-4">
						<div class="item wow fadeInUp" data-wow-duration="0.5s">
							<div class="sep-section-heading">
								<h2>More <em>Description</em></h2>
							</div>
							@if(is_null($car->body))
								<p>{{$car->description}}</p>
							@else
								<p>{{$car->body}}</p>
							@endif
						</div>
					</div>

					<!-- features -->
					<div class="col-md-4">
						<div class="item wow fadeInUp" data-wow-duration="0.75s">
							<div class="sep-section-heading">
								<h2>Additional <em>Features</em></h2>
							</div>
							<div class="info-list">
								@if(count($veh_features) < 1)
									<div class="col-sm-12 text-content"> <p class="">No Available Feature </p> </div>
								@else
									<ul>
									@foreach($veh_features as $feature)
										<li><i class="fa fa-check-square"></i><span>{{ $feature->feature_name }}</span></li>
									@endforeach
								</ul>
								@endif 
							</div>
						</div>
					</div>

					<!-- contact -->
					<div class="col-md-4 wow fadeInUp" data-wow-duration="1s">
						<div class="item">
							<div class="sep-section-heading">
								<h2>Contact <em>Informations</em></h2>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati accusamus a iure nulla, sed non ex nobis eius esse distinctio imps sunt quia sint quis quisquam odio repellat.</p>
							<div class="contact-info">
								<div class="row">
									<div class="phone col-md-12 col-sm-6 col-xs-6">
										<i class="fa fa-phone"></i><span>+1 123 489-5748</span>
									</div>
									<div class="mail col-md-12 col-sm-6 col-xs-6">
										<i class="fa fa-envelope"></i><span>youremail@gmail.com</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Similar Cars -->
	<section>
		<div class="recent-car similar-car wow fadeIn" data-wow-duration="1s">
			<div class="container">
				<div class="recent-car-content">
					<div class="row">
						<div class="col-md-12">
							<div class="section-heading">
								<div class="icon">
									<i class="fa fa-car"></i>
								</div>
								<div class="text-content">
									<h2>Similar Cars</h2>
									<span>You may like this too</span>
								</div>
							</div>
						</div>
					</div>
						@if(count($cars) > 0)
							<div id="owl-similar" class="owl-carousel owl-theme">
								@foreach($cars as $car)
									<div class="item car-item">
										<div class="thumb-content">
											<div class="car-banner">
												<a href="{{ route('singleCar', ['checkProduct' =>$car->id]) }}"> {{ $car->label }} </a>
											</div>
											<a href="{{ route('singleCar', ['checkProduct' =>$car->id]) }}"><img src="{{ asset(str_replace('public', 'storage',$car->modelsImgs[0]->media_link)) }}" alt="{{ $car->name }}"></a>
										</div>
										<div class="down-content">
											<a href="{{ route('singleCar', ['checkProduct' =>$car->id]) }}"><h4> {{ $car->name }} </h4></a>
											<span>{{ $car->price }} /=</span>
										</div>
									</div>
								@endforeach
							</div>
						@else
							<div class="col-sm-12 text-content"> <p class="text-center">No Simiral Cars at the moment </p> </div>
						@endif
				</div>
			</div>
		</div>
	</section>

	
      <!-- modal -->
      <section>
        <div class="modal fade" id="makeOfferModal" tabindex="-1" role="dialog" aria-labelledby="makeOfferModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-body">
                        <form id="requestoffer-form" class="form">
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
                                <label for="price_quote">Price Quote</label>
                                <input type="number" class="form-control" id="price_quote" name="price" placeholder="Your Offer" aria-describedby="price_quote" required>
                            </div>

                            <div class="form-group">
                                <label for="message">message</label>
                                <textarea class="form-control" id="message" name="message" cols="5" placeholder="Your message"></textarea>
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

    <script>

        $(document).ready(function(){
            // offer Request
            $("#requestoffer-cta").click(() => {
                $("#makeOfferModal").modal();
                
                // send requestoffer-form
                $("#requestoffer-form").submit(function(e) {

                    e.preventDefault();
                    let url = "{{ route('addrequestoffers') }}";
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
                                    title: 'Request Offer Response',
                                    text: res.msg,
                                    footer: '<a href> <i> Need help </i>?</a>'
                                }).then(()=>{
                                    location.reload();
                                });
                            } else if (res.code == -2) {
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Request Offer Response',
                                    text: 'Ensure all field have data ',
                                    footer: '<a href> <i> Need help </i>?</a>'
                                }).then(()=>{
                                    location.reload();
                                });
                            }else {
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Request Offer Response',
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
                                title: 'Request Offer Response',
                                text: 'Fatal error',
                                footer: '<a href> <i> Need help </i>?</a>'
                            }).then(()=>{
                                    location.reload();
                                });
                            
                        }
                    });
                });
                // .requestoffer-form
            });

        })
    
    
    </script>

@endpush