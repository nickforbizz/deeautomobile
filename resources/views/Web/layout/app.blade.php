<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dee Automobile</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css" rel="stylesheet" />
    <!-- <link href="css/nicepage.css" rel="stylesheet"> -->
    <link href="{{ asset('/Web/css/app.css') }}" rel="stylesheet">
</head>

<body>
    <!-- header -->
    <header class="primary-color">
        <nav class="navbar navbar-expand-lg navbar-light container">
            <a class="navbar-brand mr-5" href="{{ route('webin') }}">DeeAutomobile</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto nav_ul">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('webin') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('viewproducts', ['offset' => 0, 'limit' => 20]) }}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('viewfeedback') }}">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('viewcontact') }}">Contact</a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>




    @yield('contents')



    <footer class="mt-5  bg-info">
        <div class="row footer-row">
            <div class="col-sm-6 mb-4">
                <h5 class="underline mr-5">About Us</h5>
                <p class="mt-3">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error a soluta eligendi accusamus debitis quasi adipisci culpa est nobis, voluptatem, iste voluptate sint omnis ea assumenda et tempora pariatur corporis?
                </p>
                <p class="footer_socialmedia">
                    <a href="#" class="badge badge-light"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="badge badge-light"><i class="fab fa-instagram-square"></i></a>
                    <a href="#" class="badge badge-light"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="badge badge-light"><i class="fab fa-twitter-square"></i></a>
                </p>
            </div>
            <div class="col-sm-3 pr-2 mb-4">
                <h5 class="underline">What we offer</h5>
                <div>
                    <div class="footer_offers"><a href="#" class="badge badge-light">Instant Feedback on your questions</a> </div>
                    <div class="footer_offers"><a href="#" class="badge badge-light">Showcase our vehicles</a> </div>
                    <div class="footer_offers"><a href="#" class="badge badge-light">Request A Ride</a></div>
                    <div class="footer_offers"><a href="#" class="badge badge-light">Search For Sale</a></div>
                </div>
            </div>
            <div class="col-sm-3 mb-4">
                <h5 class="underline">Get Us to help</h5>
                <div class="footer_help">
                    <div><i class="fas fa-phone-square-alt"></i><br> +236 85 698 231</div>
                    <div><i class="fas fa-mail-bulk"></i> <br>info@deeautomobiles.co.ke</div>
                </div>
            </div>
        </div>
        <!-- .row -->

    </footer>





    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- sweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    
    
    <script>
        $(document).ready(function() {

            $('.your-class').slick({
                infinite: true,
                slidesPerRow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 4000,
                pauseOnHover: true,
                slidesToScroll: 3,
                dots: true,
                responsive: [
                    {
                    breakpoint: 478,
                    settings: {
                        slidesPerRow: 1,
                        rows: 1,
                    }
                    }
                ]
            });

            $('.products_cats a').click(function(e) {

                $('.products_cats a.active').removeClass('active');

                let parent = $(this); //.parent();
                parent.addClass('active');
                e.preventDefault();
            });


            // search items
            $("#search_items_btn").click(() => {
                let search_key = $("#search_items").val();
                if (search_key != '') {
                    alert(search_key)
                }
            })


        });
    </script>


    @stack('scripts')
</body>

</html>   