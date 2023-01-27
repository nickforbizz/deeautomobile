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

							@foreach($cars as $key => $car)
								<div class="col-md-12">
									<div class="car-item">
										<div class="row">
											<div class="col-md-5">
												<div class="thumb-content">
													<div class="car-banner">
														<a href="{{ route('singleCar', ['checkProduct' =>$car->id]) }}">{{ $car->label }}</a>
													</div>
													<div class="thumb-inner">
														<a href="{{ route('singleCar', ['checkProduct' =>$car->id]) }}"><img src="{{ asset(str_replace('public', 'storage',$car->modelsImgs[0]->media_link)) }}" alt="{{ $car->name }}"></a>
													</div>
												</div>
											</div>
											<div class="col-md-7">
												<div class="down-content">
													<a href="{{ route('singleCar', ['checkProduct' =>$car->id]) }}"><h4>{{ $car->name }}</h4></a>
													<span>{{ $car->price }}/=</span>
													<div class="line-dec"></div>
													<div style="min-xheight: 8em;">{{ substr($car->description, 0, 300) }} </div>
													<ul class="car-info">
														<li><div class="item"><i class="flaticon flaticon-calendar"></i><p> {{ $car->manYr }} </p></div></li>
														<li><div class="item"><i class="flaticon flaticon-speed"></i><p> {{ $car->speed }} p/h</p></div></li>
														<li><div class="item"><i class="flaticon flaticon-road"></i><p> {{ $car->mileage }} km</p></div></li>
														<li><div class="item"><i class="flaticon flaticon-fuel"></i><p> {{ $car->fuel }} </p></div></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							@endforeach

							
							<div class="col-md-12">
								<div class="page-numbers">
									<!-- <div class="pagination-content"> -->
									<div class="d-flex justify-content-center">
										{{$cars->onEachSide(5)->links()}}
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
						                                <div class="input-select">
						                                    <select name="make" id="make">
															<option value="-1">Select Make</option>
															@foreach($makes as $make)
																<option value="{{ $make->id }}">{{ $make->name }}</option>
															@endforeach
						                                    </select>
						                                </div>
						                            </div>
						                            <div class="col-md-12">       
						                                <div class="input-select">
						                                    <select name="brand" id="brand">
						                                        <option value="-1">Select Mark</option>
						                                          <option>Audi A3</option>
						                                          <option>Audi A4</option>
						                                          <option>Audi A5</option>
						                                          <option>Audi A6</option>
						                                          <option>Audi A7</option>
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
	</script>
@endpush