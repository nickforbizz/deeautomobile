@extends('Web.layout.app')

@section('contents')


	<div class="page-heading wow fadeIn" data-wow-duration="0.5s">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="heading-content-bg wow fadeIn" data-wow-delay="0.75s" data-wow-duration="1s">
						<div class="row">
							<div class="heading-content col-md-12">
								<p><a href="{{ route('webin') }}">Homepage</a> / <em> Blog</em> / <em> Clasic</em></p>
								<h2>Blog <em>Classic</em></h2>
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
				<div class="col-md-10 offset-md-1">
					<div class="blog-classic-post">
						<div class="item">
					 		<div class="thumb-content">
								<div class="date-post">
									<a href="{{ route('singlePost') }}">20 December</a>
								</div>
								<div class="thumb-inner">
									<a href="{{ route('singlePost') }}"><img src="{{ asset('/web/images/big_blog_01.jpg') }}" alt=""></a>
								</div>
							</div>
							<div class="down-content">
								<a href="{{ route('singlePost') }}"><h4>Pabst Gastropub Synth Edge</h4></a>
								<ul>
									<li><span><em>Posted by:</em><a href="#">Admin</a></span></li>
									<li><span><em>Posted on:</em>20/December/2018</span></li>
									<li><span><em>Categories:</em><a href="#">Creative</a>,<a href="#"> Graphic</a></span></li>
								</ul>
								<p>Slow-carb listicle PBR, Schlitz mustache keytar beard art party brunch chia tousled actually. Messenger bag kogi aesthetic elsent master cleanse. Bespoke Marfa migas Austin Helvetica American Apparel before they sold out readymade. Health goth freegan letterpress beard quinoa try-hard narwhal synth gastropub, tote bag ugh heirloom.</p>	
								<div class="text-button">
									<a href="{{ route('singlePost') }}">Continue Reading <i class="fa fa-arrow-right"></i></a>
								</div>							
							</div>
					  	</div>
					  	<div class="item">
					 		<div class="thumb-content">
								<div class="date-post">
									<a href="{{ route('singlePost') }}">20 December</a>
								</div>
								<div class="thumb-inner">
									<a href="{{ route('singlePost') }}"><img src="{{ asset('/web/images/big_blog_02.jpg') }}" alt=""></a>
								</div>
							</div>
							<div class="down-content">
								<a href="{{ route('singlePost') }}"><h4>Pabst Gastropub Synth Edge</h4></a>
								<ul>
									<li><span><em>Posted by:</em><a href="#">Admin</a></span></li>
									<li><span><em>Posted on:</em>20/December/2018</span></li>
									<li><span><em>Categories:</em><a href="#">Creative</a>,<a href="#"> Graphic</a></span></li>
								</ul>
								<p>Slow-carb listicle PBR, Schlitz mustache keytar beard art party brunch chia tousled actually. Messenger bag kogi aesthetic elsent master cleanse. Bespoke Marfa migas Austin Helvetica American Apparel before they sold out readymade. Health goth freegan letterpress beard quinoa try-hard narwhal synth gastropub, tote bag ugh heirloom.</p>	
								<div class="text-button">
									<a href="{{ route('singlePost') }}">Continue Reading <i class="fa fa-arrow-right"></i></a>
								</div>							
							</div>
					  	</div>
					  	<div class="item">
					 		<div class="thumb-content">
								<div class="date-post">
									<a href="{{ route('singlePost') }}">20 December</a>
								</div>
								<div class="thumb-inner">
									<a href="{{ route('singlePost') }}"><img src="{{ asset('/web/images/big_blog_03.jpg') }}" alt=""></a>
								</div>
							</div>
							<div class="down-content">
								<a href="{{ route('singlePost') }}"><h4>Pabst Gastropub Synth Edge</h4></a>
								<ul>
									<li><span><em>Posted by:</em><a href="#">Admin</a></span></li>
									<li><span><em>Posted on:</em>20/December/2018</span></li>
									<li><span><em>Categories:</em><a href="#">Creative</a>,<a href="#"> Graphic</a></span></li>
								</ul>
								<p>Slow-carb listicle PBR, Schlitz mustache keytar beard art party brunch chia tousled actually. Messenger bag kogi aesthetic elsent master cleanse. Bespoke Marfa migas Austin Helvetica American Apparel before they sold out readymade. Health goth freegan letterpress beard quinoa try-hard narwhal synth gastropub, tote bag ugh heirloom.</p>	
								<div class="text-button">
									<a href="{{ route('singlePost') }}">Continue Reading <i class="fa fa-arrow-right"></i></a>
								</div>							
							</div>
					  	</div>
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
	</div>


@endsection