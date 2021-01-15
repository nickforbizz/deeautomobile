@extends('Admin.layout.app')

@section('contents')




	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title"> Features </h4>
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
						<a href="#"> features </a>
					</li>
				</ul>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="card-title"> Features </div>
							<div class="card-category"> Hello and welcome to features screen, here you will be able to access and manupilate all features </div>
						</div>

						<!-- row -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="d-flex align-items-center">
											<h4 class="card-title">Add Feature</h4>
											<button class="btn btn-primary btn-round ml-auto" id="add_veh_feature">
												<i class="fa fa-plus"></i>
												Add Feature
											</button>
										</div>
									</div>
									<div class="card-body">	


										<div class="table-responsive mt-4">
											<table id="tb_veh_features" class="display table table-striped table-hover" >
												<thead>
													<tr>
														<th>#</th>
														<th> Name</th>
														<th> Description </th>
														<th>CreatedAt</th>
														<th>Action</th>
													</tr>
												</thead>
												
											</table>
										</div>
										<!-- .table-responsive -->

										<section class="section_modals">

											<!-- Modal -->
											<div class="modal fade" id="myModal" role="dialog">
												<div class="modal-dialog">

													<!-- Modal content-->
													<div class="modal-content">
														<div class="modal-header headNav">
															<h4 class="modal-title">Add|Edit Vehicle Features</h4>
															<button type="button" class="close" data-dismiss="modal">&times;</button>
														</div>
														<div class="modal-body">


															<form class="form" id="veh_features_form">

																@csrf
																<input type="hidden" name="url" id="url" value="A">
																<div class="form-group">
																	<label for="veh_feature_name">Name:</label>
																	<input type="text" class="form-control" id="veh_feature_name" placeholder="Your feature ..." name="veh_feature_name">
																	<input type="hidden" class="form-control" id="veh_feature_id" name="veh_feature_id">
																</div>

																<div class="form-group">
																	<label for="description">Description:</label>
																	<input type="text" class="form-control" id="description" placeholder="Your feature ..." name="description">
																</div>

																<div class="form-group">
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
			$('#tb_veh_features').DataTable({
				processing: true,
				serverSide: true,
				ajax: "{{ route('listFeatures') }}",
				columns: [{
						data: 'DT_RowIndex',
						name: 'DT_RowIndex'
					},
					{
						data: 'name'
					},
					{
						data: 'description'
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
			// #tb_veh_features



			// add make
			$("#add_veh_feature").click(() => {
				$("#url").val('A');
				$("#veh_features_form")[0].reset();	
				$("#myModal").modal();
			});

			// submit data for make
			$("#veh_features_form").submit(function(e) {
				e.preventDefault();
				let url_flag = $("#url").val();
				let url = '';
				(url_flag == 'A') ? url = "{{ route('addFeatures') }}": url = "{{ route('editFeatures') }}";
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
							}).then(() => location.reload());
						} else {
							Swal.fire({
								icon: 'warning',
								title: 'Vehicle Feature Response',
								text: res.msg,
								footer: '<a href> <i> Need help </i>?</a>'
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
						}).then(() => location.reload());
						
					}
				});
			});
		});
		// $(document).ready( function ()


		// functions

		// edit the make
		function editCarMake(id) {
			// call that make
			let payload = {
				id
			};
			$("#veh_feature_id").val(id);
			$.ajax({
				url: "{{ route('viewFeature') }}",
				data: payload,
				method: 'get',
				success: function(res) {
					console.log(res);
					$("#veh_feature_name").val(res.name);
					$("#description").val(res.description);

				},
				error: function(err) {
					console.error(err);
					Swal.fire({
						icon: 'warning',
						title: 'Vehicle Feature Response',
						text: res.msg,
						footer: '<a href> <i> Need help </i>?</a>'
					});
				}

			});
			$("#url").val('E');
			$("#myModal").modal();
			// Swal.fire({
			//     icon: 'info',
			//     title: 'Edit Make',
			//     text: id,
			//     footer: '<a href> <i> Need help </i>?</a>'
			// });
		}

		// delete the make
		function delCarMake(id) {
			Swal.fire({
				icon: 'error',
				title: 'You are about to Delete this Feature',
				text: id,
				footer: '<a href> <i> Need help </i>?</a>'
			}).then(() => {
				let payload = {
					id
				};
				$("#veh_feature_id").val(id);
				$.ajax({
					url: "{{ route('delFeature') }}",
					data: payload,
					method: 'get',
					success: function(res) {
						console.log(res);
						if (res.code == 1) {
							Swal.fire({
								icon: 'info',
								title: 'Vehicle Feature Response',
								text: res.msg,
								footer: '<a href> <i> Need help </i>?</a>'
							}).then(() => location.reload());;
						} else {
							Swal.fire({
								icon: 'warning',
								title: 'Vehicle Feature Response',
								text: res.msg,
								footer: '<a href> <i> Need help </i>?</a>'
							}).then(() => location.reload());;
						}				

					},
					error: function(err) {
						console.error(err);
						Swal.fire({
							icon: 'warning',
							title: 'Vehicle Feature Response',
							text: res.msg,
							footer: '<a href> <i> Need help </i>?</a>'
						});
					}

				});

			});

		}

		// functions.end
	</script>
@endpush  