@extends('Web.layout.app')

@section('contents')


	<div class="page-heading wow fadeIn" data-wow-duration="0.5s">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="heading-content-bg wow fadeIn" data-wow-delay="0.75s" data-wow-duration="1s">
						<div class="row">
							<div class="heading-content col-md-12">
								<p><a href="{{ route('webin') }}">Homepage</a> / <em> Blog</em> / <em> Grid</em></p>
								<h2>Blog <em>Grids</em></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="blog-page">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="blog-grid-post">
						<div class="row">
							<div class="col-md-6">
								<div class="item">
							 		<div class="thumb-content">
										<div class="date-post">
											<a href="{{ route('singlePost') }}">20 December</a>
										</div>
										<div class="thumb-inner">
											<a href="{{ route('singlePost') }}"><img src="{{ asset('/web/images/blog_grid_01.jpg') }}" alt=""></a>
										</div>
									</div>
									<div class="down-content">
										<a href="{{ route('singlePost') }}"><h4>Pabst Gastropub Synth Edge</h4></a>
										<ul>
											<li><span><em>Posted by:</em><a href="#">Admin</a></span></li>
											<li><span><em>Posted on:</em>20/December/2018</span></li>
											<li><span><em>Categories:</em><a href="#">Creative</a>,<a href="#"> Graphic</a></span></li>
										</ul>
										<p>Slow-carb listicle PBR, Schlitz mustache keytar beard art party brunch chia tousled actually. Messenger bag kogi aesthetic elsent master cleanse gastropub heirloom.</p>
										<div class="text-button">
											<a href="{{ route('singlePost') }}">Continue Reading <i class="fa fa-arrow-right"></i></a>
										</div>							
									</div>
							  	</div>
							</div>
							<div class="col-md-6">
								<div class="item">
							 		<div class="thumb-content">
										<div class="date-post">
											<a href="{{ route('singlePost') }}">20 December</a>
										</div>
										<div class="thumb-inner">
											<a href="{{ route('singlePost') }}"><img src="{{ asset('/web/images/blog_grid_02.jpg') }}" alt=""></a>
										</div>
									</div>
									<div class="down-content">
										<a href="{{ route('singlePost') }}"><h4>Pabst Gastropub Synth Edge</h4></a>
										<ul>
											<li><span><em>Posted by:</em><a href="#">Admin</a></span></li>
											<li><span><em>Posted on:</em>20/December/2018</span></li>
											<li><span><em>Categories:</em><a href="#">Creative</a>,<a href="#"> Graphic</a></span></li>
										</ul>
										<p>Slow-carb listicle PBR, Schlitz mustache keytar beard art party brunch chia tousled actually. Messenger bag kogi aesthetic elsent master cleanse gastropub heirloom.</p>
										<div class="text-button">
											<a href="{{ route('singlePost') }}">Continue Reading <i class="fa fa-arrow-right"></i></a>
										</div>							
									</div>
							  	</div>
							</div>
							<div class="col-md-6">
								<div class="item">
							 		<div class="thumb-content">
										<div class="date-post">
											<a href="{{ route('singlePost') }}">20 December</a>
										</div>
										<div class="thumb-inner">
											<a href="{{ route('singlePost') }}"><img src="{{ asset('/web/images/blog_grid_03.jpg') }}" alt=""></a>
										</div>
									</div>
									<div class="down-content">
										<a href="{{ route('singlePost') }}"><h4>Pabst Gastropub Synth Edge</h4></a>
										<ul>
											<li><span><em>Posted by:</em><a href="#">Admin</a></span></li>
											<li><span><em>Posted on:</em>20/December/2018</span></li>
											<li><span><em>Categories:</em><a href="#">Creative</a>,<a href="#"> Graphic</a></span></li>
										</ul>
										<p>Slow-carb listicle PBR, Schlitz mustache keytar beard art party brunch chia tousled actually. Messenger bag kogi aesthetic elsent master cleanse gastropub heirloom.</p>
										<div class="text-button">
											<a href="{{ route('singlePost') }}">Continue Reading <i class="fa fa-arrow-right"></i></a>
										</div>							
									</div>
							  	</div>
							</div>
							<div class="col-md-6">
								<div class="item">
							 		<div class="thumb-content">
										<div class="date-post">
											<a href="{{ route('singlePost') }}">20 December</a>
										</div>
										<div class="thumb-inner">
											<a href="{{ route('singlePost') }}"><img src="{{ asset('/web/images/blog_grid_04.jpg') }}" alt=""></a>
										</div>
									</div>
									<div class="down-content">
										<a href="{{ route('singlePost') }}"><h4>Pabst Gastropub Synth Edge</h4></a>
										<ul>
											<li><span><em>Posted by:</em><a href="#">Admin</a></span></li>
											<li><span><em>Posted on:</em>20/December/2018</span></li>
											<li><span><em>Categories:</em><a href="#">Creative</a>,<a href="#"> Graphic</a></span></li>
										</ul>
										<p>Slow-carb listicle PBR, Schlitz mustache keytar beard art party brunch chia tousled actually. Messenger bag kogi aesthetic elsent master cleanse gastropub heirloom.</p>
										<div class="text-button">
											<a href="{{ route('singlePost') }}">Continue Reading <i class="fa fa-arrow-right"></i></a>
										</div>							
									</div>
							  	</div>
							</div>
							<div class="col-md-6">
								<div class="item">
							 		<div class="thumb-content">
										<div class="date-post">
											<a href="{{ route('singlePost') }}">20 December</a>
										</div>
										<div class="thumb-inner">
											<a href="{{ route('singlePost') }}"><img src="{{ asset('/web/images/blog_grid_05.jpg') }}" alt=""></a>
										</div>
									</div>
									<div class="down-content">
										<a href="{{ route('singlePost') }}"><h4>Pabst Gastropub Synth Edge</h4></a>
										<ul>
											<li><span><em>Posted by:</em><a href="#">Admin</a></span></li>
											<li><span><em>Posted on:</em>20/December/2018</span></li>
											<li><span><em>Categories:</em><a href="#">Creative</a>,<a href="#"> Graphic</a></span></li>
										</ul>
										<p>Slow-carb listicle PBR, Schlitz mustache keytar beard art party brunch chia tousled actually. Messenger bag kogi aesthetic elsent master cleanse gastropub heirloom.</p>
										<div class="text-button">
											<a href="{{ route('singlePost') }}">Continue Reading <i class="fa fa-arrow-right"></i></a>
										</div>							
									</div>
							  	</div>
							</div>
							<div class="col-md-6">
								<div class="item">
							 		<div class="thumb-content">
										<div class="date-post">
											<a href="{{ route('singlePost') }}">20 December</a>
										</div>
										<div class="thumb-inner">
											<a href="{{ route('singlePost') }}"><img src="{{ asset('/web/images/blog_grid_06.jpg') }}" alt=""></a>
										</div>
									</div>
									<div class="down-content">
										<a href="{{ route('singlePost') }}"><h4>Pabst Gastropub Synth Edge</h4></a>
										<ul>
											<li><span><em>Posted by:</em><a href="#">Admin</a></span></li>
											<li><span><em>Posted on:</em>20/December/2018</span></li>
											<li><span><em>Categories:</em><a href="#">Creative</a>,<a href="#"> Graphic</a></span></li>
										</ul>
										<p>Slow-carb listicle PBR, Schlitz mustache keytar beard art party brunch chia tousled actually. Messenger bag kogi aesthetic elsent master cleanse gastropub heirloom.</p>
										<div class="text-button">
											<a href="{{ route('singlePost') }}">Continue Reading <i class="fa fa-arrow-right"></i></a>
										</div>							
									</div>
							  	</div>
							</div>
							<div class="col-md-12">
								<div class="page-numbers">
									<div class="pagination-content">
										<ul>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="sidebar-widgets">
						<div class="sidebar-widget">
							<div class="search-widget">
								<input type="text" onfocus="this.value=''" value="Type keywords...">
							</div>
						</div>
						<div class="sidebar-widget">
							<div class="text-widget">
								<div class="sidebar-heading">
									<h4>Text Widget</h4>
								</div>
								<p>Messenger bag kogi aesthetic elsent master cleanse. Bespoke Marfa migas Austin Helvetica American Apparel before they sold.</p>
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-behance"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="sidebar-widget">
							<div class="categories">
								<div class="sidebar-heading">
									<h4>Categories</h4>
								</div>
								<ul>
									<li><a href="#">Volkswagen</a></li>
									<li><a href="#">Audi</a></li>
									<li><a href="#">Aston Martin</a></li>
									<li><a href="#">BMW</a></li>
									<li><a href="#">Mercedess</a></li>
									<li><a href="#">Land Rover</a></li>
									<li><a href="#">Jeep</a></li>
								</ul>
							</div>
						</div>
						<div class="sidebar-widget">
							<div class="recent-posts">
								<div class="sidebar-heading">
									<h4>Recent Posts</h4>
								</div>
								<ul>
									<li>
										<a href="{{ route('singlePost') }}">
											<img src="{{ asset('/web/images/gallery_01.jpg') }}" alt="">
											<h6>Pabst Gastropub Synth Edge</h6>
											<span>January 13, 2019</span>
										</a>
									</li>
									<li>
										<a href="{{ route('singlePost') }}">
											<img src="{{ asset('/web/images/gallery_02.jpg') }}" alt="">
											<h6>Pabst Gastropub Synth Edge</h6>
											<span>January 13, 2019</span>
										</a>
									</li>
									<li>
										<a href="{{ route('singlePost') }}">
											<img src="{{ asset('/web/images/gallery_03.jpg') }}" alt="">
											<h6>Pabst Gastropub Synth Edge</h6>
											<span>January 13, 2019</span>
										</a>
									</li>
									<li>
										<a href="{{ route('singlePost') }}">
											<img src="{{ asset('/web/images/gallery_04.jpg') }}" alt="">
											<h6>Pabst Gastropub Synth Edge</h6>
											<span>January 13, 2019</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="sidebar-widget">
							<div class="archives">
								<div class="sidebar-heading">
									<h4>Archives</h4>
								</div>
								<ul>
									<li><a href="#">Volkswagen</a></li>
									<li><a href="#">Audi</a></li>
									<li><a href="#">Aston Martin</a></li>
									<li><a href="#">BMW</a></li>
									<li><a href="#">Mercedess</a></li>
									<li><a href="#">Land Rover</a></li>
									<li><a href="#">Jeep</a></li>
								</ul>
							</div>
						</div>
						<div class="sidebar-widget">
							<div class="tags">
								<div class="sidebar-heading">
									<h4>Tags Cloud</h4>
								</div>
								<ul>
									<li><a href="#">Car</a></li>
									<li><a href="#">Dealer</a></li>
									<li><a href="#">Template</a></li>
									<li><a href="#">PSD</a></li>
									<li><a href="#">HTML5</a></li>
									<li><a href="#">CSS3</a></li>
									<li><a href="#">Wordpress</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="footer-item">
						<div class="about-us">
							<h2>About Us</h2>
							<p>Irony actually meditation, occupy mumblecore wayfarers organic pickled 90's. Intelligentsia as actually +1 meh photo booth.</p>
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="footer-item">
						<div class="what-offer">
							<h2>What We Offer ?</h2>
							<ul>
								<li><a href="#">Rent a car now</a></li>
								<li><a href="#">Search for sale</a></li>
								<li><a href="#">Try search form</a></li>
								<li><a href="#">Best daily dealers</a></li>
								<li><a href="#">Weekly lucky person</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="footer-item">
						<div class="need-help">
							<h2>Need Help ?</h2>
							<ul>
								<li><a href="#">Modern wheels</a></li>
								<li><a href="#">Awesome spoilers</a></li>
								<li><a href="#">Dynamic Enetrior</a></li>
								<li><a href="#">Save accidents </a></li>
								<li><a href="#">Recorded Racing</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-item">
						<div class="our-gallery">
							<h2>Our Gallery</h2>
							<ul>
								<li><a href="#"><img src="{{ asset('/web/images/gallery_01.jpg') }}" alt=""></a></li>
								<li><a href="#"><img src="{{ asset('/web/images/gallery_02.jpg') }}" alt=""></a></li>
								<li><a href="#"><img src="{{ asset('/web/images/gallery_03.jpg') }}" alt=""></a></li>
								<li><a href="#"><img src="{{ asset('/web/images/gallery_04.jpg') }}" alt=""></a></li>
								<li><a href="#"><img src="{{ asset('/web/images/gallery_05.jpg') }}" alt=""></a></li>
								<li><a href="#"><img src="{{ asset('/web/images/gallery_06.jpg') }}" alt=""></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="footer-item">
						<div class="quick-search">
							<h2>Quick Search</h2>
							<input type="text" class="footer-search" name="s" placeholder="Search..." value="">
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="sub-footer">
						<p>Copyright 2019. All rights reserved by: <a href="#">Cocotemplates</a></p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	

	<script src="{{ asset('/web/js/jquery-1.11.0.min.js"></script>

	<!-- Slider Pro Js -->
	<script src="{{ asset('/web/js/sliderpro.min.js"></script>

	<!-- Slick Slider Js -->
	<script src="{{ asset('/web/js/slick.js"></script>

	<!-- Owl Carousel Js -->
    <script src="{{ asset('/web/js/owl.carousel.min.js"></script>

	<!-- Boostrap Js -->
    <script src="{{ asset('/web/js/bootstrap.min.js"></script>

    <!-- Boostrap Js -->
    <script src="{{ asset('/web/js/wow.animation.js"></script>

	<!-- Custom Js -->
    <script src="{{ asset('/web/js/custom.js"></script>

</body>

<!-- Mirrored from www.puriwp.com/cocotemplates/html/acropos/blog_grid_sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jan 2021 13:02:55 GMT -->
</html>