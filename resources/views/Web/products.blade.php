@extends('Web.layout.app') 
            
            @section('contents') 
    <section>
        <article class="page_banner">
            <div class="page_banner-text">
                <p>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Homepage</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Products</li>
                        </ol>
                    </nav>
                </p>
                <h4>What we got for you</h4>

            </div>

        </article>

    </section>


    <section>

        <div class="container">

            <!-- header -->
            <article class="Xsimiral_vehicles mt-4">
                <div class="header-simiral_vehicles">
                    <p><i class="fas fa-car "></i></p>
                    <h4>
                        <span class=""> What we got </span>
                    </h4>
                    <hr>
                </div>
            </article>

            <!-- search -->
            <article>
                <div class="xrow">
                    <div class="d-flex justify-content-center mb-4">
                        <div class="card" style="width: 70%;">
                            <div class="card-body">
                                <h5 class="card-title text-center">Quick Search</h5>
                                <h6 class="card-subtitle mb-2 text-muted text-center">Find waht you are looking for</h6>
                                <hr>
                                <div class="card-text">

                                    <form id="product-search" class="form">
                                        <div class="row">
                                            <!-- @csrf -->
                                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                            

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="make">Make</label>
                                                    <select name="make" id="make" class="form-control" required>
                                                        <option disabled selected> -- select make --</option>
                                                        @foreach($makes as $make)
                                                            <option value="{{ $make->id }}">{{ $make->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- .col-sm -->

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="brand">Brand</label>
                                                    <select name="brand" id="brand" class="form-control"  required>
                                                        <option disabled selected> -- select brand --</option>
                                                       
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- .col-sm -->

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="minprice">Min Price</label>
                                                    <input type="number" name="minprice" id="minprice" placeholder="Min price" class="form-control" >
                                                   
                                                </div>
                                            </div>
                                            <!-- .col-sm -->

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="maxprice">Max Price</label>
                                                    <input type="number" name="maxprice" id="maxprice" placeholder="Max price" class="form-control" >                                                    
                                                </div>
                                            </div>
                                            <!-- .col-sm -->
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="submit" class="form-control btn btn-info" value="Search">
                                                </div>
                                            </div>
                                            <!-- .col-sm -->
                                        </div>
                                        <!-- .row -->
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <!-- products -->
            <article>
                <div class="row" id="data-cars">


                        @foreach($cars as $car)
                            <div class="col-sm-4 mb-5">
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

    @stop

@push('scripts')

    <script>
        // 
        $(document).ready(function() {


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
            })

            $("#product-search").submit(function(e) {
                e.preventDefault();
                if ($("#make").val() == null || $("#brand").val() == null) {
                    Swal.fire({
                                icon: 'warning',
                                title: 'Vehicle Search Response',
                                text: 'Please Insert make or model',
                            })
                }else{
                    let url = "{{ route('searchvehicles') }}";
                    let payload = $("#product-search").serialize();
                    // payload._token = "{{ csrf_token() }}";

                    $.ajax({
                        url: url,
                        data: payload,
                        method: 'post',
                        success: function(res) {
                            console.log(res);
                            if (res.code == 1) {
                                if (res.msg.length > 0) {
                                    res.msg.map((item, i) => {
                                        let srcimg = (item.models_imgs[0].media_link.replace('public', 'storage'));
                                        let url = "{{ route('viewvehicle_details', ['checkProduct' =>':id']) }}";
                                        url = url.replace('%3Aid', item.id);
                                        console.log(url);
                                        $("#data-cars").html(`
                                        <div class="col-sm-4 mb-3">
                                            <div class="card product_card">
                                                <a href="${url}" class="linkdiv">
                                                <img class="card-img-top" src="/${srcimg}" alt="Card image cap">
                                                <div class="card-body">
                                                    <span class="card_label">${item.label}</span>
                                                    <h5 class="card-title">${item.name }</h5>
                                                    <p class="card-text product_card-text">${item.description }</p>
                                                </div>
                                                </a>

                                                <div class="card-body">
                                                    <p class="justify-content-around">
                                                        <i class="fa fa-calendar mr-2" aria-hidden="true"> ${item.manYr } </i>
                                                        <i class="fa fa-tachometer mr-2"> ${item.speed } km/h</i>
                                                        <i class="fa fa-road" aria-hidden="true"> ${item.mileage } km</i>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        `);
                                    })
                                }
                            }else {
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Vehicle Feature Response',
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
                                title: 'Vehicle Feature Response',
                                text: res.msg,
                                footer: '<a href> <i> Need help </i>?</a>'
                            }).then(()=>{
                                    location.reload();
                                });
                            
                        }
                    });

                }
            });
        });
    </script>

@endpush