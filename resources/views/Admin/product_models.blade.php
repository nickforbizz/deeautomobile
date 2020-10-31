@extends('Admin.layout.adminlayout') 
            
            @section('contents') 

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-1 text-gray-800">Make Models</h1>
                    <p class="mb-4">This a section where different brands(make) of vehicles can be Created, Read, Updated and Deleted .</p>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-sm-12">
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Models Info</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <button class="btn btn-sm btn-info mb-3" id="add_products_cat">Add</button>
                                        <table class="table table-bordered m-4" width="100%" cellspacing="0" id="tb_models">
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

                    <section>
                        <!-- Modal -->
                        <div class="modal fade" id="product_catsModal" tabindex="-1" role="dialog" aria-labelledby="product_catsModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">

                                    <div class="modal-body">
                                        <div class="modal-body">
                                        <form class="form" id="model_form">
                                            @csrf
                                            <input type="hidden" name="url" id="url" value="A">
                                            <div class="form-group ">
                                                <label for="model_cat">Category:</label>
                                                <select class="form-control form-control-line" id="model_cat" name="model_cat" required>
                                                    <option disabled selected> -- select make -- </option>
                                                    @foreach($makes as $make)
                                                    <option value="{{$make->id}}"> {{$make->name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="make_name">Name:</label>
                                                <input type="text" class="form-control" id="make_name" name="title" required>
                                                <input type="hidden" class="form-control" id="make_id" name="make_id">
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Description:</label>
                                                <input type="text" class="form-control" id="description" name="description" required>
                                            </div>
                                            <!-- <div class="form-group imgGroup">
                                                <label for="make_img">Image:</label>
                                                <input type="file" name="make_img" class="form-control" id="make_img">
                                                <img id="blah" src="#" alt="your image" height="50px"/>
                                            </div> -->
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
                        $('#tb_models').DataTable({
                            processing: true,
                            serverSide: true,
                            ajax: "{{ route('listcarModels') }}",
                            columns: [
                                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                                {data: 'name'},
                                {data: 'description'},
                                {data: 'created_at',},
                                {
                                    data: 'action', 
                                    name: 'action', 
                                    orderable: true, 
                                    searchable: true
                                },
                            ]
                        });
                        // #tb_models

                        $("#add_products_cat").click(() => {
                            $("#product_catsModal").modal();
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
                        $("#model_form").submit(function(e) {
                            e.preventDefault();
                            if($("#model_cat").val() == null){
                                Swal.fire({
                                        icon: 'info',
                                        title: 'Model Response',
                                        text: "The category must be selected",
                                    });
                            }else{
                                
                                let url_flag = $("#url").val();
                                let url = '';
                                (url_flag == 'A') ? url = "{{ route('addcarModels') }}" : url = "{{ route('editcarModels') }}";
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
                                                title: 'Model Response',
                                                text: res.msg,
                                                footer: '<a href> <i> Need help </i>?</a>'
                                            });
                                        } else {
                                            Swal.fire({
                                                icon: 'warning',
                                                title: 'Model Response',
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
                                            title: 'Model Response',
                                            text: res.msg,
                                            footer: '<a href> <i> Need help </i>?</a>'
                                        });
                                        setTimeout(()=>{
                                            // location.reload();
                                        },1300);
                                    }
                                });

                            }
                        });
                    });
                    // $(document).ready( function ()


                                // functions

                    // edit the make
                    function editCarMake(id) {
                        // call that make
                        $(".imgGroup").hide();
                        let payload = {id};
                        $("#make_id").val(id);
                        $.ajax({
                            url: "{{ route('viewcarModel') }}",
                            data: payload,
                            method: 'get',
                            success: function (res){
                                console.log(res);
                                $("#make_name").val(res.name);
                                $("#description").val(res.description);
                                
                            }, error: function (err){
                                console.error(err);
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Model Response',
                                    text: res.msg,
                                    footer: '<a href> <i> Need help </i>?</a>'
                                });
                            }

                        });
                        $("#url").val('E');
                        $("#product_catsModal").modal();
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
                            title: 'You are about to Delete this Model',
                            text: id,
                            footer: '<a href> <i> Need help </i>?</a>'
                        }).then(function(){
                            let payload = {id};
                            $("#make_id").val(id);
                            $.ajax({
                                url: "{{ route('delcarModel') }}",
                                data: payload,
                                method: 'get',
                                success: function (res){
                                    console.log(res);
                                    if (res.code == 1) {
                                        Swal.fire({
                                            icon: 'info',
                                            title: 'Model Response',
                                            text: res.msg,
                                            footer: '<a href> <i> Need help </i>?</a>'
                                        }).then(() => { location.reload() });
                                    } else {
                                        Swal.fire({
                                            icon: 'warning',
                                            title: 'Model Response',
                                            text: res.msg,
                                            footer: '<a href> <i> Need help </i>?</a>'
                                        }).then(() => { location.reload() });
                                    }
    
                                   
                                    
                                }, error: function (err){
                                    console.error(err);
                                    Swal.fire({
                                        icon: 'warning',
                                        title: 'Model Response',
                                        text: res.msg,
                                        footer: '<a href> <i> Need help </i>?</a>'
                                    });
                                }
    
                            });
                        }).catch(function(reason){
                            Swal.fire({
                                            icon: 'info',
                                            title: 'Make Response',
                                            text: 'This will not be deleted',
                                            footer: '<a href> <i> Need help </i>?</a>'
                                        });
                        });

                    }
                    // functions.end
                </script>
            @endpush    

