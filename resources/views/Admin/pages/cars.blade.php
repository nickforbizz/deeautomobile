@extends('Admin.layout.app')

@section('contents')




	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title"> Vehicles </h4>
				<ul class="breadcrumbs">
					<li class="nav-home">
						<a href="{{ route('home') }}">
							<i class="flaticon-home"></i>
						</a>
					</li>
					<li class="separator">
						<i class="flaticon-right-arrow"></i>
					</li>
					<li class="nav-item">
						<a href="{{ route('home') }}">Dashboard</a>
					</li>
					<li class="separator">
						<i class="flaticon-right-arrow"></i>
					</li>
					<li class="nav-item">
						<a href="#">Vehicle details</a>
					</li>
				</ul>
			</div>
			<div class="row ">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="card-title">Vehicles</div>
							<div class="card-category"> Hello and welcome to vehicles screen, here you will be able to access and manupilate all vehicles </div>
						</div>


						<div class="row p-2">
							<div class="col-sm-6 pt-4 ">
								<div class="row">
									<div class="col-sm-6">
										<div class="card card-stats card-round">
											<div class="card-body ">
												<div class="row">
													<div class="col-5">
														<div class="icon-big text-center">
															<i class="fas fa-car-alt text-success"></i>
														</div>
													</div>
													<div class="col-7 col-stats">
														<div class="numbers">
															<p class="card-category">Total Added Cars</p>
															<h4 class="card-title">{{ count($cars) }}</h4>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card card-stats card-round">
											<div class="card-body ">
												<div class="row">
													<div class="col-5">
														<div class="icon-big text-center">
															<i class="flaticon-bars text-success"></i>
														</div>
													</div>
													<div class="col-7 col-stats">
														<div class="numbers">
															<p class="card-category">Total Added Features</p>
															<h4 class="card-title">{{ count($features) }}</h4>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card card-stats card-round">
											<div class="card-body">
												<div class="row">
													<div class="col-5">
														<div class="icon-big text-center">
															<i class="flaticon-store text-success"></i>
														</div>
													</div>
													<div class="col-7 col-stats">
														<div class="numbers">
															<p class="card-category">Total Added Makes</p>
															<h4 class="card-title">{{ count($makes) }}</h4>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card card-stats card-round">
											<div class="card-body">
												<div class="row">
													<div class="col-5">
														<div class="icon-big text-center">
															<i class="flaticon-interface-3 text-success"></i>
														</div>
													</div>
													<div class="col-7 col-stats">
														<div class="numbers">
															<p class="card-category">Total Added Models</p>
															<h4 class="card-title">{{ count($models) }}</h4>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-sm-6 pt-4 pl-2 ">
								<div class="row">

									<div class="col-sm-6">
										<a href="{{ route('viewFeatures') }}" class="btn btn-info btn-round ml-auto w-100 mt-4" >
											<i class="fa fa-plus"></i> Features
										</a>
									</div>
									<div class="col-sm-6">
										<a href="{{ route('viewcarModels') }}" class="btn btn-info btn-round ml-auto w-100 mt-4" >
											<i class="fa fa-plus"></i> Models
										</a>
									</div>
									<div class="col-sm-6">
										<a href="{{ route('viewMakes') }}" class="btn btn-info btn-round ml-auto w-100 mt-4" >
											<i class="fa fa-plus"></i> Makes
										</a>
									</div>
									

								</div>
							</div>
						</div>

						<!-- row -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="d-flex align-items-center">
											<h4 class="card-title">Add Car</h4>
											<button class="btn btn-primary btn-round ml-auto" id="add_car">
												<i class="fa fa-plus"></i>
												Add Car
											</button>
										</div>
									</div>

									<div class="card-body">										

										<div class="table-responsive">
											<table id="cars_tb" class="display table table-striped table-hover" >
												<thead>
													<tr>
														<th>#</th>
														<th> Name</th>
														<th> Body Type</th>
														<th> Mileage</th>
														<th> Price</th>
														<th> Label </th>
														<th>CreatedAt</th>
														<th> Features </th>
														<th>Action</th>
													</tr>
												</thead>
												
											</table>
										</div>
										<!-- .table-responsive -->

										<section class="section_modals">
											<!-- Modal model -->
											<div class="modal fade" id="modelModal" role="dialog">
												<div class="modal-dialog modal-lg">

													<!-- Modal content-->
													<div class="modal-content">
														<div class="modal-header headNav">
															<h4 class="modal-title"> Add/Edit Model</h4>
															<button type="button" class="close" data-dismiss="modal">&times;</button>
														</div>
														<div class="modal-body">


															<form class="form row" id="model_form">

																@csrf
																<input type="hidden" name="url" id="url" value="A">
																<div class="form-group col-md-3">
																	<label for="model_cat">Category:</label>
																	<select class="form-control form-control-line" id="model_cat" name="model_cat" required>
																		<option disabled selected> -- select make -- </option>
																		@foreach($makes as $make)
																		<option value="{{$make->id}}"> {{$make->name}} </option>
																		@endforeach
																	</select>
																</div>

																<div class="form-group col-md-3">
																	<label for="model_name">Name:</label>
																	<input type="hidden" class="form-control" id="model_id" name="model_id">
																	<select class="form-control form-control-line" id="model_type" name="model_type" required>
																		<option disabled selected> -- select Model -- </option>
																		@foreach($models as $model)
																		<option value="{{$model->id}}"> {{$model->name}} </option>
																		@endforeach
																	</select>
																</div>

																<div class="form-group col-md-3">
																	<label for="model_label">Label:</label>
																	<input type="text" class="form-control form-control-line" placeholder="Enter Label ..." id="model_label" name="model_label" required>
																</div>

																<div class="form-group col-md-3">
																	<label for="model_price">Price:</label>
																	<input type="text" class="form-control form-control-line" placeholder="Enter Price ..." id="model_price" name="model_price" required>
																</div>

																<div class="form-group col-md-3">
																	<label for="speed">Avg Speed:</label>
																	<input type="text" class="form-control form-control-line" placeholder="Enter Price ..." id="speed" name="speed" required>
																</div>

																<div class="form-group col-md-3">
																	<label for="model_manYr">Manufacture Yr:</label>
																	<input type="text" class="form-control form-control-line" placeholder="Enter Manufacture Yr ..." id="model_manYr" name="model_manYr" required>
																</div>

																<div class="form-group col-md-3">
																	<label for="model_mileage">Mileage (km):</label>
																	<input type="text" class="form-control form-control-line" placeholder="Enter Mileage ..." id="model_mileage" name="model_mileage" required>
																</div>

																<div class="form-group col-md-3">
																	<label for="model_condition">Condition:</label>
																	<input type="text" class="form-control form-control-line" placeholder="Enter Condition ..." id="model_condition" name="model_condition" required>
																</div>

																<div class="form-group col-md-3">
																	<label for="model_bodyType">Body Type:</label>
																	<input type="text" class="form-control form-control-line" placeholder="Enter Body Type ..." id="model_bodyType" name="model_bodyType" required>
																</div>

																<div class="form-group col-md-3">
																	<label for="model_colour">Colour:</label>
																	<input type="text" class="form-control form-control-line" placeholder="Enter Colour ..." id="model_colour" name="model_colour" required>
																</div>

																<div class="form-group col-md-3">
																	<label for="model_fuel">Fuel:</label>
																	<select class="form-control form-control-line" id="model_fuel" name="model_fuel" required>
																		<option disabled selected> -- select option --</option>
																		<option value="Petrol">Petrol</option>
																		<option value="Diesel">Diesel</option>
																		<option value="Hybrid">Hybrid</option>
																		<option value="Electric">Electric</option>
																	</select>
																</div>

																<div class="form-group col-md-3">
																	<label for="model_transmission">Transmission:</label>
																	<input type="text" class="form-control form-control-line" placeholder="Enter Transmission ..." id="model_transmission" name="model_transmission" required>
																</div>

																<div class="form-group col-md-3">
																	<label for="model_duty">Duty Type:</label>
																	<input type="text" class="form-control form-control-line" placeholder="Enter Duty Type ..." id="model_duty" name="model_duty" required>
																</div>

																<div class="form-group col-md-3">
																	<label for="model_interior">Interior Type:</label>
																	<input type="text" class="form-control form-control-line" placeholder="Enter Interior Type ..." id="model_interior" name="model_interior" required>
																</div>

																<div class="form-group col-md-3">
																	<label for="model_cc">Engine Size:</label>
																	<input type="text" class="form-control form-control-line" placeholder="Enter Engine Size ..." id="model_cc" name="model_cc" required>
																</div>



																<div class="form-group col-md-12">
																	<label for="model_description">Description:</label>
																	<textarea name="model_description" class="form-control form-control-line" placeholder="Enter Description ..." id="model_description" cols="30" rows="2"></textarea>
																</div>

																<div class="form-group col-md-12">
																	<label for="model_img">Image:</label>
																	<input type="file" name="model_img[]" multiple class="form-control form-control-line" id="model_img">
																</div>
																<div class="form-group col-md-12">
																	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																	<button type="submit" class="btn btn-info">submit</button>
																</div>
															</form>

														</div>
														<!-- .modal-body -->
														<div class="modal-footer">
															<i>proceed to record Make</i>
														</div>
													</div>

												</div>
											</div>



											<!-- Modal addFeature-->
											<div class="modal fade" id="vehFeaturesModal" role="dialog">
												<div class="modal-dialog modal-lg">

													<!-- Modal content-->
													<div class="modal-content">
														<div class="modal-header headNav">
															<h4 class="modal-title">DeeAutomobiles</h4>
															<button type="button" class="close" data-dismiss="modal">&times;</button>
														</div>
														<div class="modal-body">

															<div class="row">
																<div class="col-sm-12">
																	<form class="form row" id="model_feature_form">
		
																		@csrf
																		<div class="form-group col-md-3">
																			<label for="model_name">Name:</label>
																			<input type="text" class="form-control form-control-line" id="feature_model_name" name="model_name" readonly>
																			<input type="hidden" id="feature_model_id" name="model_id" readonly>
																		</div>
		
																		<div class="form-group col-md-9">
																			<label for="model_name">Feature:</label>
																			<select class="form-control form-control-line" id="select_features" name="select_features[]" multiple required>
																				
																				@foreach($features as $feature)
																					<option value="{{ $feature->id }}"> {{ $feature->name }} </option>
																				@endforeach
																			</select>
																		</div>
		
																		<div class="col-sm-12">
																			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																			<button type="submit" class="btn btn-info" >save</button>
																		</div>
		
		
																	</form>
																</div>

																<div class="col-sm-12 mt-4">
																	<div class="table-responsive">
																		<table id="features_tb" class="display table table-striped table-hover" >
																			<thead>
																				<tr>
																					<th>#</th>
																					<th> Name</th>
																					<th> Model </th>
																					<th>CreatedAt</th>
																					<th>Action</th>
																				</tr>
																			</thead>																			
																		</table>
																	</div>
																	<!-- .table-responsive -->
																</div>
															</div>


														</div>
														<div class="modal-footer">
															<div class="pull-right">
																<i>Proceed to add features</i>
															</div>
														</div>
													</div>

												</div>
											</div>
											<!--  modal addFeature.end -->
										</section>
										<!-- .section_modals -->
		

									</div>
								</div>
							</div>
						</div>
						<!-- .row -->


						<div class="card-footer">
							We offer the best
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



@endsection


@push('scripts')
	<script>
		$(document).ready(function() {
			$('#cars_tb').DataTable({
				processing: true,
				serverSide: true,
				ajax: "{{ route('listcars') }}",
				columns: [{
						data: 'DT_RowIndex',
						name: 'DT_RowIndex'
					},
					{
						data: 'name'
					},
					{
						data: 'bodyType'
					},
					{
						data: 'mileage'
					},
					{
						data: 'price'
					},
					{
						data: 'label'
					},					
					{
						data: 'created_at',
					},{
						data: 'features'
					},
					{
						data: 'action',
						name: 'action',
						orderable: true,
						searchable: true
					},
				]
			});
			// #cars_tb

			


			// add make
			$("#add_car").click(() => {
				$("#url").val('A');
				$("#model_form")[0].reset();
				$("#modelModal").modal();
			});

			// submit data for make
			$("#model_form").submit(function(e) {
				e.preventDefault();
				let url_flag = $("#url").val();
				let url = '';
				(url_flag == 'A') ? url = "{{ route('addModels') }}": url = "{{ route('editModels') }}";
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
								title: 'Vehicle Model Response',
								text: res.msg,
							}).then(() => { location.reload() });
						} else if (res.code == -2){
							Swal.fire({
								icon: 'warning',
								title: 'Vehicle Model Response',
								text: 'some fields are required',
							}).then(() => { location.reload() });
						}else {
							Swal.fire({
								icon: 'warning',
								title: 'Vehicle Model Response',
								text: res.msg,
							}).then(() => { location.reload() });
						}

						
					},
					error: function(err) {
						console.error(err);
						Swal.fire({
							icon: 'warning',
							title: 'Vehicle Model Response',
							text: res.msg,
							footer: '<a href> <i> Need help </i>?</a>'
						}).then(() => { location.reload() });
						
					}
				});
			});

			// select 2
			$("#select_features").select2({
				width: '100%',
				placeholder: "-- select a feature --",
				allowClear: true
			});

			// model_feature_form
			$("#model_feature_form").submit(function (e) {

				e.preventDefault();
				let url = "{{ route('addCarFeatures') }}";
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
								title: 'Vehicle Features Response',
								text: res.msg,
								footer: '<a href> <i> Need help </i>?</a>'
							});
						} else {
							Swal.fire({
								icon: 'warning',
								title: 'Vehicle Features Response',
								text: res.msg,
								footer: '<a href> <i> Need help </i>?</a>'
							});
						}

						setTimeout(() => {
							location.reload();
						}, 2000);
					},
					error: function(err) {
						console.error(err);
						Swal.fire({
							icon: 'warning',
							title: 'Vehicle Features Response',
							text: res.msg,
							footer: '<a href> <i> Need help </i>?</a>'
						});
						setTimeout(() => {
							location.reload();
						}, 2500);
					}
				});
			});
			// model_feature_form.end
		});
		// $(document).ready( function ()





		// functions

		// edit the make
		function editCarMake(id) {
			// call that make
			let payload = {
				id
			};
			$("#model_id").val(id);
			$.ajax({
				url: "{{ route('viewModel') }}",
				data: payload,
				method: 'get',
				success: function(res) {
					console.log(res);
					$("#model_name").val(res.name);
					$("#model_label").val(res.label);
					$("#model_price").val(res.price);
					$("#model_manYr").val(res.manYr);
					$("#model_mileage").val(res.mileage);
					$("#model_condition").val(res.condition);
					$("#model_bodyType").val(res.bodyType);
					$("#model_colour").val(res.colour);
					$("#model_fuel").val(res.fuel);
					$("#model_transmission").val(res.transmission);
					$("#model_duty").val(res.duty);
					$("#model_interior").val(res.interior);
					$("#model_cc").val(res.cc);
					$("#model_type").val(res.model_id);
					$("#model_cat").val(res.make_id);
					$("#speed").val(res.speed);
					$("#model_description").val(res.description);

				},
				error: function(err) {
					console.error(err);
					Swal.fire({
						icon: 'warning',
						title: 'Vehicle Model Response',
						text: res.msg,
						footer: '<a href> <i> Need help </i>?</a>'
					});
				}

			});
			$("#url").val('E');
			$("#modelModal").modal();
			// Swal.fire({
			//     icon: 'info',
			//     title: 'Edit Make',
			//     text: id,
			//     footer: '<a href> <i> Need help </i>?</a>'
			// });
		}

		// delete the make
		function delCarMake(id) {
			$("#process_data").html(`
				<h3>Are you sure you want to remove this record?</h3>
				<button class="btn btn-info" id="procced_del"> Okay </button>
			`);

			$("#processingModal").modal();


			$("#procced_del").click(()=>{
				let payload = {
					id
				};
				$("#make_id").val(id);
				$.ajax({
					url: "{{ route('delModel') }}",
					data: payload,
					method: 'get',
					success: function(res) {
						console.log(res);
						if (res.code == 1) {
							Swal.fire({
								icon: 'info',
								title: 'Vehicle Model Response',
								text: res.msg,
								footer: '<a href> <i> Need help </i>?</a>'
							});
						} else {
							Swal.fire({
								icon: 'warning',
								title: 'Vehicle Model Response',
								text: res.msg,
								footer: '<a href> <i> Need help </i>?</a>'
							});
						}

						setTimeout(() => {
							location.reload();
						}, 2000);

					},
					error: function(err) {
						console.error(err);
						Swal.fire({
							icon: 'warning',
							title: 'Vehicle Model Response',
							text: res.msg,
							footer: '<a href> <i> Need help </i>?</a>'
						});
						setTimeout(() => {
							// location.reload();
						}, 2000);
					}

				});
				// $.ajax

			});
				// $("#procced_del").click
			// Swal.fire({
			//     icon: 'error',
			//     title: 'You are about to Delete this Make',
			//     text: id,
			//     footer: '<a href> <i> Need help </i>?</a>'
			// });

		}

		// add features to the vehicle
		function addCarFeature(id, name='') {
			$("#feature_model_name").val(name);
			$("#feature_model_id").val(id);

			// open screen
			$("#vehFeaturesModal").modal();


			$('#features_tb').DataTable().destroy();
			$('#features_tb').DataTable({
				processing: true,
				serverSide: true,
				ajax: { 
					url: "{{ route('listCarFeatures') }}",
					data: function (d){
						d.model_id = $("#feature_model_id").val();
					},
				},
				columns: [{
						data: 'DT_RowIndex',
						name: 'DT_RowIndex'
					},
					{
						data: 'feature_name'
					},
					{
						data: 'model_name'
					},					
					{
						data: 'created_at',
					},
					{
						data: 'action',
						name: 'action',
						orderable: true,
						searchable: true
					},
				]
			});
			// #features_tb

		}



		// functions.end
	</script>
@endpush