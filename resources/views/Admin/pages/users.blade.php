@extends('Admin.layout.app')

@section('contents')
	<div class="content">
		<div class="page-inner">


			<div class="page-header">
				<h4 class="page-title">Users</h4>
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
						<a href="{{ route('viewusers') }}">Users</a>
					</li>
				</ul>
			</div>



			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="card-title"> Manage Users  </div>
							<div class="card-category">Hello and welcome to users screen, here you will be able to access and manupilate all users</div>
						</div>


						<!-- row -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="d-flex align-items-center">
											<h4 class="card-title">Add User</h4>
											<button class="btn btn-primary btn-round ml-auto" id="add_user">
												<i class="fa fa-plus"></i>
												Add User
											</button>
										</div>
									</div>

									
									<div class="card-body">										

										<div class="table-responsive">
											<table id="users_tb" class="display table table-striped table-hover" >
												<thead>
													<tr>
														<th>#</th>
														<th> Name</th>
														<th> email </th>
														<th>CreatedAt</th>
														<th>Action</th>
													</tr>
												</thead>
												
											</table>
										</div>
										<!-- .table-responsive -->

										<section>
											<!-- Modal -->
											<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content">

														<div class="modal-body">
															<div class="modal-body">
															<form class="form row" id="user_form">
																@csrf
																<input type="hidden" name="url" id="url" value="A">
																<div class="form-group col-sm-6">
																	<label for="user_name">* Name:</label>
																	<input type="text" class="form-control" id="user_name" name="name" placeholder="your name">
																	<input type="hidden" class="form-control" id="user_id" name="user_id" placeholder="your name" required>
																</div>
																<div class="form-group col-sm-6">
																	<label for="email">* Email:</label>
																	<input type="email" class="form-control" id="email" name="email" placeholder="your email" required>
																</div>

																<div class="form-group imgGroup col-sm-6">
																	<label for="password">* password:</label>
																	<input type="password" class="form-control" id="password" name="password" placeholder="your password" >
																</div>

																<div class="form-group imgGroup col-sm-6">
																	<label for="password">* Confirm password :</label>
																	<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="confirm password">
																</div>
																
																<div class="form-group imgGroup">
																	<label for="profile_photo">Image:</label>
																	<input type="file" name="profile_photo" class="form-control" id="profile_photo">
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

	$(document).ready(function () {
		// Add Row
		$('#users_tb').DataTable({
			processing: true,
			serverSide: true,
			ajax: "{{ route('listusers') }}",
			columns: [
				{data: 'DT_RowIndex', name: 'DT_RowIndex'},
				{data: 'name'},
				{data: 'email'},
				{data: 'created_at',},
				{
					data: 'action', 
					name: 'action', 
					orderable: true, 
					searchable: true
				},
			]
		});




		$("#add_user").click(() => {
			$("#user_form")[0].reset();
			$(".imgGroup").show();
			$("#url").val('A');
			$("#userModal").modal();
		});

		$("#profile_photo").change(function() {
			readURL(this);
		});

		// submit data for make
		$("#user_form").submit(function(e) {
			e.preventDefault();
			let url_flag = $("#url").val();
			let url = '';
			(url_flag == 'A') ? url = "{{ route('addusers') }}" : url = "{{ route('editusers') }}";
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
							title: 'The user process Response',
							text: res.msg,
							footer: '<a href> <i> Need help </i>?</a>'
						}).then(()=> location.reload());
					} else {
						Swal.fire({
							icon: 'warning',
							title: 'The user process Response',
							text: res.msg,
							footer: '<a href> <i> Need help </i>?</a>'
						}).then(()=> location.reload());
					}

					
				}, error: function (err){
					console.error(err);
					Swal.fire({
						icon: 'warning',
						title: 'The user process Response',
						text: res.msg,
						footer: '<a href> <i> Need help </i>?</a>'
					}).then(()=> location.reload());
					
				}
			});
		});


	});



	// edit the make
	function edituser(id) {
		// call that make
		$(".imgGroup").hide();
		let payload = {id};
		$("#user_id").val(id);
		$.ajax({
			url: "{{ route('viewUser') }}",
			data: payload,
			method: 'get',
			success: function (res){
				console.log(res);
				$("#user_name").val(res.name);
				$("#email").val(res.email);
				
			}, error: function (err){
				console.error(err);
				Swal.fire({
					icon: 'warning',
					title: 'The user process Response',
					text: res.msg,
					footer: '<a href> <i> Need help </i>?</a>'
				});
			}

		});
		$("#url").val('E');
		$("#userModal").modal();
		// Swal.fire({
		//     icon: 'info',
		//     title: 'Edit Make',
		//     text: id,
		//     footer: '<a href> <i> Need help </i>?</a>'
		// });
	}

	// delete the make
	function deluser(id) {
		Swal.fire({
			icon: 'error',
			title: 'You are about to Delete this record',
			text: id,
			footer: '<a href> <i> Need help </i>?</a>'
		}).then(function(){
			let payload = {id};
			$("#user_id").val(id);
			$.ajax({
				url: "{{ route('delUser') }}",
				data: payload,
				method: 'get',
				success: function (res){
					console.log(res);
					if (res.code == 1) {
						Swal.fire({
							icon: 'info',
							title: 'The user process Response',
							text: res.msg,
							footer: '<a href> <i> Need help </i>?</a>'
						});
					} else {
						Swal.fire({
							icon: 'warning',
							title: 'The user process Response',
							text: res.msg,
							footer: '<a href> <i> Need help </i>?</a>'
						});
					}

					setTimeout(()=>{
							location.reload();
						},1300);
					
				}, error: function (err){
					console.error(err);
					Swal.fire({
						icon: 'warning',
						title: 'The user process Response',
						text: res.msg,
						footer: '<a href> <i> Need help </i>?</a>'
					});
				}

			});
		}).catch(function(reason){
			Swal.fire({
							icon: 'info',
							title: 'The user process Response',
							text: 'This will not be deleted',
							footer: '<a href> <i> Need help </i>?</a>'
						});
		});

	}
	// functions.end
</script>
@endpush