@extends('Admin.layout.app')

@section('contents')




	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title">MODELS</h4>
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
						<a href="#">Models</a>
					</li>
				</ul>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="card-title">Vehicle Models</div>
							<div class="card-category"> Hello and welcome to vehicle models screen, here you will be able to access and manupilate all vehicle models </div>
						</div>

						<!-- row -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="d-flex align-items-center">
											<h4 class="card-title">Add Model</h4>
											<button class="btn btn-primary btn-round ml-auto" id="add_products_cat">
												<i class="fa fa-plus"></i>
												Add Model
											</button>
										</div>
									</div>

									<div class="card-body">
										<div class="table-responsive">
											<table id="tb_models" class="display table table-striped table-hover" >
												<thead>
													<tr>
														<th>#</th>
														<th> Make </th>
														<th> Name </th>
														<th> Description </th>
														<th>CreatedAt</th>
														<th>Action</th>
													</tr>
												</thead>
												
											</table>
										</div>
										<!-- .table-responsive -->

										<section>
											<!-- Modal -->
											<div class="modal fade" id="product_catsModal" tabindex="-1" role="dialog" aria-labelledby="product_catsModalLabel" aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content">

														<div class="modal-body">
															<div class="modal-body">
															<form class="form" id="model_form">
																@csrf
																<input type="hidden" name="url" id="url" value="A">
																<div class="form-group ">
																	<label for="make_id">Category:</label>
																	<select class="form-control form-control-line" id="make_id" name="make_id" required>
																		<option disabled selected> -- select make -- </option>
																		@foreach($makes as $make)
																		<option value="{{$make->id}}"> {{$make->name}} </option>
																		@endforeach
																	</select>
																</div>

																<div class="form-group">
																	<label for="model_name">Name:</label>
																	<input type="text" class="form-control" id="model_name" name="title" required>
																	<input type="hidden" class="form-control" id="model_id" name="model_id">
																</div>
																<div class="form-group">
																	<label for="description">Description:</label>
																	<input type="text" class="form-control" id="description" name="description" required>
																</div>
																<!-- <div class="form-group imgGroup">
																	<label for="make_img">Image:</label>
																	<input type="file" name="make_img" class="form-control" id="make_img">
																	<img id="blah" src="#" alt="your image" height="50px"/>
																</div> -->
																<div class="form-group">
																	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																	<button type="submit" class="btn btn-info" >submit</button>
																</div>
																</form>
															</div>
														</div>
														<div class="modal-footer">

														</div>
													</div>
												</div>
											</div>
										</section>


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

		
		$(document).ready( function () {
			$('#tb_models').DataTable({
				processing: true,
				serverSide: true,
				ajax: "{{ route('listcarModels') }}",
				columns: [
					{data: 'DT_RowIndex', name: 'DT_RowIndex'},
					{data: 'make'},
					{data: 'name'},
					{data: 'description'},
					{data: 'created_at',},
					{
						data: 'action', 
						name: 'action', 
						orderable: true, 
						searchable: true
					},
				]
			});
			// #tb_models

			$("#add_products_cat").click(() => {
				$("#model_form")[0].reset();
				$(".imgGroup").show();
				$("#url").val('A');
				$("#product_catsModal").modal();
			});

			$("#make_img").change(function() {
				readURL(this);
			});

			
			// submit data for make
			$("#model_form").submit(function(e) {
				e.preventDefault();
				if($("#make_id").val() == null){
					Swal.fire({
							icon: 'info',
							title: 'Make Response',
							text: "The category must be selected",
						});
				}else{
					
					let url_flag = $("#url").val();
					let url = '';
					(url_flag == 'A') ? url = "{{ route('addcarModels') }}" : url = "{{ route('editcarModels') }}";
					let payload = new FormData(this);

					$.ajax({
						url: url,
						data: payload,
						method: 'post',
						cache: false,
						contentType: false,
						processData: false,
						success: function (res){
							console.log(res);
							if (res.code == 1) {
								Swal.fire({
									icon: 'info',
									title: 'Model Response',
									text: res.msg,
									footer: '<a href> <i> Need help </i>?</a>'
								}).then(() => {
									$('#tb_models').DataTable().ajax.reload();
									$("#product_catsModal").modal('hide');
								});
							} else {
								Swal.fire({
									icon: 'warning',
									title: 'Model Response',
									text: res.msg,
									footer: '<a href> <i> Need help </i>?</a>'
								}).then(() => {
									$('#tb_models').DataTable().ajax.reload();
									$("#product_catsModal").modal('hide');
								});
							}

						
						}, error: function (err){
							console.error(err);
							Swal.fire({
								icon: 'warning',
								title: 'Model Response',
								text: res.msg,
								footer: '<a href> <i> Need help </i>?</a>'
							}).then(() => {
									$('#tb_models').DataTable().ajax.reload();
									$("#product_catsModal").modal('hide');
								});
						}
					});

				}
			});
		});
		// $(document).ready( function ()


		// functions

		// edit the make
		function editCarMake(id) {
			// call that make
			$(".imgGroup").hide();
			let payload = {id};
			$("#model_id").val(id);
			$.ajax({
				url: "{{ route('viewcarModel') }}",
				data: payload,
				method: 'get',
				success: function (res){
					console.log(res);
					$("#model_id").val(res.id);
					$("#make_id").val(res.make_id);
					$("#model_name").val(res.name);
					$("#description").val(res.description);
					
				}, error: function (err){
					console.error(err);
					Swal.fire({
						icon: 'warning',
						title: 'Model Response',
						text: res.msg,
						footer: '<a href> <i> Need help </i>?</a>'
					});
				}

			});
			$("#url").val('E');
			$("#product_catsModal").modal();
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
				title: 'You are about to Delete this Model',
				text: id,
				footer: '<a href> <i> Need help </i>?</a>'
			}).then(function(){
				let payload = {id};
				$.ajax({
					url: "{{ route('delcarModel') }}",
					data: payload,
					method: 'get',
					success: function (res){
						console.log(res);
						if (res.code == 1) {
							Swal.fire({
								icon: 'info',
								title: 'Model Response',
								text: res.msg,
								footer: '<a href> <i> Need help </i>?</a>'
							}).then(() => { $('#tb_models').DataTable().ajax.reload() });
						} else {
							Swal.fire({
								icon: 'warning',
								title: 'Model Response',
								text: res.msg,
								footer: '<a href> <i> Need help </i>?</a>'
							}).then(() => { $('#tb_models').DataTable().ajax.reload() });
						}

						
						
					}, error: function (err){
						console.error(err);
						Swal.fire({
							icon: 'warning',
							title: 'Model Response',
							text: res.msg,
							footer: '<a href> <i> Need help </i>?</a>'
						});
					}

				});
			}).catch(function(reason){
				Swal.fire({
					icon: 'info',
					title: 'Make Response',
					text: 'This will not be deleted',
					footer: '<a href> <i> Need help </i>?</a>'
				});
			});

		}
		// functions.end
	</script>
@endpush 