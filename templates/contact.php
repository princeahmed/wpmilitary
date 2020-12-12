<?php

/**
 * Template Name: Contact
 */

get_header();

?>
	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="gradient-purple">Contact Us</h2>
					</div>

				</div>

				<div class="col-md-7">
					<div class="contact_form">


						<?php echo do_shortcode( '[gravityform id=1 ajax="true" title="false" description="false"]' ) ?>

					</div>
				</div>

				<div class="col-md-5">
					<img src="<?php echo get_theme_file_uri( 'assets/images/wp-radio/contact1.svg' ); ?>" class="img-fluid" alt="">
				</div>

			</div>
		</div>
	</section>
<?php


get_footer();
