<?php

/**
 * Template Name: Coming Soon
 */

get_header();

?>
	<div class="overlay"></div>
	<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
		<source src="<?php echo get_theme_file_uri( 'assets/images/coming-soon-bg.mp4' ); ?>" type="video/mp4">
	</video>

	<div class="masthead">
		<div class="masthead-bg"></div>
		<div class="container h-100">
			<div class="row h-100">
				<div class="col-12 my-auto">
					<div class="masthead-content text-white py-5 py-md-0">
						<h1 class="mb-3">Coming Soon!</h1>
						<p class="mb-2">We're working hard to finish the development of this site. Our target launch date is
							<strong>27 December, 2020 </strong>! Sign up for updates using the form below!</p>

						<!-- Subscription Form -->
						<form id="wemail-embedded-subscriber-form" method="post" action="https://api.getwemail.io/v1/embed/subscribe/7e164d2c-c660-4a0b-955c-723718252774">

							<div class="input-group input-group-newsletter">
								<input type="email" name="email" required="required" id="wemail-email" placeholder="Enter email" class="form-control"/>
								<div class="input-group-append">
									<button class="btn btn-secondary" type="submit" id="submit-button">Notify Me!</button>
								</div>
							</div>

						</form>
						<script src="https://cdn.getwemail.io/static/js/form-embedded.js"></script>


						<a href="https://wpmilitary.com/wp-radio" class="btn">
							<i class="fa fa-send"></i> GET WP RADIO</a>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!--	<div class="social-icons">-->
	<!--		<ul class="list-unstyled text-center mb-0">-->
	<!--			<li class="list-unstyled-item">-->
	<!--				<a href="#">-->
	<!--					<i class="fa fa-twitter"></i>-->
	<!--				</a>-->
	<!--			</li>-->
	<!--			<li class="list-unstyled-item">-->
	<!--				<a href="#">-->
	<!--					<i class="fa fa-facebook-f"></i>-->
	<!--				</a>-->
	<!--			</li>-->
	<!--			<li class="list-unstyled-item">-->
	<!--				<a href="#">-->
	<!--					<i class="fa fa-instagram"></i>-->
	<!--				</a>-->
	<!--			</li>-->
	<!--		</ul>-->
	<!--	</div>-->
<?php
get_footer();
