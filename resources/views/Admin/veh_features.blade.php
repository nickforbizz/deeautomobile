@extends('Admin.layout.adminlayout') 
            
            @section('contents') 

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-1 text-gray-800">Vehicle Features</h1>
                    <p class="mb-4">This a section where different Vehicle Features can be Created, Read, Updated and Deleted .</p>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-sm-12">
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Feature Info</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <button class="btn btn-sm btn-info mb-3" id="add_veh_feature">Add</button>
                                        <table class="table table-bordered m-4" width="100%" cellspacing="0" id="tb_veh_features">
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
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- .row -->

                    <section class="section_modals">
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header headNav">
                                        <h4 class="modal-title">Edit Vehicle Features</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">


                                        <form class="form" id="veh_features_form">

                                            @csrf
                                            <input type="hidden" name="url" id="url" value="A">
                                            <div class="form-group">
                                                <label for="veh_feature_name">Name:</label>
                                                <input type="text" class="form-control" id="veh_feature_name" placeholder="Your feature ..." name="veh_feature_name">
                                                <input type="hidden" class="form-control" id="veh_feature_id" name="veh_feature_id">
                                            </div>

                                            <div class="form-group">
                                                <label for="description">Description:</label>
                                                <input type="text" class="form-control" id="description" placeholder="Your feature ..." name="description">
                                            </div>

                                            <div class="form-group">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-info">submit</button>
                                            </div>
                                        </form>

                                    </div>
                                    <!-- .modal-body -->
                                    <div class="modal-footer">
                                        <i>proceed to record Make</i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                    <!-- .section_modals -->




                </div>
                <!-- /.container-fluid -->


            

            @stop

            @push('scripts')
                <script>                

                   
                    $(document).ready(function() {
                        $('#tb_veh_features').DataTable({
                            processing: true,
                            serverSide: true,
                            ajax: "{{ route('listFeatures') }}",
                            columns: [{
                                    data: 'DT_RowIndex',
                                    name: 'DT_RowIndex'
                                },
                                {
                                    data: 'name'
                                },
                                {
                                    data: 'description'
                                },
                                {
                                    data: 'created_at',
                                },
                                {
                                    data: 'action',
                                    name: 'action',
                                    orderable: true,
                                    searchable: true
                                },
                            ]
                        });
                        // #tb_veh_features



                        // add make
                        $("#add_veh_feature").click(() => {
                            $("#url").val('A');
                            $("#myModal").modal();
                        });

                        // submit data for make
                        $("#veh_features_form").submit(function(e) {
                            e.preventDefault();
                            let url_flag = $("#url").val();
                            let url = '';
                            (url_flag == 'A') ? url = "{{ route('addFeatures') }}": url = "{{ route('editFeatures') }}";
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
                                        });
                                    } else {
                                        Swal.fire({
                                            icon: 'warning',
                                            title: 'Vehicle Feature Response',
                                            text: res.msg,
                                            footer: '<a href> <i> Need help </i>?</a>'
                                        });
                                    }

                                    setTimeout(() => {
                                        location.reload();
                                    }, 1300);
                                },
                                error: function(err) {
                                    console.error(err);
                                    Swal.fire({
                                        icon: 'warning',
                                        title: 'Vehicle Feature Response',
                                        text: res.msg,
                                        footer: '<a href> <i> Need help </i>?</a>'
                                    });
                                    setTimeout(() => {
                                        location.reload();
                                    }, 1300);
                                }
                            });
                        });
                    });
                    // $(document).ready( function ()


                    // functions

                    // edit the make
                    function editCarMake(id) {
                        // call that make
                        let payload = {
                            id
                        };
                        $("#veh_feature_id").val(id);
                        $.ajax({
                            url: "{{ route('viewFeature') }}",
                            data: payload,
                            method: 'get',
                            success: function(res) {
                                console.log(res);
                                $("#veh_feature_name").val(res.name);
                                $("#description").val(res.description);

                            },
                            error: function(err) {
                                console.error(err);
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Vehicle Feature Response',
                                    text: res.msg,
                                    footer: '<a href> <i> Need help </i>?</a>'
                                });
                            }

                        });
                        $("#url").val('E');
                        $("#myModal").modal();
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
                            title: 'You are about to Delete this Feature',
                            text: id,
                            footer: '<a href> <i> Need help </i>?</a>'
                        }).then(() => {
                            let payload = {
                                id
                            };
                            $("#veh_feature_id").val(id);
                            $.ajax({
                                url: "{{ route('delFeature') }}",
                                data: payload,
                                method: 'get',
                                success: function(res) {
                                    console.log(res);
                                    if (res.code == 1) {
                                        Swal.fire({
                                            icon: 'info',
                                            title: 'Vehicle Feature Response',
                                            text: res.msg,
                                            footer: '<a href> <i> Need help </i>?</a>'
                                        });
                                    } else {
                                        Swal.fire({
                                            icon: 'warning',
                                            title: 'Vehicle Feature Response',
                                            text: res.msg,
                                            footer: '<a href> <i> Need help </i>?</a>'
                                        });
                                    }
    
                                    setTimeout(() => {
                                        location.reload();
                                    }, 1300);
    
                                },
                                error: function(err) {
                                    console.error(err);
                                    Swal.fire({
                                        icon: 'warning',
                                        title: 'Vehicle Feature Response',
                                        text: res.msg,
                                        footer: '<a href> <i> Need help </i>?</a>'
                                    });
                                }
    
                            });

                        });

                    }



                    // functions.end
                </script>
            @endpush    

