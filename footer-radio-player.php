<!-- Subscribe Footer -->
<footer id="footer" class="footer text-light">

	<div class="footer-bg gradient-purple">

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Form Card -->
					<div class="card">

						<div class="card-header gradient-blue">
							<h3 class="heading text-indigo">Subscribe to our newsletter</h3>
							<p class="paragraph">Get the latest news and articles sent straight to your inbox.</p>
						</div>

						<div class="card-body">

							<script src="https://cdn.getwemail.io/static/js/form-embedded.js"></script>
							<!-- Form -->
							<form id="wemail-embedded-subscriber-form" method="post" action="https://api.getwemail.io/v1/embed/subscribe/7e164d2c-c660-4a0b-955c-723718252774">

								<div class="form-group">
									<div class="input-group">
										<input type="email" name="email" required="required" id="wemail-email" placeholder="Enter email" class="form-control"/>
										<div class="input-group-append">
											<!-- Submit Button -->
											<button type="submit" class="btn gradient-green">Subscribe
												<span class="fa fa-send"></span>
											</button>
										</div>
									</div>
								</div>
							</form>
						</div>

					</div>

				</div>
			</div>
		</div><!-- .container -->

		<!-- Footer Links -->
		<div class="container text-center text-md-left">

			<!-- Grid row -->
			<div class="row">

				<!-- Grid column -->
				<div class="col-md-6 mt-md-0 mt-3 footer-content">

					<!-- Content -->
					<div class="footer-logo footer-menu-title">
						<img src="<?php echo get_theme_file_uri( 'assets/images/wp-radio/play-button.svg' ) ?>" class="img-fluid">
						<span>RADIO PLAYER</span>
					</div>

					<p>
						A simple, easy to use, user friendly and fully customizable web radio player for WordPress.
						<br>
						<br>
						You can play any live mp3, iceCast and Shoutcast stream in your WordPress website using shortcode, gutenberg block, elementor widget, sidebar widget, full-width sticky and popup player.
					</p>

				</div>
				<!-- Grid column -->

				<hr class="clearfix w-100 d-md-none pb-3">

				<!-- Grid column -->
				<div class="col-md-3 mb-md-0 mb-3 footer-menu">

					<!-- Links -->
					<h5 class="gradient-purple footer-menu-title">PRODUCTS</h5>

					<ul class="list-unstyled">
						<li><a href="<?php echo site_url( 'wp-radio' ); ?>">WP Radio Directory</a></li>
						<li><a href="<?php echo site_url( 'radio-player' ); ?>">Radio Player</a></li>
					</ul>

				</div>
				<!-- Grid column -->

				<!-- Grid column -->
				<div class="col-md-3 mb-md-0 mb-3 footer-menu">

					<!-- Links -->
					<h5 class="text-uppercase footer-menu-title">Company</h5>

					<ul class="list-unstyled">
						<li>
							<a href="<?php echo site_url(); ?>">Home</a>
						</li>
						<li>
							<a href="<?php echo site_url( 'about-us' ); ?>">About Us</a>
						</li>
						<li><a href="<?php echo site_url( 'blog' ); ?>">Blog</a></li>
						<li><a href="<?php echo site_url( 'contact' ); ?>">Contact Us</a></li>
						<li>
							<a href="<?php echo get_privacy_policy_url(); ?>">Privacy Policy</a>
						</li>
					</ul>

				</div>
				<!-- Grid column -->

			</div>
			<!-- Grid row -->

		</div>
		<!-- Footer Links -->

	</div><!-- .footer-bg -->

	<div class="footer-copyright bg-dark">
		<div class="container">
			<div class="row">
				<!-- Copyright -->
				<div class="col-6">
					<p class="text-light">
						&copy; 2020 <a href="<?php echo site_url(); ?>" target="_blank" title="WP Military">WP Military</a> All Rights Reserved
					</p>
				</div>

				<!-- Social Icons -->
				<div class="col-6 text-right footer-socials">
					<a class="btn gradient-blue">
						<span class="fa fa-facebook"></span>
					</a>
					<a class="btn gradient-peach">
						<span class="fa fa-instagram"></span>
					</a>
					<a class="btn gradient-green">
						<span class="fa fa-twitter"></span>
					</a>
					<a class="btn gradient-purple">
						<span class="fa fa-pinterest"></span>
					</a>
				</div>
			</div>
		</div><!-- .container -->
	</div>

</footer><!-- .ui-footer -->

<?php wp_footer(); ?>
</body>
</html>
