@extends('Admin.layout.adminlayout') 
            
            @section('contents') 

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-1 text-gray-800">Testimonials</h1>
                    <p class="mb-4">This a section where Testimonials can be Created, Read, Updated and Deleted .</p>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-sm-12">
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Testimonials Info</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <button class="btn btn-sm btn-info mb-3" id="add_testimonial">Add</button>
                                        <table class="table table-bordered m-4" width="100%" cellspacing="0" id="tb_testimonials">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th> Name</th>
                                                    <th> Email</th>
                                                    <th> Mobile</th>
                                                    <th> Occupation</th>
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
                        <div class="modal fade" id="testimonialModal" tabindex="-1" role="dialog" aria-labelledby="testimonialModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">

                                    <div class="modal-body">
                                        <div class="modal-body">
                                        <form class="form" id="testimonial_form">
                                            @csrf
                                            <input type="hidden" name="url" id="url" value="A">
                                            <div class="form-group">
                                                <label for="name">Name:</label>
                                                <input type="text" class="form-control" id="name" name="name" required>
                                                <input type="hidden" class="form-control" id="testimonial_id" name="testimonial_id">
                                            </div>

                                            <div class="form-group">
                                                <label for="email">Email:</label>
                                                <input type="email" class="form-control" id="email" name="email">
                                            </div>

                                            <div class="form-group">
                                                <label for="mobile">Mobile:</label>
                                                <input type="text" class="form-control" id="mobile" name="mobile" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="occupation">Occupation:</label>
                                                <input type="text" class="form-control" id="occupation" name="occupation" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="description">Description:</label>
                                                <input type="text" class="form-control" id="description" name="description" required>
                                            </div>
                                            <div class="form-group imgGroup">
                                                <label for="image">Image:</label>
                                                <input type="file" name="image" class="form-control" id="image">
                                                <img id="blah" src="#" alt="your image" height="50px"/>
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
                        let url  = "{{ route('listTestimonials') }}";
                        $('#tb_testimonials').DataTable({
                            processing: true,
                            serverSide: true,
                            ajax: url,
                            columns: [
                                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                                {data: 'name'},
                                {data: 'email'},
                                {data: 'mobile'},
                                {data: 'occupation'},
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
                        // #tb_testimonials

                        $("#add_testimonial").click(() => {
                            $("#testimonialModal").modal();
                        });

                        $("#image").change(function() {
                            readURL(this);
                        });

                        // add make
                        $("#add_testimonial").click(() => {
                            $("#testimonial_form")[0].reset();
                            $(".imgGroup").show();
                            $("#url").val('A');
                            $("#myModal").modal();
                        });

                        // submit data for make
                        $("#testimonial_form").submit(function(e) {
                            e.preventDefault();
                            let url_flag = $("#url").val();
                            let url = '';
                            (url_flag == 'A') ? url = "{{ route('addTestimonials') }}" : url = "{{ route('editTestimonials') }}";
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
                                            title: 'Record Response',
                                            text: res.msg,
                                            footer: '<a href> <i> Need help </i>?</a>'
                                        }).then(() => location.reload());
                                    } else {
                                        Swal.fire({
                                            icon: 'warning',
                                            title: 'Record Response',
                                            text: res.msg,
                                            footer: '<a href> <i> Need help </i>?</a>'
                                        }).then(() => location.reload());
                                    }

                                   
                                }, error: function (err){
                                    console.error(err);
                                    Swal.fire({
                                        icon: 'warning',
                                        title: 'Record Response',
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
                    function editTestimonial(id) {
                        // call that make
                        $(".imgGroup").hide();
                        let payload = {id};
                        $("#testimonial_id").val(id);
                        $.ajax({
                            url: "{{ route('viewTestimonial') }}",
                            data: payload,
                            method: 'get',
                            success: function (res){
                                console.log(res);
                                $("#name").val(res.name);
                                $("#email").val(res.email);
                                $("#mobile").val(res.mobile);
                                $("#occupation").val(res.occupation);
                                $("#description").val(res.description);
                                
                            }, error: function (err){
                                console.error(err);
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Record Response',
                                    text: res.msg,
                                    footer: '<a href> <i> Need help </i>?</a>'
                                }).then(() => location.reload());
                            }

                        });
                        $("#url").val('E');
                        $("#testimonialModal").modal();
                        // Swal.fire({
                        //     icon: 'info',
                        //     title: 'Edit Make',
                        //     text: id,
                        //     footer: '<a href> <i> Need help </i>?</a>'
                        // });
                    }

                    // delete the make
                    function delTestimonial(id) {
                        Swal.fire({
                            icon: 'error',
                            title: 'You are about to Delete this Record',
                            text: id,
                            footer: '<a href> <i> Need help </i>?</a>'
                        }).then(function(){
                            let payload = {id};
                            $("#testimonial_id").val(id);
                            $.ajax({
                                url: "{{ route('delTestimonial') }}",
                                data: payload,
                                method: 'get',
                                success: function (res){
                                    console.log(res);
                                    if (res.code == 1) {
                                        Swal.fire({
                                            icon: 'info',
                                            title: 'Record Response',
                                            text: res.msg,
                                            footer: '<a href> <i> Need help </i>?</a>'
                                        }).then(() => location.reload());
                                    } else {
                                        Swal.fire({
                                            icon: 'warning',
                                            title: 'Record Response',
                                            text: res.msg,
                                            footer: '<a href> <i> Need help </i>?</a>'
                                        }).then(() => location.reload());
                                    }
    
                                    
                                    
                                }, error: function (err){
                                    console.error(err);
                                    Swal.fire({
                                        icon: 'warning',
                                        title: 'Record Response',
                                        text: res.msg,
                                        footer: '<a href> <i> Need help </i>?</a>'
                                    }).then(() => location.reload());
                                }
    
                            });
                        }).catch(function(reason){
                            Swal.fire({
                                    icon: 'info',
                                    title: 'Record Response',
                                    text: 'This will not be deleted',
                                    footer: '<a href> <i> Need help </i>?</a>'
                                }).then(() => location.reload());
                        });

                    }
                    // functions.end
                </script>
            @endpush    

