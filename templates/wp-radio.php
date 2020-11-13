<?php

/**
 * Template Name: WP Radio
 */

get_header( 'wp-radio' );

?>


	<!--Header Area Start-->
	<section class="section-hero pt-5 pb-5 mt-0 align-items-center d-flex bg-dark">
		<div class="container ">
			<div class="row align-items-center d-flex justify-content-between">

				<div class="col-12 col-md-7 pb-5 order-2 order-sm-2 ">
					<h1 class="text-white font-weight-bold mb-3 mt-5 display-3">WP Radio</h1>
					<p class="lead text-white">Worldwide Radio Station Directory Player for WordPress.</p>
					<p class="text-white-50">Worldwide Radio Station Directory Player Plugin for WordPress,
						to Create Worldwide Radio Station Directory Website. You Can Add and Play Unlimited Live Radio Stream Link Such as:
						iceCast, Shoutcast, Radionomy, Radiojar, RadioCo, etc Live stream.</p>
					<div class="d-flex mt-3 mb-1">
						<a class="btn btn-outline-info btn-raised text-uppercase btn-lg  mt-md-3 mr-3" href="#" role="button">Download</a>
						<a class="btn btn-outline-warning btn-raised text-uppercase btn-lg  mt-md-3 " href="#" role="button">Buy Now</a>
					</div>
				</div>

				<div class="col-12 col-md-5 order-sm-1 order-md-2">
					<div class="icon-wrap text-primary d-flex justify-content-md-center my-3">
						<button href="#" class="icon d-flex border-0 align-items-center justify-content-center bg-white text-dark shadow-lg rounded-circle " style="width:70px; height:70px">
							<i class=" fa fa-play fa-lg ml-1"></i>
						</button>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!--Header Area End-->


	<!-- Section: Features-->
	<section class="section-features text-center py-5" style="background-image: url(<?php// $bg = !empty($_GET['bg']) ? $_GET['bg'] : 1; echo get_theme_file_uri("assets/images/wp-radio/{$bg}.jpg") ?>)">
		<div class="container">
			<!-- Section heading -->
			<h2 class="h1-responsive font-weight-bold text-uppercase text-light">WP Radio Features</h2>
			<!-- Section description -->
			<p class="lead grey-text w-responsive mx-auto mb-5 text-muted">
				Amazing advanced features that makes the WP Radio Unique & Easy to USe.
			</p>

			<!-- Grid row -->
			<div class="row">

				<?php

				$features = [
					[
						'icon'        => 'fa-download',
						'title'       => 'Radio Stations Importer',
						'description' => '',
					],
					[
						'icon'        => 'fa-play-circle-o',
						'title'       => 'Sticky & Popup Player',
						'description' => '',
					],
					[
						'icon'        => ' fa-bar-chart-o',
						'title'       => 'Statistics Information',
						'description' => '',
					],
					[
						'icon'        => 'fa-mobile',
						'title'       => 'Mobile Compatible',
						'description' => '',
					],
					[
						'icon'        => 'fa-gear',
						'title'       => 'Highly Customizable',
						'description' => '',
					],
					[
						'icon'        => 'fa-cloud-download',
						'title'       => 'Free Lifetime Updates',
						'description' => '',
					],
				];

				foreach ( $features as $feature ) { ?>
					<!-- Grid column -->
					<div class="col-md-4 feature-box mb-5">

						<i class="fa fa-3x red-text feature-icon d-inline-flex justify-content-center align-items-center <?php echo $feature['icon']; ?>"></i>
						<h5 class="font-weight-bold my-4 text-light"><?php echo $feature['title']; ?></h5>
						<p class="grey-text mb-md-0 mb-5 text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
							maiores aperiam minima assumenda deleniti hic.
						</p>

					</div>
					<!-- Grid column -->
				<?php } ?>

			</div>
			<!-- Grid row -->
		</div>
	</section>
	<!-- Section: Features-->


	<!-- Section: Testimonials-->
	<section id="testimonial-area">
		<div class="container">
			<div class="row">

				<div class="col-md-8 offset-md-2">
					<div class="section-heading text-center">
						<h5>Testimonial Design </h5>
						<h2>A Word From Our Customers</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </p>
					</div>
				</div>

			</div>
			<div class="testi-wrap">

				<div class="client-single active position-1" data-position="position-1">
					<div class="client-img">
						<img src="https://cdn.dribbble.com/users/2132253/avatars/small/1799e2c9badff08058551384763e284c.jpg?1568268299" alt="">
					</div>
					<div class="client-comment">
						<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
						<span><i class="fa fa-quote-left"></i></span>
					</div>
					<div class="client-info">
						<h3>Design By</h3>
						<p><a href="https://manjaygupta.com">Manjay Gupta</a></p>
					</div>
				</div>

				<div class="client-single inactive position-2" data-position="position-2">
					<div class="client-img">
						<img src="https://cdn.dribbble.com/users/2132253/avatars/small/1799e2c9badff08058551384763e284c.jpg?1568268299" alt="">
					</div>
					<div class="client-comment">
						<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
						<span><i class="fa fa-quote-left"></i></span>
					</div>
					<div class="client-info">
						<h3>Design By</h3>
						<p><a href="https://manjaygupta.com">Manjay Gupta</a></p>
					</div>
				</div>

				<div class="client-single inactive position-3" data-position="position-3">
					<div class="client-img">
						<img src="https://cdn.dribbble.com/users/2132253/avatars/small/1799e2c9badff08058551384763e284c.jpg?1568268299" alt="">
					</div>
					<div class="client-comment">
						<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
						<span><i class="fa fa-quote-left"></i></span>
					</div>
					<div class="client-info">
						<h3>Design By</h3>
						<p><a href="https://manjaygupta.com">Manjay Gupta</a></p>
					</div>
				</div>

				<div class="client-single inactive position-4" data-position="position-4">
					<div class="client-img">
						<img src="https://media.licdn.com/dms/image/C4E03AQFbvYtvSeyw-g/profile-displayphoto-shrink_100_100/0?e=1574294400&v=beta&t=49_VH9HRvqymP-VLETlFhFt4idmunZPhIQfALwaTrmA" alt="">
					</div>
					<div class="client-comment">
						<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
						<span><i class="fa fa-quote-left"></i></span>
					</div>
					<div class="client-info">
						<h3>Design By</h3>
						<p><a href="https://manjaygupta.com">Manjay Gupta</a></p>
					</div>
				</div>

				<div class="client-single inactive position-5" data-position="position-5">
					<div class="client-img">
						<img src="https://cdn.dribbble.com/users/2132253/avatars/small/1799e2c9badff08058551384763e284c.jpg?1568268299" alt="">
					</div>
					<div class="client-comment">
						<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
						<span><i class="fa fa-quote-left"></i></span>
					</div>
					<div class="client-info">
						<h3>Design By</h3>
						<p><a href="https://manjaygupta.com">Manjay Gupta</a></p>
					</div>
				</div>

				<div class="client-single inactive position-6" data-position="position-6">
					<div class="client-img">
						<img src="https://cdn.dribbble.com/users/2132253/avatars/small/1799e2c9badff08058551384763e284c.jpg?1568268299" alt="">
					</div>
					<div class="client-comment">
						<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
						<span><i class="fa fa-quote-left"></i></span>
					</div>
					<div class="client-info">
						<h3>Design By</h3>
						<p><a href="https://manjaygupta.com">Manjay Gupta</a></p>
					</div>
				</div>

				<div class="client-single inactive position-7" data-position="position-7">
					<div class="client-img">
						<img src="https://cdn.dribbble.com/users/2132253/avatars/small/1799e2c9badff08058551384763e284c.jpg?1568268299" width="40px" alt="">
					</div>
					<div class="client-comment">
						<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
						<span><i class="fa fa-quote-left"></i></span>
					</div>
					<div class="client-info">
						<h3>Design By</h3>
						<p><a href="https://manjaygupta.com">Manjay Gupta</a></p>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- Section: Testimonials-->


	<!-- Section: Pricing-->
	<section class="pricing py-5">
		<div class="container">
			<div class="row">
				<!-- Free Tier -->
				<div class="col-lg-4">
					<div class="card mb-5 mb-lg-0">
						<div class="card-body">
							<h5 class="card-title text-muted text-uppercase text-center">Free</h5>
							<h6 class="card-price text-center">$0<span class="period">/month</span></h6>
							<hr>
							<ul class="fa-ul">
								<li><span class="fa-li"><i class="fa fa-check"></i></span>Single User</li>
								<li><span class="fa-li"><i class="fa fa-check"></i></span>5GB Storage</li>
								<li><span class="fa-li"><i class="fa fa-check"></i></span>Unlimited Public Projects</li>
								<li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
								<li class="text-muted">
									<span class="fa-li"><i class="fa fa-times"></i></span>Unlimited Private Projects
								</li>
								<li class="text-muted">
									<span class="fa-li"><i class="fa fa-times"></i></span>Dedicated Phone Support
								</li>
								<li class="text-muted">
									<span class="fa-li"><i class="fa fa-times"></i></span>Free Subdomain
								</li>
								<li class="text-muted">
									<span class="fa-li"><i class="fa fa-times"></i></span>Monthly Status Reports
								</li>
							</ul>
							<a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
						</div>
					</div>
				</div>
				<!-- Plus Tier -->
				<div class="col-lg-4">
					<div class="card mb-5 mb-lg-0">
						<div class="card-body">
							<h5 class="card-title text-muted text-uppercase text-center">Plus</h5>
							<h6 class="card-price text-center">$9<span class="period">/month</span></h6>
							<hr>
							<ul class="fa-ul">
								<li><span class="fa-li"><i class="fa fa-check"></i></span><strong>5 Users</strong></li>
								<li><span class="fa-li"><i class="fa fa-check"></i></span>50GB Storage</li>
								<li><span class="fa-li"><i class="fa fa-check"></i></span>Unlimited Public Projects</li>
								<li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
								<li><span class="fa-li"><i class="fa fa-check"></i></span>Unlimited Private Projects
								</li>
								<li><span class="fa-li"><i class="fa fa-check"></i></span>Dedicated Phone Support</li>
								<li><span class="fa-li"><i class="fa fa-check"></i></span>Free Subdomain</li>
								<li class="text-muted">
									<span class="fa-li"><i class="fa fa-times"></i></span>Monthly Status Reports
								</li>
							</ul>
							<a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
						</div>
					</div>
				</div>
				<!-- Pro Tier -->
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title text-muted text-uppercase text-center">Pro</h5>
							<h6 class="card-price text-center">$49<span class="period">/month</span></h6>
							<hr>
							<ul class="fa-ul">
								<li>
									<span class="fa-li"><i class="fa fa-check"></i></span><strong>Unlimited Users</strong>
								</li>
								<li><span class="fa-li"><i class="fa fa-check"></i></span>150GB Storage</li>
								<li><span class="fa-li"><i class="fa fa-check"></i></span>Unlimited Public Projects</li>
								<li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
								<li><span class="fa-li"><i class="fa fa-check"></i></span>Unlimited Private Projects
								</li>
								<li><span class="fa-li"><i class="fa fa-check"></i></span>Dedicated Phone Support</li>
								<li>
									<span class="fa-li"><i class="fa fa-check"></i></span><strong>Unlimited</strong> Free Subdomains
								</li>
								<li><span class="fa-li"><i class="fa fa-check"></i></span>Monthly Status Reports</li>
							</ul>
							<a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Section: Pricing-->


	<!-- Section: Fun Fact-->
	<section id="counter_threeup" class="counter_threeup lightbg sections">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="counter_threeup">
						<div class="counter_threeup-photo">
							<img src="http://i.imgur.com/7jmZxc8.png" alt="counter_threeup"/>
						</div>
						<div class="counter_threeup-content">
							<h5 class="count-number">11</h5>
							<h6>Designers</h6>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="counter_threeup">
						<div class="counter_threeup-photo">
							<img src="http://i.imgur.com/s3fDOCZ.png" alt="counter_threeup"/>
						</div>
						<div class="counter_threeup-content">
							<h5 class="count-number">6542</h5>
							<h6>Hours Worked</h6>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="counter_threeup">
						<div class="counter_threeup-photo">
							<img src="http://i.imgur.com/UYLWCDw.png" alt="counter_threeup"/>
						</div>
						<div class="counter_threeup-content">
							<h5 class="count-number">254</h5>
							<h6>Project finished</h6>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="counter_threeup">
						<div class="counter_threeup-photo">
							<img src="http://i.imgur.com/IVfjEcU.png" alt="counter_threeup"/>
						</div>
						<div class="counter_threeup-content">
							<h5 class="count-number">435</h5>
							<h6>Drunk coffee</h6>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- Section: Fun Fact-->


	<!-- Section: Call To Action -->
	<section class="cta">
		<div class="container">
			<div class="col-sm-12">

				<div class="bs-calltoaction bs-calltoaction-default">
					<div class="row">
						<div class="col-md-9 cta-contents">
							<h1 class="cta-title">Its a Call To Action</h1>
							<div class="cta-desc">
								<p>Describe the action here.</p>
								<p>Describe the action here.</p>
								<p>Describe the action here.</p>
							</div>
						</div>
						<div class="col-md-3 cta-button">
							<a href="#" class="btn btn-lg btn-block btn-default">Go for It!</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Section: Call To Action -->


	<!-- Section: Footer -->
	<!-- Footer -->
	<footer class="page-footer font-small stylish-color-dark pt-4">

		<!-- Footer Links -->
		<div class="container text-center text-md-left">

			<!-- Grid row -->
			<div class="row">

				<!-- Grid column -->
				<div class="col-md-4 mx-auto">

					<!-- Content -->
					<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Footer Content</h5>
					<p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
						consectetur
						adipisicing elit.</p>

				</div>
				<!-- Grid column -->

				<hr class="clearfix w-100 d-md-none">

				<!-- Grid column -->
				<div class="col-md-2 mx-auto">

					<!-- Links -->
					<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

					<ul class="list-unstyled">
						<li>
							<a href="#!">Link 1</a>
						</li>
						<li>
							<a href="#!">Link 2</a>
						</li>
						<li>
							<a href="#!">Link 3</a>
						</li>
						<li>
							<a href="#!">Link 4</a>
						</li>
					</ul>

				</div>
				<!-- Grid column -->

				<hr class="clearfix w-100 d-md-none">

				<!-- Grid column -->
				<div class="col-md-2 mx-auto">

					<!-- Links -->
					<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

					<ul class="list-unstyled">
						<li>
							<a href="#!">Link 1</a>
						</li>
						<li>
							<a href="#!">Link 2</a>
						</li>
						<li>
							<a href="#!">Link 3</a>
						</li>
						<li>
							<a href="#!">Link 4</a>
						</li>
					</ul>

				</div>
				<!-- Grid column -->

				<hr class="clearfix w-100 d-md-none">

				<!-- Grid column -->
				<div class="col-md-2 mx-auto">

					<!-- Links -->
					<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

					<ul class="list-unstyled">
						<li>
							<a href="#!">Link 1</a>
						</li>
						<li>
							<a href="#!">Link 2</a>
						</li>
						<li>
							<a href="#!">Link 3</a>
						</li>
						<li>
							<a href="#!">Link 4</a>
						</li>
					</ul>

				</div>
				<!-- Grid column -->

			</div>
			<!-- Grid row -->

		</div>
		<!-- Footer Links -->

		<hr>

		<!-- Call to action -->
		<ul class="list-unstyled list-inline text-center py-2">
			<li class="list-inline-item">
				<h5 class="mb-1">Register for free</h5>
			</li>
			<li class="list-inline-item">
				<a href="#!" class="btn btn-danger btn-rounded">Sign up!</a>
			</li>
		</ul>
		<!-- Call to action -->

		<hr>

		<!-- Social buttons -->
		<ul class="list-unstyled list-inline text-center">
			<li class="list-inline-item">
				<a class="btn-floating btn-fb mx-1">
					<i class="fa fa-facebook"> </i>
				</a>
			</li>
			<li class="list-inline-item">
				<a class="btn-floating btn-tw mx-1">
					<i class="fa fa-twitter"> </i>
				</a>
			</li>
			<li class="list-inline-item">
				<a class="btn-floating btn-li mx-1">
					<i class="fa fa-linkedin"> </i>
				</a>
			</li>
			<li class="list-inline-item">
				<a class="btn-floating btn-dribbble mx-1">
					<i class="fa fa-dribbble"> </i>
				</a>
			</li>
		</ul>
		<!-- Social buttons -->

		<!-- Copyright -->
		<div class="footer-copyright text-center py-3">© 2020 Copyright:
			<a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
		</div>
		<!-- Copyright -->

	</footer>
	<!-- Section: Footer -->


<?php
get_footer( 'wp-radio' );
