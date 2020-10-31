@extends('Web.layout.app') 
            
            @section('contents') 
    <section>
        <article class="page_banner">
            <div class="page_banner-text">
                <p>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Homepage</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Feedback</li>
                        </ol>
                    </nav>
                </p>
                <h4>What our clients say</h4>

            </div>

        </article>

    </section>


    <section>
        <div class="text-justify m-5 feedback_box">
            
            <div class="row ">
                @if(count($testimonials) < 1)
                    <h5 class="text-center">No testimonials at the moment </h5>
                @else    
                    @foreach($testimonials as $testimony)
                    <div class="col-sm-3 mb-3">
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
                    </div>
                    @endforeach
                @endif
                

                
            </div>
            <!-- .row -->

            
        </div>
        <!-- .feedback_box -->
    </section>

    <!-- modals -->
    <section>
        <div class="modal fade" id="testimonyModal" tabindex="-1" role="dialog" aria-labelledby="testimonyModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <img class="w-100 cover" src="{{ asset('/Web/images/feedback.png') }}" height="200" alt="">
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
        function viewtestmonydescr(id) {
            let text_descr = $("#testmonydescr_"+id).text();
            $(".testiomny_description").text(text_descr);
            $("#testimonyModal").modal();
        }
    </script>

@endpush