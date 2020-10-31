@extends('Web.layout.app') 
            
            @section('contents') 

    <section>
        <!-- page container -->
        <div class="Xcontainer-fluid mx-auto">
            <div class="Xrow">
                <!-- <div class="col-sm-1">
                </div> -->

                <div class="Xcol-sm">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach($cars as $car)
                                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->iteration }}" @if($loop->iteration == 1) class="active" @endif></li>
                            @endforeach
                           
                        </ol>
                        <div class="carousel-inner graph">
                            @foreach($cars as $key => $car)
                                <div class="carousel-item {{$loop->iteration == 1 ? 'active' : '' }}">
                                    <a href="{{ route('viewvehicle_details', $car->id) }}">
                                        <img class="d-block w-100 cover" height="400px" src="{{ asset(str_replace('public', 'storage',$car->modelsImgs[0]->media_link)) }}" alt="First slide">
                                    </a>
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
                    <div class="container">
                        <div class="banner banner_transparent card upbanner">
                            <div class="Xbanner_transparent">
                                <div class="float-md-right ">
                                    <a class="btn btn-primary btn-lg" href="{{ route('viewcontact') }}">Let's Connect</a>
                                </div>
                                <p>DeeAutomobile</p>
                                <h5 class="card-title">Motto of the company here</h5>
                            </div>
                        </div>
                        <div class="banner">
                            <div class="card br-0">
                                <div class="card-body">
                                    <div class="m-3">

                                        <div class="row mt-5">
                                            <!-- <div class="col-sm-2"></div> -->
                                            
                                            <div class="col-sm">
                                                <div class="form-group d-flex justify-content-center">
                                                    <div class="input-group w-50">
                                                        <input type="text" id="search_items" class="form-control search_items" placeholder="What are you looking for?">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="search_items_btn">Go</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- .form-group -->

                                            </div>
                                        </div>
                                        <!-- .row -->

                                        <div class="row  mt-3">
                                            <!-- <div class="col-sm-12 text-center">
                                                <div class="list-group Xlist_row products_cats">
                                                    <a href="#" class="list-group-item list-group-item-action active">
                                                      All
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action">Toyota</a>
                                                    <a href="#" class="list-group-item list-group-item-action">Nissan</a>
                                                    <a href="#" class="list-group-item list-group-item-action">Honda</a>
                                                    <a href="#" class="list-group-item list-group-item-action">Subaru</a>
                                                </div>
                                            </div> -->
                                            <div class="col-sm mt-3">
                                                <div class="row">


                                                @foreach($cars as $car)
                                                    <div class="col-sm-4 mb-5">
                                                        <div class="card product_card">
                                                            <a href="{{ route('viewvehicle_details', ['checkProduct' =>$car->id]) }}"class="linkdiv">
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
                                            </div>
                                        </div>
                                        <!-- .row -->
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- .banner -->
                    </div>
                </div>
                <!-- .col-sm -->

                <!-- <div class="col-sm-1">
                </div> -->
            </div>
            <!-- .row -->

            <section class="container mt-5 pt-5">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="text-center pb-3">What our Customers Says <i class="fa fa-quote-right" aria-hidden="true"></i></h3>
                    </div>
                    <!-- <div class="col-sm-4">
                        <img src="{{ asset('/Web/images/feedback.png') }}" class="w-100 cover" alt="feedback image">
                    </div> -->
                    <div class="col-sm-12">
                        


                        <div class="your-class slickcarousel">
                            @if(count($testimonials) < 1)
                                <h5 class="text-center">No testimonials at the moment </h5>
                            @else    
                                @foreach($testimonials as $testimony)
                                    <div class="card product_card mr-3" style="swidth: 18rem;">
                                        <img class="card-img-top" src="{{ asset(str_replace('public', 'storage',$testimony->image)) }}" alt="{{ $testimony->name }}">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $testimony->name }}</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">{{ $testimony->occupation }}</h6>
                                            <div class="card-text Ptestimonial" id="testmonydescr_{{$testimony->id}}">
                                                {{ $testimony->description }} <div></div>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0)" onclick="viewtestmonydescr(`{{$testimony->id}}`)" class="card-link"> view </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .product_card -->
                                @endforeach
                            @endif
                            
                            
                        </div>
                        <!-- .your-class .slickcarousel -->

                        <!-- <div class="feedback">
                            <div class="float-right mr-5"> <u>John Doe</u></div>
                            <p class="justify-content pt-5 pl-5">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque ipsa perspiciatis ullam soluta? Consequatur qui nemo corrupti natus perspiciatis omnis vero repudiandae earum dolore. Officiis dolores fugit saepe assumenda tempora?
                            </p>
                            <div class="feedback_cta ml-5 mt-5">
                                <a class="btn btn-sm btn-info" href="feedback.html">
                                    view all 
                                    <i class="fa fa-chevron-circle-right ml-3" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div> -->
                        <!-- .feedback -->


                    </div>
                </div>
            </section>

        </div>
        <!-- .page_container -->

    </section>


    <!-- modals -->
    <section>
        <div class="modal fade" id="testimonyModal" tabindex="-1" role="dialog" aria-labelledby="testimonyModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="modal-body">
                            <h4>Client Description</h4>    
                            <div class="testiomny_description"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
    <!-- modals.end -->


    @stop

@push('scripts')

    <script>
        $('.carousel.graph').carousel({
            pause: true,
            interval: false
        }).carousel(0);

        function viewtestmonydescr(id) {
            let text_descr = $("#testmonydescr_"+id).text();
            $(".testiomny_description").text(text_descr);
            $("#testimonyModal").modal();
        }
    </script>

@endpush