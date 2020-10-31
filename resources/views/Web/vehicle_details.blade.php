@extends('Web.layout.app') 
            
            @section('contents') 

    <section>
        <article class="page_banner">
            <div class="page_banner-text">
                <p>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Homepage</a></li>
                            <li class="breadcrumb-item"><a href="#">Cars</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Car Details</li>
                        </ol>
                    </nav>
                </p>
                <h4>CAR DETAILS</h4>

            </div>

        </article>

    </section>


    <section class="vehicle_details">
        <div class="container mt-5">
            <div class="row shadow">
                <div class="col-sm-6">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            
                            @foreach($modelsImgs as $carImg)
                                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->iteration }}" @if($loop->iteration == 1) class="active" @endif></li>
                            @endforeach
                        </ol>
                        <div class="carousel-inner">
                            @foreach($modelsImgs as $carImg)
                                <div class="carousel-item {{$loop->iteration == 1 ? 'active' : '' }}">
                                    <img class="d-block w-100 cover cardetails_carousel" height="300px" src="{{ asset(str_replace('public', 'storage',$carImg->media_link)) }}" alt="First slide">
                                </div>
                            @endforeach
                            
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <!-- .carousel -->
                </div>
                <div class="col-sm-6">
                    <h4>{{ $car->name }}</h4>
                    <h5>Ksh {{ $car->price }}</h5>
                    <p class="mt-3">
                        {{ $car->description }}
                    </p>

                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <td><i class="fa fa-calendar mr-2" aria-hidden="true"> {{ $car->manYr }}</i></td>
                                <td><i class="fas fa-tachometer-alt mr-2"> {{ $car->speed }} km/h</i></td>
                                <td><i class="fa fa-road" aria-hidden="true"> {{ $car->mileage }} km</i></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-gas-pump mr-2" aria-hidden="true"> {{ $car->fuel }} </i></td>
                                <td><i class="fas fa-oil-can mr-2" aria-hidden="true"> {{ $car->transmission }} </i></td>
                                <td><i class="fas fa-paint-roller mr-2" aria-hidden="true"> {{ $car->colour }} </i></td>
                            </tr>
                            <tr>
                                <td><i class="far fa-closed-captioning mr-2" aria-hidden="true"> {{ $car->cc }} </i></td>
                                <td><i class="fa fa-calendar mr-2" aria-hidden="true"> 2018</i></td>
                                <td><i class="fa fa-calendar mr-2" aria-hidden="true"> 2018</i></td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
            <!-- .row -->

            <div class="row mt-5">


                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Additional Features</h5>
                            <p class="card-text">


                                <div class="row">
                                    @if(count($veh_features) < 1)
                                        <div class="col-sm-12"> <p class="text-center">No Available Feature </p> </div>
                                    @else    
                                        @foreach($veh_features as $feature)
                                            <div class="col-sm-3 wow headShake" data-wow-duration="1000ms" data-wow-delay="600ms">
                                                <i class="fa fa-check" aria-hidden="true" style="font-size: larger; color: #028fcc;"></i>
                                                {{ $feature->feature_name }}
                                            </div>
                                        @endforeach
                                    @endif    
                                   
                                </div>
                            </p>

                        </div>
                    </div>
                </div>

                
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title ">Interested?</h5>
                            <hr>
                            <h6 class="card-subtitle mb-2 text-muted mt-4">Leave us a message</h6>
                            <button class="btn btn-info btn-rounded" id="requestoffer-cta">Ksh /=  Make an Offer </button>
                        </div>
                    </div>
                </div>

            </div>
            <!-- .row -->

            <article class="simiral_vehicles mt-4">
                <div class="header-simiral_vehicles">
                    <p><i class="fas fa-car "></i></p>
                    <h4 style="position: relative">
                        <span class="Xunderline"> Simiral Cars </span>
                    </h4>
                    <hr>
                </div>
                <div class="row">

                    @foreach($cars as $car)
                        <div class="col-sm-4 mb-3">
                            <div class="card product_card">
                                <a href="{{ route('viewvehicle_details', ['checkProduct' =>$car->id]) }}" class="linkdiv">
                                <img class="card-img-top" src="{{ asset(str_replace('public', 'storage',$car->modelsImgs[0]->media_link)) }}" alt="Card image cap">
                                <div class="card-body">
                                    <span class="card_label">{{ $car->label }}</span>
                                    <h5 class="card-title">{{ $car->name }}</h5>
                                    <p class="card-text product_card-text">{{ $car->description }}</p>
                                </div>
                                </a>

                                <div class="card-body">
                                    <p class="justify-content-around">
                                        <i class="fa fa-calendar mr-2" aria-hidden="true"> {{ $car->manYr }} </i>
                                        <i class="fa fa-tachometer mr-2"> {{ $car->speed }} km/h</i>
                                        <i class="fa fa-road" aria-hidden="true"> {{ $car->mileage }} km</i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- .col-sm-4 -->
                    @endforeach

                   
                </div>
                <!-- .row -->
            </article>

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


  

    @stop

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