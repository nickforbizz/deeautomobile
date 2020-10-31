@extends('Admin.layout.adminlayout') 
            
            @section('contents') 

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-1 text-gray-800">Products </h1>
                    <p class="mb-4">This a section where different brands(make) of vehicles can be Created, Read, Updated and Deleted .</p>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-sm-12">
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Products(Model) Info</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <button class="btn btn-sm btn-info mb-3" id="add_model">Add</button>
                                        
                                        <table class="table table-bordered m-4" id="tb_models" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th> Name</th>
                                                    <th> Body Type</th>
                                                    <th> Mileage</th>
                                                    <th> Price</th>
                                                    <th> Label </th>
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
                        <!-- Modal model -->
                        <div class="modal fade" id="modelModal" role="dialog">
                            <div class="modal-dialog modal-lg">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header headNav">
                                        <h4 class="modal-title"> Add/Edit Model</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">


                                        <form class="form row" id="model_form">

                                            @csrf
                                            <input type="hidden" name="url" id="url" value="A">
                                            <div class="form-group col-md-3">
                                                <label for="model_cat">Category:</label>
                                                <select class="form-control form-control-line" id="model_cat" name="model_cat" required>
                                                    <option disabled selected> -- select make -- </option>
                                                    @foreach($makes as $make)
                                                    <option value="{{$make->id}}"> {{$make->name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="model_name">Name:</label>
                                                <input type="hidden" class="form-control" id="model_id" name="model_id">
                                                <select class="form-control form-control-line" id="model_type" name="model_type" required>
                                                    <option disabled selected> -- select Model -- </option>
                                                    @foreach($models as $model)
                                                    <option value="{{$model->id}}"> {{$model->name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="model_label">Label:</label>
                                                <input type="text" class="form-control form-control-line" placeholder="Enter Label ..." id="model_label" name="model_label" required>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="model_price">Price:</label>
                                                <input type="text" class="form-control form-control-line" placeholder="Enter Price ..." id="model_price" name="model_price" required>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="speed">Avg Speed:</label>
                                                <input type="text" class="form-control form-control-line" placeholder="Enter Price ..." id="speed" name="speed" required>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="model_manYr">Manufacture Yr:</label>
                                                <input type="text" class="form-control form-control-line" placeholder="Enter Manufacture Yr ..." id="model_manYr" name="model_manYr" required>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="model_mileage">Mileage (km):</label>
                                                <input type="text" class="form-control form-control-line" placeholder="Enter Mileage ..." id="model_mileage" name="model_mileage" required>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="model_condition">Condition:</label>
                                                <input type="text" class="form-control form-control-line" placeholder="Enter Condition ..." id="model_condition" name="model_condition" required>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="model_bodyType">Body Type:</label>
                                                <input type="text" class="form-control form-control-line" placeholder="Enter Body Type ..." id="model_bodyType" name="model_bodyType" required>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="model_colour">Colour:</label>
                                                <input type="text" class="form-control form-control-line" placeholder="Enter Colour ..." id="model_colour" name="model_colour" required>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="model_fuel">Fuel:</label>
                                                <select class="form-control form-control-line" id="model_fuel" name="model_fuel" required>
                                                    <option disabled selected> -- select option --</option>
                                                    <option value="Petrol">Petrol</option>
                                                    <option value="Diesel">Diesel</option>
                                                    <option value="Hybrid">Hybrid</option>
                                                    <option value="Electric">Electric</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="model_transmission">Transmission:</label>
                                                <input type="text" class="form-control form-control-line" placeholder="Enter Transmission ..." id="model_transmission" name="model_transmission" required>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="model_duty">Duty Type:</label>
                                                <input type="text" class="form-control form-control-line" placeholder="Enter Duty Type ..." id="model_duty" name="model_duty" required>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="model_interior">Interior Type:</label>
                                                <input type="text" class="form-control form-control-line" placeholder="Enter Interior Type ..." id="model_interior" name="model_interior" required>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="model_cc">Engine Size:</label>
                                                <input type="text" class="form-control form-control-line" placeholder="Enter Engine Size ..." id="model_cc" name="model_cc" required>
                                            </div>



                                            <div class="form-group col-md-12">
                                                <label for="model_description">Description:</label>
                                                <textarea name="model_description" class="form-control form-control-line" placeholder="Enter Description ..." id="model_description" cols="30" rows="2"></textarea>
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label for="model_img">Image:</label>
                                                <input type="file" name="model_img[]" multiple class="form-control form-control-line" id="model_img">
                                            </div>
                                            <div class="form-group col-md-12">
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



                        <!-- Modal addFeature-->
                        <div class="modal fade" id="vehFeaturesModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header headNav">
                                        <h4 class="modal-title">DeeAutomobiles</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">

                                        <form class="form row" id="model_feature_form">

                                            @csrf
                                            <div class="form-group col-md-3">
                                                <label for="model_name">Name:</label>
                                                <input type="text" class="form-control form-control-line" id="feature_model_name" name="model_name" readonly>
                                                <input type="hidden" id="feature_model_id" name="model_id" readonly>
                                            </div>

                                            <div class="form-group col-md-9">
                                                <label for="model_name">Feature:</label>
                                                <select class="form-control form-control-line" id="select_features" name="select_features[]" multiple required>
                                                    
                                                    @foreach($features as $feature)
                                                        <option value="{{ $feature->id }}"> {{ $feature->name }} </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-sm-12">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-info" >save</button>
                                            </div>


                                        </form>

                                    </div>
                                    <div class="modal-footer">
                                        <div class="pull-right">
                                            <i>Proceed to add features</i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--  modal addFeature.end -->
                    </section>
                    <!-- .section_modals -->

                </div>
                <!-- /.container-fluid -->

                @stop

            @push('scripts')
            <script>
                $(document).ready(function() {
                    $('#tb_models').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax: "{{ route('listModels') }}",
                        columns: [{
                                data: 'DT_RowIndex',
                                name: 'DT_RowIndex'
                            },
                            {
                                data: 'name'
                            },
                            {
                                data: 'bodyType'
                            },
                            {
                                data: 'mileage'
                            },
                            {
                                data: 'price'
                            },
                            {
                                data: 'label'
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
                    // #tb_models



                    // add make
                    $("#add_model").click(() => {
                        $("#url").val('A');
                        $("#model_form")[0].reset();
                        $("#modelModal").modal();
                    });

                    // submit data for make
                    $("#model_form").submit(function(e) {
                        e.preventDefault();
                        let url_flag = $("#url").val();
                        let url = '';
                        (url_flag == 'A') ? url = "{{ route('addModels') }}": url = "{{ route('editModels') }}";
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
                                        title: 'Vehicle Model Response',
                                        text: res.msg,
                                    }).then(() => { location.reload() });
                                } else if (res.code == -2){
                                    Swal.fire({
                                        icon: 'warning',
                                        title: 'Vehicle Model Response',
                                        text: 'some fields are required',
                                    }).then(() => { location.reload() });
                                }else {
                                    Swal.fire({
                                        icon: 'warning',
                                        title: 'Vehicle Model Response',
                                        text: res.msg,
                                    }).then(() => { location.reload() });
                                }

                               
                            },
                            error: function(err) {
                                console.error(err);
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Vehicle Model Response',
                                    text: res.msg,
                                    footer: '<a href> <i> Need help </i>?</a>'
                                }).then(() => { location.reload() });
                                
                            }
                        });
                    });

                    // select 2
                    $("#select_features").select2({
                        width: '100%',
                        placeholder: "-- select a feature --",
                        allowClear: true
                    });

                    // model_feature_form
                    $("#model_feature_form").submit(function (e) {

                        e.preventDefault();
                        let url = "{{ route('addCarFeatures') }}";
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
                                        title: 'Vehicle Features Response',
                                        text: res.msg,
                                        footer: '<a href> <i> Need help </i>?</a>'
                                    });
                                } else {
                                    Swal.fire({
                                        icon: 'warning',
                                        title: 'Vehicle Features Response',
                                        text: res.msg,
                                        footer: '<a href> <i> Need help </i>?</a>'
                                    });
                                }

                                setTimeout(() => {
                                    location.reload();
                                }, 2000);
                            },
                            error: function(err) {
                                console.error(err);
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Vehicle Features Response',
                                    text: res.msg,
                                    footer: '<a href> <i> Need help </i>?</a>'
                                });
                                setTimeout(() => {
                                    location.reload();
                                }, 2500);
                            }
                        });
                    })
                    // model_feature_form.end
                });
                // $(document).ready( function ()





                // functions

                // edit the make
                function editCarMake(id) {
                    // call that make
                    let payload = {
                        id
                    };
                    $("#model_id").val(id);
                    $.ajax({
                        url: "{{ route('viewModel') }}",
                        data: payload,
                        method: 'get',
                        success: function(res) {
                            console.log(res);
                            $("#model_name").val(res.name);
                            $("#model_label").val(res.label);
                            $("#model_price").val(res.price);
                            $("#model_manYr").val(res.manYr);
                            $("#model_mileage").val(res.mileage);
                            $("#model_condition").val(res.condition);
                            $("#model_bodyType").val(res.bodyType);
                            $("#model_colour").val(res.colour);
                            $("#model_fuel").val(res.fuel);
                            $("#model_transmission").val(res.transmission);
                            $("#model_duty").val(res.duty);
                            $("#model_interior").val(res.interior);model_cat
                            $("#model_cc").val(res.cc);
                            $("#model_cat").val(res.make_id);
                            $("#speed").val(res.speed);
                            $("#model_description").val(res.description);

                        },
                        error: function(err) {
                            console.error(err);
                            Swal.fire({
                                icon: 'warning',
                                title: 'Vehicle Model Response',
                                text: res.msg,
                                footer: '<a href> <i> Need help </i>?</a>'
                            });
                        }

                    });
                    $("#url").val('E');
                    $("#modelModal").modal();
                    // Swal.fire({
                    //     icon: 'info',
                    //     title: 'Edit Make',
                    //     text: id,
                    //     footer: '<a href> <i> Need help </i>?</a>'
                    // });
                }

                // delete the make
                function delCarMake(id) {
                    $("#process_data").html(`
                        <h3>Are you sure you want to remove this record?</h3>
                        <button class="btn btn-info" id="procced_del"> Okay </button>
                    `);

                    $("#processingModal").modal();


                    $("#procced_del").click(()=>{
                        let payload = {
                            id
                        };
                        $("#make_id").val(id);
                        $.ajax({
                            url: "{{ route('delModel') }}",
                            data: payload,
                            method: 'get',
                            success: function(res) {
                                console.log(res);
                                if (res.code == 1) {
                                    Swal.fire({
                                        icon: 'info',
                                        title: 'Vehicle Model Response',
                                        text: res.msg,
                                        footer: '<a href> <i> Need help </i>?</a>'
                                    });
                                } else {
                                    Swal.fire({
                                        icon: 'warning',
                                        title: 'Vehicle Model Response',
                                        text: res.msg,
                                        footer: '<a href> <i> Need help </i>?</a>'
                                    });
                                }

                                setTimeout(() => {
                                    location.reload();
                                }, 2000);

                            },
                            error: function(err) {
                                console.error(err);
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Vehicle Model Response',
                                    text: res.msg,
                                    footer: '<a href> <i> Need help </i>?</a>'
                                });
                                setTimeout(() => {
                                    // location.reload();
                                }, 2000);
                            }

                        });
                        // $.ajax

                    });
                        // $("#procced_del").click
                    // Swal.fire({
                    //     icon: 'error',
                    //     title: 'You are about to Delete this Make',
                    //     text: id,
                    //     footer: '<a href> <i> Need help </i>?</a>'
                    // });

                }

                // add features to the vehicle
                function addCarFeature(id, name='') {
                    $("#feature_model_name").val(name);
                    $("#feature_model_id").val(id);

                    // open screen
                    $("#vehFeaturesModal").modal();
                }



                // functions.end
            </script>
            @endpush