@extends('Web.layout.app')

@section('contents')


	<div class="page-heading wow fadeIn" data-wow-duration="0.5s">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="heading-content-bg wow fadeIn" data-wow-delay="0.75s" data-wow-duration="1s">
						<div class="row">
							<div class="heading-content col-md-12">
								<p><a href="{{ route('webin') }}">Homepage</a> / <em> Blog</em> / <em> Single Post</em></p>
								<h2>Single <em>Post</em></h2>
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
					<div class="single-post">
						<div class="item">
							<img src="{{ asset('/web/images/blog_single.jpg') }}" alt="">
							<div class="down-content">
								<h4>YOLO dreamcatcher Carles Banksy Etsy</h4>
								<ul>
									<li><span><em>Posted by:</em><a href="#">Admin</a></span></li>
									<li><span><em>Posted on:</em>20/July/2015</span></li>
									<li><span><em>Categories:</em><a href="#">Creative</a>,<a href="#"> Graphic</a></span></li>
									<li><span><em>Share on:</em><a href="#">Facebook</a>,<a href="#"> Twitter</a>,<a href="#"> Linkedin</a></span></li>
								</ul>
								<p>Godard synth normcore lomo banjo sartorial meh sriracha leggings. Try-hard ennui small batch fingerstache crucifix bitters. McSweeney's literally jean shorts sartorial next level. Tofu literally shabby chic vinyl try-hard. Asymmetrical McSweeney's selfies, leggings art party pop up next level forage health goth slow-carb bespoke chia cronut literally Portland. Godard paleo organic, polaroid mixtape fanny pack iPhone letterpress. Heirloom tilde kogi small batch Brooklyn.<br><br><em>Wolf street art drinking vinegar beard photo booth health goth heirloom Thundercats pickled shabby chic bespoke art party blog butcher.</em><br><br>Readymade beard shabby chic Banksy paleo. Drinking vinegar plaid bespoke, blog bitters seitan. Keytar American Apparel actually, pickled chia pour-over beard viral Etsy deep v synth semiotics asymmetrical fashion axe kogi. Vegan ennui plaid, iPhone paleo McSweeney's typewriter bicycle rights. Meggings American Apparel cray, Neutra gentrify Blue Bottle post-ironic. Meh YOLO VHS ennui, four dollar toast bespoke whatever butcher polaroid pickled. Meditation wolf try-hard blog, chillwave salvia dreamcatcher before they sold out bitters Helvetica aesthetic drinking vinegar tousled cred Vice.<br><br>McSweeney's Marfa brunch, Thundercats cold-pressed lomo viral blog VHS Odd Future ugh dreamcatcher hoodie. Mlkshk four dollar toast narwhal Neutra, freegan leggings fixie plaid brunch food truck sriracha meggings. Lumbersexual shabby chic street art, Etsy four dollar toast hella Pinterest +1 gastropub messenger bag American Apparel fap Vice occupy. Deep v shabby chic lo-fi cronut ethical art party Austin Truffaut Brooklyn skateboard leggings selfies. Fashion axe 3 wolf moon put a bird on it, meggings Truffaut paleo fingerstache small batch crucifix Tumblr banh mi quinoa sustainable.</p>
							</div>
						</div>
						<div class="comments">
							<div class="sep-section-heading">
								<h2>Comments <em>3</em></h2>
							</div>
							<div class="comments-content first-comment">
								<img src="{{ asset('/web/images/user_male.jpg') }}" alt="">
								<div class="continue-button">
									<a href="{{ route('singlePost') }}">Reply<i class="fa fa-reply"></i></a>
								</div>
								<h6>Robert Williams</h6>
								<span>10/July/2015</span>
								<p>Deep v shabby chic lo-fi cronut ethical art party Austin Truffaut Brooklyn skateboard leggings selfies. Fashion axe 3 wolf moon put a bird on it, meggings.</p>
							</div>
							<div class="comments-content second-comment">
								<img src="{{ asset('/web/images/user_female.jpg') }}" alt="">
								<div class="continue-button">
									<a href="{{ route('singlePost') }}">Reply<i class="fa fa-reply"></i></a>
								</div>
								<div class="replied-button">
									<span>Replied<i class="fa fa-reply-all"></i></span>
								</div>
								<h6>Maria Morris</h6>
								<span>11/July/2015</span>
								<p>Deep v shabby chic lo-fi cronut ethical art party Austin Truffaut Brooklyn skateboard leggings selfies. Fashion axe 3 wolf moon put a bird on it, meggings.</p>
							</div>
							<div class="comments-content third-comment">
								<img src="{{ asset('/web/images/user_male.jpg') }}" alt="">
								<div class="continue-button">
									<a href="{{ route('singlePost') }}">Reply<i class="fa fa-reply"></i></a>
								</div>
								<h6>Patrick Smith</h6>
								<span>14/July/2015</span>
								<p>Deep v shabby chic lo-fi cronut ethical art party Austin Truffaut Brooklyn skateboard leggings selfies. Fashion axe 3 wolf moon put a bird on it, meggings.</p>
							</div>
						</div>
						<div class="leave-comment">
							<div class="sep-section-heading">
								<h2>Leave <em>Comment</em></h2>
							</div>
							<div class="submit-comment">
								<form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
									<div class="row">
										<div class=" col-md-4 col-sm-4 col-xs-6">
											<input type="text" class="blog-search-field" name="s" placeholder="Your name..." value="">
										</div>
										<div class="col-md-4 col-sm-4 col-xs-6">
											<input type="text" class="blog-search-field" name="s" placeholder="Your email..." value="">
										</div>
										<div class="col-md-4 col-sm-4 col-xs-12">
											<input type="text" class="subject" name="s" placeholder="Subject..." value="">
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 col-sm-12">
											<textarea id="message" class="input" name="message" placeholder="Message..."></textarea>
										</div>
									</div>
									<div class="row">
										<div class="submit-coment col-md-12">
											<div class="primary-button">
												<a href="#">Submit now</a>
											</div>
										</div>
									</div>
								</form>
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
										<a href="single_post.html">
											<img src="{{ asset('/web/images/gallery_01.jpg') }}" alt="">
											<h6>Pabst Gastropub Synth Edge</h6>
											<span>January 13, 2019</span>
										</a>
									</li>
									<li>
										<a href="single_post.html">
											<img src="{{ asset('/web/images/gallery_02.jpg') }}" alt="">
											<h6>Pabst Gastropub Synth Edge</h6>
											<span>January 13, 2019</span>
										</a>
									</li>
									<li>
										<a href="single_post.html">
											<img src="{{ asset('/web/images/gallery_03.jpg') }}" alt="">
											<h6>Pabst Gastropub Synth Edge</h6>
											<span>January 13, 2019</span>
										</a>
									</li>
									<li>
										<a href="single_post.html">
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


@endsection