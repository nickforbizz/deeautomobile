@extends('Web.layout.app') 
            
            @section('contents') 


    <section>
        <article class="page_banner">
            <div class="page_banner-text">
                <p>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Homepage</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </p>
                <h4>Ask or leave us a message</h4>

            </div>

        </article>

    </section>


    <section>
        <div class="text-justify m-5 feedback_box">
            <div class="row">

                <div class="col-sm-12 text-center m-4">
                    <button class="btn btn-info btn-rounded pt-2 pb-2 pl-5 pr-5" id="bookride">Book A Ride</button>
                    <hr>
                </div>

                <div class="col-sm-6">
                    <div class="card" style="swidth: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Enquire More</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Please fill all the fields </h6>
                            <div class="card-text">
                                <form id="form-inquiry" class="form">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            @csrf
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" name="name" id="name" class="form-control" placeholder="your name ..." required/>
                                            </div>
                                        </div>
                                        <!-- .col-sm -->

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" name="email" id="email" class="form-control" placeholder="your email ..." required/>
                                            </div>
                                        </div>
                                        <!-- .col-sm -->

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="message">Message</label>
                                                <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="your message ..." required>                                                   
                                                </textarea>

                                            </div>
                                        </div>
                                        <!-- .col-sm -->

                                        <!-- .col-sm -->
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <input type="submit" class="form-control btn btn-info" value="Enquire">
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
                <!-- .col-sm-6 -->

                <div class="col-sm-6">
                    <img class="d-block w-100 cover cardetails_carousel" height="300px" src="{{ asset('/Web/images/Dodge-Challenger-SRT8-392-2011-03.jpg') }}" alt="Third slide">
                </div>
                <!-- .col-sm-6 -->
            </div>
            <!-- .row -->


        </div>
        <!-- .feedback_box -->
    </section>


    <!-- modal -->
    <section>
        <div class="modal fade" id="bookRideModal" tabindex="-1" role="dialog" aria-labelledby="bookRideModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-body">
                        <form id="bookride-form" class="form">
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
                                <label for="ridedate">Date of the ride?</label>
                                <input type="date" class="form-control" id="ridedate" name="date" aria-describedby="ridedate" required>
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
        $(document).ready(function() {


            // book ride
            $("#bookride").click(() => {
                $("#bookRideModal").modal();
                
                // send bookride-form
                $("#bookride-form").submit(function(e) {

                    e.preventDefault();
                    let url = "{{ route('bookride') }}";
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
                                }).then(()=>{
                                    location.reload();
                                });
                            } else if (res.code == -2) {
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Vehicle Feature Response',
                                    text: 'Ensure all field have data ',
                                    footer: '<a href> <i> Need help </i>?</a>'
                                }).then(()=>{
                                    location.reload();
                                });
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
                });
                // .bookride-form
            });




            // send inquiry form
            $("#form-inquiry").submit(function(e) {

                e.preventDefault();
                let url = "{{ route('sendfeedback') }}";
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
                            }).then(()=>{
                                location.reload();
                            });
                        } else if (res.code == -2) {
                            Swal.fire({
                                icon: 'warning',
                                title: 'Vehicle Feature Response',
                                text: 'Ensure all field have data ',
                                footer: '<a href> <i> Need help </i>?</a>'
                            }).then(()=>{
                                location.reload();
                            });
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
            });
            // .form-inquiry
        });
        // $(document).ready(
    </script>

@endpush