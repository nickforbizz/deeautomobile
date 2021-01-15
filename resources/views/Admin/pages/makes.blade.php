@extends('Admin.layout.app')

@section('contents')




	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title">Make</h4>
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
						<a href="#">make</a>
					</li>
				</ul>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="card-title">Make</div>
							<div class="card-category"> Hello and welcome to /module/ screen, here you will be able to access and manupilate all /module/ </div>
						</div>

						<!-- row -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="d-flex align-items-center">
											<h4 class="card-title">Add Make</h4>
											<button class="btn btn-primary btn-round ml-auto" id="add_products_cat">
												<i class="fa fa-plus"></i>
												Add Make
											</button>
										</div>
									</div>


									<div class="card-body">										

										<div class="table-responsive">
											<table id="tb_makes" class="display table table-striped table-hover" >
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

										<section>
											<!-- Modal -->
											<div class="modal fade" id="product_catsModal" tabindex="-1" role="dialog" aria-labelledby="product_catsModalLabel" aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content">

														<div class="modal-body">
															<div class="modal-body">
															<form class="form" id="make_form">
																@csrf
																<input type="hidden" name="url" id="url" value="A">
																<div class="form-group">
																	<label for="make_name">Name:</label>
																	<input type="text" class="form-control" id="make_name" placeholder="Enter name ..." name="title">
																	<input type="hidden" class="form-control" id="make_id" name="make_id">
																</div>
																<div class="form-group">
																	<label for="description">Description:</label>
																	<input type="text" class="form-control" id="description" placeholder="Enter description ..." name="description">
																</div>
																<div class="form-group imgGroup">
																	<label for="make_img">Image:</label>
																	<input type="file" name="make_img" class="form-control" id="make_img">
																	<img id="blah" src="#" alt="your image" height="50px"/>
																</div>
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
			$('#tb_makes').DataTable({
				processing: true,
				serverSide: true,
				ajax: "{{ route('listMakes') }}",
				columns: [
					{data: 'DT_RowIndex', name: 'DT_RowIndex'},
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
			// #tb_makes  

			$("#add_products_cat").click(() => {
				$("#make_form")[0].reset();
				$("#url").val('A');
				$(".imgGroup").show();
				$("#product_catsModal").modal();
			});

			$("#make_img").change(function() {
				$(".imgGroup").show();
				$("#url").val('A');
				readURL(this);
			});

			

			// submit data for make
			$("#make_form").submit(function(e) {
				e.preventDefault();
				let url_flag = $("#url").val();
				let url = '';
				(url_flag == 'A') ? url = "{{ route('addMakes') }}" : url = "{{ route('editMakes') }}";
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
								title: 'Make Response',
								text: res.msg,
								footer: '<a href> <i> Need help </i>?</a>'
							}).then(() => {
								$('#tb_makes').DataTable().ajax.reload();
								$("#product_catsModal").modal('hide');
							});
						} else {
							Swal.fire({
								icon: 'warning',
								title: 'Make Response',
								text: res.msg,
								footer: '<a href> <i> Need help </i>?</a>'
							}).then(() => {
								$('#tb_makes').DataTable().ajax.reload();
								$("#product_catsModal").modal('hide');
							});
						}

						
					}, error: function (err){
						console.error(err);
						Swal.fire({
							icon: 'warning',
							title: 'Make Response',
							text: res.msg,
							footer: '<a href> <i> Need help </i>?</a>'
						}).then(() => {
							$('#tb_makes').DataTable().ajax.reload();
							$("#product_catsModal").modal('hide');
						});
						
					}
				});
			});
		});
		// $(document).ready( function ()


		// functions

		// edit the make
		function editCarMake(id) {
			// call that make
			$(".imgGroup").hide();
			let payload = {id};
			$("#make_id").val(id);
			$.ajax({
				url: "{{ route('viewMake') }}",
				data: payload,
				method: 'get',
				success: function (res){
					console.log(res);
					$("#make_name").val(res.name);
					$("#description").val(res.description);
					
				}, error: function (err){
					console.error(err);
					Swal.fire({
						icon: 'warning',
						title: 'Make Response',
						text: res.msg,
						footer: '<a href> <i> Need help </i>?</a>'
					});
				}

			});
			$("#url").val('E');
			$("#product_catsModal").modal();
			
		}

		// delete the make
		function delCarMake(id) {
			Swal.fire({
				icon: 'error',
				title: 'You are about to Delete this Make',
				text: id,
				footer: '<a href> <i> Need help </i>?</a>'
			}).then(function(){
				let payload = {id};
				$("#make_id").val(id);
				$.ajax({
					url: "{{ route('delMake') }}",
					data: payload,
					method: 'get',
					success: function (res){
						console.log(res);
						if (res.code == 1) {
							Swal.fire({
								icon: 'info',
								title: 'Make Response',
								text: res.msg,
								footer: '<a href> <i> Need help </i>?</a>'
							}).then(() => {
								$('#tb_makes').DataTable().ajax.reload();
								$("#product_catsModal").modal('hide');
							});
						} else {
							Swal.fire({
								icon: 'warning',
								title: 'Make Response',
								text: res.msg,
								footer: '<a href> <i> Need help </i>?</a>'
							}).then(() => {
								$('#tb_makes').DataTable().ajax.reload();
								$("#product_catsModal").modal('hide');
							});
						}

						
					}, error: function (err){
						console.error(err);
						Swal.fire({
							icon: 'warning',
							title: 'Make Response',
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