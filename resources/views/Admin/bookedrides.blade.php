@extends('Admin.layout.adminlayout') 
            
            @section('contents') 

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-1 text-gray-800">Booked Rides</h1>
                    <p class="mb-4">This a section where different Rides can be , Read, Updated and Deleted .</p>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-sm-12">
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Rides Info</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <!-- <button class="btn btn-sm btn-info mb-3" id="add_rides">Add</button> -->
                                        <table class="table table-bordered m-4" width="100%" cellspacing="0" id="tb_rides">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th> Name</th>
                                                    <th> Email </th>
                                                    <th> Mobile </th>
                                                    <th> Date of Ride </th>
                                                    <th>CreatedAt</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                        
                                        </table> 
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- .row -->

                    <section>
                        <!-- Modal -->
                        <div class="modal fade" id="ridesModal" tabindex="-1" role="dialog" aria-labelledby="ridesModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">

                                    <div class="modal-body">
                                        <div class="modal-body">
                                        <form class="form row" id="ride_form">
                                            @csrf
                                            <input type="hidden" name="url" id="url" value="A">
                                            <div class="form-group col-sm-6">
                                                <label for="make_name">Name:</label>
                                                <input type="text" class="form-control" id="make_name" name="name">
                                                <input type="hidden" class="form-control" id="ride_id" name="ride_id">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="email"> Email:</label>
                                                <input type="email" class="form-control" id="email" name="email">
                                            </div>

                                            <div class="form-group col-sm-6">
                                                <label for="mobile"> mobile:</label>
                                                <input type="text" class="form-control" id="mobile" name="mobile">
                                            </div>

                                            <div class="form-group col-sm-6">
                                                <label for="date"> date:</label>
                                                <input type="date" class="form-control" id="date" name="date">
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
                <!-- /.container-fluid -->


            

            @stop

            @push('scripts')
                <script>                

                   
                    $(document).ready( function () {
                        $('#tb_rides').DataTable({
                            processing: true,
                            serverSide: true,
                            ajax: "{{ route('listdriverequests') }}",
                            columns: [
                                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                                {data: 'name'},
                                {data: 'email'},
                                {data: 'mobile'},
                                {data: 'date'},
                                {data: 'created_at',},
                                {
                                    data: 'action', 
                                    name: 'action', 
                                    orderable: true, 
                                    searchable: true
                                },
                            ]
                        });
                        // #tb_rides

                        $("#add_rides").click(() => {
                            $("#ridesModal").modal();
                        });

                        $("#make_img").change(function() {
                            readURL(this);
                        });

                        // add make
                        $("#add_make").click(() => {
                            $(".imgGroup").show();
                            $("#url").val('A');
                            $("#myModal").modal();
                        });

                        // submit data for make
                        $("#ride_form").submit(function(e) {
                            e.preventDefault();
                            let url_flag = $("#url").val();
                            let url = '';
                            (url_flag == 'A') ? url = "{{ route('adddriverequests') }}" : url = "{{ route('editdriverequests') }}";
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
                                            title: 'Rides Response',
                                            text: res.msg,
                                            footer: '<a href> <i> Need help </i>?</a>'
                                        }).then(() => location.reload());
                                    } else {
                                        Swal.fire({
                                            icon: 'warning',
                                            title: 'Rides Response',
                                            text: res.msg,
                                            footer: '<a href> <i> Need help </i>?</a>'
                                        }).then(() => location.reload());
                                    }

                                }, error: function (err){
                                    console.error(err);
                                    Swal.fire({
                                        icon: 'warning',
                                        title: 'Rides Response',
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
                        $(".imgGroup").hide();
                        let payload = {id};
                        $("#ride_id").val(id);
                        $.ajax({
                            url: "{{ route('viewDriverequest') }}",
                            data: payload,
                            method: 'get',
                            success: function (res){
                                console.log(res);
                                $("#make_name").val(res.name);
                                $("#email").val(res.email);
                                $("#mobile").val(res.mobile);
                                $("#date").val(res.date);
                                
                            }, error: function (err){
                                console.error(err);
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Rides Response',
                                    text: res.msg,
                                    footer: '<a href> <i> Need help </i>?</a>'
                                });
                            }

                        });
                        $("#url").val('E');
                        $("#ridesModal").modal();
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
                            title: 'You are about to Delete this Make',
                            text: id,
                            footer: '<a href> <i> Need help </i>?</a>'
                        }).then(function(){
                            let payload = {id};
                            $("#ride_id").val(id);
                            $.ajax({
                                url: "{{ route('delDriverequest') }}",
                                data: payload,
                                method: 'get',
                                success: function (res){
                                    console.log(res);
                                    if (res.code == 1) {
                                        Swal.fire({
                                            icon: 'info',
                                            title: 'Rides Response',
                                            text: res.msg,
                                            footer: '<a href> <i> Need help </i>?</a>'
                                        }).then(() => location.reload());;
                                    } else {
                                        Swal.fire({
                                            icon: 'warning',
                                            title: 'Rides Response',
                                            text: res.msg,
                                            footer: '<a href> <i> Need help </i>?</a>'
                                        }).then(() => location.reload());
                                    }   
                                                                       
                                }, error: function (err){
                                    console.error(err);
                                    Swal.fire({
                                        icon: 'warning',
                                        title: 'Rides Response',
                                        text: res.msg,
                                        footer: '<a href> <i> Need help </i>?</a>'
                                    });
                                }
    
                            });
                        }).catch(function(reason){
                            Swal.fire({
                                    icon: 'info',
                                    title: 'Rides Response',
                                    text: 'This will not be deleted',
                                    footer: '<a href> <i> Need help </i>?</a>'
                                }).then(() => location.reload());;
                        });

                    }
                    // functions.end
                </script>
            @endpush    

