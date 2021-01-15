@extends('Admin.layout.app')

@section('contents')




	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title">SETTINGS</h4>
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
						<a href="#">settings</a>
					</li>
				</ul>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="card-title">Settings</div>
							<div class="card-category"> Hello and welcome to settings screen, here you will be able to access and manupilate all settings </div>
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
															<i class="flaticon-paint-palette"></i>
														</div>
													</div>
													<div class="col-7 col-stats">
														<div class="numbers">
															<p class="card-category">System Parameters</p>
															<h4 class="card-title"></h4>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>



						<div class="card-footer">
							We offer the best
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>



@endsection