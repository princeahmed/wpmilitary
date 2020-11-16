<section id="contact" class="contact">
	<div class="container">
		<div class="row">


			<div class="col-md-12 text-center mb-5">
				<h2 class="section-title">Any <span>Query</span>? Looking For <span>Support</span>?</h2>
				<h5 class="section-subtitle">We are always ready to help you out.</h5>
			</div>

			<div class="col-md-7">
				<div class="contact_form">
					<form action="contact_process.php" class="contact_form_box" method="post" id="contactForm" novalidate="novalidate">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<input type="text" id="name" name="name" class="form-control" placeholder="Your Name">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<input type="text" name="email" class="form-control"  id="email" placeholder="Your Email">
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<input type="text" id="subject" name="subject" placeholder="Subject">
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<textarea name="message" id="message" cols="30" rows="10" class="form-control"  placeholder="Enter Your Message . . ."></textarea>
								</div>
							</div>
						</div>
						<button type="submit" class="btn">Send Message</button>
					</form>

				</div>
			</div>

			<div class="col-md-5">
				<img src="<?php echo get_theme_file_uri('assets/images/wp-radio/contact1.svg'); ?>" class="img-fluid" alt="">
			</div>
		</div>
	</div>
</section>
