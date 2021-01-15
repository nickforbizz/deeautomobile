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
								<h2>Cars <em>Grids</em></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="on-grids wow fadeIn" data-wow-delay="0.5s" data-wow-duration="1s">
		<div class="container">
			<div class="recent-car-content">
				<div class="row">
					<div class="col-md-12">
						<div class="row">

							@foreach($cars as $key => $car)
							<div class="col-md-4">
								<div class="car-item">
									<div class="thumb-content">
										<div class="car-banner">
											<a href="{{ route('singleCar', ['checkProduct' =>$car->id]) }}">{{ $car->label }}</a>
										</div>
										<div class="thumb-inner">
											<a href="{{ route('singleCar', ['checkProduct' =>$car->id]) }}"><img src="{{ asset(str_replace('public', 'storage',$car->modelsImgs[0]->media_link)) }}" alt="{{ $car->name }}"></a>
										</div>
									</div>
									<div class="down-content">
										<a href="{{ route('singleCar', ['checkProduct' =>$car->id]) }}"><h4>{{ $car->name }}</h4></a>
										<span> {{ $car->price }}/= </span>
										<div class="line-dec"></div>
										<p style="min-height: 10em;"> {{ $car->description }} </p>
										<ul class="car-info">
											<li><div class="item"><i class="flaticon flaticon-calendar"></i><p> {{ $car->manYr }} </p></div></li>
											<li><div class="item"><i class="flaticon flaticon-speed"></i><p> {{ $car->speed }} p/h</p></div></li>
											<li><div class="item"><i class="flaticon flaticon-road"></i><p> {{ $car->mileage }} km</p></div></li>
											<li><div class="item"><i class="flaticon flaticon-fuel"></i><p> {{ $car->fuel }} </p></div></li>
										</ul>
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
				</div>
			</div>
		</div>
	</div>


@endsection

