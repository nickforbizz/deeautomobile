@extends('Admin.layout.adminlayout') 
            
            @section('contents') 

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-1 text-gray-800">Feedback Inquiry</h1>
                    <p class="mb-4">This is a section where feedback can be Created, Read, Updated and Deleted .</p>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-sm-12">
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Feedback Info</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <!-- <button class="btn btn-sm btn-info mb-3" id="add_products_cat">Add</button> -->
                                        <table class="table table-bordered m-4" width="100%" cellspacing="0" id="tb_feedback">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th> Name</th>
                                                    <th> Email </th>
                                                    <th> Message </th>
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
                        <div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">

                                    <div class="modal-body">
                                        <div class="modal-body">
                                        <form class="form" id="feedback_form">
                                            @csrf
                                            <input type="hidden" name="url" id="url" value="A">
                                            <div class="form-group">
                                                <label for="name">Name:</label>
                                                <input type="text" class="form-control" id="name" name="name">
                                                <input type="hidden" class="form-control" id="feedback_id" name="feedback_id">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">email:</label>
                                                <input type="text" class="form-control" id="email" name="email">
                                            </div>

                                            <div class="form-group">
                                                <label for="message">message:</label>
                                                <textarea name="message" class="form-control" id="message" cols="5" ></textarea>
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
                        $('#tb_feedback').DataTable({
                            processing: true,
                            serverSide: true,
                            ajax: "{{ route('listfeedbackinquiries') }}",
                            columns: [
                                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                                {data: 'name'},
                                {data: 'email'},
                                {data: 'message'},
                                {data: 'created_at',},
                                {
                                    data: 'action', 
                                    name: 'action', 
                                    orderable: true, 
                                    searchable: true
                                },
                            ]
                        });
                        // #tb_feedback

                        $("#add_products_cat").click(() => {
                            $("#feedbackModal").modal();
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
                        $("#feedback_form").submit(function(e) {
                            e.preventDefault();
                            let url_flag = $("#url").val();
                            let url = '';
                            (url_flag == 'A') ? url = "{{ route('sendfeedback') }}" : url = "{{ route('editfeedbackinquiries') }}";
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
                                            title: 'record Response',
                                            text: res.msg,
                                            footer: '<a href> <i> Need help </i>?</a>'
                                        }).then(() => location.reload());
                                    } else {
                                        Swal.fire({
                                            icon: 'warning',
                                            title: 'record Response',
                                            text: res.msg,
                                            footer: '<a href> <i> Need help </i>?</a>'
                                        }).then(() => location.reload());
                                    }
                                }, error: function (err){
                                    console.error(err);
                                    Swal.fire({
                                        icon: 'warning',
                                        title: 'record Response',
                                        text: res.msg,
                                        footer: '<a href> <i> Need help </i>?</a>'
                                    }).then(() => location.reload());
                                }
                            });
                        });
                    });
                    // $(document).ready( function ()


                                // functions

                    // edit the record
                    function editFeedback(id) {
                        // call that record
                        $(".imgGroup").hide();
                        let payload = {id};
                        $("#feedback_id").val(id);
                        $.ajax({
                            url: "{{ route('viewFeedbackinquiry') }}",
                            data: payload,
                            method: 'get',
                            success: function (res){
                                console.log(res);
                                $("#name").val(res.name);
                                $("#email").val(res.email);
                                $("#message").val(res.message);
                                
                            }, error: function (err){
                                console.error(err);
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Make Response',
                                    text: res.msg,
                                    footer: '<a href> <i> Need help </i>?</a>'
                                });
                            }

                        });
                        $("#url").val('E');
                        $("#feedbackModal").modal();
                        // Swal.fire({
                        //     icon: 'info',
                        //     title: 'Edit Make',
                        //     text: id,
                        //     footer: '<a href> <i> Need help </i>?</a>'
                        // });
                    }

                    // delete the make
                    function delFeedback(id) {
                        Swal.fire({
                            icon: 'error',
                            title: 'You are about to Delete this Record',
                            text: id,
                            footer: '<a href> <i> Need help </i>?</a>'
                        }).then(function(){
                            let payload = {id};
                            $("#feedback_id").val(id);
                            $.ajax({
                                url: "{{ route('delFeedbackinquiry') }}",
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
                                        }).then(() => location.reload());;
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
                                    }).then(() => location.reload());;
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

